<?php 
	class Articleget_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_articleget(){
			$query = $this->db->query("SELECT content FROM scientist WHERE id = 43");
			return $query;
		}
	}

?>