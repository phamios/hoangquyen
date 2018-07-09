<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function authen($user=null,$pass=null) {   
          $query = $this->db->get_where('tbl_users',array(
              'username'=>$user,
              'password'=>md5(md5(sha1($pass.'29072014!@#')))
          )); 
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

}