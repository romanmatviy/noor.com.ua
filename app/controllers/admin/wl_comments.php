﻿<?php 

class wl_Comments extends Controller {
				
    function _remap($method, $data = array())
    {
        $_SESSION['alias']->name = 'Відгуки та коментарі';
        $_SESSION['alias']->breadcrumb = array('Відгуки та коментарі' => '');
        if (method_exists($this, $method))
            return $this->$method($data);
        else
            $this->index($method);
    }

    public function index($id = 0)
    {
        $this->load->model('wl_comments_model');
        if($id)
        {
            if(is_numeric($id))
            {
                if($comment = $this->wl_comments_model->get(array('id' => $id), 'single'))
                {
                    $_SESSION['alias']->name = 'Відгук #'.$id;
                    $_SESSION['alias']->breadcrumb = array('Відгуки та коментарі' => 'admin/wl_comments', 'Редагувати #'.$id => '');
                    $this->load->admin_view('wl_comments/edit_view', array('comment' => $comment));
                }
                else
                    $this->load->page_404(false);
            }
            else
                $this->load->page_404(false);
        }
        else
        {
            $_SESSION['option']->paginator_per_page = 30;
            $comments = $this->wl_comments_model->get(array('parent' => 0));
        	$this->load->admin_view('wl_comments/list_view', array('comments' => $comments));
        }
    }

    public function save()
    {
        if(isset($_POST['id']) && is_numeric($_POST['id']))
        {
            $inputs = array('status', 'images', 'rating', 'comment');
            $data = $this->data->prepare($inputs);
            if($data['images'])
                $data['images'] = str_replace(array("\r\n", "\n", "\r"), '|||', $data['images']);

            $this->db->updateRow('wl_comments', $data, $_POST['id']);
        }
        $this->redirect();
    }

    public function delete()
    {
        if(isset($_POST['id']) && is_numeric($_POST['id']))
        {
            $this->db->deleteRow('wl_comments', $_POST['id']);
            $this->db->deleteRow('wl_comments', $_POST['id'], 'parent');

            $path = IMG_PATH;
            $path = substr($path, strlen(SITE_URL));
            $path .= 'comments/'.$_POST['id'];
            $this->data->removeDirectory($path);


            $_SESSION['notify'] = new stdClass();
            $_SESSION['notify']->success = 'Коментар #'.$_POST['id'].' видалено успішно';
        }
        $this->redirect('admin/wl_comments');
    }

    public function statusMultiedit()
    {
        if(isset($_POST['row']))
        {
            $status = $this->data->post('status');
            foreach ($_POST['row'] as $row) {
                if(is_numeric($row) && is_numeric($status))
                    $this->db->executeQuery("UPDATE `wl_comments` SET `status` = $status WHERE `id` = $row");
            }
        }
        $this->redirect();
    }

    public function reply()
    {
        $inputs = array('alias', 'content', 'parent', 'comment');
        $data = $this->data->prepare($inputs);
        $data['status'] = 1;
        $data['user'] = $data['manager'] = $_SESSION['user']->id;
        $data['date_add'] = $data['date_manage'] = time();
        $this->db->insertRow('wl_comments', $data);
        $this->redirect();
    }

}