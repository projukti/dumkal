<?php
Class books_model extends CI_Model
{
function insertbook($data){
$this->db->insert('tb_library_books', $data);
}		
function book_count_st() {
$res = $this->db->query("select sl_no from tb_library_books order by id DESC limit 1");
if($res->num_rows() > 0) {
$book=$res->row();	
$rn= $book->sl_no+1;
return $rn;
}else{
$rn=1;
return $rn;
}
}
function new_acc_no() {
$res = $this->db->query("select acc_no from tb_library_books order by id DESC limit 1");
if($res->num_rows() > 0) {
$book=$res->row();	
$rn= $book->acc_no+1;
return $rn;
}else{
$rn=1;
return $rn;
}
}
function old_acc_no() {
$res = $this->db->query("select acc_no from tb_library_books order by id DESC limit 1");
if($res->num_rows() > 0) {
$book=$res->row();	
$rn= $book->acc_no;
return $rn;
}else{
$rn=1;
return $rn;
}
}
}
?>