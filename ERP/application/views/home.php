<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!-- DO NOT EDIT OR CUT THE FOLLOWING UPTO BODY -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dumkal College- ERP</title>

    <!-- Fonts: Archer, Sentinel, Verlag -->
    <link rel="stylesheet" href="font/stylesheet.css"/>
    <!-- Icons -->
    <link rel="stylesheet" href="plugins/slicons/simple-line-icons.css">

    <!-- UI -->
    <link rel="stylesheet" href="plugins/CSS3%20UI%20Kit/css/style.css">
    <link rel="stylesheet" href="css/dash.css">

</head>
<body>
<img src="img/logo.png" alt="" class="img-center dash-logo">
<div class="dash-panel">
    <div class="dash-tile">
        <a href="#">
            <span class="icon2-graduation"></span>
            <strong>Manage Students</strong>
            <p>Edit student, Cancel admission, ID card generation, Branch change etc.</p>
        </a>
    </div>
    <div class="dash-tile">
        <a href="<?php echo base_url() . "index.php/login?a=2"; ?>">
            <span class="icon2-book-open"></span>
            <strong>Library</strong>
            <p>Complete books, journal management system.</p>
        </a>
    </div>
    <div class="dash-tile">
        <a href="#">
            <span class="icon2-users"></span>
            <strong>Manage Employee</strong>
            <p>Add, edit, delete employee and Payslip Generation etc.</p>
        </a>
    </div>
    <div class="dash-tile">
        <a href="#">
            <span class="icon2-credit-card"></span>
            <strong>Finance</strong>
            <p>Manage Income, expense, accounts etc.</p>
        </a>
    </div>
    <div class="dash-tile">
        <a href="#">
            <span class="icon2-bar-chart"></span>
            <strong>Reports</strong>
            <p>all reports,studentwise, streamwise,finance reports etc</p>
        </a>
    </div>
    <div class="dash-tile">
        <a href="#">
            <span class="icon2-settings"></span>
            <strong>Notice & Institution Settings</strong>
            <p>Create Notice & Add subjects,Manage Streams,Manage Institution profile, etc.</p>
        </a>
    </div>
</div>


<!-- jQuery and Scripts -->
<script src="plugins/jQuery/jquery-1.11.3.min.js"></script>
<script src="plugins/CSS3%20UI%20Kit/js/jquery-ui-1.8.18.custom.min.js"></script>
</body>
</html>