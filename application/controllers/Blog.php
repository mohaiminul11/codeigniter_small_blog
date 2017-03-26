<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('BlogModel'));
  }
	public function index()
	{
		$data['posts']=$this->BlogModel->AllPosts();
		$data['categories']=$this->BlogModel->allCategories();
		$data['content']=$this->load->view('pages/home',$data,TRUE);
		$this->load->view('master',$data);
	}


	/**
	 * this function will lead to the clicked post
	 * @param [int post_id]
	 * @return  [take to the post]
	 */
	public function post($id)
	{
		$data['post']=$this->BlogModel->post($id);
		$data['categories']=$this->BlogModel->allCategories();
		$data['content']=$this->load->view('pages/post',$data,TRUE);
		$this->load->view('master',$data);
	}
	public function postsByCategory($id)
	{
		$data['posts']=$this->BlogModel->postsByCategory($id);
		$data['categories']=$this->BlogModel->allCategories();
		$data['content']=$this->load->view('pages/home',$data,TRUE);
		$this->load->view('master',$data);

	}
}
