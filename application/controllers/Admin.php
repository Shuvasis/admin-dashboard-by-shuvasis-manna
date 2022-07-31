<?php

class Admin extends MY_Controller
{

    public $empData;

    public function __construct() {
        parent::__construct();
        $this->load->model('EmpModel');

        $this->empData = new EmpModel;
    }

    public function index()
    {
        if($this->session->userdata('a_id')) {
            return redirect('/admin/welcome');
        }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('aname', 'User Name', 'required');
        $this->form_validation->set_rules('apass', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
        if($this->form_validation->run()) {
            $aname = $this->input->post('aname');
            $apass = $this->input->post('apass');
            
            $this->load->model('Aloginmodel');
            $login_id = $this->Aloginmodel->isvalidate($aname, $apass);
            // echo $login_id;
            // exit;
            if($login_id == 1) {
                //login current
                $this->load->library('session');
                $this->session->set_userdata('a_id', $login_id);
                return redirect('admin/welcome');
            }
            else {
                //login failed
                $this->session->set_flashdata('Login_failed', 'Invalid username and password');
                return redirect('admin/index');
            }
        }
        else {
            $this->load->view('Admin/Login');
        }
    }

    public function welcome() {
        if(!$this->session->userdata('a_id')) {
            return redirect('/admin/index');
        }

        $this->load->model('EmpModel');
        $data['data'] = $this->empData->getEmployee();
        $data['bar'] = $this->empData->getChart();
        $this->load->view('admin/dashboard', $data);
        
    }

    public function logout() {
        echo "Logout";
        $this->session->unset_userdata('a_id');
        $this->session->sess_destroy();
        return redirect('admin/index');
    }


    public function addemployee() {
        if(!$this->session->userdata('a_id')) {
            return redirect('/admin/index');
        }

        $this->load->view('admin/add_employee');
        $this->input->post();
    }

    public function employeeValidation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile No', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run()) {

            $emp_insert = $this->input->post();

            $result = $this->empData->addEmployeeDetails($emp_insert);

            if($result == true) {
                // echo "Data insert successful";
                // redirect('admin/welcome');
                $this->session->set_flashdata('Insert_Successful', 'Employee Added Successful');
                return redirect('admin/welcome');
            }
            else {
                redirect('admin/addemployee');
            }
            
        }
        else {
            $this->load->view('admin/add_employee');
        }
    }

    public function editemployee() {
        if(!$this->session->userdata('a_id')) {
            return redirect('/admin/index');
        }

        if(isset($_POST['submit'])) {

            $e_id = $this->input->post('e_id');
            $data['data'] = $this->input->post();

            $edit_view = $this->empData->editEmployeeView($e_id);

            if($edit_view == true) {
                // echo "<pre>";
                // print_r($data);
                // exit;
                $this->load->view('admin/edit_employee', $data);
            }
            else {
                echo "Kono kajer na tui ghumi ja";
            }
            // echo $e_id;
            // exit;
        }
    }

    public function updateemployee() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile No', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run()) {

            $emp_update = $this->input->post();
            $emp_id = $this->input->post('e_id');

            $update_res = $this->empData->editEmployeeDetails($emp_id, $emp_update);

            if($update_res == true) {
                // echo "Data update successful";
                // redirect('admin/welcome');
                $this->session->set_flashdata('Update_Successful', 'Employee Update Successful');
                return redirect('admin/welcome');
            }
            else {
                echo "Hoy ni";
            }
            
        }
        else {
            $this->load->view('admin/add_employee');
        }
    }

    public function deleteemployee() {

        if(isset($_POST['submit1'])) {
            $e_id = $_POST['e_id'];

            $del_res = $this->empData->deleteEmployeeOperation($e_id);

            if($del_res == true) {
                $this->session->set_flashdata('Delete_Successful', 'Employee Delete Successful');
                return redirect('admin/welcome');
            }
            else {
                echo "Delete Failed";
            }
        }
        
    }

    
}

?>