<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	private $g_arrData;
	private $page = "home";

	public function index(){	
        $this->template->set('module', $this->page); 
	    $this->load->model('home_model');

//          $this->load->model('home_model');
            $data['data_scientist'] = $this->home_model->viewlist();
            /**/


            /*$this->load->model('article_model');
            $this->g_arrData['data_article']=$this->article_model->view_article();

            $this->load->model('articlerecent_model');
            $this->g_arrData['data_articlerecent']=$this->articlerecent_model->view_articlerecent();

            $this->load->model('articlenews_model');
            $this->g_arrData['data_articlenews']=$this->articlenews_model->view_articlenews();*/

         
        $this->template->load('template/main', $this->page,$data);
          

        }


	}

