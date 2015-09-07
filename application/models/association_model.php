<?php 
	class Association_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_association($id){
			$query = $this->db->query("SELECT * FROM tblsciasso WHERE SCI_ID = $id");
			return $query;
		}
	}

?>