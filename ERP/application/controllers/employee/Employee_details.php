<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_details extends CI_Controller {
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
	public function index(){
		$category['data'] = $this->base_model->show_data('td_employee_details','*','')->result_array();
		$this->load->view('employee/emp_details',$category);
	
	}
	public function edit($id){
		$category['edit_data'] = $this->db->query('SELECT * FROM td_employee_details WHERE id='.$id)->result_array();

		$this->load->view('employee/edit_emp_details',$category);
	
	}
	public function delete($cst_id)
	{
	
		$customer['delete_data']=$this->db->query("delete from td_employee_details where id = '".$cst_id."'");
		redirect(base_url().'index.php/employee/employee_details');
		
	}
	public function submit_details()
	{
		$alphabet = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';    



		function generateCode($length = 2)
    {
        $az = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $azr = rand(0, 25);
        $azs = substr($az, $azr, 10);
        $stamp = hash('sha256', time());
        $mt = hash('sha256', mt_rand(5, 20));
        $alpha = hash('sha256', $azs);
        $hash = str_shuffle($stamp . $mt . $alpha);
        $code = ucfirst(substr($hash, $azr, $length));
        return $code;
    }
    	function generateCode1($length = 3)
    {
        $az = '1234567890';
        $azr = rand(0, 9);
        $azs = substr($az, $azr, 5);
        $stamp = hash('sha256', time());
        $mt = hash('sha256', mt_rand(1, 5));
        $alpha = hash('sha256', $azs);
        $hash = str_shuffle($stamp . $mt . $alpha);
        $code1 = ucfirst(substr($hash, $azr, $length));
        return $code1;
    }
		$name = $this->input->post('txt_name');
		$mail = $this->input->post('txt_email');
		$phn = $this->input->post('txt_phn');
		$alt_phn = $this->input->post('txt_alt_phn');
		if($alt_phn == '') {
			$alt_phn1 = 'N/A';
		} else {
			$alt_phn1 = $alt_phn;
		}
		$add = $this->input->post('txt_address');
		$country = $this->input->post('txt_country');
		$state = $this->input->post('txt_state');
		$city = $this->input->post('txt_city');
		$zip = $this->input->post('txt_pin');
		$id = generateCode().'/'.generateCode1();
		$pass = generateCode().'@'.generateCode1();
		
		$fields = array(
			'name' => $name,
			'email' => $mail,
			'phone' => $phn,
			'alt_phone' => $alt_phn1,
			'address' => $add,
			'country' => $country,
			'state' => $state,
			'city' => $city,
			'zip' => $zip,
			'emp_id' => $id,
			'emp_pass' => $pass,

		);
		
		$service = $this->base_model->form_post('td_employee_details',$fields);
		if($service)
		{
		
		$category['data'] = $this->base_model->show_data('td_employee_details','*','')->result_array();

		$this->load->view('employee/emp_details',$category);
		
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('employee/emp_details',$category);
		}
		
		
	}

	public function update_details()
	{
		$category = $this->input->post('category');

		$name = $this->input->post('txt_name');
		$mail = $this->input->post('txt_email');
		$phn = $this->input->post('txt_phn');
		$alt_phn = $this->input->post('txt_alt_phn');
		if($alt_phn == '') {
			$alt_phn1 = 'N/A';
		} else {
			$alt_phn1 = $alt_phn;
		}
		$add = $this->input->post('txt_address');
		$country = $this->input->post('txt_country');
		$state = $this->input->post('txt_state');
		$city = $this->input->post('txt_city');
		$zip = $this->input->post('txt_pin');
		
		$fields = array(
			'name' => $name,
			'email' => $mail,
			'phone' => $phn,
			'alt_phone' => $alt_phn1,
			'address' => $add,
			'country' => $country,
			'state' => $state,
			'city' => $city,
			'zip' => $zip,

		);
		$service = $this->base_model->category_update('td_employee_details',$fields,$category);
		
		if($service)
		{
		$category['data'] = $this->base_model->show_data('td_employee_details','*','')->result_array();
		redirect(base_url().'index.php/employee/employee_details');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('employee/emp_details',$category);
		}
		
		
	}
	
}
