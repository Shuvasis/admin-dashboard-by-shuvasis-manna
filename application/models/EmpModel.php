<?php

class EmpModel extends CI_Model {


    public function getEmployee() {
        $query = $this->db->get('employee');
        return $query->result();
    }

    public function getChart() {
        $chart_query = $this->db->query('SELECT gender, COUNT(e_id) FROM employee GROUP BY gender');
        return $chart_query->result();
    }

    public function addEmployeeDetails($data) {
        $response = $this->db->insert('employee', $data);
        return $response;
    }

    public function editEmployeeView($vemp_id) {
        $query = $this->db->get_where('employee', array('e_id' => $vemp_id))->result();
        return $query;

    }

    public function editEmployeeDetails($emp_id,Array $emp_update) {
        $update = $this->db->where('e_id', $emp_id)->update('employee', $emp_update);
        return $update;
    }

    public function deleteEmployeeOperation($del_id) {
        $delete_res = $this->db->delete('employee', ['e_id' => $del_id]);
        return $delete_res;
    }

    public function checkvalidate($eusername, $epassword) {
        $q = $this->db->where(['e_id'=>$eusername, 'mobile'=>$epassword])->get('employee');
        // return $q;
        
        if($q->num_rows()) {
            return $q->row();
        }
        else {
            return false;
        }

    }

    public function success($user_id) {
        $q = $this->db->where(['e_id'=>$user_id])->get('employee');
        // return $q;
        
        if($q->num_rows()) {
            return $q->row();
        }
        else {
            return false;
        }

    }
}


?>