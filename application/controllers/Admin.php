<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if($this->session->userdata('role')!="admin"){
      // redirect("adminlogin");
    }
  }

  function index()
  {
    // Redirect to admin dashboard
    // $this->load->view('admin-dashboard');
    $data['main_content']=$this->load->view('admin/pages/all-posts', '',TRUE);
    $this->load->view('admin/admin-master', $data);
  }

}
