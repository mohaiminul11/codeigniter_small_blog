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
    if(isset($_POST['submit'])){
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $res=$this->AuthModel->adminAuthenticate($username,$password);
      if($res==true){
        echo "Login Successful!";
      }else{
        echo "Login Failed!";
      }
    }
  }

}
