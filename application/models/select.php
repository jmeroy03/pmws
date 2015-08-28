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

	}

?>