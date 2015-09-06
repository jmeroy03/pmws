<?php 
	class Employment_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_employment($id){
			$query = $this->db->query("SELECT * FROM tblsciemployment WHERE SCI_ID = $id");
			return $query;
		}
	}

?>