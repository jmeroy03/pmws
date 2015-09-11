<?php
    class Home_Model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        
        public function viewlist()
        {
        

            $query = $this->db->query("SELECT s_name FROM scientist");
            if ($query->num_rows() > 0)
                return $query;
            return false;
        }


        
    }


