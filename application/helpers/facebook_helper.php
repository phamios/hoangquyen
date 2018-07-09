<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('facebook'))
{ 
	$page_access_token = 'EAACEdEose0cBAKufxrftBTnsnE5YaP65TvRmeGbKFRPUS3wdcIWHwjDKNGeVhKZChJ3w6QHlO8byneU0pIFVIR2MYPc9bCZBlEuFaZB37RbeRvjgHXbGPrarMANP95kZAGaUCkKiKQdqZA2vOpQgSdlY3X0fSWeM2ALiRZCZCTHvAZDZD';
		$page_id = '250572941949166';

//	https://graph.facebook.com/v2.8/me?fields=id%2Cname%2Cabout&access_token=EAACEdEose0cBAKufxrftBTnsnE5YaP65TvRmeGbKFRPUS3wdcIWHwjDKNGeVhKZChJ3w6QHlO8byneU0pIFVIR2MYPc9bCZBlEuFaZB37RbeRvjgHXbGPrarMANP95kZAGaUCkKiKQdqZA2vOpQgSdlY3X0fSWeM2ALiRZCZCTHvAZDZD
	function postFanpage($data){
		$post_url = 'https://graph.facebook.com/'.$page_id.'/feed'; 
		// $data['picture'] = "http://www.example.com/image.jpg";
		// $data['link'] = "http://www.example.com/";
		// $data['message'] = "Your message";
		// $data['caption'] = "Caption";
		// $data['description'] = "Description"; 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $post_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$return = curl_exec($ch);
		curl_close($ch);

	}
}


?>