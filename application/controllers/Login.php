<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('AuthModel'));
  }

  function index()
  {
    $this->load->view('login');
  }

  public function userAuthenticate()
  {
    $this->form_validation->set_rules(
        'username', 'Username',
        'required|is_unique[user.username]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.',
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
             $this->load->view('login');
     }
     else
     {
       echo "Successful";
      //  if(isset($_POST['submit'])){
      //    $username=$this->input->post('username');
      //    $password=$this->input->post('password');
      //    $res=$this->AuthModel->userAuthenticate($username,$password);
      //    if($res==true){
      //      Redirect('User');
      //    }else{
      //      Redirect('Login');
      //    }
      //  }
     }

  }



}
