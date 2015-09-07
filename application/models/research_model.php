<?php 
	class Research_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_research($id){
			$query = $this->db->query("SELECT * FROM tblsearchsubj WHERE SCI_ID = $id");
			return $query;
		}
	}

?>