<?php

class wl_Video extends Controller {
				
    function _remap($method)
    {
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            $this->index($method);
        }
    }

    function index()
    {
    	header("Location: ".SITE_URL);
    	exit();
	}
	
	function save()
	{
		if(isset($_POST['alias']) && is_numeric($_POST['alias']) && isset($_POST['content']) && is_numeric($_POST['content']) && $_POST['video'] != '')
		{
			$videolink = $this->data->post('video', true); 
			$controler_video=parse_url($videolink);
			$site = '';
			if(!empty($controler_video['host'])){			
				if (($controler_video['host']=="youtu.be") || ($controler_video['host']=="www.youtube.com") || ($controler_video['host']=="youtube.com")) {
				$site="youtube";
					if ($controler_video['host']=="youtu.be"){
						$site_link=substr($controler_video['path'],1);
					} else{
						$first_marker = strpos( $controler_video['query'], '=')+1;
						$second_marker=strpos( $controler_video['query'], '&');
						if($second_marker != '') {$second_marker -=2;
							$site_link=substr($controler_video['query'],$first_marker,$second_marker);
						} else $site_link=substr($controler_video['query'],$first_marker);
					}
				}
				elseif ($controler_video['host']=="vimeo.com"){
					$site="vimeo";
					$site_link=substr($controler_video['path'],1);
				}
			}
			if($site != '')
			{
				$data['author'] = $_SESSION['user']->id;
				$data['date_add'] = time();
				$data['alias'] = $_POST['alias'];
				$data['content'] = $_POST['content'];
				$data['site'] = $site;
				$data['link'] = $site_link;
				$data['active'] = 1;

				if($this->db->insertRow('wl_video', $data))
				{
					$ntkd = $this->db->getAllDataByFieldInArray('wl_ntkd', ['alias' => $_POST['alias'], 'content' => $_POST['content']]);
						foreach ($ntkd as $row) {
							if(strripos('v', $row->get_ivafc) === false)
							{
								if(empty($row->get_ivafc))
									$this->db->updateRow('wl_ntkd', ['get_ivafc' => 'v'], $row->id);
								else
									$this->db->updateRow('wl_ntkd', ['get_ivafc' => $row->get_ivafc.'v'], $row->id);
							}
						}
					$this->db->sitemap_cache_clear($_POST['content'], false, $_POST['alias']);
					$this->load->function_in_alias($_POST['alias'], '__after_edit', $_POST['content'], true);

					$this->redirect('#tab-video');
				}
			}
			else
			{
				$_SESSION['notify'] = new stdClass();
				$_SESSION['notify']->errors = 'Невірна адреса відео. Підтримуються сервіси youtu.be, youtube.com, vimeo.com!';
				$this->redirect('#tab-video');
			}
		}
		else
			$this->load->page_404(false);
	}

	public function delete()
	{
		if($this->userCan() && isset($_GET['id']) && is_numeric($_GET['id']))
		{
			if($video = $this->db->getAllDataById('wl_video', $_GET['id']))
			{
				$this->db->deleteRow('wl_video', $_GET['id']);

				$this->db->sitemap_cache_clear($video->content, false, $video->alias);
				$this->load->function_in_alias($video->alias, '__after_edit', $video->content, true);
			}
			$this->redirect('#tab-video');
		}
		else
			$this->load->page_404(false);
	}
}
?>