<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index($slug,$p=0)
	{
		$category['menus'] = $this->db->query('SELECT * FROM td_category LIMIT 7')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news LIMIT 20')->result_array();
		$cat = $this->db->query("SELECT * FROM td_category WHERE category_slug = '".$slug."'");
		$cat_id = $cat[0]['id'];
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['news_data']=$this->db->query("select * from td_news where category = '".$cat_id."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_news where category = '".$cat_id."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/news/'.$slug,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	$this->load->view('post-list',$category);
	}
	public function watch($slug,$p=0)
	{

		$category['menus'] = $this->db->query('SELECT * FROM td_category LIMIT 7')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news LIMIT 20')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1')->result_array();
		$show = $this->base_model->show_data('td_category','*','category_slug="'.$slug.'"')->result_array();

		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['news_data']=$this->db->query("select * from td_news where category = '".$show[0]['id']."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_news where category = '".$show[0]['id']."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/news/watch/'.$slug,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	$this->load->view('post-list',$category);
	}
	public function post($news_id,$p=0)
	{
		$category = $this->db->query("SELECT * FROM td_news WHERE news_id = '".$news_id."'")->result_array();
		$category['p_c_name'] = $this->db->query("SELECT * FROM td_category WHERE id = '".$category[0]['category']."'")->result_array();
		$category['menus'] = $this->db->query('SELECT * FROM td_category LIMIT 7')->result_array();
		$category['top_banner'] = $this->db->query('SELECT * FROM td_sponsor WHERE sp_pos = "top"')->result_array();
		$category['current_news'] = $this->db->query('SELECT * FROM td_news LIMIT 20')->result_array();
		$category['breking_news'] = $this->db->query('SELECT * FROM td_news WHERE slider = 1')->result_array();
		$category['previous'] = $this->db->query('select * from td_news where news_id = (select max(news_id) from td_news where news_id < "'.$news_id.'")')->result_array();
		$category['next'] = $this->db->query('select * from td_news where news_id = (select min(news_id) from td_news where news_id > "'.$news_id.'")')->result_array();
		$limit = 6; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
			$category['post_data']=$this->db->query("select * from td_news where news_id = '".$news_id."' LIMIT $start, $limit ")->result_array();
			$total_pages = $this->db->query("select * from td_news where news_id = '".$news_id."'")->num_rows();
			require_once APPPATH."libraries/pagination.php";
			$category['res']=create_pagination('td_news',base_url().'index.php/gallery/galleryImages/'.$news_id,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;	
	$this->load->view('post',$category);
	}
}
