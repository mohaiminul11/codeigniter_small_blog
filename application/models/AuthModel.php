<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function register($data)
  {
    //if username && email does not exist in database then register username
    $this->db->insert('user', $data);
    if($this->db->affected_rows()>0){

      $this->session->set_userdata(array('register'=>'Registration Successful. Please Login.'));
      redirect('Login');
    }
    // $this->db->affected_rows();
    //else send back to register page
  }

  public function userAuthenticate($username,$password)
  {
    $this->db->where('username', $username);
    $this->db->where('role', 'user');
    $query=$this->db->get('user');
    if($query->num_rows()>0){

      $obj=$query->row();
      // echo $obj->password."<br>";
      $res= crypt($password,$obj->password)==$obj->password;
      if($res==true){
        $this->session->set_userdata(array('role'=>$obj->role,'id'=>$obj->id));
      }
      return $res;
    }else{
      return false;
    }
  }

  public function adminAuthenticate($username,$password)
  {
    $this->db->where('username', $username);
    $this->db->where('role', 'admin');
    $query=$this->db->get('user');
    if($query->num_rows()>0){

      $obj=$query->row();
      // echo $obj->password."<br>";
      $res= crypt($password,$obj->password)==$obj->password;
      if($res==true){
        $this->session->set_userdata(array('role'=>$obj->role,'id'=>$obj->id));
      }
      return $res;
    }else{
      return false;
    }
  }

}
