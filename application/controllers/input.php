<?php
defined('BASEPATH') or exit('No direct script access allowed');
class input extends CI_Controller
{
    public function index(){

        $this->load->view('user/input');
        // $query = $this->db->get($this->table);
        // return $query->row();
        

    }

    
}

?>