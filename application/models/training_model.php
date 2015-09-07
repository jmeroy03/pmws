<?php 
	class Training_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}

		public function view_training($id){
			$query = $this->db->query("SELECT * FROM tblscitrainings WHERE SCI_ID = $id");
			return $query;
		}
	}

?>