<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
function __construct()
 {
   parent::__construct();
   $this->load->model('library/books_model');
 }	

	public function index()
	{
		//I'm just using rand() function for data example
		//$new_barcode = $this->books_model->new_barcode();
//		$set_barcode=str_pad($new_barcode, 5, "0", STR_PAD_LEFT);
//		$this->set_barcode($set_barcode);
	}
	function show_barcode() {
		$new_barcode = $this->uri->segment(3);
		$this->set_barcode($new_barcode);
	}
	private function set_barcode($code)
	{
		//load library
		$this->load->library('zend');
		//load in folder Zend
		$this->zend->load('Zend/Barcode');
		//generate barcode
		//Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
		
		$barcodeOptions = array(
    'text' => $code, 
    'barHeight'=> 20, 
    'factor'=>1,
);


$rendererOptions = array();
$renderer = Zend_Barcode::factory(
    'code128', 'image', $barcodeOptions, $rendererOptions
)->render();
	}
	
}