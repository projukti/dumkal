<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
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
	public function vendor($ven_id)
	{
	if ( isset($_SESSION['user'])) {
		$vendor['delete_data']=$this->db->query("delete from td_vendor_info where vid = '".$ven_id."'");
		redirect(base_url().'admin.php/Dashboard/vendorDashboard');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function customer($cst_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_customer_info where cid = '".$cst_id."'");
		redirect(base_url().'admin.php/Dashboard/customerDashboard');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function location($cat_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_category where category_id = '".$cat_id."'");
		redirect(base_url().'admin.php/Dashboard/Showlocation');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function places($sub_id)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_subcategory where id = '".$sub_id."'");
		redirect(base_url().'admin.php/Dashboard/Showplaces');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
	public function service($sid)
	{
	if ( isset($_SESSION['user'])) {
		$customer['delete_data']=$this->db->query("delete from td_service where id = '".$sid."'");
		redirect(base_url().'admin.php/Dashboard/service');
		}
		else {
		redirect(base_url().'admin.php');
		}
	}
}
