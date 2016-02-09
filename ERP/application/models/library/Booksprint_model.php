<?php
Class booksprint_model extends CI_Model
{
function search($from,$to){
$condition = "sl_no BETWEEN $from AND $to";
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
}
?>