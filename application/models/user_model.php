<?php

class user_model extends CI_Model {
    private $table = 'users';

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function insert(){
        $this->db->insert('users', $data);
    }
}



?>