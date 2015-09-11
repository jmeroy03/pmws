<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	private $g_arrData;
	private $page = "home";

	public function index(){	
        $this->template->set('module', $this->page); 
	    $this->load->model('home_model');
         
        $this->template->load('template/main', $this->page, $this->g_arrData);
          
 
	}
        
        public function viewlist(){
            $this->template->set('module', "home");

            $this->template->load('module',"home");
            
            $this->load->model('home_model');
            $data = $this->home_model->viewlist();
            foreach ($data->result() as $row){
                $this->g_arrData['data'] = $row;
                
            }  

            $this->template->load('template/main',"home",$this->g_arrData);          
        }

           

}