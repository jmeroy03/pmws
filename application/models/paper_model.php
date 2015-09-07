<?php 
	class Paper_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_paper($id){
			$query = $this->db->query("SELECT * FROM tblscipaper WHERE SCI_ID = $id");
			return $query;
		}
	}

?>