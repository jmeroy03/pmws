<?php 
	class Education_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_education($id){
			$query = $this->db->query("SELECT * FROM tblsciedu WHERE SCI_ID = $id");
			return $query;
		}
	}

?>