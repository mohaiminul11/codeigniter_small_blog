<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // all posts
  // add new post
  // edit/update post
  // delete post(optional)

  // All categories
  public function allCategories()
  {
    return $this->db->get('categories')->result_array();
  }
  //Add category
  public function addCategory($data)
  {
    $this->db->insert('categories', $data);

    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }
  //update category
  // delete categor(optional)

  // All posts
  public function AllPosts()
  {
    // return $this->db->get('blog_post')->result_array();
    $this->db->select('*');
    $this->db->from('blog_post');
    $this->db->join('categories', 'blog_post.cat_id = categories.cat_id');
    return $this->db->get()->result_array();
  }
  // Add New post
  public function addNewPost($data)
  {
    $this->db->insert('blog_post', $data);
    if($this->db->affected_rows()>0){
      return true;
    }else{
      return false;
    }
  }
}
