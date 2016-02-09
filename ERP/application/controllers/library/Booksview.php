<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booksview extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('library/booksview_model');
   $this->load->model('library/books_model');
   $this->load->library('form_validation');
   $this->load->library('pagination');
 }

public function index()
{
if($this->session->userdata('logged_in'))
{			
$config = array();
$config["base_url"] = base_url() . "index.php/library/booksview/index";
$total_row = $this->booksview_model->record_count();
$config["total_rows"] = $total_row;
$config["per_page"] = 50;
$config['use_page_numbers'] = TRUE;
$config['num_links'] = $total_row;
//$config['cur_tag_open'] = '&nbsp;<a class="current">';
//$config['cur_tag_close'] = '</a>';
//$config['next_link'] = 'Next';
//$config['prev_link'] = 'Previous';
$config['full_tag_open'] = '<ul class="tsc_pagination">';
$config['full_tag_close'] = '</ul>';
$config['first_link'] = false;
$config['last_link'] = false;
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['prev_link'] = '&laquo';
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';
$config['next_link'] = '&raquo';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li><a href="#" class="current">';//this is active tab
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';

$this->pagination->initialize($config);
if($this->uri->segment(4)){
$page = ($this->uri->segment(4)) ;
$limit=$config["per_page"];
$start = ($page - 1) * $limit;
}
else{
$page = 1;
$start=0;
}
$data["results"] = $this->booksview_model->fetch_data($config["per_page"], $page,$start);
$data['links']  = $this->pagination->create_links();
//$str_links = $this->pagination->create_links();
//$data["links"] = explode('&nbsp;',$str_links );


// View data according to array.
     $this->load->view('templates/header',$data);
     $this->load->view('library/booksview', $data);
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
$data['single_book'] = $this->booksview_model->single_book_id($id);
$this->load->view('templates/header',$data);
$this->load->view('library/booksview', $data);
$this->load->view('templates/footer');
}
function copy_book_id() {
$data['new_acc_no'] = $this->books_model->new_acc_no();	
$id = $this->uri->segment(4);
$data['copy_book'] = $this->booksview_model->single_book_id($id);
$this->load->view('templates/header',$data);
$this->load->view('library/booksview', $data);
$this->load->view('templates/footer');
}
///////////////////////////Update Books/////////////////////////	
function update_book_id() {	
   $this->load->library('form_validation');
   $this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
   $this->form_validation->set_rules('acc_no', 'Accession No', 'required');
   $this->form_validation->set_rules('title', 'Title', 'required');
  
   if ($this->form_validation->run() == FALSE) {
$id= $this->input->post('id');
$data['single_book'] = $this->booksview_model->single_book_id($id);
$this->load->view('templates/header',$data);
$this->load->view('library/booksview', $data);
$this->load->view('templates/footer');
	   } 
   else {
$id= $this->input->post('id');   	   	
$data = array(
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
'call_no' => $this->input->post('classification_no')." ".$this->input->post('author_mark')." ".$this->input->post('acc_no'),
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
$this->booksview_model->updatebook($id,$data);
$this->session->set_flashdata('messageup', 'Data Updated Successfully.'); 
redirect('library/booksview', 'refresh');
}		
}
///////////////////////////Update Books/////////////////////////

function search_book_id() {	
$searchby = $this->input->post('searchby');
$key = $this->input->post('searchto');
if($searchby=='all'){$data['search_book'] = $this->booksview_model->search_book_all($key);}
elseif($searchby=='author'){$data['search_book'] = $this->booksview_model->search_book_author($key);}
elseif($searchby=='subject'){$data['search_book'] = $this->booksview_model->search_book_subject($key);}
else{$data['search_book'] = $this->booksview_model->search_book($searchby,$key);}
$this->load->view('templates/header',$data);
$this->load->view('library/booksview', $data);
$this->load->view('templates/footer');
}
}
