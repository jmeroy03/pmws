<?php 
	class Expertise_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_expertise($id){
			$query = $this->db->query("SELECT * FROM tblsciexpertise WHERE SCI_ID = $id");
			return $query;
		}
	}

?>