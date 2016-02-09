<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
function Index(){

    //if i remove this parent::__construct(); the error is gone
    parent::CI_Controller(); 
    $this->load->view('index');
}
	
}
