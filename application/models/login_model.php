<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
  public function check_user($username, $pwd){
   $query = $this->db->query("SELECT * from user WHERE username = '$username' AND password = '$pwd'");
   if ($query->num_rows() > 0){
     return true;
   } else {
     return false;
   }
  }

  public function get_user() {
    return $this->db->query("SELECT * from user")->result();
  }

  public function get_user_spec($username) {
    return $this->db->query("SELECT * from user where username = '$username'")->result();
  }

  public function create($table,$data) {
    return $this->db->insert($table,$data);
  }
}
