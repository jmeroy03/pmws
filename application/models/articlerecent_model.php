<?php 
	class Articlerecent_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_articlerecent(){
			$query = $this->db->query("SELECT abstract FROM scientist WHERE id = 41");
			return $query;
		}
	}

?>