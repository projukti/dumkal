<?php
Class login_model extends CI_Model
{
 function login($username, $password, $type)
 {
  
   $this -> db -> select('*');
   $this -> db -> from('tb_user');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> where('access_level',$type);
   //$this -> db -> where('access_level', $access);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
   
   //echo $this->db->last_query();exit();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 function session()
 {
   $this -> db -> select('*');
   $this -> db -> from('tb_session');
   $this -> db -> where('active', 1);
   $query = $this -> db -> get(); 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
function std_result($access)
{
$condition = "access_level ='".$access."'";
$this->db->select('*');
$this->db->from('tb_user');
$this->db->where($condition);
$query = $this->db->get();
$this->db->last_query();
if ($query->num_rows() > 0) {
foreach ($query->result() as $row) {
$data[] = $row;
}
return $data;
}
return false;	
}
}
?>