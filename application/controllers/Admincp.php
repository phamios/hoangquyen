<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincp extends CI_Controller {
 
	function __construct() {
        parent::__construct(); 
        $this->load->helper('url');
        $this->load->library('pagination'); 
        $this->load->helper('text');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->helper(array('javelin'));
        $this->load->helper(array('slug')); 
	}
	
	public function index()
	{
        if ($this->session->userdata('admin_id') == null) {
            redirect('admincp/login');
        } else {
            $this->load->model('order_model');
            $data['listOrderNew'] = $this->order_model->lastestOrder();
            $this->load->view('backend/dashboard',$data);
        }
    }

    public function login(){
        //admin123!@#
        if ($this->session->userdata('admin_id') == null) {
            if (isset($_REQUEST['loginBtt'])) {
                $username = $this->input->post('username', true);
                $password = $this->input->post('password', true);
                 
                $this->load->model('user_model');
                
                $result = $this->user_model->authen($username,$password); 
                if ($result <> 0) {
                    $session_user = array(
                        'admin_id' =>$result,
                        'admin_name' => $username, 
                    );
                    $this->session->set_userdata($session_user);
                    redirect('admincp/index');
                }
            } 
            $this->load->view('backend/login');
        } else {
            redirect('admincp/index');
        }
       
    }
}