<?php 
	class Publication_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_publication($id){
			$query = $this->db->query("SELECT * FROM tblscipub WHERE SCI_ID = $id");
			return $query;
		}
	}

?>