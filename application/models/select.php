<?php 
	class select extends CI_Model
	{
		function __construct()
		{
			
			parent::__contruct();
		}
		

		public function select()
		{
			$query = $this->db->get('scientist');
			return $query;
		}


		public function display ()
		{

			$query = $this->db->query('select distinct SCI_ID,sci_last_name,sci_first_name,sci_last_updated from scientist');
			if ($query->num_rows()>0){
				return $query->result();
			}else{
				return NULL;
			}


		}

	}

?>


