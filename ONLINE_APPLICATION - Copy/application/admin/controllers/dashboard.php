<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	if ( isset($_SESSION['user'])) {
		$this->load->view('index');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function student_list()
	{
	if ( isset($_SESSION['user'])) {
		$news['data'] = $this->db->query('SELECT * FROM td_student_application ORDER BY aply_id DESC')->result_array();
		$this->load->view('student_list',$news);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function student_details($id)
	{
	if ( isset($_SESSION['user'])) {
		$sDetails['data'] = $this->db->query('SELECT * FROM td_student_application WHERE aply_id='.$id)->result_array();
		$this->load->view('student_details',$sDetails);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function guest()
	{
	if ( isset($_SESSION['user'])) {

		$this->load->view('guest');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function package_view()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$news['data'] = $this->db->query('SELECT td_days.days1,td_days.days2,td_days.days3,td_days.days4,td_days.days5,td_package.pid, td_package.type,td_package.name,td_package.image,td_package.sdesc,td_package.bdesc,td_package.price,td_package.days
FROM td_days
INNER JOIN td_package
ON td_days.cat_id=td_package.pid;')->result_array();
		$this->load->view('view_packages',$news);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function guest_view()
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$news['data'] = $this->db->query('SELECT * FROM td_guest ORDER BY gid')->result_array();
		$this->load->view('view_guest',$news);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function add_news()
	{
	if ( isset($_SESSION['user'])) {
		$news_category = $this->input->post('txt_nCategory');
		$news_name = $this->input->post('txt_news');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_sdesc = $this->input->post('sdesc');
		$news_desc = $this->input->post('bdesc');
		$news_price = $this->input->post('txt_price');
		$days = $this->input->post('txt_days');
		$dept = $this->input->post('txt_dep');
		$iti = $this->input->post('txt_iti');
		$includes = $this->input->post('txt_include');
		$fields = array(
			'type' => $news_category,
			'name' => $news_name,
			'image' => $image,
			'sdesc' => $news_sdesc,
			'bdesc' => $news_desc,
			'price' => $news_price,
			'departure' => $dept,
			'itinerary' => $iti,
			'inclusion' => $includes,
			'days' => $days,
			
		);
		$add_news = $this->base_model->form_post('td_package',$fields);
		$news_id = $this->db->insert_id();
		if($add_news)
		{
		$this->base_model->file_upload($image,$temp);
		if($days == 1) {
			$fields1 = array(
			'cat_id' => $news_id,
			'days1' => $this->input->post('bdesc1'),
			
		);
		}
		elseif($days == 2) {
			$fields1 = array(
      			'cat_id' => $news_id,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
				);
			}
		elseif($days == 3) {
			$fields1 = array(
      			'cat_id' => $news_id,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
      			'days3' => $this->input->post('bdesc3'),		
				);
			}
		elseif($days == 4) {
			$fields1 = array(
      			'cat_id' => $news_id,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
      			'days3' => $this->input->post('bdesc3'),
      			'days4' => $this->input->post('bdesc4'),			
				);
			}
		elseif($days == 5) {
			$fields1 = array(
			
      			'cat_id' => $news_id,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
      			'days3' => $this->input->post('bdesc3'),
      			'days4' => $this->input->post('bdesc4'),
      			'days5' => $this->input->post('bdesc5') ,
   											
				);
			}					
		$add_news_tags = $this->base_model->form_post('td_days',$fields1);
		redirect(base_url().'admin.php/dashboard/packages');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	}
	public function edit_packages($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$news['data'] = $this->db->query('SELECT * FROM td_package WHERE pid='.$id)->result_array();
	$news['cdata'] = $this->db->query('SELECT * FROM td_days WHERE cat_id='.$id)->result_array();
		$this->load->view('edit_packages',$news);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function update_packages()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$news_category = $this->input->post('txt_nCategory');
		$news_name = $this->input->post('txt_news');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_sdesc = $this->input->post('sdesc');
		$news_desc = $this->input->post('bdesc');
		$news_price = $this->input->post('txt_price');
		$days = $this->input->post('txt_days');
		$dept = $this->input->post('txt_dep');
		$iti = $this->input->post('txt_iti');
		$includes = $this->input->post('txt_include');
		$fields = array(
			'type' => $news_category,
			'name' => $news_name,
			'image' => $image,
			'sdesc' => $news_sdesc,
			'bdesc' => $news_desc,
			'price' => $news_price,
			'departure' => $dept,
			'itinerary' => $iti,
			'inclusion' => $includes,
			'days' => $days,
			
		);
		$add_news = $this->base_model->form_update('td_package',$fields,$category);
		
		if($add_news)
		{
		$this->base_model->file_upload($image,$temp);
		if($days == 1) {
			$fields1 = array(
			'cat_id' => $category,
			'days1' => $this->input->post('bdesc1'),
			
		);
		}
		elseif($days == 2) {
			$fields1 = array(
      			'cat_id' => $category,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
				);
			}
		elseif($days == 3) {
			$fields1 = array(
      			'cat_id' => $category,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
      			'days3' => $this->input->post('bdesc3'),		
				);
			}
		elseif($days == 4) {
			$fields1 = array(
      			'cat_id' => $category,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
      			'days3' => $this->input->post('bdesc3'),
      			'days4' => $this->input->post('bdesc4'),			
				);
			}
		elseif($days == 5) {
			$fields1 = array(
			
      			'cat_id' => $category,
      			'days1' => $this->input->post('bdesc1'),
      			'days2' => $this->input->post('bdesc2'),
      			'days3' => $this->input->post('bdesc3'),
      			'days4' => $this->input->post('bdesc4'),
      			'days5' => $this->input->post('bdesc5') ,
   											
				);
			}					
		$add_news_tags = $this->base_model->form_update1('td_days',$fields1,$category);
		redirect(base_url().'admin.php/dashboard/packages');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	}

	public function add_guest()
	{
	if ( isset($_SESSION['user'])) {
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_desc = $this->input->post('bdesc');
		$fields = array(
			'image' => $image,
			'content' => $news_desc,
		);
		$add_news = $this->base_model->form_post('td_guest',$fields);
		
		if($add_news)
		{
		$this->base_model->file_upload1($image,$temp);
		
		redirect(base_url().'admin.php/dashboard/guest');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	}
	public function edit_guest($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$news['data'] = $this->db->query('SELECT * FROM td_guest WHERE gid='.$id)->result_array();
	
		$this->load->view('edit_guest_house',$news);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function update_guest()
	{
	if ( isset($_SESSION['user'])) {
		$category = $this->input->post('category');
		$imge = $_FILES["image_file1"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["image_file1"]["tmp_name"];
		$news_desc = $this->input->post('bdesc');
		
		$fields = array(
			'image' => $image,
			'content' => $news_desc,
			
		);
		$add_news = $this->base_model->form_update2('td_guest',$fields,$category);
		
		if($add_news)
		{
		$this->base_model->file_upload1($image,$temp);
		redirect(base_url().'admin.php/dashboard/guest_view');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	}

	public function delete_guest($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
	$vendor['delete_data']=$this->db->query("delete from td_guest where gid = '".$id."'");
		redirect(base_url().'admin.php/dashboard/guest_view');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}

	public function delete_package($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
		$vendor['delete_data']=$this->db->query("delete from td_package where pid = '".$id."'");
		redirect(base_url().'admin.php/dashboard/package_view');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
}
