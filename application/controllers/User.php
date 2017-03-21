<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if($this->session->userdata('role')!="user"){
      redirect("login");
    }
  }

  function index()
  {
    $this->load->view('user-dashboard');
  }



}
