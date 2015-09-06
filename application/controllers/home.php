<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	private $g_arrData;
	private $page = "home";

	public function index(){	
		$this->template->set('module', $this->page); 
	    $this->template->load('template/main', $this->page, $this->g_arrData);
	}

}