<!DOCTYPE html>
<!-- DO NOT EDIT OR CUT THE FOLLOWING UPTO BODY -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dumkal College- ERP</title>

    <!-- Fonts: Archer, Sentinel, Verlag -->
    <link rel="stylesheet" href="<?php echo base_url();?>font/stylesheet.css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/slicons/simple-line-icons.css">

    <!-- UI -->
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/css/default-style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/ui.css">
    
<!-----------------------------datepicker-------------------->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>codebase/dhtmlxcalendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>codebase/skins/dhtmlxcalendar_dhx_skyblue.css">
<script src="<?php echo base_url();?>codebase/dhtmlxcalendar.js"></script>
<style>
#calendar,
#calendar2,
#calendar3 {
border: 1px solid #909090;
font-family: Tahoma;
font-size: 12px;
}
</style>
<script>
var myCalendar;
function doOnLoad() {
myCalendar = new dhtmlXCalendarObject(["calendar","calendar2","calendar3"]);
}
</script>
<!-----------------------------datepicker-------------------->

</head>
<body onload="doOnLoad();">
<header class="container">
    <button><a href="<?php echo base_url()?>index.php/welcome/logout"><span class="icon2-power"></span><br>Logout</a></button>
    <div class="logo"><img src="<?php echo base_url();?>img/logo-wide.png" alt=""></div>
    <nav>
        <ul>
            <?php /*?><li><a href="<?php echo base_url();?>index.php/library/home">Search & Issue Book</a></li><?php */?>
            <li><a href="<?php echo base_url();?>index.php/library/books">Add Books</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/booksview">View Book</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/booksprint">Search & Print</a></li>
            <?php /*?><li><a href="<?php echo base_url();?>index.php/library/renew">Renew Book</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/returnbook">Return Book</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/settings">Settings</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/issuelog">Log</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/fine">Fine Details</a></li>
            <li><a href="<?php echo base_url();?>index.php/library/requistion">Requisition Details</a></li><?php */?>
        </ul>
    </nav>
</header>