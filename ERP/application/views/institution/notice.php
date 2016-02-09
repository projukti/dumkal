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
    <nav>
        <ul>
            <li><a href="<?php echo base_url().'index.php/institution/institution_details';?>">Manage Institute</a></li>
            <li><a href="<?php echo base_url().'index.php/institution/institution_details/notice';?>">Manage Notice</a></li>
           
        </ul>
    </nav>
</header>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url().'index.php/institution/institution_details/notice_details';?>" method="post" enctype="multipart/form-data" onsubmit="return validate_notice()">
            
           
            <fieldset>
                <legend><b style="font-size:26px;">NoticeDetails</b></legend>
                <div class="input-group-inline">
                <label for="">Notice Subject</label>
                <input type="text" name="txt_name" id="txt_name" />
            </div>
            <div class="input-group-inline">
                <label for="">Notice Body</label>
                <textarea rows="10" cols="30" name="txt_address" id="txt_address"></textarea>
            </div>
            
             <div class="input-group-inline">
                <label for="">Signature</label>
                <input type="file" name="p_file" id="p_file">
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
                <span>Name: <?php echo $val['title'];?></span>
                <span></span>
                <span></span>
            </div>
            <div class="box">
                <span>Content:</span>
                <span><?php echo $val['content'];?></span>
                <span></span>
            </div>
            <div class="box">
                 <span>Signature : </span>
                <span><img src="<?php echo base_url();?>notice/<?php echo $val['signature'];?>" width="120" height="120"/></span>
                 <span></span>
            </div>
            
            <div class="box-button">
               
                    <a href="<?php echo base_url();?>index.php/institution/institution_details/notice_delete/<?php echo $val['nid'];?>"><button class="details">Delete</button></a>
                    
                    <a href="<?php echo base_url();?>index.php/institution/institution_details/notice_edit/<?php echo $val['nid'];?>"><button class="edit"><span class="icon2-pencil"></span></button></a>
                
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
    function validate_notice() {
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
                                
                                if ($('#p_file').val() == '') {
                                    errors.push('Please Select Signature'); 
                                    
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