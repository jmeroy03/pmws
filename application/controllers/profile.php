<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller {

	private $g_arrData;
	private $page = "profile";
	private $offset;
	
	public function index(){	
		$this->template->set('module', $this->page);

		$this->load->model('profile_model');

		//pagination
		$this->load->library('pagination');
		$config['base_url'] = base_url(). 'profile/index';
		$config['total_rows'] = $this->profile_model->count_all();
		$config['per_page'] = 8;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);

		$set = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $this->g_arrData['data'] = $this->profile_model->select($config["per_page"], $set);

                $this->template->load('template/main', $this->page, $this->g_arrData);
	}

	public function view($id){
		$this->template->set('module', "profile_view");

		$this->load->model('profile_model');
                $data = $this->profile_model->view($id);
                foreach($data->result() as $row){
    		$this->g_arrData['data'] = $row;
    	}

    	$this->load->model('expertise_model');
    	$this->g_arrData['data_exp']=$this->expertise_model->view_expertise($id);

    	$this->load->model('education_model');
    	$this->g_arrData['data_edu']=$this->education_model->view_education($id);

		$this->load->model('employment_model');
		$this->g_arrData['data_emp']=$this->employment_model->view_employment($id);

		$this->load->model('association_model');
		$this->g_arrData['data_ass']=$this->association_model->view_association($id);

		$this->load->model('training_model');
		$this->g_arrData['data_train']=$this->training_model->view_training($id);

		$this->load->model('award_model');
		$this->g_arrData['data_award']=$this->award_model->view_award($id);

		$this->load->model('affiliation_model');
		$this->g_arrData['data_affil']=$this->affiliation_model->view_affiliation($id);

		$this->load->model('publication_model');
		$this->g_arrData['data_pub']=$this->publication_model->view_publication($id);

	//	$this->load->model('research_model');
	//	$this->g_arrData['data_res']=$this->research_model->view_research($id);

		$this->load->model('paper_model');
		$this->g_arrData['data_paper']=$this->paper_model->view_paper($id);

		$this->template->load('template/main', "profile_view", $this->g_arrData);	
	}

}