<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class settings extends CI_Controller {
	
function __construct()
 {
   parent::__construct();
   $this->load->model('library/settings_model'); 
   $this->load->library('form_validation');
 }

	public function index()
	{
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['access'] = $session_data['access'];
	 $data['result'] = $this->settings_model->std_result();
	 $this->load->view('templates/header',$data);
     $this->load->view('library/settings', $data);
	 $this->load->view('templates/footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}
	
function update_settings() {
   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
   $this->form_validation->set_rules('to_student', 'Book To Student', 'required');
   $this->form_validation->set_rules('to_teacher', 'Book to Staff', 'required');
   $this->form_validation->set_rules('fine_student', 'Fine (Per Day Rs/-)', 'required');
   
   if ($this->form_validation->run() == FALSE) {		      
     $data['result'] = $this->settings_model->std_result();
	 $this->load->view('templates/header',$data);
     $this->load->view('library/settings', $data);
	 $this->load->view('templates/footer');
   } else {	
$data = array(
'to_student' => $this->input->post('to_student'),
'to_teacher' => $this->input->post('to_teacher'),
'fine_student' => $this->input->post('fine_student'),
);	
$this->settings_model->update_settings($data);
$this->session->set_flashdata('messageup', 'Data Updated Successfully.'); 
redirect('library/settings', 'refresh');
   }
}	
}
