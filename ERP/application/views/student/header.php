<!DOCTYPE html>
<!-- DO NOT EDIT OR CUT THE FOLLOWING UPTO BODY -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>iLib</title>

    <!-- Fonts: Archer, Sentinel, Verlag -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/employee/font/stylesheet.css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/employee/plugins/slicons/simple-line-icons.css">

    <!-- UI -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/employee/plugins/CSS3%20UI%20Kit/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/employee/plugins/CSS3%20UI%20Kit/css/default-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/employee/css/ui.css">
<style type="text/css">
    .title_head
{
text-align:left;
margin-left:10px;
color:#333333;
font-family:Verdana, Geneva, sans-serif;
font-weight:bold;
font-size:18px;
}
.msg_text
{
text-align:left;
margin-left:10px;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
color:#00A800;
font-weight:bold;
font-size:14px;
}
.msg_text_err
{
text-align:left;
margin-left:10px;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
color:#FF0000;
font-weight:bold;
font-size:14px;
}
    
</style>
</head>
<body>
<header class="container">
    <button><a href="<?php echo base_url()?>index.php/welcome/logout"><span class="icon2-power"></span><br>Logout</a></button>
    <div class="logo"><img src="<?php echo base_url();?>img/logo-wide.png" alt=""></div>
    <nav>
        <ul>
            <li><a href="<?php echo base_url().'index.php/student/student_details';?>">Subject Groups</a></li>
            <li><a href="<?php echo base_url().'index.php/student/student_details/session';?>">Session</a></li>
            <!-- <li><a href="<?php echo base_url().'index.php/student/student_details/stream_subject';?>">Stream / Subject</a></li> -->
           <li><a href="<?php echo base_url().'index.php/student/student_details/student_data';?>">Student Details</a></li>
           <li><a href="<?php echo base_url().'index.php/student/student_details/search_student_data';?>">Search Student</a></li>
           <li><a href="<?php echo base_url().'index.php/student/student_details/former_student_data';?>">Former Student</a></li>
           <li><a href="<?php echo base_url().'index.php/student/student_details/university_registration';?>">University Registration</a></li>
        </ul>
    </nav>
</header>