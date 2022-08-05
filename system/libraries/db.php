<?php  if (!defined('SYS_PATH')) exit('Access denied');

/*
 * Шлях: SYS_PATH/libraries/db.php
 *
 * Робота з базою даних.
 * Версія 1.0.1 (25.04.2013 - додано getAllData(), getAllDataByFieldInArray(), language(), latterUAtoEN())
 * Версія 1.0.2 (16.07.2014) - додано getCount(), register(); розширено (можуть приймати в якості умови масив): getAllDataById(), getAllDataByFieldInArray(+сорутвання)
 * Версія 1.0.3 (06.11.2014) - додано getQuery(), (12.11.2014) до getAllDataById(), getAllDataByFieldInArray() додано авто підтримку до умови IN
 * Версія 2.0 (28.09.2015) - переписано код getAllDataById(), getAllDataByFieldInArray(), getCount(). Додано службову функцію makeWhere(). Додано запити по конструкції: prefix(), select(), join(), order(), limit(), get().
 * Версія 2.0.1 (26.03.2016) - до get() додано параметр debug, що дозволяє бачити кінцевий запит перед запуском, виправлено помилку декількаразового запуску get()
 * Версія 2.0.2 (01.04.2016) - до makeWhere() додано параметр сортування НЕ '!'
 * Версія 2.0.3 (26.07.2016) - адаптовано до php7
 * Версія 2.0.4 (12.09.2016) - додано getAliasImageSizes()
 * Версія 2.1 (22.09.2016) - updateRow(), deleteRow() адаптовано через makeWhere(); у makeWhere() виправлено роботу з нульовими значеннями; до getRows() додати перевірку на тип single
 * Версія 2.1.1 (27.09.2016) - до makeWhere() додано повторюване поле через "+"
 * Версія 2.2 (19.12.2016) - додано sitemap_add(), sitemap_redirect(), sitemap_update(), sitemap_index(), sitemap_remove(), cache_clear()
 * Версія 2.2.1 (08.02.2017) - додано "chaining methods";
 * Версія 2.2.2 (05.09.2017) - у випадку успіху insertRow() повернає getLastInsertedId(); fix getRows('single')
 * Версія 2.2.3 (29.10.2017) - додано count_db_queries, shopDBdump, виправлено помилку у where() для пустого/нульового значення
 * Версія 2.2.4 (01.11.2017) - додано group(), оптимізовано роботу getAliasImageSizes()
 * Версія 2.2.5 (01.12.2017) - amp версію виключено з індексації
 * Версія 2.3 (17.03.2018) - додано insertRows() - мультивставка рядків
 * Версія 2.4 (10.09.2019) - додано cache_add(), cache_get(), cache_delete(), cache_delete_all() - робота з файловим кешем
 * Версія 2.4.1 (19.11.2019) - Перейменовано cache_clear() => sitemap_cache_clear(). Інтегровано всередину онулення загального індексу по сайту
 * Версія 2.4.2 (26.11.2019) - до makeWhere() додано keyValue #! ['1c_status' => '#!c.status']
 * Версія 2.4.3 (11.12.2019) - до cache_add(), cache_get(), cache_delete(), cache_delete_all() - додано мультимовність
 * Версія 2.4.5 (16.12.2019) - до getAliasImageSizes() додано кешування у сесії
 * Версія 2.4.6 (20.02.2020) - до get('count') додано (виправлено) коректно роботу параметрів $debug, $get
 * Версія 2.5 (20.02.2020) - до makeWhere() додано keyValue & (&, &&, &&&, &&&&+) ['&' => 'p.old_price > p.price || p.promo > 0'] - дозволяє додати "складні" sql умови до запиту
 */

class Db {

    private $connects = array();
    private $current = 0;
    private $result;
    private $imageReSizes = array();
    public $count_db_queries = 0;
    public $shopDBdump = false;

    /*
     * Отримуємо дані для з'єднання з конфігураційного файлу
     */
    function __construct($cfg)
    {
        $this->newConnect($cfg['host'], $cfg['user'], $cfg['password'], $cfg['database']);
    }

    /**
     * Створюємо з'єднання
     *
     * @param <string> $host назва серверу
     * @param <string> $user ім'я користувача
     * @param <string> $password пароль
     * @param <string> $database назва бази даних
     */
    function newConnect($host, $user, $password, $database)
    {
        $this->connects[] = new mysqli($host, $user, $password, $database);
        $this->current = count($this->connects) - 1;
        $this->executeQuery('SET NAMES utf8');
    }

    /**
     * Виконуємо запит
     *
     * @param <string> $query запит
     */
    function executeQuery($query)
    {
        if ($this->shopDBdump) {
            $this->time_start = microtime(true);
            $this->mem_start = memory_get_usage();
            echo $this->count_db_queries.': '.$query;
            // if($this->count_db_queries == 11)
            // {
            //     echo "<pre>";
            //     debug_print_backtrace();
            //     echo "</pre>";
            // }
        }
        $result = $this->connects[$this->current]->query($query);
        if(!$result)
            echo $this->connects[$this->current]->error;
        else
            $this->result = $result;
        $this->count_db_queries++;
        if($this->shopDBdump)
            $this->showTime();
    }

    function updateRow($table, $changes, $key, $row_key = 'id')
    {
        $where = $this->makeWhere($key, $row_key);
        if($where != '')
        {
            $update = "UPDATE `".$table."` SET ";
            foreach ($changes as $key => $value) {
                $value = $this->sanitizeString($value);
                $update .= "`{$key}` = '{$value}',";
            }
            $update = substr($update, 0, -1);
            $update .= " WHERE ".$where;
            $this->executeQuery($update);
            if($this->affectedRows() > 0)
                return true;
        }
        return false;
    }

    function insertRow($table, $changes)
    {
        $update = "INSERT INTO `".$table."` ( ";
        $values = '';
        foreach ($changes as $key => $value) {
            $value = $this->sanitizeString($value);
            $update .= '`' . $key . '`, ';
            $values .= "'{$value}', ";
        }
        $update = substr($update, 0, -2);
        $values = substr($values, 0, -2);
        $update .= ' ) VALUES ( ' . $values . ' ) ';
        $this->executeQuery($update);
        if($this->affectedRows() > 0)
            return $this->getLastInsertedId();
        return false;
    }

    function insertRows($table, $keys = array(), $data = array(), $perQuery = 50)
    {
        if(empty($keys) || empty($data))
            return false;

        $insert = "INSERT INTO `".$table."` ( ";
        foreach ($keys as $key) {
            $insert .= '`' . $key . '`, ';
        }
        $insert = substr($insert, 0, -2);
        $insert .= ' ) VALUES ';
        $inserted = $i = 0; $query = '';
        foreach ($data as $row) { 
            $values = '';
            foreach ($keys as $key) {
                $value = '';
                if(isset($row[$key]))
                    $value = $this->sanitizeString($row[$key]);
                $values .= "'{$value}', ";
            }
            $values = substr($values, 0, -2);
            $query .= '( ' . $values . ' ), ';
            if(++$i > $perQuery)
            {
                $i = 0;
                $query = $insert . substr($query, 0, -2) . ';';
                $this->executeQuery($query);
                $inserted += $this->affectedRows();
                $query = '';
            }
        }
        if($i > 0)
        {
            $query = $insert . substr($query, 0, -2) . ';';
            $this->executeQuery($query);
            $inserted += $this->affectedRows();
        }
        return true;
    }

    function getLastInsertedId()
    {
        return $this->connects[$this->current]->insert_id;
    }

    function deleteRow($table = '', $id, $row_key = 'id')
    {
        $where = $this->makeWhere($id, $row_key);
        if($where != '')
        {
            $this->executeQuery("DELETE FROM `{$table}` WHERE {$where}");
            if($this->affectedRows() > 0)
                return true;
        }
        return false;
    }

    /**
     * Отримуємо рядки
     *
     * @return <array>
     */
    function getRows($type = '')
    {
        if($type == 'single' && $this->result->num_rows != 1)
            return false;
        if($this->result->num_rows > 1 || $type == 'array')
        {
            $objects = array();
            while($obj = $this->result->fetch_object()){
                array_push($objects, $obj);
            }
            return $objects;
        }
        return $this->result->fetch_object();
    }

    /**
     * Отримуємо кількість рядків
     *
     * @return <int>
     */
    function numRows()
    {
        return $this->result->num_rows;
    }

    /**
     * Отримуємо кількість задіяних рядків
     *
     * @return <int>
     */
    function affectedRows()
    {
        return $this->result;
    }

    /**
     * Очистити рядок
     *
     * @param <string> $data дані
     *
     * @return <string>
     */
    function sanitizeString($data)
    {
        if(get_magic_quotes_gpc())
            $data = stripslashes($data);
        return $this->connects[$this->current]->escape_string($data);
    }

    function mysql_real_escape_string($q)
    {
        return $this->connects[$this->current]->real_escape_string($q);
    }

    public function getQuery($query = false, $getRows = '')
    {
        if($query)
        {
            $this->executeQuery($query);
            if($this->numRows() > 0)
                return $this->getRows($getRows);
        }
        return false;
    }

    /**
     * Допоміжні функції
     */
    function getAllData($table = false, $order = '')
    {
        if($table)
        {
            if($order != '') $order = ' ORDER BY '.$order;
            $this->executeQuery("SELECT * FROM `{$table}` {$order}");
            if($this->numRows() > 0)
                return $this->getRows('array');
        }
        return false;
    }

    function getAllDataById($table = '', $key, $row_key = 'id')
    {
        if($table != '')
        {
            $where = $this->makeWhere($key, $row_key);
            if($where != '')
            {
                $this->executeQuery("SELECT * FROM `{$table}` WHERE {$where}");
                if($this->numRows() == 1)
                    return $this->getRows();
            }
        }
        return false;
    }

    function getAllDataByFieldInArray($table = '', $key, $row_key = 'id', $order = '')
    {
        if($table != '')
        {
            $where = $this->makeWhere($key, $row_key);
            if($where != '')
            {
                if(is_array($key) && $row_key != '') $where .= ' ORDER BY '.$row_key;
                elseif($order != '') $where .= ' ORDER BY '.$order;
                $this->executeQuery("SELECT * FROM `{$table}` WHERE {$where}");
                if($this->numRows() > 0)
                    return $this->getRows('array');
            }
        }
        return false;
    }

    function getCount($table = '', $key = '', $row_key = 'id')
    {
        if($table != ''){
            $where = $this->makeWhere($key, $row_key);
            if($where != '')
                $where = "WHERE {$where}";
            $this->executeQuery("SELECT count(*) as count FROM `{$table}` {$where}");
            if($this->numRows() == 1)
            {
                $count = $this->getRows();
                return $count->count;
            }
        }
        return null;
    }

    private function makeWhere($data, $row_key = 'id', $prefix = false)
    {
        $where = '';
        if(is_array($data))
        {
            foreach ($data as $key => $value) {
                if($key != '' && $key[0] == '&')
                {
                    if($value[0] != '(')
                        $value = "({$value})";
                    $where .= $value.' AND ';
                }
                else if(!is_numeric($key) && $key != '')
                {
                    if($key[0] == '+')
                        $key = substr($key, 1);
                    if($prefix && $key[0] != '#')
                        $where .= "{$prefix}.{$key}";
                    elseif($key[0] == '#')
                    {
                        $key = substr($key, 1);
                        $where .= $key;
                    }
                    else
                        $where .= "`{$key}`";
                    if(is_array($value))
                    {
                        $where .= " IN ( ";
                        foreach ($value as $v) {
                            $where .= "'{$v}', ";
                        }
                        $where = substr($where, 0, -2);
                        $where .= ') AND ';
                    }
                    elseif($value != '' || $value == 0)
                    {
                        $value = $this->sanitizeString($value);
                        if($value == '0')
                            $where .= " = 0 AND ";
                        elseif($value == '')
                            $where .= " = '' AND ";
                        elseif($value[0] == '%')
                            $where .= " LIKE '{$value}%' AND ";
                        elseif($value[0] == '@')
                        {
                            $value = substr($value, 1);
                            $where .= " LIKE '{$value}%' AND ";
                        }
                        elseif($value[0] == '>')
                        {
                            if($value[1] == '=')
                            {
                                $value = substr($value, 2);
                                $where .= " >= {$value} AND ";
                            }
                            else
                            {
                                $value = substr($value, 1);
                                $where .= " > {$value} AND ";
                            }
                        }
                        elseif($value[0] == '<')
                        {
                            if($value[1] == '=')
                            {
                                $value = substr($value, 2);
                                $where .= " <= {$value} AND ";
                            }
                            else
                            {
                                $value = substr($value, 1);
                                $where .= " < {$value} AND ";
                            }
                        }
                        else
                        {
                            if($value[0] == '#' && $value[1] != '!')
                            {
                                $value = substr($value, 1);
                                $where .= " = {$value} AND ";
                            }
                            elseif($value[0] == '#' && $value[1] == '!')
                            {
                                $value = substr($value, 2);
                                $where .= " != {$value} AND ";
                            }
                            elseif($value[0] == '!')
                            {
                                $value = substr($value, 1);
                                $where .= " != '{$value}' AND ";
                            }
                            else
                                $where .= " = '{$value}' AND ";
                        }
                    }
                    else
                        $where .= " = '' AND ";
                }
            }
            if($where != '')
                $where = substr($where, 0, -4);
        }
        else
        {
            $data = (string) $data;
            if($data != '')
            {
                if($prefix)
                    $row_key = "{$prefix}.{$row_key}";
                else
                    $row_key = "`{$row_key}`";
                $data = $this->sanitizeString($data);
                if($data[0] == '#')
                {
                    $data = substr($data, 1);
                    $where = "{$row_key} = {$data}";
                }
                else
                    $where = "{$row_key} = '{$data}'";
            }
        }
        return $where;
    }

    private $query_table = false;
    private $query_prefix = false;
    private $query_fields = '*';
    private $query_where = false;
    private $query_join = array();
    private $query_group = false;
    private $query_group_prefix = false;
    private $query_order = false;
    private $query_order_prefix = true;
    private $query_limit = false;

    public function prefix($prefix)
    {
        if($this->query_prefix == false)
            $this->query_prefix = $prefix;
        else
            exit('Work with DB. Prefix of table name has to be set before function select!');
    }

    public function select($table, $fields = '*', $key = '', $row_key = 'id')
    {
        $this->clear();
        $table = preg_replace("|[\s]+|", " ", $table);
        $table = explode(' ', $table);
        if(count($table) == 3 && ($table[1] == 'as' || $table[1] == 'AS' || $table[1] == 'As'))
            $this->query_prefix = $table[2];
        $this->query_table = $table[0];
        $this->query_fields = $fields;
        if($this->query_prefix == false)
            $this->query_prefix = $table[0];
        $this->query_where = $this->makeWhere($key, $row_key, $this->query_prefix);
        return $this;
    }

    public function join($table, $fields, $key = '', $row_key = 'id', $type = 'LEFT')
    {
        $table = preg_replace("|[\s]+|", " ", $table);
        $table = explode(' ', $table);
        $prefix = $table[0];
        if(count($table) == 3 && ($table[1] == 'as' || $table[1] == 'AS' || $table[1] == 'As'))
            $prefix = $table[2];
        $join = new stdClass();
        $join->table = $table[0];
        $join->prefix = $prefix;
        $join->fields = $fields;
        $join->where = $this->makeWhere($key, $row_key, $prefix);
        $join->type = $type;
        $this->query_join[] = $join;
        return $this;
    }

    public function order($order, $prefix = true)
    {
        $this->query_order_prefix = $prefix;
        $this->query_order = $order;
        return $this;
    }

    public function group($group, $prefix = false)
    {
        $this->query_group_prefix = $prefix;
        $this->query_group = $group;
        return $this;
    }

    public function limit($limit, $offset = 0)
    {
        $this->query_limit = 'LIMIT '.$limit;
        if($offset > 0)
            $this->query_limit .= ', '.$offset;
        return $this;
    }

    /**
     * Виконати запит до БД
     *
     * @param <string> $type - тип запиту:
     *                       auto   якщо один рядок об'єкт, якщо декілька - масив об'єктів
     *                       single тільки один об'єкт. Якщо більше ніж один - false
     *                       array  завжди масив об'єктів
     *                       count  повертає кількість знайдених рядків згідно запиту
     * @param <bool> $clear очистити дані запиту (для нового)
     *
     * @return <object>
     */
    public function get($type = 'auto', $clear = true, $debug = false, $get = true)
    {
        if($this->query_table)
        {
            $data = NULL;
            if($type == 'count')
            {
                $data = 0;
                $where = '';
                if($this->query_prefix)
                    $where = "AS {$this->query_prefix} ";
                //join
                if(!empty($this->query_join))
                    foreach ($this->query_join as $join) {
                        $where .= "{$join->type} JOIN `{$join->table}` ";
                        if($join->prefix != $join->table)
                            $where .= "AS {$join->prefix} ";
                        $where .= "ON {$join->where} ";
                    }
                if($this->query_where != '')
                    $where .= 'WHERE '.$this->query_where;

                $query = "SELECT count(*) as count FROM `{$this->query_table}` {$where}";

                if($debug)
                    echo($query);

                if($get)
                {
                    $row = $this->getQuery($query);
                    if(is_object($row))
                        $data = $row->count;
                }
            }
            else
            {
                $query = "SELECT ";
                // fields
                if(!empty($this->query_join))
                {
                    if(!is_array($this->query_fields))
                        $this->query_fields = explode(',', $this->query_fields);
                    $prefix = $this->query_table;
                    if($this->query_prefix)
                        $prefix = $this->query_prefix;
                    foreach ($this->query_fields as $field) {
                        if($field != '')
                        {
                            $field = trim($field);
                            $query .= $prefix.'.'.$field.', ';
                        }
                    }
                    foreach ($this->query_join as $join) {
                        if(!is_array($join->fields))
                            $join->fields = explode(',', $join->fields);
                        foreach ($join->fields as $field) {
                            if($field != '')
                            {
                                $field = trim($field);
                                $query .= $join->prefix.'.'.$field.', ';
                            }
                        }
                    }
                    $query = substr($query, 0, -2);
                }
                else
                    $query .= $this->query_fields;

                //from
                $query .= " FROM `{$this->query_table}` ";
                if($this->query_prefix)
                    $query .= "AS {$this->query_prefix} ";

                //join
                if(!empty($this->query_join))
                    foreach ($this->query_join as $join) {
                        $query .= "{$join->type} JOIN `{$join->table}` ";
                        if($join->prefix != $join->table)
                            $query .= "AS {$join->prefix} ";
                        $query .= "ON {$join->where} ";
                    }

                //where
                if($this->query_where)
                    $query .= "WHERE {$this->query_where} ";

                //group
                if($this->query_group)
                {
                    if($this->query_prefix || $this->query_group_prefix)
                    {
                        if($this->query_group_prefix == false)
                            $this->query_group_prefix = $this->query_prefix;
                        $query .= "GROUP BY {$this->query_group_prefix}.{$this->query_group} ";
                    }
                    else
                        $query .= "GROUP BY {$this->query_group} ";
                }

                //order
                if($this->query_order)
                {
                    if($this->query_order_prefix)
                    {
                        if($this->query_order_prefix === true)
                            $this->query_order_prefix = $this->query_prefix;
                        $query .= "ORDER BY {$this->query_order_prefix}.{$this->query_order} ";
                    }
                    else
                        $query .= "ORDER BY {$this->query_order} ";
                }

                //limit
                if($this->query_limit)
                    $query .= $this->query_limit;

                if($debug)
                    echo($query);

                if($get)
                    $data = $this->getQuery($query, $type);
            }
            if($clear)
                $this->clear();

            return $data;
        }
        return false;
    }

    public function clear()
    {
        $this->query_table = false;
        $this->query_prefix = false;
        $this->query_fields = '*';
        $this->query_where = false;
        $this->query_join = array();
        $this->query_group = false;
        $this->query_order = false;
        $this->query_limit = false;
    }

    public function register($do, $additionally = '', $user = 0)
    {
        $register = $this->getAllDataById('wl_user_register_do', $do, 'name');
        if($register)
        {
            $data['date'] = time();
            $data['do'] = $register->id;
            if($user == 0)
                $data['user'] = $_SESSION['user']->id;
            else
                $data['user'] = $user;
            $data['additionally'] = $additionally;
            if($this->insertRow('wl_user_register', $data))
                return true;
        }
        return false;
    }

    public function getAliasImageSizes($alias = 0)
    {
        if($alias == 0)
            $alias = $_SESSION['alias']->id;
        if(isset($this->imageReSizes[$alias]))
            return $this->imageReSizes[$alias];
        else if(isset($_SESSION['alias-cache'][$alias]->imageReSizes))
            return $_SESSION['alias-cache'][$alias]->imageReSizes;
        $reSizes = array();
        if($sizes = $this->getAllDataByFieldInArray('wl_images_sizes', array('alias' => array(0, $alias), 'active' => 1, 'alias DESC')))
            foreach ($sizes as $size) {
                $key = $size->prefix;
                if(!$size->prefix)
                    $key = 0;
                $reSizes[$key] = $size;
            }
        $this->imageReSizes[$alias] = $reSizes;
        if(isset($_SESSION['alias-cache'][$alias]))
            $_SESSION['alias-cache'][$alias]->imageReSizes = $reSizes;
        return $reSizes;
    }

    public function sitemap_add($content = NULL, $link = '', $code = 0, $priority = 5, $changefreq = 'daily', $alias = 0)
    {
        $sitemap = array();
        $page = new stdClass();
        $sitemap['link'] = $page->uniq_link = $link;
        $sitemap['alias'] = $page->alias = ($alias > 0 || $content === NULL) ? $alias : $_SESSION['alias']->id;
        $sitemap['content'] = $page->content = ($content === NULL) ? 0 : $content;
        $sitemap['code'] = $page->code = ($code > 0) ? $code : $_SESSION['alias']->code;
        $sitemap['data'] = $sitemap['language'] = NULL;
        $sitemap['time'] = $_SESSION['option']->sitemap_lastedit = time();
        $sitemap['changefreq'] = (in_array($changefreq, array('always','hourly','daily','weekly','monthly','yearly','never'))) ? $changefreq : 'daily';
        if($priority < 1) $priority *= 10;
        if($_SESSION['amp'] && $priority > 0)
            $priority *= -1;
        $sitemap['priority'] = $priority;
        if($_SESSION['language'])
        {
            foreach ($_SESSION['all_languages'] as $lang) {
                $sitemap['language'] = $lang;
                $this->insertRow('wl_sitemap', $sitemap);
                if($lang == $_SESSION['language'])
                    $page->id = $this->getLastInsertedId();
            }
        }
        else
        {
            $this->insertRow('wl_sitemap', $sitemap);
            $page->id = $this->getLastInsertedId();
        }
        if($_SESSION['language'])
            $page->uniq_link .= '/'.$_SESSION['language'];
        return $page;
    }

    public function sitemap_redirect($to = '')
    {
        $sitemap = array();
        $sitemap['link'] = $_SESSION['alias']->link;
        $sitemap['alias'] = $sitemap['content'] = 0;
        $sitemap['code'] = 301;
        $sitemap['data'] = $to;
        $sitemap['language'] = NULL;
        $sitemap['time'] = time();
        $sitemap['changefreq'] = 'daily';
        $sitemap['priority'] = -5;
        $this->insertRow('wl_sitemap', $sitemap);
        return $this->getLastInsertedId();
    }

    public function sitemap_update($content = NULL, $key = 'link', $value = '', $alias = 0)
    {
        $sitemap = $where = array();
        $where['alias'] = ($alias == 0) ? $_SESSION['alias']->id : $alias;
        $where['content'] = ($content === NULL) ? 0 : $content;
        if(is_array($key))
        {
            if(is_numeric($value) && $value > 0)
                $where['alias'] = $value;
            foreach ($key as $k => $v) {
                if($k == 'changefreq')
                    $sitemap['changefreq'] = (in_array($v, array('always','hourly','daily','weekly','monthly','yearly','never'))) ? $v : 'daily';
                elseif($k == 'priority')
                {
                    $sitemap['priority'] = (is_numeric($v) && $v >= 0) ? $v : 5;
                    if($sitemap['priority'] < 1)
                        $sitemap['priority'] *= 10;
                }
                elseif($k == 'redirect' || $k == 301)
                {
                    $sitemap['alias'] = $sitemap['content'] = 0;
                    $sitemap['code'] = 301;
                    $sitemap['data'] = $v;
                    $_SESSION['alias']->redirect = $v;
                }
                else
                    $sitemap[$k] = $v;
            }
        }
        else
        {
            if($key == 'changefreq')
                $sitemap['changefreq'] = (in_array($value, array('always','hourly','daily','weekly','monthly','yearly','never'))) ? $value : 'daily';
            elseif($key == 'priority')
            {
                $sitemap['priority'] = (is_numeric($value) && $value >= 0) ? $value : 5;
                if($sitemap['priority'] < 1)
                    $sitemap['priority'] *= 10;
            }
            elseif($key == 301)
            {
                $sitemap['alias'] = $sitemap['content'] = 0;
                $sitemap['code'] = 301;
                $sitemap['data'] = $value;
                $_SESSION['alias']->redirect = $value;
            }
            elseif ($key == 'link')
            {
                $this->deleteRow('wl_sitemap', ['link' => $value, 'alias' => '!'.$where['alias'], 'content' => '!'.$where['content']]);
                    $sitemap['link'] = $value;
            }
            else
                $sitemap[$key] = $value;
        }
        if(!empty($sitemap))
        {
            $sitemap['time'] = $_SESSION['option']->sitemap_lastedit = time();
            $this->updateRow('wl_sitemap', $sitemap, $where);
        }
    }

    public function sitemap_index($content = 0, $value = 1, $alias = 0)
    {
        if($alias == 0) $alias = $_SESSION['alias']->id;
        if($value == 0)
            $this->executeQuery("UPDATE `wl_sitemap` SET `priority` = `priority` * -1 WHERE `alias` = {$alias} AND `content` = {$content} AND `priority` > 0");
        else
            $this->executeQuery("UPDATE `wl_sitemap` SET `priority` = `priority` * -1 WHERE `alias` = {$alias} AND `content` = {$content} AND `priority` < 0");
    }

    public function sitemap_remove($content = 0, $alias = 0)
    {
        if($alias == 0) $alias = $_SESSION['alias']->id;
        $where = array('alias' => $alias, 'content' => $content);
        $this->deleteRow('wl_sitemap', $where);
        return true;
    }

    public function sitemap_cache_clear($content = NULL, $language = false, $alias = 0)
    {
        if($content === NULL) return false;
        $where = array('content' => $content, 'code' => '!301');
        
        if($_SESSION['language'] && is_string($language))
            $where['language'] = $language;
        elseif(is_numeric($language) && $language > 0)
            $alias = $language;
        
        $where['alias'] = ($alias == 0) ? $_SESSION['alias']->id : $alias;
        $this->updateRow('wl_sitemap', array('data' => NULL), $where);

        $_SESSION['option']->sitemap_lastedit = time();
        $this->updateRow('wl_options', array('value' => $_SESSION['option']->sitemap_lastedit), array('service' => 0, 'alias' => 0, 'name' => 'sitemap_lastedit'));
        return true;
    }

    public function cache_add($key, $data, $alias = false)
    {
        if(!$alias)
            $alias = $_SESSION['alias']->alias;
        if($_SESSION['language'] && $_SESSION['language'] != $_SESSION['all_languages'][0])
            $alias .= '_'.$_SESSION['language'];
        $key = str_replace('/', DIRSEP, $key);
        $path = $alias . DIRSEP . $key . '.json';
        $dirs = explode(DIRSEP, $path);
        array_pop($dirs);
        $dirPath = CACHE_PATH;
        $dirPath = explode(DIRSEP, $dirPath);
        array_pop($dirPath);
        $dirPath = implode(DIRSEP, $dirPath);
        if(!is_dir($dirPath))
            mkdir($dirPath, 0755);
        foreach ($dirs as $dir) {
            $dirPath .= DIRSEP . $dir;
            if(!is_dir($dirPath))
                mkdir($dirPath, 0755);
        }
        $path = CACHE_PATH . $alias . DIRSEP . $key . '.json';
        file_put_contents($path, serialize($data));
    }

    public function cache_get($key, $alias = false)
    {
        if(!$alias)
            $alias = $_SESSION['alias']->alias;
        if($_SESSION['language'] && $_SESSION['language'] != $_SESSION['all_languages'][0])
            $alias .= '_'.$_SESSION['language'];
        $path = CACHE_PATH . $alias . DIRSEP . $key . '.json';
        if(file_exists($path))
            return unserialize(file_get_contents($path));
        return NULL;
    }

    public function cache_delete($key, $alias = false)
    {
        if($alias === false)
            $alias = $_SESSION['alias']->alias;
        if($_SESSION['language'])
        {
            foreach ($_SESSION['all_languages'] as $language) {
                $alias_lang = $alias;
                if($language != $_SESSION['all_languages'][0])
                    $alias_lang = $alias .'_'.$language;
                $path = CACHE_PATH . $alias_lang . DIRSEP . $key . '.json';
                if(file_exists($path))
                    unlink($path);
            }
            return true;
        }
        else
        {
            $path = CACHE_PATH . $alias . DIRSEP . $key . '.json';
            if(file_exists($path))
                return unlink($path);
        }
        
        return false;
    }

    public function cache_delete_all($key = false, $alias = false)
    {
        if(!$alias)
            $alias = $_SESSION['alias']->alias;
        if($_SESSION['language'])
        {
            foreach ($_SESSION['all_languages'] as $language) {
                $alias_lang = $alias;
                if($language != $_SESSION['all_languages'][0])
                    $alias_lang = $alias .'_'.$language;
                $path = CACHE_PATH . $alias_lang;
                if($key)
                    $path .= DIRSEP . $key;
                if(is_dir($path))
                {
                    $data = new data();
                    $data->removeDirectory($path);
                }
            }
            return true;
        }
        else
        {
            $path = CACHE_PATH . $alias;
            if($key)
                $path .= DIRSEP . $key;
            if(is_dir($path))
            {
                $data = new data();
                $data->removeDirectory($path);
                return true;
            }
        }
        return false;
    }

    private function showTime()
    {
        $mem_end = memory_get_usage();
        $time_end = microtime(true);
        $time = $time_end - $this->time_start;
        $mem = $mem_end - $this->mem_start;
        $timeGlobe = $time_end - $GLOBALS['time_start'];
        $memGlobe = $mem_end - $GLOBALS['mem_start'];
        $mem = round($mem/1024, 5);
        if($mem > 1024)
        {
            $mem = round($mem/1024, 5);
            $mem = (string) $mem . ' Мб';
        }
        else
            $mem = (string) $mem . ' Кб';
        $memGlobe = round($memGlobe/1024, 5);
        if($memGlobe > 1024)
        {
            $memGlobe = round($memGlobe/1024, 5);
            $memGlobe = (string) $memGlobe . ' Мб';
        }
        else
            $memGlobe = (string) $memGlobe . ' Кб';
        if(isset($this->result->num_rows))
            echo "<br> Результатів: ".$this->result->num_rows;
        else
            echo '<br>';
        echo ' Час виконання: '.round($time, 5).' сек. Використанок памяті: '.$mem.'. Від старту: Час виконання: '.round($timeGlobe, 5).' сек. Використанок памяті: '.$memGlobe.' <hr>';
    }

}

?>