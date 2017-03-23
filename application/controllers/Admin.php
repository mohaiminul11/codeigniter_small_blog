<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if($this->session->userdata('role')!="admin"){
      redirect("adminlogin");
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
    $data['posts']=$this->AdminModel->AllPosts();
    $data['main_content']=$this->load->view('admin/pages/all-posts',$data,TRUE);
    $this->load->view('admin/admin-master', $data);
  }
  function newPost(){
    $data['category']=$this->AdminModel->allCategories();
    $data['main_content']=$this->load->view('admin/pages/new-post',$data,TRUE);
    $this->load->view('admin/admin-master', $data);
  }
  public function addNewPost()
  {
    $this->form_validation->set_rules(
        'title', 'Title',
        'required',
        array(
                'required'      => '%s field must be provided.'
        )
        );
      $this->form_validation->set_rules(
          'post', 'Post',
          'required',
          array(
                  'required'      => '%s field must be provided.'
          )
          );

    if ($this->form_validation->run() == FALSE)
    {
      $data['category']=$this->AdminModel->allCategories();
      $data['main_content']=$this->load->view('admin/pages/new-post',$data,TRUE);
      $this->load->view('admin/admin-master', $data);
    }
    else
    {
      $data=array('userid'=>$this->session->userdata('id'),'title'=>$this->input->post('title'),'content'=>$this->input->post('post'),'date'=>date("Y-m-d"),'cat_id'=>$this->input->post('category'));
      $res=$this->AdminModel->addNewPost($data);
      if(!$res){
        $this->session->set_userdata(array('addFailed'=>'Failed to add data!'));
        $data['categories']=$this->AdminModel->allCategories();
        $data['main_content']=$this->load->view('admin/pages/new-post',$data,TRUE);
        $this->load->view('admin/admin-master', $data);
      }
      else{
        Redirect('Admin/allPosts');
      }
    }
  }

//categories

  public function categories()
  {
    $data['categories']=$this->AdminModel->allCategories();
    $data['main_content']=$this->load->view('admin/pages/categories',$data,TRUE);
    $this->load->view('admin/admin-master', $data);
  }

  public function addCategory()
  {
    $this->form_validation->set_rules(
        'name', 'Category Name',
        'required',
        array(
                'required'      => 'You have not provided %s.'
        )
        );
        $this->form_validation->set_rules(
            'description', 'Description',
            'required',
            array(
                    'required'      => 'You have not provided %s.'
            )
            );

        if ($this->form_validation->run() == FALSE)
        {
          $data['categories']=$this->AdminModel->allCategories();
          $data['main_content']=$this->load->view('admin/pages/categories',$data,TRUE);
          $this->load->view('admin/admin-master', $data);
        }
        else
        {
          if ($this->input->post('submit')!=null) {
            $data=array('cat_name'=>$this->input->post('name'),'description'=>$this->input->post('description'));
            $res=$this->AdminModel->addCategory($data);
            if(!$res){
              $this->session->set_userdata(array('addCategory'=>"Adding Category Failed!"));
            }
            Redirect('Admin/categories');
          }
        }

  }

  public function editCategory()
  {
    $data['main_content']=$this->load->view('admin/pages/edit-category', '',TRUE);
    $this->load->view('admin/admin-master', $data);
  }

  public function updateCategory()
  {

  }

}
