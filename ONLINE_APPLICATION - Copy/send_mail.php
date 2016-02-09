<?php
$product = $_REQUEST['txt_product'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$title = $_REQUEST['title'];
$msg = $_REQUEST['msg'];

 $to="sourav.projukti@gmail.com";
 $subject="Someone has posted an enquiry from Akash Ganga";

 $message = '<table align="center" width="700" style="border:outset #B1F05E;">
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;">Below are the Details of the enquiry:</td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Name : '.$name.'</span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Email : '.$email.'</span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Title : '.$title.'</span></td>
  </tr>
  <tr>
    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"></span><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> Message : '.$msg.'</span></td>
  </tr>
  
 </table>';

 $headers = "From: salesaakashganga1994@gmail.com\r\nReply-To: salesaakashganga1994@gmail.com";
 $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1";
 // send email
 mail($to, $subject, $message, $headers);
 echo 'ok|';
?>


