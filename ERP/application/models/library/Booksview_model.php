<?php
Class booksview_model extends CI_Model
{
public function record_count() {
return $this->db->count_all("tb_library_books");
}	
public function fetch_data($limit,$id,$start) {
$this->db->limit($limit,$start);
$this->db->select('tb_library_books.*');
$this->db->from('tb_library_books');
$query = $this->db->get();	
if ($query->num_rows() > 0) {
foreach ($query->result() as $row) {
$data[] = $row;
}
return $data;
}
return false;
}
function single_book_id($data){
$this->db->select('*');
$this->db->from('tb_library_books');
$this->db->where('id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
function updatebook($id,$data){
$this->db->where('id', $id);
$this->db->update('tb_library_books', $data);
}
function search_book_all($key){	
$condition = "sl_no LIKE '".$key."' OR acc_no='".$key."' OR classification_no LIKE '".$key."' OR subject1 LIKE '%".$key."%' OR subject2 LIKE '%".$key."%' OR subject3 LIKE '%".$key."%' OR subject4 LIKE '%".$key."%' OR title LIKE '%".$key."%' OR edition LIKE '%".$key."%' OR editor LIKE '%".$key."%' OR editor_by LIKE '%".$key."%' OR author1 LIKE '%".$key."%' OR author2 LIKE '%".$key."%' OR author3 LIKE '%".$key."%' OR series LIKE '%".$key."%' OR bibliographic_note LIKE '%".$key."%' OR note LIKE '%".$key."%' OR author_mark LIKE '%".$key."%' OR publisher LIKE '%".$key."%' OR date_of_publish LIKE '%".$key."%' OR place_of_publication LIKE '%".$key."%' OR price LIKE '".$key."' OR suppliers LIKE '%".$key."%' OR call_no LIKE '".$key."' OR isbn_no LIKE '".$key."' OR volume LIKE '%".$key."%' OR page_no LIKE '".$key."' OR bound LIKE '%".$key."%' OR fund_type LIKE '%".$key."%'OR type LIKE '%".$key."%' OR description LIKE '%".$key."%' OR additional LIKE '%".$key."%' OR status LIKE '%".$key."%' OR book_condition LIKE '%".$key."%'";
$this->db->select('*');
$this->db->from('tb_library_books');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
foreach ($query->result() as $row) {
$data[] = $row;
}
return $data;
}
return false;
}
function search_book_author($key){	
$condition = "author1 LIKE '%".$key."%' OR author2 LIKE '%".$key."%' OR author3 LIKE '%".$key."%'";
$this->db->select('*');
$this->db->from('tb_library_books');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
foreach ($query->result() as $row) {
$data[] = $row;
}
return $data;
}
return false;
}
function search_book_subject($key){	
$condition = "subject1 LIKE '%".$key."%' OR subject2 LIKE '%".$key."%' OR subject3 LIKE '%".$key."%' OR subject4 LIKE '%".$key."%'";
$this->db->select('*');
$this->db->from('tb_library_books');
$this->db->where($condition);
$query = $this->db->get();
if ($query->num_rows() > 0) {
foreach ($query->result() as $row) {
$data[] = $row;
}
return $data;
}
return false;
}
function search_book($searchby,$key){	
$condition = "$searchby LIKE '%".$key."%'";
$this->db->select('*');
$this->db->from('tb_library_books');
$this->db->where($condition);
$query = $this->db->get();//echo $this->db->last_query();
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