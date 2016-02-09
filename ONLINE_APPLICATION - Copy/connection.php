<?php 
$host = 'localhost';
$uname = 'root';
$pass = '';
$db = 'db_akash_ganga';
$con = mysql_connect($host,$uname,$pass) or die(mysql_error());
mysql_select_db($db,$con) or die(mysql_error());
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection ='utf8_general_ci'");
?>