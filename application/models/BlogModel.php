<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function AllPosts()
  {

    $this->db->from('blog_post');
    $this->db->join('user', 'blog_post.userid = user.id','left');
    $this->db->select('user.username,blog_post.id,blog_post.title,blog_post.content,blog_post.date');
    return $this->db->get()->result_array();
  }
  public function post($id)
  {
    $this->db->from('blog_post');
    $this->db->join('user', 'blog_post.userid = user.id','left');
    $this->db->select('user.username,blog_post.id,blog_post.title,blog_post.content,blog_post.date');
    $this->db->where('blog_post.id', $id);
    return $this->db->get()->result_array();
    //

    // return $this->db->get('blog_post')->result_array();
  }

  // All categories
  public function allCategories()
  {
    return $this->db->get('categories')->result_array();
  }

  // Posts by category
  public function postsByCategory($id)
  {
    $this->db->from('categories');
    $this->db->join('blog_post', 'blog_post.cat_id = categories.cat_id');
    $this->db->join('user', 'blog_post.userid = user.id');
    $this->db->where('categories.cat_id', $id);
    $this->db->select('user.username,blog_post.id,blog_post.title,blog_post.content,blog_post.date');
    return $this->db->get()->result_array();
  }
}
