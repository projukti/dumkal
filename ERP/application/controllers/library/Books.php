<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class books extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('library/books_model');
   $this->load->library('form_validation');
 }

public function index()
{
   $data['new_acc_no'] = $this->books_model->new_acc_no();
	///////////////////////////Add Books/////////////////////////	
   $this->load->library('form_validation');
   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
   $this->form_validation->set_rules('acc_no', 'Accession No', 'required');
   $this->form_validation->set_rules('title', 'Title', 'required');
  
   if ($this->form_validation->run() == FALSE) {} 
   else {
$acc_no=$this->input->post('acc_no')-1; 
$copy=$this->input->post('copy'); 
for($i=1;$i<=$copy;$i++)
{
$new_acc_no=str_pad($this->books_model->new_acc_no(), 5, "0", STR_PAD_LEFT);   	   	
$data = array(
'sl_no' => $this->books_model->book_count_st(),
'acc_no' => $new_acc_no,
'classification_no' => $this->input->post('classification_no'),
'subject1' => $this->input->post('subject1'),
'subject2' => $this->input->post('subject2'),
'subject3' => $this->input->post('subject3'),
'subject4' => $this->input->post('subject4'),
'title' => $this->input->post('title'),
'edition' => $this->input->post('edition'),
'editor' => $this->input->post('editor'),
'editor_by' => $this->input->post('editor_by'),
'author1' => $this->input->post('author1'),
'author2' => $this->input->post('author2'),
'author3' => $this->input->post('author3'),
'auth_conf' => $this->input->post('auth_conf'),
'auth_assc' => $this->input->post('auth_assc'),
'place_of_publication' => $this->input->post('place_of_publication'),
'author_mark' => $this->input->post('author_mark'),
'series' => $this->input->post('series'),
'bibliographic_note' => $this->input->post('bibliographic_note'),
'note' => $this->input->post('note'),
'publisher' => $this->input->post('publisher'),
'date_of_publish' => $this->input->post('date_of_publish'),
'price' => $this->input->post('price'),
'suppliers' => $this->input->post('suppliers'),
'call_no' => $this->input->post('classification_no')." ".$this->input->post('author_mark')." ".$new_acc_no,
'isbn_no' => $this->input->post('isbn_no'),
'volume' => $this->input->post('volume'),
'page_no' => $this->input->post('page_no'),
'bound' => $this->input->post('bound'),
'fund_type' => $this->input->post('fund_type'),
'type' => $this->input->post('type'),
'book_condition' => $this->input->post('book_condition'),
'description' => $this->input->post('description'),
'additional' => $this->input->post('additional')
);
//Transfering data to Model
$this->books_model->insertbook($data);
}
$this->session->set_flashdata('message', 'Data Inserted Successfully.'); 
if($this->input->post('action')=='add'){redirect('library/books', 'refresh');}
else{redirect('library/booksview', 'refresh');}
}	
		
	///////////////////////////Add Books/////////////////////////
			
  if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['access'] = $session_data['access'];
	 $this->load->view('templates/header',$data);
     $this->load->view('library/books', $data);
	 $this->load->view('templates/footer');
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}
}
