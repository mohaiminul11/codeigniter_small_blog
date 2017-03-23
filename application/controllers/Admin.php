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
    Redirect('Admin/newpost');
  }


  // posts
  public function allPosts()
  {
    $data['main_content']=$this->load->view('admin/pages/all-posts', '',TRUE);
    $this->load->view('admin/admin-master', $data);
  }
  function newPost(){
    $data['main_content']=$this->load->view('admin/pages/new-post', '',TRUE);
    $this->load->view('admin/admin-master', $data);
  }

//categories

  public function categories()
  {
    $data['main_content']=$this->load->view('admin/pages/categories','',TRUE);
    $this->load->view('admin/admin-master', $data);
  }

  public function addCategory()
  {
    if ($this->input->post('submit')!=null) {
      # code...
    }
  }
  public function FunctionName($value='')
  {
    # code...
  }

  public function updateCategory()
  {
    # code...
  }

}
