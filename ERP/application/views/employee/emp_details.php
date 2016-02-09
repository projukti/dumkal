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
    <button><a href="<?php echo base_url()?>index.php/welcome/logout"><span class="icon2-power"></span><br>Logout</a></button>
    <div class="logo"><img src="<?php echo base_url();?>img/logo-wide.png" alt=""></div>
    
</header>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="employee_details/submit_details" method="post" enctype="multipart/form-data" onsubmit="return validate_employees()">
            
           
            <fieldset>
                <legend><b style="font-size:26px;">Employee Details</b></legend>
                <div class="input-group-inline">
                <label for="">Employee Name</label>
                <input type="text" name="txt_name" id="txt_name" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee Email</label>
                <input type="text" name="txt_email" id="txt_email" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee Phone</label>
                <input type="text" name="txt_phn" id="txt_phn" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee Alternate Phone</label>
                <input type="text" name="txt_alt_phn" id="txt_alt_phn" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee Address</label>
                <textarea rows="10" cols="30" name="txt_address" id="txt_address"></textarea>
            </div>
            <div class="input-group-inline">
                <label for="">Employee Country</label>
                <input type="text" name="txt_country" id="txt_country" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee State</label>
                <input type="text" name="txt_state" id="txt_state" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee City</label>
                <input type="text" name="txt_city" id="txt_city" />
            </div>
            <div class="input-group-inline">
                <label for="">Employee's Zip Code</label>
                <input type="text" name="txt_pin" id="txt_pin" />
            </div>
            <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
    
</div>

<div class="container">
    <div class="row-full">
        
            <?php foreach($data as $val) {?>
            <div class="list-item">
            
            <div class="box">
                <span>Name: <?php echo $val['name'];?></span>
                <span>Phone: <?php echo $val['phone'];?></span>
                <span>Email: <?php echo $val['email'];?></span>
            </div>
            <div class="box">
                <span>Alternate Phone: <?php echo $val['alt_phone'];?></span>
                <span>Country: <?php echo $val['country'];?></span>
                <span>State: <?php echo $val['state'];?></span>
            </div>
            <div class="box">
                <span>City: <?php echo $val['city'];?></span>
                <span>Zip: <?php echo $val['zip'];?></span>
                <span>Address: <?php echo $val['address'];?></span>
            </div>
            <div class="box-button">
               
                    <a href="employee_details/delete/<?php echo $val['id'];?>"><button class="details">Delete</button></a>
                    
                    <a href="employee_details/edit/<?php echo $val['id'];?>"><button class="edit"><span class="icon2-pencil"></span></button></a>
                
            </div>
        </div>
            <?php } ?>
        
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
                                    errors.push('Please Enter Your Name.'); 
                                    
                                }
                                if ($('#txt_email').val() == '') {
                                    errors.push('Please Enter Email'); 
                                    
                                }
                                if ($('#txt_phn').val() == '') {
                                    errors.push('Please Enter Your Phone Number'); 
                                    
                                } 
                                if ($('#txt_alt_phn').val() == '') {
                                    errors.push('Please Select Your Alternate Phone Number'); 
                                    
                                }
                                 if ($('#txt_address').val() == '') {
                                    errors.push('Please Enter Your Address'); 
                                    
                                } 
                                if ($('#txt_country').val() == '') {
                                    errors.push('Please Enter Your City'); 
                                    
                                }   
                                if ($('#txt_state').val() == '') {
                                    errors.push('Please Enter Your State'); 
                                    
                                }  
                                if ($('#txt_city').val() == '') {
                                    errors.push('Please Enter Your City'); 
                                    
                                }  
                                if ($('#txt_pin').val() == '') {
                                    errors.push('Please Enter Your Zip Code'); 
                                    
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