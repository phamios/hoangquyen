<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class NUmber_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function search_number($number=null){
        $this->db->from('tbl_numbers');
        $this->db->where("simnumber like '%".$number."%'");
          $query = $this->db->get(); 
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getVip() { 
        $this->db->limit(12);
        $this->db->order_by('id', "desc");
        $query = $this->db->get_where('tbl_numbers',array('vip'=>1));
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getSale() { 
        $this->db->limit(12);
          $this->db->order_by('id', "desc");
          $query = $this->db->get_where('tbl_numbers',array('sale'=>1));
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }
    
    public function getSuggest() { 
        $this->db->limit(12);
          $this->db->order_by('id', "desc");
          $query = $this->db->get_where('tbl_numbers',array('suggest'=>1));
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getNumberByCateID($id=null) { 
          $this->db->order_by('id', "desc");
          $query = $this->db->get_where('tbl_numbers',array('cateid'=>$id));
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getDetailNUmber($id=null){ 
        $query = $this->db->get_where('tbl_numbers',array('id'=>$id));
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function getNumberbySearchType($slug=null){ 
        $this->db->from('tbl_numbers');
        $this->db->where("simtype_slug like '%".$slug."%'");
          $query = $this->db->get(); 
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }
    
}
?>