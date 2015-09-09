<?php
    class Home_Model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        
        public function viewlist()
        {
            $query = $this->db-get('scientist');
            return query;
        }
        
    }


