<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index($service_id=1,$p=0)
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category LIMIT 7')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news LIMIT 20')->result_array();
		
		
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['service_data']=$this->db->query("select * from td_video where 1=1 LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_video where 1=1")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_video',base_url().'index.php/video/'.$service_id,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	$this->load->view('video-list',$category);
	}
	public function videoDetails($service_id,$p=0)
	{
	$category['menus'] = $this->db->query('SELECT * FROM td_category LIMIT 7')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news LIMIT 20')->result_array();
		$category['videos'] = $this->db->query("SELECT * FROM td_album where aid = '".$service_id."'")->result_array();
		
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['service_data']=$this->db->query("select * from td_album_images where album_id = '".$service_id."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_album_images where album_id = '".$service_id."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_album_images',base_url().'index.php/gallery/galleryImages/'.$service_id,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;	
	$this->load->view('gallery',$category);
	}
}
