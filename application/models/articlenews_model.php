<?php 
	class Articlenews_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_articlenews(){
			$query = $this->db->query("SELECT content FROM scientist WHERE id = 42");
			return $query;
		}
	}

?>