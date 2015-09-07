<?php 
	class Award_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_award($id){
			$query = $this->db->query("SELECT * FROM tblsciaward WHERE SCI_ID = $id");
			return $query;
		}
	}

?>