<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	
function __construct()
 {
   parent::__construct();
   $this->load->model('login_model','',TRUE); 
    
 }
	public function index()
	{
	$a =  $this->input->get('a');
	
	$data['result'] = $this->login_model->std_result($a);
	$data['a']=$a;
	$this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');


   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login_message',$data);
   }
   else
   {

   	if($_SESSION['type'] == 2){
     redirect('library/books', 'refresh');
   	}
    elseif($_SESSION['type'] == 3){
    	redirect('employee/employee_details', 'refresh');
    }
    elseif($_SESSION['type'] == 6){
    	redirect('institution/institution_details', 'refresh');
    }
     elseif($_SESSION['type'] == 1){
      redirect('student/student_details', 'refresh');
    }
   }
	}
	
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   $a = $this->input->post('a');
   $_SESSION['type'] = $a;
   //query the database
   $result = $this->login_model->login($username, $password, $a);
   $cur_session = $this->login_model->session();
   
   if($cur_session)
   {
	 foreach($cur_session as $cur_session)
     {
		 $year=$cur_session->year; 
		 date_default_timezone_set("Asia/Kolkata"); 
	 }
   }
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username,
		 'access' => $row->access_level
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }

 
}
