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

</head>
<body>
<header class="container">
    <button><span class="icon2-power"></span><br>Logout</button>
    <div class="logo"><img src="<?php echo base_url();?>img/logo-wide.png" alt=""></div>
    <nav>
        <ul>
            <li><a href="<?php echo base_url().'index.php/institution/institution_details';?>">Manage Institute</a></li>
            <li><a href="<?php echo base_url().'index.php/institution/institution_details/notice';?>">Manage Notice</a></li>
           
        </ul>
    </nav>
</header>

<div class="container">
    <div class="row">
        <form name="insti_dtls" action="<?php echo base_url();?>index.php/institution/institution_details/update_signature_details" method="post" enctype="multipart/form-data" onsubmit="return validate_logo()">
            <input type="hidden" name="category" value="<?php echo $edit_data[0]['nid'];?>">
           
            <fieldset>
                <legend><b style="font-size:26px;">Signature Details</b></legend>
                <div class="input-group-inline">
                <label for="">Uploaded Signature</label>
                <img src="<?php echo base_url();?>notice/<?php echo $edit_data[0]['signature'];?>" width="120" height="120"/>
                <input type="file" name="logo" id="logo">
            </div>
            
           
            <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/institution/institution_details/notice_update_details" method="post" enctype="multipart/form-data" onsubmit="return validate_employees()">
            <input type="hidden" name="category" value="<?php echo $edit_data[0]['nid'];?>">
           
            <fieldset>
                <legend><b style="font-size:26px;">Notice Details</b></legend>
                <div class="input-group-inline">
                <label for="">Name</label>
                <input type="text" name="txt_name" id="txt_name" value="<?php echo $edit_data[0]['title'];?>" />
            </div>
           
            <div class="input-group-inline">
                <label for="">Address</label>
                <textarea rows="10" cols="30" name="txt_address" id="txt_address"><?php echo $edit_data[0]['content'];?></textarea>
            </div>
           
            <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
     
<div class="row">
        
    </div>
   
</div>


<footer class="container">Powered by <a class="micro-link" href="http://projukti.info">Projukti</a>.</footer>



<!-- jQuery and Scripts -->
<script src="<?php echo base_url();?>assets/employee/plugins/jQuery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/employee/js/sweet-alert.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/employee/css/sweet-alert.css">
<script type="text/javascript">
    function validate_employees() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#txt_name').val() == '') {
                                    errors.push('Please Enter Notice Subject.'); 
                                    
                                }
                                
                                 if ($('#txt_address').val() == '') {
                                    errors.push('Please Enter Notice Body'); 
                                    
                                } 
                                
                               
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_p_sig() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#p_file').val() == '') {
                                    errors.push('Please Select Principal Signature.'); 
                                    
                                }
                               
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_l_sig() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#l_file').val() == '') {
                                    errors.push('Please Select Librarian Signature.'); 
                                    
                                }
                               
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_logo() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#logo').val() == '') {
                                    errors.push('Please Select Signature.'); 
                                    
                                }
                               
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
</script>
</body>
</html>