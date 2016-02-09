<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institution_details extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->model('base_model');
}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$category['data'] = $this->base_model->show_data('td_institution_details','*','')->result_array();
		$this->load->view('institution/institution_details',$category);
	
	}
	public function notice(){
		$category['data'] = $this->base_model->show_data('td_institution_notice','*','')->result_array();
		$this->load->view('institution/notice',$category);
	
	}
	public function edit($id){
		$category['edit_data'] = $this->db->query('SELECT * FROM td_institution_details WHERE insti_id='.$id)->result_array();

		$this->load->view('institution/edit_institution_details',$category);
	
	}
	public function delete($cst_id)
	{
	
		$customer['delete_data']=$this->db->query("delete from td_institution_details where insti_id = '".$cst_id."'");
		redirect(base_url().'index.php/institution/institution_details');
		
	}
	public function notice_delete($cst_id)
	{
	
		$customer['delete_data']=$this->db->query("delete from td_institution_notice where nid = '".$cst_id."'");
		redirect(base_url().'index.php/institution/institution_details/notice');
		
	}
	public function notice_edit($cst_id)
	{
	
		$category['edit_data'] = $this->db->query('SELECT * FROM td_institution_notice WHERE nid='.$cst_id)->result_array();

		$this->load->view('institution/edit_notice',$category);
		
	}
	public function submit_details()
	{
		$name = $this->input->post('txt_name');
		$phn = $this->input->post('txt_phn');
		$email = $this->input->post('txt_email');
		$imge = $_FILES["logo"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["logo"]["tmp_name"];
		$add = $this->input->post('txt_address');
		$p_name = $this->input->post('txt_p_name');
		$imge1 = $_FILES["p_file"]["name"];
		$exp1 = explode('.',$imge1);
		$image1 = $exp1[0].time().'.'.$exp1[1];
		$temp1 = $_FILES["p_file"]["tmp_name"];
		$imge2 = $_FILES["l_file"]["name"];
		$exp2 = explode('.',$imge2);
		$image2 = $exp2[0].time().'.'.$exp2[1];
		$temp2 = $_FILES["l_file"]["tmp_name"];
		
		$fields = array(
			'name' => $name,
			'logo' => $image,
			'address' => $add,
			'phone' => $phn,
			'email' => $email,
			'princi_name' => $p_name,
			'princi_signature' => $image1,
			'libra_signature' => $image2,
		);
		
		$service = $this->base_model->form_post('td_institution_details',$fields);
		if($service)
		{
		$this->base_model->logo_file_upload($image,$temp);
		$this->base_model->princi_file_upload($image1,$temp1);
		$this->base_model->library_file_upload($image2,$temp2);
		$category['data'] = $this->base_model->show_data('td_institution_details','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details');
		
		
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details');
		}
		
		
	}

	public function update_details()
	{
		$category = $this->input->post('category');

		$name = $this->input->post('txt_name');
		$phn = $this->input->post('txt_phn');
		$email = $this->input->post('txt_email');
		$add = $this->input->post('txt_address');
		$p_name = $this->input->post('txt_p_name');
		$fields = array(
			'name' => $name,
			'address' => $add,
			'phone' => $phn,
			'email' => $email,
			'princi_name' => $p_name,
		);
		$service = $this->base_model->institute_update('td_institution_details',$fields,$category);
		
		if($service)
		{
		$category['data'] = $this->base_model->show_data('td_employee_details','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details');
		}
		
		
	}
	public function update_logo_details()
	{	$category = $this->input->post('category');
		$imge = $_FILES["logo"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["logo"]["tmp_name"];
		$fields = array(
			'logo' => $image,
		);
		$service = $this->base_model->institute_update('td_institution_details',$fields,$category);
		if($service)
		{
		$this->base_model->logo_file_upload($image,$temp);
		$category['data'] = $this->base_model->show_data('td_institution_details','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details');
		}	
	}

	public function update_psig_details()
	{	$category = $this->input->post('category');
		$imge = $_FILES["p_file"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["p_file"]["tmp_name"];
		$fields = array(
			'princi_signature' => $image,
		);
		$service = $this->base_model->institute_update('td_institution_details',$fields,$category);
		if($service)
		{
		$this->base_model->princi_file_upload($image,$temp);
		$category['data'] = $this->base_model->show_data('td_institution_details','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details');
		}	
	}

	public function update_lsig_details()
	{	$category = $this->input->post('category');
		$imge = $_FILES["l_file"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["l_file"]["tmp_name"];
		$fields = array(
			'libra_signature' => $image,
		);
		$service = $this->base_model->institute_update('td_institution_details',$fields,$category);
		if($service)
		{
		$this->base_model->library_file_upload($image,$temp);
		$category['data'] = $this->base_model->show_data('td_institution_details','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details');
		}	
	}

	public function notice_details()
	{
		$name = $this->input->post('txt_name');
		$add = $this->input->post('txt_address');
		$imge1 = $_FILES["p_file"]["name"];
		$exp1 = explode('.',$imge1);
		$image1 = $exp1[0].time().'.'.$exp1[1];
		$temp1 = $_FILES["p_file"]["tmp_name"];
		
		$fields = array(
			'title' => $name,
			'content' => $add,
			'signature' => $image1,
		);
		
		$service = $this->base_model->form_post('td_institution_notice',$fields);
		if($service)
		{
		$this->base_model->notice_file_upload($image1,$temp1);
		
		$category['data'] = $this->base_model->show_data('td_institution_notice','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details/notice');
		
		
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details/notice');
		}
		
		
	}
	public function notice_update_details()
	{
		$category = $this->input->post('category');
		$name = $this->input->post('txt_name');
		$add = $this->input->post('txt_address');
		$fields = array(
			'title' => $name,
			'content' => $add,
		);
		$service = $this->base_model->notice_update('td_institution_notice',$fields,$category);
		
		if($service)
		{
		$category['data'] = $this->base_model->show_data('td_institution_notice','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details/notice');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details/notice');
		}
		
		
	}
	public function update_signature_details()
	{	$category = $this->input->post('category');
		$imge = $_FILES["logo"]["name"];
		$exp = explode('.',$imge);
		$image = $exp[0].time().'.'.$exp[1];
		$temp = $_FILES["logo"]["tmp_name"];
		$fields = array(
			'signature' => $image,
		);
		$service = $this->base_model->notice_update('td_institution_notice',$fields,$category);
		if($service)
		{
		$this->base_model->notice_file_upload($image,$temp);
		$category['data'] = $this->base_model->show_data('td_institution_notice','*','')->result_array();
		redirect(base_url().'index.php/institution/institution_details/notice');
		}
		else {
			$category['msg'] = 'Sorry ! Category was not successfully Inserted';
			redirect(base_url().'index.php/institution/institution_details/notice');
		}	
	}
}
