<?php

class Aloginmodel extends CI_Model {

    public function isvalidate($ausername, $password) {
        $q = $this->db->where(['a_username'=>$ausername, 'a_password'=>$password])->get('admin');

        
        if($q->num_rows()) {
            return $q->row()->a_id;
        }
        else {
            return false;
        }

    }
}


?>