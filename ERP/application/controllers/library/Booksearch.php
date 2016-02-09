<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booksearch extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('library/booksearch_model');
   $this->load->library('form_validation');
   $this->load->library('pagination');
 }

public function index()
{
if($this->session->userdata('logged_in'))
{			
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
	 $data['access'] = $session_data['access'];
	 $this->load->view('templates/header',$data);
     $this->load->view('library/booksearch', $data);
	 $this->load->view('templates/footer');
}
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
	}
function show_book_id() {
$id = $this->uri->segment(4);
$data['single_book'] = $this->booksearch_model->single_book_id($id);
$this->load->view('templates/header',$data);
$this->load->view('library/booksearch', $data);
$this->load->view('templates/footer');
}
function search_book_id() {	
$searchby = $this->input->post('searchby');
$key = $this->input->post('searchto');
if($searchby=='all'){$data['search_book'] = $this->booksearch_model->search_book_all($key);}
elseif($searchby=='author'){$data['search_book'] = $this->booksearch_model->search_book_author($key);}
elseif($searchby=='subject'){$data['search_book'] = $this->booksearch_model->search_book_subject($key);}
else{$data['search_book'] = $this->booksearch_model->search_book($searchby,$key);}
$this->load->view('templates/header',$data);
$this->load->view('library/booksearch', $data);
$this->load->view('templates/footer');
}
}
