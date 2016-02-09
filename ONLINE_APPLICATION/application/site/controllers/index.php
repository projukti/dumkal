<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	
	public function index()
	{
		$manage = $this->db->query('SELECT * FROM td_web_manage ')->result_array();
		if($manage[0]['publish'] == 1) {
		$this->load->view('index');
	} else {
		$this->load->view('index_application');
	}
	}
	public function paymentSuccess()
	{
		$this->load->view('download_applicationform');
	}
	public function page3()
	{
	if(isset($_SESSION['session_stream_name'])) {
	$this->load->view('page3');
	} else {
	redirect(base_url().'index.php/Index');	
	}
	}
	public function page4()
	{
	if(isset($_SESSION['session_step1'])) {
	// 	echo $sql = 'SELECT * FROM td_subject_group WHERE stream_id="'.$_SESSION['session_stream_id'].'" AND subject_1="'.$_SESSION['session_honours_sub'].'"';
	// die;
		$subject = $this->db->query('SELECT * FROM td_student_stream WHERE stream_name="'.$_SESSION['session_stream'].'"')->result_array();
	$stid = $subject[0]['stream_id'];
	$_SESSION['session_stream_id'] = $stid;
	$subject_group['s_group'] = $this->db->query('SELECT * FROM td_subject_group ORDER BY grp_id DESC')->result_array();
	//$subject_group['s_group'] = $this->db->query('SELECT * FROM td_subject_group WHERE stream_id="'.$_SESSION['session_stream_id'].'"')->result_array();
	$this->load->view('page4',$subject_group);
	} else {
	redirect(base_url().'index.php/Index');	
	}
		
	}
	public function step1($id)
	{	$stream = $this->db->query('SELECT * FROM td_student_stream WHERE stream_id = "'.$id.'"')->result_array();
		$category['data'] = $this->db->query('SELECT * FROM td_student_stream WHERE stream_id = "'.$id.'"')->result_array();
		$category['subjects'] = $this->db->query('SELECT * FROM td_subject_group WHERE stream_id = "'.$id.'"')->result_array();
		$_SESSION['session_stream_name'] = $stream[0]['stream_name'];
		$this->load->view('page2',$category);
	}
	
	public function firstform_submit()
	{	
		$_SESSION['session_step1'] = $this->input->post('step1');
		$_SESSION['session_hs_total'] = $this->input->post('txt_hs_marks');
		$_SESSION['session_honours_sub'] = $this->input->post('txt_sub');
		$_SESSION['session_board'] = $this->input->post('txt_board');
		$_SESSION['session_last_exam_pass'] = $this->input->post('txt_year');
		$_SESSION['session_stream'] = $this->input->post('txt_course');
		$_SESSION['session_caste'] = $this->input->post('txt_caste');
		$_SESSION['session_marks'] = $this->input->post('hs_marks');
		$_SESSION['session_ph'] = $this->input->post('ph_data');
		if($_SESSION['session_board'] == 'Other') {
		$_SESSION['session_other_board'] = $this->input->post('txt_other_board');	
		}
		if($_SESSION['session_ph'] == '1') {
		$_SESSION['session_ph_score'] = $this->input->post('txt_ph_score');	
		}
		$_SESSION['session_subject_1'] = $this->input->post('sub_1');
		$_SESSION['session_subject_2'] = $this->input->post('sub_2');
		$_SESSION['session_subject_3'] = $this->input->post('sub_3');
		$_SESSION['session_subject_4'] = $this->input->post('sub_4');
		$_SESSION['session_subject_5'] = $this->input->post('sub_5');
		$sixth = $this->input->post('sub_6');
		if(!empty($sixth)) {
		$_SESSION['session_subject_6'] = $this->input->post('sub_6');
	    }
		$_SESSION['session_sub1_score'] = $this->input->post('txt_subject_1');
		$_SESSION['session_sub2_score'] = $this->input->post('txt_subject_2');
		$_SESSION['session_sub3_score'] = $this->input->post('txt_subject_3');
		$_SESSION['session_sub4_score'] = $this->input->post('txt_subject_4');
		$_SESSION['session_sub5_score'] = $this->input->post('txt_subject_5');
		$score = $this->input->post('txt_subject_6');
		if(!empty($score)) {
		$_SESSION['session_sub6_score'] = $this->input->post('txt_subject_6');
	    }
		$_SESSION['session_best1_marks'] = $this->input->post('selected_sub1');
		$_SESSION['session_best2_marks'] = $this->input->post('selected_sub2');
		$_SESSION['session_best3_marks'] = $this->input->post('selected_sub3');
		$_SESSION['session_best4_marks'] = $this->input->post('selected_sub4');
		$_SESSION['session_best5_marks'] = $this->input->post('selected_sub5');

		$_SESSION['session_best5_totalmarks'] = $this->input->post('txt_best_marks');
		
		
		redirect(base_url().'index.php/Index/page4');
	}
	public function secondform_submit()
	{   
		$_SESSION['session_subject_1'] = $this->input->post('sub_1');
		$_SESSION['session_subject_2'] = $this->input->post('sub_2');
		$_SESSION['session_subject_3'] = $this->input->post('sub_3');
		$_SESSION['session_subject_4'] = $this->input->post('sub_4');
		$_SESSION['session_subject_5'] = $this->input->post('sub_5');
		$sixth = $this->input->post('sub_6');
		if(!empty($sixth)) {
		$_SESSION['session_subject_6'] = $this->input->post('sub_6');
	    }
		$_SESSION['session_sub1_score'] = $this->input->post('txt_subject_1');
		$_SESSION['session_sub2_score'] = $this->input->post('txt_subject_2');
		$_SESSION['session_sub3_score'] = $this->input->post('txt_subject_3');
		$_SESSION['session_sub4_score'] = $this->input->post('txt_subject_4');
		$_SESSION['session_sub5_score'] = $this->input->post('txt_subject_5');
		$score = $this->input->post('txt_subject_6');
		if(!empty($score)) {
		$_SESSION['session_sub6_score'] = $this->input->post('txt_subject_6');
	    }
	    if($_SESSION['session_board'] == 22) {
		$_SESSION['session_best1_marks'] = $this->input->post('selected_sub1');
		$_SESSION['session_best2_marks'] = $this->input->post('selected_sub2');
		$_SESSION['session_best3_marks'] = $this->input->post('selected_sub3');
		$_SESSION['session_best4_marks'] = $this->input->post('selected_sub4');
		$_SESSION['session_best5_marks'] = $this->input->post('selected_sub5');
		$_SESSION['total_hs_marks'] = $this->input->post('txt_aggregate_marks');
		$_SESSION['session_best5_totalmarks'] = $this->input->post('txt_aggregate_marks') / 2;
		} else {
		$_SESSION['session_best1_marks'] = $this->input->post('selected_sub1');
		$_SESSION['session_best2_marks'] = $this->input->post('selected_sub2');
		$_SESSION['session_best3_marks'] = $this->input->post('selected_sub3');
		$_SESSION['session_best4_marks'] = $this->input->post('selected_sub4');
		$_SESSION['session_best5_marks'] = $this->input->post('selected_sub5');
		$_SESSION['total_hs_marks'] = $this->input->post('txt_aggregate_marks');
		$_SESSION['session_best5_totalmarks'] = $this->input->post('txt_aggregate_marks');
		}
		
		redirect(base_url().'index.php/Index/page4');
	}
	
	public function final_submit()
	{
		$name = $this->input->post('txt_name');
		$_SESSION['session_nation'] = $this->input->post('txt_nation');
		if($_SESSION['session_nation'] == 'indian') {
		$_SESSION['session_nation_name'] = 'na';	
		} else {
			$_SESSION['session_nation_name'] = $this->input->post('txt_other_nation');
		}
		$fields = array(
			'stream_id' => $_SESSION['session_stream_id'],
			'stream_name' => $_SESSION['session_stream'],
			'hons_sub' => $_SESSION['session_honours_sub'],
			'board' => $_SESSION['session_board'],
			'last_exam' => $_SESSION['session_last_exam_pass'],
			'stream' => $_SESSION['session_stream'],
			'caste' => $_SESSION['session_caste'],
			'marks' => $_SESSION['session_marks'],
			'year' => $_SESSION['session_last_exam_pass'],
			'best_sub_1' => $_SESSION['session_subject_1'],
			'best_sub_1_total' => $_SESSION['session_sub1_score'],
			'best_sub_2' => $_SESSION['session_subject_2'],
			'best_sub_2_total' => $_SESSION['session_sub2_score'],
			'best_sub_3' => $_SESSION['session_subject_3'],
			'best_sub_3_total' => $_SESSION['session_sub3_score'],
			'best_sub_4' => $_SESSION['session_subject_4'],
			'best_sub_4_total' => $_SESSION['session_sub4_score'],
			'best_sub_5' => $_SESSION['session_subject_5'],
			'best_sub_5_total' => $_SESSION['session_sub5_score'],
			'best_sub_6' => $_SESSION['session_subject_6'],
			'best_sub_6_total' => $_SESSION['session_sub6_score'],
			'best_score_1' => $_SESSION['session_best1_marks'],
			'best_score_2' => $_SESSION['session_best2_marks'],
			'best_score_3' => $_SESSION['session_best3_marks'],
			'best_score_4' => $_SESSION['session_best4_marks'],
			'best_score_5' => $_SESSION['session_best5_marks'],
			'total_hs_marks' => $_SESSION['session_marks'],
			'total_best_five_marks' => $_SESSION['session_best5_totalmarks'],
		);
		$add_news = $this->base_model->form_post1('td_student_general_details',$fields);
		$news_id = $this->db->insert_id();
		$fields1 = array(
			'stud_gen_id' => $news_id,
			'adate' => date('Y-m-d'),
			'name' => $this->input->post('txt_name'),
			'dob' => $this->input->post('txt_dob_day').'-'.$this->input->post('txt_dob_month').'-'.$this->input->post('txt_dob_year'),
			'sex' => $this->input->post('txt_sex'),
			'caste' => $this->input->post('txt_cast'),
			'religion' => $this->input->post('txt_religion'),
			'nationality' => $_SESSION['session_nation'],
			'nationality_name' => $_SESSION['session_nation_name'],
			'phn' => $this->input->post('txt_phn'),
			'marital' => $this->input->post('txt_marriage'),
			'father_name' => $this->input->post('txt_father'),
			'mother_name' => $this->input->post('txt_mother'),
			'g_name' => $this->input->post('txt_gurdian'),
			'g_rltn' => $this->input->post('txt_gurdian_rltn'),
			'g_occu' => $this->input->post('txt_gurdian_occu'),
			'g_phn' => $this->input->post('txt_gurdian_phn'),
			'pre_vill' => $this->input->post('txt_pre_vill'),
			'pre_po' => $this->input->post('txt_pre_po'),
			'pre_ps' => $this->input->post('txt_pre_ps'),
			'pre_dist' => $this->input->post('txt_pre_dist'),
			'pre_state' => $this->input->post('txt_pre_state'),
			'pre_pin' => $this->input->post('txt_pre_pin'),
			'per_vill' => $this->input->post('txt_per_vill'),
			'per_po' => $this->input->post('txt_per_po'),
			'per_ps' => $this->input->post('txt_per_ps'),
			'per_dist' => $this->input->post('txt_per_dist'),
			'per_state' => $this->input->post('txt_per_state'),
			'per_pin' => $this->input->post('txt_per_pin'),
			'minority' => $this->input->post('txt_minor'),
			'last_exam' => $this->input->post('txt_last_exam'),
			'school_name' => $this->input->post('txt_school_name'),
			'school_roll' => $this->input->post('txt_school_roll'),
			'school_reg' => $this->input->post('txt_school_reg'),
			'school_grade' => $this->input->post('txt_school_grade'),
			'ph' => $_SESSION['session_ph'],
			'ph_score' => $_SESSION['session_ph_score'],
			'first_get' =>$this->input->post('txt_f_gen'),
			'group_id' => $this->input->post('txt_subj_grp'),
			'terms' => $this->input->post('txt_terms'),
		);
		$add_news1 = $this->base_model->form_post('td_student_application',$fields1);

		redirect(base_url().'index.php/Index/paymentSuccess');
	}
	public function package_details($id)
	{
		$category['data'] = $this->db->query('SELECT * FROM td_package WHERE pid = "'.$id.'" ORDER BY pid DESC')->result_array();
		$category['data1'] = $this->db->query('SELECT * FROM td_days WHERE cat_id = "'.$id.'" ORDER BY did DESC')->result_array();
		
		$this->load->view('package_details',$category);
	}
	public function contact_us()
	{
		$this->load->view('contact_us');
	}
	public function guest_house()
	{
		$category['data'] = $this->db->query('SELECT * FROM td_guest ORDER BY gid DESC')->result_array();
		$this->load->view('guest_house',$category);
	}
	public function air_tickets()
	{
		$this->load->view('air_ticket');
	}
	public function rail_tickets()
	{
		$this->load->view('rail_ticket');
	}
	public function vendorRegistration()
	{
		$this->load->view('vendor_login');
	}
	
}
