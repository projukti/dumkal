<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booksprint extends CI_Controller {
	
function __construct()
 {
   parent::__construct();
   $this->load->model('library/booksprint_model'); 
   $this->load->library('form_validation');
 }

	public function index()
	{
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['access'] = $session_data['access'];
	 $this->load->view('templates/header',$data);
     $this->load->view('library/booksprint', $data);
	 $this->load->view('templates/footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}
	
function barcode() {
//   $this->load->library('form_validation');
//   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
//   $this->form_validation->set_rules('from_slno', 'From Sl. No.', 'required');
//   $this->form_validation->set_rules('to_slno', 'To Sl. No.', 'required');
//if ($this->form_validation->run() == FALSE) {} 
//else {  	
$from_slno = $this->input->post('from_slno');
$to_slno = $this->input->post('to_slno');	
$data['barcode'] = $this->booksprint_model->search($from_slno,$to_slno);
$this->load->view('library/barcode_list', $data);
//}
}	
function spine() {
$from_slno = $this->input->post('from_slno');
$to_slno = $this->input->post('to_slno');	
$data['spine'] = $this->booksprint_model->search($from_slno,$to_slno);
$this->load->view('library/spine_list', $data);	
}
}
