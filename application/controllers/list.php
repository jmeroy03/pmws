<?php
	class list extends CI_Controller
	{
		public function index()
		{

			$this

			$this->load->database();
			$this->load->model('select');
			$data['h']=$this->select->select();
			$this->load->view('profile', $data);

		}


	}


?>