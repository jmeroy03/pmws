<?php 
	class Profile_Model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
		}
		public function select($limit, $start)
		{
			$this->db->limit($limit, $start);
			$query = $this->db->get("tblscientist");
			if ($query->num_rows() > 0) {            
            	return $query;
	        }
	        return false;
		}

		public function count_all() {
	        return $this->db->count_all("tblscientist");
	    }

		public function view($id){
			$query = $this->db->query("SELECT a.SCI_ID, a.sci_last, a.sci_first, a.gender, a.date_created, a.last_updated, b.picname, b.picsize, b.pictype FROM tblscientist a LEFT JOIN tblscipicinfo b ON a.SCI_ID = b.SCI_ID WHERE a.SCI_ID = $id");
			return $query;
		}

		
	}

?>