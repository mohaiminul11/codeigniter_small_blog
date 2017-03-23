<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('AuthModel'));
  }

  function index()
  {
    $this->load->view('adminlogin');
  }

  public function adminAuthenticate()
  {
    $this->form_validation->set_rules(
        'username', 'Username',
        'required',
        array(
                'required'      => 'You have not provided %s.'
        )
        );
        $this->form_validation->set_rules(
            'password', 'Password','required',
            array(
                    'required'      => 'You have not provided %s.',
            )
            );
     if ($this->form_validation->run() == FALSE)
     {
             $this->load->view('adminlogin');
     }
     else
     {
      //  echo "Successful";
       if(isset($_POST['submit'])){
         $username=$this->input->post('username');
         $password=$this->input->post('password');
         $res=$this->AuthModel->adminAuthenticate($username,$password);
         if($res==true){
           Redirect('Admin');
         }else{
           $this->session->set_userdata(array('loginfailed'=>'Login Failed!'));
           Redirect('adminlogin');
         }
       }
     }

  }

}
