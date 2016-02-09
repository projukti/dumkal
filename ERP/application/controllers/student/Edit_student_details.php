<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_student_details extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index(){
		$category['data'] = $this->base_model->show_data('td_subject_group','*','')->result_array();
		$this->load->view('student/subject_group',$category);
	
	}
	public function student_intake(){
		
	$category['data'] = $this->base_model->show_data('td_student_intake','*','')->result_array();
		$this->load->view('student/student_intake',$category);
	}
	public function edit_subject_group($id){
		$category['edit_data'] = $this->db->query('SELECT * FROM td_subject_group WHERE grp_id='.$id)->result_array();

		$this->load->view('student/edit_subject_group',$category);
	
	}
	public function delete_subject_group($cst_id)
	{
	
		$customer['delete_data']=$this->db->query("delete from td_subject_group where grp_id = '".$cst_id."'");
		redirect(base_url().'index.php/student/student_details');
		
	}
	public function update_group_details()
	{
		$category = $this->input->post('category');
		$name = $this->input->post('txt_group');
		$subjects = $this->input->post('txt_subject');
		
		$fields = array(
			'group_name' => $name,
			'subjects' => $subjects,
			
		);
		
		$service = $this->base_model->group_update('td_subject_group',$fields,$category);
		if($service)
		{
		
		$category['data'] = $this->base_model->show_data('td_subject_group','*','')->result_array();
		redirect(base_url().'index.php/student/student_details');
		
		
		}
		else {
			$category['msg'] = 'Sorry ! Group Subjects were not successfully Inserted';
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
	public function edit_student($id){
	$category['edit'] = $this->db->query('SELECT * FROM td_student_details WHERE stud_id='.$id)->result_array();
	$this->load->view('student/edit_student_details',$category);
	}

	public function update_student_image()
	{
		$sid = $this->input->post('category');
		$imge = $_FILES["student_image"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["student_image"]["tmp_name"];
		$fields = array(
			'student_image' => $image,	
		);
		$data = $this->base_model->student_update('td_student_details',$fields,$sid);
		if($data)
		{
		$this->base_model->student_file_upload($image,$temp);
		
		redirect(base_url().'index.php/student/student_details/student_data');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('student/student_details',$category);
		}	
	}

	public function update_student_signature()
	{
		$sid = $this->input->post('category');
		$imge = $_FILES["student_signature"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["student_signature"]["tmp_name"];
		$fields = array(
			'student_signature' => $image,	
		);
		$data = $this->base_model->student_update('td_student_details',$fields,$sid);
		if($data)
		{
		$this->base_model->student_file_upload($image,$temp);
		
		redirect(base_url().'index.php/student/student_details/student_data');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('student/student_details',$category);
		}	
	}

	public function update_student_details()
	{
		$category = $this->input->post('category');
		$S_id = $this->input->post('txt_id');
		$name = $this->input->post('txt_name');
		$stream = $this->input->post('txt_stream');
		$roll = $this->input->post('txt_roll');
		$sub1 = $this->input->post('txt_sub1');
		$sub2 = $this->input->post('txt_sub2');
		$sub3 = $this->input->post('txt_sub3');
		$sex = $this->input->post('txt_sex');
		$caste = $this->input->post('txt_caste');
		$rgn = $this->input->post('txt_rlgn');
		$ph = $this->input->post('txt_ph');
		$db = $this->input->post('txt_dob');
		$vill = $this->input->post('txt_vill');
		$po = $this->input->post('txt_post');
		$ps = $this->input->post('txt_ps');
		$dist = $this->input->post('txt_dist');
		$state = $this->input->post('txt_state');
		$fields = array(
			'student_id' => $S_id,
			'name' => $name,
			'stream' => $stream,
			'roll' => $roll,
			'subject1' => $sub1,
			'subject2' => $sub2,
			'subject3' => $sub3,
			'sex' => $sex,
			'caste' => $caste,
			'religion' => $rgn,
			'ph' => $ph,
			'dob' => $db,
			'vill' => $vill,
			'po' => $po,
			'ps' => $ps,
			'dist' => $dist,
			'state' => $state

		);
		$service = $this->base_model->student_update('td_student_details',$fields,$category);
		
		if($service)
		{
		
		redirect(base_url().'index.php/student/student_details/student_data');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('employee/emp_details',$category);
		}
		
		
	}
	
}
