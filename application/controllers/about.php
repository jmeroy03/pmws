<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About extends CI_Controller {

	private $g_arrData;
	private $page = "about";

	public function index(){	
		$this->template->set('module', $this->page); 
	    $this->template->load('template/main', $this->page, $this->g_arrData);
	}

}