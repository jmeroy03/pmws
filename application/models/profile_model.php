<?php 
	class Profile_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}
		public function select()
		{
			//$query = $this->db->get('tblscientist');
			$query = $this->db->query("SELECT * FROM tblscientist LIMIT 4");
			return $query;
		}

		public function view($id){
			$query = $this->db->query("SELECT * FROM tblscientist a, tblscipicinfo b WHERE a.SCI_ID = $id AND a.SCI_ID = b.SCI_ID");
			return $query;
		}

		public function get_picture($id){
			$query = $this->db->query("SELECT * FROM tblscipicinfo WHERE SCI_ID = $id");
			return $query;
		}
	}

?>