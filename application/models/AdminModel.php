<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // All categories
  public function allCategories()
  {
    return $this->db->get('categories')->result_array();
  }
  // Single Category
  public function singleCategory($id)
  {
    $this->db->where('cat_id', $id);
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
  public function updateCategory($id,$data)
  {
    $this->db->where('cat_id', $id);
    $this->db->update('categories', $data);
    if ($this->db->affected_rows()>0) {
      return true;
    }else{
      return false;
    }
  }
  // delete category
  public function deleteCategory($id)
  {
    $this->db->where('cat_id', $id);
    $this->db->delete('categories');
  }

  // Single Post
  public function singlePost($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('blog_post')->result_array();
  }
  // All posts
  public function AllPosts($id)
  {
    $this->db->select('*');
    $this->db->from('blog_post');
    $this->db->join('categories', 'blog_post.cat_id = categories.cat_id');
    $this->db->where('blog_post.userid', $id);
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

  public function modifyPost($id,$data)
  {
    $this->db->where('id', $id);
    $this->db->update('blog_post', $data);
    if($this->db->affected_rows()>0){
      return true;
    }
  }

  public function deletePost($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('blog_post');
  }
}
