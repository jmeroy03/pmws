<?php
    class Home_Model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        
        public function viewlist($limit, $start)
        {
            $this->db->limit($limit, $start);
            $query = $this->db-get("scientist");
            if ($query->num_rows() > 0)
                return query;
            return false;
        }


        
    }


