<?php
class LoginController extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
    
    public function checkLogin()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        
        if ($this->form_validation->run()==FALSE)
        {
            echo "error";
          $this->load->view('login')  ;
        }else {
            redirect('HomeController/index');
        }
    }
    public function verifyUser()
    {
     $name=$this->input->post('username'); 
     $password=$this->input->post('password');
     $this->load->view('LoginModel');
     
     if ($this->LoginModel->login('$name','$password')) 
     {
         return TRUE;
     }else {
         $this->form_validation->set_message('verifyUser','incorrect detailes');
         return FALSE;
     }
     
    }
}
