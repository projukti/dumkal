<?php
$host = 'localhost';
$uname = 'root';
$pass = '';
$db = 'dumkalco_dbdumkal';
$con = mysql_connect($host,$uname,$pass) or die(mysql_error());
mysql_select_db($db,$con) or die(mysql_error());

$tr = $_REQUEST['head_id'];
$q = 'SELECT * FROM td_student_stream WHERE stream_name = "'.$tr.'"';
$qs = mysql_query($q, $con) or die(mysql_error());
$qdata = mysql_fetch_assoc($qs);

$st = 'SELECT * FROM td_subject_group WHERE stream_id = "'.$qdata['stream_id'].'"';
$st_q = mysql_query($st, $con) or die(mysql_error());
$SubList_data = mysql_fetch_assoc($st_q);

$st1 = 'SELECT * FROM td_subject_group WHERE stream_id = "'.$qdata['stream_id'].'"';
$st_q1 = mysql_query($st1, $con) or die(mysql_error());
$SubList_data1 = mysql_fetch_assoc($st_q1);

$st2 = 'SELECT * FROM td_subject_group WHERE stream_id = "'.$qdata['stream_id'].'"';
$st_q2 = mysql_query($st2, $con) or die(mysql_error());
$SubList_data2 = mysql_fetch_assoc($st_q2);
$i=1; 
  echo '<select style="width:29% !important;" class="sub_sub">';
        do {
          echo 
            '<option>'.$SubList_data['subject_1'].'</option>';
          } while($SubList_data = mysql_fetch_assoc($st_q)) ;
         echo '</select>
          </td>
        <td style="padding:5px;">
                    <select style="width:29% !important;" class="sub_sub">';
        do {
            echo '<option>'.$SubList_data1['subject_2'].'</option>';
          } while($SubList_data1 = mysql_fetch_assoc($st_q1));  
          echo '</select>
                </td>
        <td style="padding:5px;">
                    <select style="width:29% !important;" class="sub_sub">';
        do {
            echo '<option>'.$SubList_data2['subject_3'].'</option>';
          } while($SubList_data2 = mysql_fetch_assoc($st_q2));  
         echo '</select>';



?>