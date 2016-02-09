<?php
 class base_model extends CI_Model {
   function __construct() {
        parent::__construct();
        
    }
    
    function form_post($table,$fields)
    {
        if($this->db->insert($table,$fields)){
		return true;
		}
		
    }
	 function form_update($table,$fields,$category)
    {
	
	$this->db->where('category', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
		}
		
    }
    function file_upload($img,$tmp)
    {
        $image_path = 'service/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function excel_file_upload($img,$tmp)
    {
        $image_path = 'student/excel/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function logo_file_upload($img,$tmp)
    {
        $image_path = 'institute/logo/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function princi_file_upload($img,$tmp)
    {
        $image_path = 'institute/princi_sig/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
	 function library_file_upload($img,$tmp)
    {
        $image_path = 'institute/library_sig/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
	 function notice_file_upload($img,$tmp)
    {
        $image_path = 'notice/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
     function gnews_file_upload($img,$tmp)
    {
        $image_path = 'news/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
    function sponsor_file_upload($img,$tmp)
    {
        $image_path = 'sponsor/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
    function album_file_upload($img,$tmp)
    {
        $image_path = 'album/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function album_image_upload($img,$tmp)
    {
        $image_path = 'album/images/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
    function slider_file_upload($img,$tmp)
    {
        $image_path = 'slider/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
	function subcategory_file_upload($img,$tmp)
    {
        $image_path = 'subcategory/';
		if(move_uploaded_file($tmp,$image_path.$img))
		return true;
    }
    function student_file_upload($img,$tmp)
    {
        $image_path = 'student_image/';
        if(move_uploaded_file($tmp,$image_path.$img))
        return true;
    }
	 function show_data($table,$fields,$condition)
    {
       if(!empty($condition))
	   {
			$this->db->where($condition);
	   }
	   $this->db->select($fields);
	   $var = $this->db->get($table);
	   return $var;
		
    }
    function category_update($table,$fields,$category)
    {
	
	$this->db->where('id', $category);
	if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
		return true;
		}
		
    }
    function student_update($table,$fields,$category)
    {
    
    $this->db->where('stud_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
    function institute_update($table,$fields,$category)
    {
    
    $this->db->where('insti_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
    function notice_update($table,$fields,$category)
    {
    
    $this->db->where('nid', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
    function group_update($table,$fields,$category)
    {
    
    $this->db->where('grp_id', $category);
    if($this->db->update($table,$fields)){
        //if($this->db->insert($table,$fields)){
        return true;
        }
        
    }
	
}

?>