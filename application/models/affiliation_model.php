<?php 
	class Affiliation_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_affiliation($id){
			$query = $this->db->query("SELECT * FROM tblsciaffiliation WHERE SCI_ID = $id");
			return $query;
		}
	}

?>