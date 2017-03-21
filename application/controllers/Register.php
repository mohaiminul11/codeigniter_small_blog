<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('AuthModel'));
  }

  function index()
  {
    $this->load->view('register');
  }

  public function passencrypt($pass)
  {
    $salt='$2y$11$'.substr(md5(uniqid(rand(),true)),0,22);
    return crypt($pass,$salt);
  }

  public function registration()
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
            'email', 'Email',
            'required|valid_email'
            );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('register');
        }
        else
        {
          // echo "Everything Valid!";
          if(isset($_POST["register"])){
            $username=$this->input->post('username');
            $password=$this->passencrypt($this->input->post('password'));
            $email=$this->input->post('email');
            $data=array('username'=>$username,'password'=>$password,'email'=>$email);
            $this->AuthModel->register($data);
          }
        }


    // echo "I am in register/registration";
  }

}
