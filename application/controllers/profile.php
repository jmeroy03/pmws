<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller {

	private $g_arrData;
	private $page = "profile";
	
	public function index(){	
		$this->template->set('module', $this->page);

		$this->load->model('profile_model');
    	$this->g_arrData['data']=$this->profile_model->select();

	    $this->template->load('template/main', $this->page, $this->g_arrData);
	}

	public function view($id){
		$this->template->set('module', "profile_view");

		$this->load->model('profile_model');
    	$data = $this->profile_model->view($id);
    	foreach($data->result() as $row){
    		$this->g_arrData['data'] = $row;
    	}

		$this->load->model('employment_model');
		$this->g_arrData['data_emp']=$this->employment_model->view_employment($id);
    	
		$this->template->load('template/main', "profile_view", $this->g_arrData);	
	}

}