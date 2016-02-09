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
	public function web_visibility()
	{
	if ( isset($_SESSION['user'])) {
		$manage['webdata'] = $this->db->query('SELECT * FROM td_web_manage ')->result_array();
		$this->load->view('web_manage',$manage);
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function web_visibility_yes()
	{
	if ( isset($_SESSION['user'])) {

		$sDetail_manage= $this->db->query('UPDATE td_web_manage SET publish = 1 WHERE pub_id = 1');
		redirect(base_url().'admin.php/Dashboard/web_visibility');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function web_visibility_no()
	{
	if ( isset($_SESSION['user'])) {

		$sDetail_manage = $this->db->query('UPDATE td_web_manage SET publish = 0 WHERE pub_id = 1');
		redirect(base_url().'admin.php/Dashboard/web_visibility');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	
	public function logout()
	{
		session_destroy();
		redirect(base_url().'admin.php');
		
	}
	public function changePassword()
	{
		if ( isset($_SESSION['user'])) {
		$this->load->view('index');
		}
		else {
		redirect(base_url().'admin.php');
		}
		
	}
	
	public function delete_student($id)
	{
	if ( isset($_SESSION['user'])) {
	//$show['data'] = $this->base_model->show_data('td_cms_pages','*','')->result_array();
		$vendor['delete_data']=$this->db->query("delete from td_student_application where stud_gen_id = '".$id."'");
		$vendor1['delete_data1']=$this->db->query("delete from td_student_general_details where stud_gen_id = '".$id."'");
		redirect(base_url().'admin.php/dashboard/student_list');
		
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
}
