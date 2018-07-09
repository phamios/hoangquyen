<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SimThangLong extends CI_Controller {

    public function index($cate = 0) {
        
        $this->load->helper(array('javelin'));
        // $page = $page + 1;
        // $this->run_process($page);
        //$this->get_category();
        // for($i = 1; $i < 3; $i++){ 
        // 	$this->run_process($i);
        // } 

        $this->load->model('cate_model');

        $category = $this->cate_model->list_simthanglong_cate();
        foreach ($category as $cate) {
            echo $cate->id . "<br/>";
            if ($cate->status == 0) {
                $this->run_process($cate->id, 1);
            }
        }
        //echo '<meta http-equiv="Refresh" content="1; url=http://localhost/~sonpham/autocrawl/index.php/welcome/index/'.$page.'">';
        //  $this->load->view('welcome_message');
    }

    /**
     * Run Main Process
     * @param type $cateid
     * @param type $page
     */
    function run_process($cateid = 0, $page = 1) {

        $this->load->helper('url');
        $this->load->helper(array('simple_html_dom'));
        $this->load->model('cate_model');
        $this->load->model('content_model');
        $this->load->helper('slug');
        $link = "https://simthanglong.vn/".$this->cate_model->get_url($cateid);
        // echo $link."<br/>";   
        $curl = curl_init();
        echo $link."<br/>";
        list($linknew,$remove) = explode(".html",$link);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_URL, $linknew . '-p' . $page.'.html');
        curl_setopt($curl, CURLOPT_REFERER, $linknew . '-p' . $page.'.html');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $str = curl_exec($curl);
        curl_close($curl);
        $html = str_get_html($str);
     
        $post_title = null;
        $post_cateid = $cateid;
        $post_img_thumb = null;
        $post_img = null;
        $post_des = null;
        $post_content = null;
        
        $simso = "";
        $giatien = "";
        $nhamang = "";
        $loaisim = "";

        if ($html->find('table.tblsim-res2') || $new_page < 200) {
                foreach ($html->find('table.tblsim-res2') as $title) {
                    $url_link = str_get_html($title); 
                    foreach($url_link->find('tr') as $row){
                        echo "=========<br/>";
                            foreach ($row->find('span.simso') as $sim) {
                               echo "<b>Sim:</b> " . $sim->plaintext . "<br>";
                               //$simso = str_replace(".", "", $sim->plaintext);
                               $simso =$sim->plaintext ;
                                //Get details content and insert it now
                                // $post_content = $this->get_content_details($url->href);
                                // echo "<br>";
                            }

                            foreach ($row->find('strong') as $gia) {
                               echo "<b>Gia:</b> " . $gia->plaintext . "<br>";
                                //Get details content and insert it now
                                // $post_content = $this->get_content_details($url->href);
                                // echo "<br>";
                               $giatien = str_replace(".", "", $gia->plaintext);
                               $giatien = str_replace("₫", "",  $giatien);
                            }

                            $i = 0;
                            foreach ($row->find('td.hide480') as $mang) {
                                $i = $i + 1;
                                if($i ==2){
                                    echo "<b>Mang:</b> " . $mang->plaintext . "<br>";
                                     $nhamang =  $mang->plaintext;
                                }
                            }

                            foreach ($row->find('span.cat2') as $loaisim) {
                               echo "<b>loaisim:</b> " . $loaisim->plaintext . "<br>";
                                //Get details content and insert it now
                                // $post_content = $this->get_content_details($url->href);
                                // echo "<br>";
                               $loaisim  = $loaisim->plaintext;
                            }
                         
                            $data = array( 
                                'simnumber' => $simso,
                                'cateid' => $cateid, 
                                'simcost' => $giatien,
                                'simtelco' => $nhamang,
                                'simtype' => $loaisim,
                                'simtype_slug'=>create_slug($loaisim)
                            );
                           $result = $this->content_model->insert($data); 

                            
                    }
                    
                    
                    // echo "<b>title:</b> " . $title->plaintext . "<br>";
                    // $post_title = $title->plaintext;
                }
               

                echo "==================" . $page . "======================<br>";

                // $data = array(
                //     'slug' => create_slug($post_title),
                //     'title' => $post_title,
                //     'cateid' => $post_cateid,
                //     'image_thumb' => $post_img_thumb,
                //     'image_link' => $post_img_thumb,
                //     'des' => $post_des,
                //     'content' => $post_content,
                //     'status' => 1,
                // );
                // if ($post_content <> null) {
                //     $result = $this->content_model->insert($data); 
                // }

                // die;
            
         
            // $cateid = 0;
            $new_page = $page + 1;
             echo '<meta http-equiv="refresh" content="2;URL=' . site_url('SimThangLong/run_process/') . '/' . $cateid . '/' . $new_page . '">';
        } else {
            // $this->get_category();
            // $this->cate_model->update_status($cateid);
            echo '<meta http-equiv="refresh" content="2;URL=' . site_url('SimThangLong/index') . '">';
        }
        //$next_page = $page + 1; 
        //redirect("Welcome/index/".$next_page); 
        //$this->load->view('welcome_message');
    }

    /**
     * Get All Category 
     */
    function get_category() {
        $this->load->helper(array('simple_html_dom'));

         $link = "https://simthanglong.vn/";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_URL, $link );
        curl_setopt($curl, CURLOPT_REFERER, $link);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $str = curl_exec($curl);
        curl_close($curl);
        $html = str_get_html($str); 
        $this->load->helper('url');
        $this->load->helper('javelin');
       
        foreach ($html->find('div.list-group') as $e) {
            $url_link = str_get_html($e); 
            foreach ($url_link->find('a') as $url) {
                echo "<b>url:</b> " . $url->href . "<br>";
                echo "<b>text:</b> " . $url->plaintext . "<br>";
                $this->load->model('cate_model');
                // $id = $this->cate_model->insert(array(
                //     'title' => $url->plaintext,
                //     'root' => $url->href,
                //     'catelink' => trim(site_url($url->plaintext)),
                //     'slug' => gen_slug($url->plaintext),
                // ));
            }
        }
      
    }

    /**
     * Get Content Details
     * @param type $url
     * @return type
     */
    function get_content_details($url = null) {
        $this->load->helper(array('simple_html_dom'));

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_REFERER, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $str = curl_exec($curl);
        curl_close($curl);

        $html = str_get_html($str);
        $content_main = null;
        foreach ($html->find('div.td-post-content') as $content) {
            // echo "<b>Content: </b>" . $content->plaintext;
            $content_main = $content->plaintext;
        }
        return $content_main;
    }

    /**
     * RegularExpression
     * @param type $main_text
     * @param type $change_text
     * @param type $format
     * @return type
     */
    function regular_express($main_text, $change_text, $format) {
        return $content;
    }

}
