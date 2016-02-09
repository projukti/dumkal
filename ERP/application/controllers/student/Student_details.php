<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_details extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index(){
		$category['data'] = $this->base_model->show_data('td_subject_group','*','')->result_array();
		$category['stream'] = $this->base_model->show_data('td_student_stream','*','')->result_array();

		$this->load->view('student/subject_group',$category);
	
	}
	public function student_intake(){
		
	$category['data'] = $this->base_model->show_data('td_student_intake','*','')->result_array();
		$this->load->view('student/student_intake',$category);
	}
	public function edit($id){
		$category['edit_data'] = $this->db->query('SELECT * FROM td_employee_details WHERE id='.$id)->result_array();

		$this->load->view('employee/edit_emp_details',$category);
	}
	public function delete_subject_group($cst_id)
	{
		$customer['delete_data']=$this->db->query("delete from td_subject_group where grp_id = '".$cst_id."'");
		redirect(base_url().'index.php/student/student_details');
		
	}
	public function submit_details()
	{
		$name = $this->input->post('txt_group');
		$subject1 = $this->input->post('txt_subject1');
		$subject2 = $this->input->post('txt_subject2');
		$subject3 = $this->input->post('txt_subject3');
		$fields = array(
			'stream_id' => $name,
			'subject_1' => $subject1,
			'subject_2' => $subject2,
			'subject_3' => $subject3,	
		);
		$service = $this->base_model->form_post('td_subject_group',$fields);
		if($service)
		{
		$category['data'] = $this->base_model->show_data('td_subject_group','*','')->result_array();
		redirect(base_url().'index.php/student/student_details');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('student/student_details',$category);
		}	
	}

	public function search_student_data(){
		$category['data'] = $this->base_model->show_data('td_student_stream','*','')->result_array();
		$this->load->view('student/search_student',$category);
	}
	
	public function search_student()
	{
	$p=isset($_GET['page'])?$_GET['page']:0;
	//$service_id = $_GET['looking'];
	$query_string = isset($_GET['student_type'])?'student_type='.$_GET['student_type']:'';
	$query_string = isset($_GET['txt_id'])?'student_id='.$_GET['txt_id']:'';
	$query_string .= isset($_GET['txt_name'])?'&name='.$_GET['txt_name']:'';
	$query_string .= isset($_GET['txt_stream'])?'&stream='.$_GET['txt_stream']:'';
	$query_string .= isset($_GET['txt_roll'])?'&roll='.$_GET['txt_roll']:'';
	$query_string .= isset($_GET['txt_reg'])?'&reg_no='.$_GET['txt_reg']:'';
	$query_string .= isset($_GET['txt_year'])?'&year='.$_GET['txt_year']:'';
	$query_string .= isset($_GET['txt_sub1'])?'&subject_1='.$_GET['txt_sub1']:'';
	$query_string .= isset($_GET['txt_sub2'])?'&subject_2='.$_GET['txt_sub2']:'';
	$query_string .= isset($_GET['txt_sub3'])?'&subject_3='.$_GET['txt_sub3']:'';
	$query_string .= isset($_GET['txt_sex'])?'&sex='.$_GET['txt_sex']:'';
	$query_string .= isset($_GET['txt_caste'])?'&caste='.$_GET['txt_caste']:'';
	$query_string .= isset($_GET['txt_ph'])?'&ph='.$_GET['txt_ph']:'';
	$type = (isset($_GET['student_type']) && !empty($_GET['student_type']))? " transfer_true ='".$_GET['student_type']."'":" transfer_true = ''";
	$id = (isset($_GET['txt_id']) && !empty($_GET['txt_id']))? ' and student_id ='.$_GET['txt_id']:'';
	$name = (isset($_GET['txt_name']) && !empty($_GET['txt_name']))? ' and name like "%'.$_GET['txt_name'].'%"':'';
	$stream = (isset($_GET['txt_stream']) && !empty($_GET['txt_stream']))? ' and stream ='.$_GET['txt_stream']:'';
	$roll = (isset($_GET['txt_roll']) && !empty($_GET['txt_roll']))? ' and roll ='.$_GET['txt_roll']:'';
	$registration = (isset($_GET['txt_reg']) && !empty($_GET['txt_reg']))? ' and registration_no ='.$_GET['txt_reg']:'';
	$year = (isset($_GET['txt_year']) && !empty($_GET['txt_year']))? ' and year ='.$_GET['txt_year']:'';
	$sub1 = (isset($_GET['txt_sub1']) && !empty($_GET['txt_sub1']))? ' and subject1 like "%'.$_GET['txt_sub1'].'%"':'';
	$sub2 = (isset($_GET['txt_sub2']) && !empty($_GET['txt_sub2']))? ' and subject2 like "%'.$_GET['txt_sub2'].'%"':'';
	$sub3 = (isset($_GET['txt_sub3']) && !empty($_GET['txt_sub3']))? ' and subject3 like "%'.$_GET['txt_sub3'].'%"':'';
	$sex = (isset($_GET['txt_sex']) && !empty($_GET['txt_sex']))? ' and sex ="'.$_GET['txt_sex'].'"':'';
	$caste = (isset($_GET['txt_caste']) && !empty($_GET['txt_caste']))? ' and caste ="'.$_GET['txt_caste'].'"':'';
	$ph = (isset($_GET['txt_ph']) && !empty($_GET['txt_ph']))? ' and ph like "%'.$_GET['txt_ph'].'%"':'';
	//echo "select * from td_student_details where 1=1 ".$id.$name.$stream.$roll.$registration.$year.$sub1.$sub2.$sub3.$sex.$caste.$ph." LIMIT $start, $limit ";
	$limit = 20; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
				$query = "select * from td_student_details where".$type.$id.$name.$stream.$roll.$registration.$year.$sub1.$sub2.$sub3.$sex.$caste.$ph." LIMIT $start, $limit ";
				
				$countQuery = "select * from td_student_details where".$type.$id.$name.$stream.$roll.$registration.$year.$sub1.$sub2.$sub3.$sex.$caste.$ph;
			$category['students']=$this->db->query($query)->result_array();
			$total_pages = $this->db->query($countQuery)->num_rows();
			require_once APPPATH."libraries/pagination_search.php";
			$category['res']=create_pagination('td_student_details',base_url().'index.php/student/student_details/search_student?'.$query_string,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
	//$service['service_data'] = $this->base_model->show_data('td_subcategory','*','service_cat_id='.$service_id)->result_array();

		$this->load->view('student/search_details',$category);
	}
	public function session(){
		
	$category['data'] = $this->base_model->show_data('td_student_session','*','')->result_array();
		$this->load->view('student/session',$category);
	}

	public function submit_session_details()
	{
		$name = $this->input->post('txt_session');
		$fields = array(
			'session' => $name,	
		);
		$service = $this->base_model->form_post('td_student_session',$fields);
		if($service)
		{
		$category['data'] = $this->base_model->show_data('td_student_session','*','')->result_array();
		redirect(base_url().'index.php/student/student_details/session');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('student/session',$category);
		}	
	}
	public function submit_transfer_details()
	{
		$student_id = $this->input->post('txt_stud_id');
		$transfer = $this->input->post('txt_trans');
		$transfer_date = $this->input->post('txt_date');
		$transfer_true = 'yes';
		$service = $this->db->query('UPDATE td_student_details SET transfer_reason = "'.$transfer.'",transfer_date = "'.$transfer_date.'",transfer_true = "'.$transfer_true.'" WHERE stud_id = "'.$student_id.'"');
		if($service)
		{
		redirect(base_url().'index.php/student/student_details/student_data');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('student/student_data',$category);
		}	
	}
	public function student_data(){
	//$category['students'] = $this->base_model->show_data('td_student_details','*','')->result_array();
	$p=isset($_GET['page'])?$_GET['page']:0;	
	$category['data'] = $this->base_model->show_data('td_student_stream','*','')->result_array();
	$query_string = isset($_GET['looking'])?'looking='.$_GET['looking']:'';
	$query_string .= isset($_GET['location'])?'&location='.$_GET['location']:'';
	$limit = 20; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
				$query = "select * from td_student_details where transfer_true = 'NA' LIMIT $start, $limit ";
				$countQuery = "select * from td_student_details where transfer_true = 'NA'";
			$category['students']=$this->db->query($query)->result_array();
			$total_pages = $this->db->query($countQuery)->num_rows();
			require_once APPPATH."libraries/pagination_search.php";
			$category['res']=create_pagination('td_student_details',base_url().'index.php/student/student_details/student_data?'.$query_string,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
		$this->load->view('student/student_details',$category);
	}
	public function former_student_data(){
	//$category['students'] = $this->base_model->show_data('td_student_details','*','')->result_array();
	$p=isset($_GET['page'])?$_GET['page']:0;	
	$category['data'] = $this->base_model->show_data('td_student_stream','*','')->result_array();
	$query_string = isset($_GET['looking'])?'looking='.$_GET['looking']:'';
	$query_string .= isset($_GET['location'])?'&location='.$_GET['location']:'';
	$limit = 20; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
				$query = "select * from td_student_details where transfer_true = 'yes' LIMIT $start, $limit ";
				$countQuery = "select * from td_student_details where transfer_true = 'yes'";
			$category['students']=$this->db->query($query)->result_array();
			$total_pages = $this->db->query($countQuery)->num_rows();

			require_once APPPATH."libraries/pagination_search.php";
			$category['res']=create_pagination('td_student_details',base_url().'index.php/student/student_details/student_data?'.$query_string,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
		$this->load->view('student/former_student_details',$category);
	}
	public function delete_student($id){
	$del = $this->db->query('DELETE FROM td_student_details WHERE stud_id='.$id);
	redirect(base_url().'index.php/student/student_details/student_data');
	}
	public function transfer_student($id){
	$category['transfer'] = $this->db->query('SELECT * FROM td_student_details WHERE stud_id='.$id)->result_array();
	$this->load->view('student/student_transfer',$category);
	}
	public function stream_update($stream_id,$student_id){
	$category['update'] = $this->db->query('UPDATE td_student_details SET stream = "'.$stream_id.'" WHERE stud_id = "'.$student_id.'"');
	echo 'ok|';
	}
	public function year_upgrade($year,$student_id){
	$category['update'] = $this->db->query('UPDATE td_student_details SET year = "'.$year.'" WHERE stud_id = "'.$student_id.'"');
	echo 'ok|';
	}
	public function subject_upgrade($subject,$sub_id,$student_id){
	if ($sub_id == 1) {
	$category['update'] = $this->db->query('UPDATE td_student_details SET subject1 = "'.urldecode($subject).'" WHERE stud_id = "'.$student_id.'"');
	}
	elseif ($sub_id == 2) {
	$category['update'] = $this->db->query('UPDATE td_student_details SET subject2 = "'.urldecode($subject).'" WHERE stud_id = "'.$student_id.'"');
	}
	elseif ($sub_id == 3) {
	$category['update'] = $this->db->query('UPDATE td_student_details SET subject3 = "'.urldecode($subject).'" WHERE stud_id = "'.$student_id.'"');
	}
	echo 'ok|';
	}
	public function get_subject(){
	$id = $this->input->post('head_ids');	
	$category = $this->db->query('SELECT * FROM td_subject_group WHERE stream_id='.$id)->result_array();
	echo 'ok|';
	echo '<select name="txt_minor" id="txt_minor" onchange="return get_subject();">
                <option value="">-Select-</option>';
               foreach($category as $val) {
    echo '<option value="'.$val['grp_id'].'">"'.$val['subject_1'].'"</option>"';
    }
    
echo '</select>';

	}
	public function submit_details_file()
	{	
		$stream = $this->input->post('txt_minor');
		$imge = $_FILES["file"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["file"]["tmp_name"];
		$this->base_model->excel_file_upload($image,$temp);
		$file = './student/excel/'.$image;
//load the excel library
		$this->load->library('export');
//read file from path
		$objPHPExcel = PHPExcel_IOFactory::load($file);
//get only the Cell Collection
		$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
//extract to a PHP readable array format
		foreach ($cell_collection as $cell) {
		    $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
		    $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
		    $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
		    //header will/should be in row 1 only. of course this can be modified to suit your need.
		    if ($row == 1) {
		        $header[$row][$column] = $data_value;
		    } else {
		        $arr_data[$row][$column] = $data_value;
		    }
		}
//send the data in an array format
		$data['header'] = $header;
		$data1 = $arr_data;
		//print_r($data1);
		 foreach($data1 as $dta){
		$fields = array(
			'student_id' => $dta['A'],
			'name' => $dta['B'],
			'father_name' => $dta['C'],
			'stream' => $stream,
			'roll' => $dta['E'],
			'subject1' => $dta['F'],
			'subject2' => $dta['G'],
			'subject3' => $dta['H'],
			'date' => $dta['I'],
			'time' => $dta['J'],
			'registration' => $dta['K'],
			'registration_date' => $dta['L'],
			'registration_no' => $dta['M'],	
			'reg_year' => $dta['N'],
			'sex' => $dta['O'],
			'caste' => $dta['P'],
			'religion' => $dta['Q'],
			'ph' => $dta['R'],
			'dob' => $dta['S'],
			'vill' => $dta['T'],
			'po' => $dta['U'],
			'ps' => $dta['V'],
			'dist' => $dta['W'],
			'state' => $dta['X'],
			'year' => $dta['Y'],
			'student_image' => $dta['AA'],
			'student_signature' => $dta['AB'],
			'transfer_reason' => $dta['AC'],
			'transfer_date' => $dta['AD'],
			'transfer_true' => $dta['AE'],
		);
		$service = $this->base_model->form_post('td_student_details',$fields);
		  }
		redirect(base_url().'index.php/student/student_details/student_data');
	}

	public function university_registration(){
		$p=isset($_GET['page'])?$_GET['page']:0;
	$query_string = isset($_GET['looking'])?'looking='.$_GET['looking']:'';
	$query_string .= isset($_GET['location'])?'&location='.$_GET['location']:'';
	$limit = 20; 	//how many items to show per page
			$page = $p;
			if($page) 
				$start = ($page - 1) * $limit; 	//first item to display on this page
			else
				$start = 0;
				$query = "select * from td_student_details where transfer_true = '' and year = 1 LIMIT $start, $limit ";
				$countQuery = "select * from td_student_details where transfer_true = '' and year = 1";
			$category['students']=$this->db->query($query)->result_array();
			$total_pages = $this->db->query($countQuery)->num_rows();
			require_once APPPATH."libraries/pagination_search.php";
			$category['res']=create_pagination('td_student_details',base_url().'index.php/student/student_details/university_registration?'.$query_string,$limit,$page,$total_pages);
			//$this->load->view('table',$result);
			$category['total_item'] = $total_pages;
		$this->load->view('student/university_student_list',$category);
	}

	public function student_registration($id){
	$category['transfer'] = $this->db->query('SELECT * FROM td_student_details WHERE stud_id='.$id)->result_array();
	$this->load->view('student/university_reg',$category);
	}
	public function submit_registration_details()
	{
		$student_id = $this->input->post('txt_stud_id');
		$reg_no = $this->input->post('txt_number');
		$reg_year = $this->input->post('txt_year');
		$reg_date = $this->input->post('txt_date');
		$reg_true = 1;
		$transfer_true = 'yes';
		$service = $this->db->query('UPDATE td_student_details SET registration = "'.$reg_true.'",registration_date = "'.$reg_date.'",registration_no = "'.$reg_no.'",reg_year = "'.$reg_year.'" WHERE stud_id = "'.$student_id.'"');
		if($service)
		{
		redirect(base_url().'index.php/student/student_details/student_data');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			$this->load->view('student/student_data',$category);
		}	
	}

	public function student_profile($id){
	$category['profile'] = $this->db->query('SELECT * FROM td_student_details WHERE stud_id='.$id)->result_array();
	$this->load->view('student/student_profile',$category);
	}
	public function student_id_card($id){
		$ids = base64_decode(urldecode($id));
		$expid = explode('=',$ids);
		$exp = explode('%2C',$expid[0]);
		$imp = implode(',',$exp);
		
	$category['profile'] = $this->db->query('SELECT * FROM td_student_details WHERE stud_id IN ('.$imp.')')->result_array();
	$this->load->view('student/library-card',$category);
	}

	public function student_lid_card($id){
		$ids = base64_decode(urldecode($id));
		$expid = explode('=',$ids);
		$exp = explode('%2C',$expid[0]);
		$imp = implode(',',$exp);
		
	$category['profile'] = $this->db->query('SELECT * FROM td_student_details WHERE stud_id IN ('.$imp.')')->result_array();
	$this->load->view('student/id_card',$category);
	}
}
