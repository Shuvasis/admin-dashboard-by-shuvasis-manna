<?php

class Employees extends CI_Controller
{

    public $empData;

    public function __construct() {
        parent::__construct();
        $this->load->model('EmpModel');
        $this->empData = new EmpModel;
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login() {
        if($this->session->userdata('e_id')) {
            return redirect('employees/welcome');
        }

        $this->load->view('employee/employee_login');
    }
    
    public function go() {

        if($this->session->userdata('e_id')) {
            return redirect('employees/welcome');
        }

        if(isset($_POST['submit'])) {
            $ename = $this->input->post('ename');
            $epass = $this->input->post('epass');

            $login = $this->empData->checkvalidate($ename, $epass);

            if(!empty($login)) {
                // echo "Login";
                
                foreach ($login as $property => $argument) :
                    $data[$property] = $this->{$property} = $argument;
                
                endforeach;


                $this->load->library('session');
                $this->session->set_userdata('e_id', $data['e_id']);


                // $this->load->view('employee/employee_details', $data);
                redirect('empdetails');
            }
            else {
                $this->session->set_flashdata('Login_failed', 'Invalid username and password');
                return redirect('login');
            }


            
        }
        else {
            
            redirect('login');
        }

    }

    public function welcome() {
        if($this->session->userdata('e_id')) {
            $user_id = $this->session->userdata('e_id');
            $login = $this->empData->success($user_id);

            if(!empty($login)) {
                // echo "Login";
                
                foreach ($login as $property => $argument) :
                    $data[$property] = $this->{$property} = $argument;
                
                endforeach;

                return $this->load->view('employee/employee_details', $data);
            }
        }
    }

    public function elogout() {
        $this->session->unset_userdata('a_id');
        $this->session->sess_destroy();
        return redirect('login');
    }

    
}

?>