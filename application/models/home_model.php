<?php
    class Home_Model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        
        public function viewlist()
        {
        

            $query = $this->db->query("SELECT * FROM scientist");
            if ($query->num_rows() > 0)
                return $query->result_array();
            return false;
        }


        
    }


