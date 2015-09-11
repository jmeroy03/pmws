<?php 
	class Article_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_article(){
			$query = $this->db->query("SELECT content FROM scientist WHERE id = 41");
			return $query;
		}
	}

?>