<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller {

	private $g_arrData;
	private $page = "profile";
	private $offset;
	
	public function index($offset = 0){	
		$this->template->set('module', $this->page,$offset);

		//pagination
		$this->load->library('pagination');
		$config['base_url'] = '/pmws/profile/';
		// $config['first_link'] = 'First';
		// $config['last_link'] = 'Last';
		// $config['total_rows'] = count($this->profile_model->select());
		$config['total_rows'] = 200;
		$config['per_page'] = 8;
		$this->pagination->initialize($config);
		// $data['result']=$this->profile_model->findLimit(2, $index);
		// $data['link'] = $this->pagination->create_links();



		$this->load->model('profile_model');
		//$data['result'] = $this->profile_model->select($config['per_page'], $offset);
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