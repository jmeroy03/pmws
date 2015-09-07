<?php 
	class Profile_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}
		public function select()
		{

			$query = $this->db->query("SELECT * FROM tblscientist LIMIT 8");
			return $query;
			
		}

		

		public function view($id){
			$query = $this->db->query("SELECT a.SCI_ID, a.sci_last, a.sci_first, a.gender, a.date_created, a.last_updated, b.picname, b.picsize, b.pictype FROM tblscientist a LEFT JOIN tblscipicinfo b ON a.SCI_ID = b.SCI_ID WHERE a.SCI_ID = $id");
			return $query;
		}

		
	}

?>