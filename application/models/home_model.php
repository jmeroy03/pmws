<?php
    class Home_Model extends CI_Model
    {
        function __construct()
        {
            $this->load->database();
        }
        
        public function viewlist()
        {
        

            $query = $this->db->query("SELECT * FROM tblsciarticle  LIMIT 4");
            //$query = $this->db->query("SELECT a.SCI_ID, a.sci_last, a.sci_first, b.profile FROM tblscientist a LEFT JOIN tblsciarticle b ON a.SCI_ID=b.SCI_ID WHERE a.SCI_ID=$id");
            
            if ($query->num_rows() > 0)
                return $query->result_array();
            return false;
        }


        
    }


