<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class excelreport extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
	public function index()
	{
    $this->load->library('excel');
    $result = $this->db->query('select acc_no as AccnNo,title as Title,publisher as Publsher,date_of_publish as  PublicationYear,call_no as CallNo,subject1 as Subject1,description as Description from tb_library_books');
    $this->excel->to_excel($result, 'fetch_data');

	}
}
?>
