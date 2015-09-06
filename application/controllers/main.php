<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Main extends CI_Controller {
private $g_arrData;
public function __construct() 
{
	parent::__construct();
}

public function index()
{	
	$this->template->set('module', 'home'); 
    $this->template->load('template/main', 'home',$this->g_arrData);
}

public function view()
{
	$module = $this->uri->segment(1);
    $this->template->set('module', $module);

    $this->load->model('select');
    $this->g_arrData['data']=$this->select->select();

    $this->template->load('template/main', $module, $this->g_arrData);
}

}