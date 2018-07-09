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

}
