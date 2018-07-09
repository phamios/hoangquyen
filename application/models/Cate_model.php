<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cate_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getlistCate() {   
        $this->db->from('tbl_categories');
        $this->db->where("id > 144 AND id < 172");
          $query = $this->db->get();
         
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }


    public function getlistCatebyTelco() {   
        $this->db->from('tbl_categories');
        $this->db->where("id > 171 AND id < 176");
          $query = $this->db->get();
         
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getlistCatebyCost() {   
        $this->db->from('tbl_categories');
        $this->db->where("id > 133 AND id < 145");
          $query = $this->db->get();
         
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getlistCatebyBirth() {   
        $this->db->from('tbl_categories');
        $this->db->where("id > 220 AND id < 232");
          $query = $this->db->get(); 
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getCateNamebyID($id=null) {   
        $query = $this->db->get_where('tbl_categories',array('id'=>$id));
        if ($query->num_rows() > 0) {
            foreach($query->result() as $result){
                return $result->categoryname;
            }
        } else {
            return 0;
        }
    }
 
} 
?>