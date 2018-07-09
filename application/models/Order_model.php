<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function lastestOrder(){
        $this->db->limit(30);
        $this->db->order_by('id', "desc");
        $this->db->from('tbl_customers'); 
          $query = $this->db->get();
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function getOrderNew(){
        $this->db->limit(20);
        $this->db->order_by('id', "desc");
        $this->db->from('tbl_customers'); 
          $query = $this->db->get();
          if ($query->num_rows() > 0) {
              return $query->result();
          } else {
              return 0;
          }
    }

    public function order($data){
        $this->db->insert('tbl_customers', array(
            'fullname' => $data['fullname'],
            'phonecontact' => $data['phonecontact'],
            'address' => $data['address'],
            'requirements'=>$data['requirements'],
            'phonenumber' => $data['phonenumber'],
            'phonecose' => $data['phonecose'],
            'orderdate' => date('h:m:s d-m-y'),
        ));
        $id = $this->db->insert_id();
        $this->db->trans_complete();
        if($id){
            return $id;
        }else{
            return 0;
        }
    }
}
