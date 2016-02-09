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
	
	$a = $this->input->get('a');
	$data['a']=$a;
	$data['result'] = $this->login_model->std_result($a);
	
	$this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login',$data);
   }
   else
   {
     redirect('library/home', 'refresh');
   }
	}
	
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   $accesss=1;
  //$access  =  $this->uri->segment(3);
	//$data['result'] = $this->login_model->std_result($access);

   //query the database
   $result = $this->login_model->login($username, $password, $access);
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
