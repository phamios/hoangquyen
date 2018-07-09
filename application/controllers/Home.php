<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 
	function __construct() {
        parent::__construct(); 
                $this->load->helper('url');
                $this->load->library('pagination'); 
                $this->load->helper('text');
                $this->load->helper(array('form', 'url'));
                $this->load->helper(array('javelin'));
                $this->load->helper(array('slug')); 
	}
	
	public function index()
	{
                $this->load->model('number_model');
                $data['listVip'] = $this->number_model->getVip();
                $data['listSale'] = $this->number_model->getSale();
                $data['listSuggest'] = $this->number_model->getSuggest();
                //Default
                $this->load->model('cate_model');
                $data['listCategories'] = $this->cate_model->getlistCate();
                $data['listCategoriestelco'] = $this->cate_model->getlistCatebyTelco();
                $data['listcategorycost'] = $this->cate_model->getlistCatebyCost();
                $data['listcategorybrith'] = $this->cate_model->getlistCatebyBirth();
                $this->load->model('order_model');
                $data['listorders'] = $this->order_model->getOrderNew();
                $this->load->view('home',$data);
        }

        public function search()
	{
                $this->load->model('cate_model');
                $this->load->model('number_model'); 
                if (isset($_REQUEST['bttSearch'])) { 
                        $number = $this->input->post('search_keyword', true); 
                        $data['listSearch'] = $this->number_model->search_number($number); 
                        //Default 
                        $data['listCategories'] = $this->cate_model->getlistCate();
                        $data['listCategoriestelco'] = $this->cate_model->getlistCatebyTelco();
                        $data['listcategorycost'] = $this->cate_model->getlistCatebyCost();
                        $data['listcategorybrith'] = $this->cate_model->getlistCatebyBirth();
                        $this->load->model('order_model');
                        $data['listorders'] = $this->order_model->getOrderNew();
                        $this->load->view('home',$data);
                } 
        }
        
        public function category($slug = null){ 
                //Lay ID cuoi cung cua URL
                $a = explode('-', $slug);
                $action = array_pop($a);
                $target = explode(".", $action);
                $id = $target[0]; 
                $this->load->model('number_model');
                $this->load->model('cate_model');
                $data['listNumber'] = $this->number_model->getNumberByCateID($id);
                $data['CateName'] = $this->cate_model->getCateNamebyID($id); 
                 //Default 
                 $data['listCategories'] = $this->cate_model->getlistCate();
                 $data['listCategoriestelco'] = $this->cate_model->getlistCatebyTelco();
                 $data['listcategorycost'] = $this->cate_model->getlistCatebyCost();
                 $data['listcategorybrith'] = $this->cate_model->getlistCatebyBirth(); 
                 $this->load->model('order_model');
                 $data['listorders'] = $this->order_model->getOrderNew();
                 $this->load->view('home',$data);     
        }


        public function details($slug = null){ 
                //Lay ID cuoi cung cua URL
                $a = explode('-', $slug);
                $action = array_pop($a);
                $target = explode(".", $action);
                $id = $target[0]; 
                
                $this->load->model('number_model');
                $this->load->model('cate_model');
                $data['detailNumber'] = $this->number_model->getDetailNUmber($id);
                $data['simnumber']  = $a[0];
                 //Default 
                 $data['listCategories'] = $this->cate_model->getlistCate();
                 $data['listCategoriestelco'] = $this->cate_model->getlistCatebyTelco();
                 $data['listcategorycost'] = $this->cate_model->getlistCatebyCost();
                 $data['listcategorybrith'] = $this->cate_model->getlistCatebyBirth();
                 $this->load->model('order_model');
                 $data['listorders'] = $this->order_model->getOrderNew();
                 $this->load->view('home',$data);     
        }

        public function buy(){ 
                if (isset($_REQUEST['buynumbernow'])) { 
                        $username = $this->input->post('username', true);      
                        $email = $this->input->post('email', true);      
                        $address = $this->input->post('address', true);      
                        $requirements = $this->input->post('requirements', true);      
                        $number = $this->input->post('number',true);
                        $numbercost = $this->input->post('numbercost',true);
                        $this->load->model('order_model');
                        $data = array(
                                'fullname' => $username,
                                'phonecontact' => $email,
                                'address' => $address,
                                'requirements'=>$requirements,
                                'phonenumber' => $number,
                                'phonecose' => $numbercost 
                        );
                        $result = $this->order_model->order($data);
                        if($result <> 0){
                           redirect($result.'/dat-hang-thanh-cong.html');
                        } else {
                          redirect('home');
                        }
                        
                }
        }

        public function success($slug=null){
                //Lay ID cuoi cung cua URL
                $a = explode('-', $slug);
                $action = array_pop($a);
                $target = explode(".", $action);
                $id = $target[0]; 
                if($id <> 0 && $id <> null){
                        $this->load->model('number_model');
                        $this->load->model('cate_model');
                         //Default 
                         $data['listCategories'] = $this->cate_model->getlistCate();
                         $data['listCategoriestelco'] = $this->cate_model->getlistCatebyTelco();
                         $data['listcategorycost'] = $this->cate_model->getlistCatebyCost();
                         $data['listcategorybrith'] = $this->cate_model->getlistCatebyBirth(); 
                         $this->load->model('order_model');
                        $data['listorders'] = $this->order_model->getOrderNew();
                         $this->load->view('home',$data);  
                } else {
                        redirect('home');
                }
                  
        }


        public function searchtype($slug = null){ 
                //Lay ID cuoi cung cua URL
                $a = explode('-', $slug);
                $action = array_pop($a);
                $target = explode(".", $action);
                $id = $target[0]; 
                $this->load->model('number_model');
                $this->load->model('cate_model');
                $data['listNumber'] = $this->number_model->getNumberbySearchType($id);
                 //Default 
                 $data['listCategories'] = $this->cate_model->getlistCate();
                 $data['listCategoriestelco'] = $this->cate_model->getlistCatebyTelco();
                 $data['listcategorycost'] = $this->cate_model->getlistCatebyCost();
                 $data['listcategorybrith'] = $this->cate_model->getlistCatebyBirth(); 
                 $this->load->model('order_model');
                 $data['listorders'] = $this->order_model->getOrderNew();
                 $this->load->view('home',$data);      
        }
        


}
