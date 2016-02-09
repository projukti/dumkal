<!DOCTYPE html>
<!-- DO NOT EDIT OR CUT THE FOLLOWING UPTO BODY -->
<html lang="en">
<?php include('header.php');?>

<div class="container">
   <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/Edit_student_details/update_student_image" method="post" enctype="multipart/form-data" onsubmit="return validate_student_image()">
            <input type="hidden" name="category" value="<?php echo $edit[0]['stud_id'];?>">
           
            <fieldset>
                <legend><b style="font-size:26px;">Student Image</b></legend>
                <img <?php if($edit[0]['student_image'] == '') { ?>src="<?php echo base_url();?>assets/employee/img/blank_image.jpg"<?php } else { ?>src="<?php echo base_url();?>student_image/<?php echo $edit[0]['student_image'];?>" <?php } ?> width="140" height="130">
               <div class="input-group-inline">
                <label for="">Student Image</label>
                <input type="file" name="student_image" id="student_image">
            </div>
            
            <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>  
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/Edit_student_details/update_student_details" method="post" enctype="multipart/form-data" onsubmit="return validate_student()">
            <input type="hidden" name="category" value="<?php echo $edit[0]['stud_id'];?>">
           
            <fieldset>
                <legend><b style="font-size:26px;">Student Details</b></legend>
                <div class="input-group-inline">
                <label for="">Student ID</label>
                <input type="text" name="txt_id" id="txt_id" value="<?php echo $edit[0]['student_id'];?>"/>
            </div>
                <div class="input-group-inline">
                <label for="">Student Name</label>
                <input type="text" name="txt_name" id="txt_name" value="<?php echo $edit[0]['name'];?>" />
            </div>
            
            <div class="input-group-inline">
                <label for="">Stream</label>
                <input type="text" name="txt_stream" id="txt_stream" value="<?php echo $edit[0]['stream'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Roll No</label>
                <input type="text" name="txt_roll" id="txt_roll" value="<?php echo $edit[0]['roll'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 1</label>
                <input type="text" name="txt_sub1" id="txt_sub1" value="<?php echo $edit[0]['subject1'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 2</label>
                <input type="text" name="txt_sub2" id="txt_sub2" value="<?php echo $edit[0]['subject2'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 3</label>
                <input type="text" name="txt_sub3" id="txt_sub3" value="<?php echo $edit[0]['subject3'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Sex</label>
                <input type="text" name="txt_sex" id="txt_sex" value="<?php echo $edit[0]['sex'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Caste</label>
                <input type="text" name="txt_caste" id="txt_caste" value="<?php echo $edit[0]['caste'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Religion</label>
                <input type="text" name="txt_rlgn" id="txt_rlgn" value="<?php echo $edit[0]['religion'];?>" />
            </div>
            <div class="input-group-inline">
                <label for="">PH %</label>
                <input type="text" name="txt_ph" id="txt_ph" value="<?php echo $edit[0]['ph'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Date of Birth</label>
                <input type="text" name="txt_dob" id="txt_dob" value="<?php echo $edit[0]['dob'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Village</label>
                <input type="text" name="txt_vill" id="txt_vill" value="<?php echo $edit[0]['vill'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Post Office</label>
               <input type="text" name="txt_post" id="txt_post" value="<?php echo $edit[0]['po'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Police Station</label>
                <input type="text" name="txt_ps" id="txt_ps" value="<?php echo $edit[0]['ps'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">District</label>
                <input type="text" name="txt_dist" id="txt_dist" value="<?php echo $edit[0]['dist'];?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">State</label>
                <input type="text" name="txt_state" id="txt_state" value="<?php echo $edit[0]['state'];?>"/>
            </div>
            
            <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div>
   <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/Edit_student_details/update_student_signature" method="post" enctype="multipart/form-data" onsubmit="return validate_student_signature()">
            <input type="hidden" name="category" value="<?php echo $edit[0]['stud_id'];?>">
           
            <fieldset>
                <legend><b style="font-size:26px;">Student Signature</b></legend>
                <img <?php if($edit[0]['student_signature'] == '') { ?>src="<?php echo base_url();?>assets/employee/img/blank_image.jpg"<?php } else { ?>src="<?php echo base_url();?>student_image/<?php echo $edit[0]['student_signature'];?>" <?php } ?> width="140" height="130">
               <div class="input-group-inline">
                <label for="">Student Signature</label>
                <input type="file" name="student_signature" id="student_signature">
            </div>
            
            <button type="submit">Submit</button>
            </fieldset>
        </form>
    </div> 
</div>


<footer class="container">Powered by <a class="micro-link" href="http://projukti.info">Projukti</a>.</footer>



<!-- jQuery and Scripts -->
<script src="<?php echo base_url();?>assets/employee/plugins/jQuery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/employee/js/sweet-alert.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/employee/css/sweet-alert.css">
<script type="text/javascript">
function validate_student_image() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#student_image').val() == '') {
                                    errors.push('Please Select Student Image.'); 
                                    
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
function validate_student_signature() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#student_signature').val() == '') {
                                    errors.push('Please Select Student Signature.'); 
                                    
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
    function validate_student() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                    if ($('#txt_id').val() == '') {
                                    errors.push('Please Enter Your ID.'); 
                                    
                                }
                                if ($('#txt_name').val() == '') {
                                    errors.push('Please Enter Name'); 
                                    
                                }
                                if ($('#txt_stream').val() == '') {
                                    errors.push('Please Enter Your Stream'); 
                                    
                                } 
                                if ($('#txt_roll').val() == '') {
                                    errors.push('Please Select Your Roll No'); 
                                    
                                }
                                 if ($('#txt_sub1').val() == '') {
                                    errors.push('Please Enter Your Subject 1'); 
                                    
                                } 
                                if ($('#txt_sub2').val() == '') {
                                    errors.push('Please Enter Your Subject 2'); 
                                    
                                }   
                                if ($('#txt_sub3').val() == '') {
                                    errors.push('Please Enter Your Sebject 3'); 
                                    
                                }  
                                if ($('#txt_sex').val() == '') {
                                    errors.push('Please Enter Your Sex'); 
                                    
                                }  
                                if ($('#txt_caste').val() == '') {
                                    errors.push('Please Enter Your Caste'); 
                                    
                                }  
                               if ($('#txt_rlgn').val() == '') {
                                    errors.push('Please Enter Religion'); 
                                    
                                }
                                if ($('#txt_ph').val() == '') {
                                    errors.push('Please Enter Your PH %'); 
                                    
                                } 
                                if ($('#txt_dob').val() == '') {
                                    errors.push('Please Select Your Date of Birth'); 
                                    
                                }
                                 if ($('#txt_vill').val() == '') {
                                    errors.push('Please Enter Your Village'); 
                                    
                                } 
                                if ($('#txt_po').val() == '') {
                                    errors.push('Please Enter Your Post Office'); 
                                    
                                }   
                                if ($('#txt_ps').val() == '') {
                                    errors.push('Please Enter Your Police Station'); 
                                    
                                }  
                                if ($('#txt_dist').val() == '') {
                                    errors.push('Please Enter Your District'); 
                                    
                                }  
                                if ($('#txt_state').val() == '') {
                                    errors.push('Please Enter Your State'); 
                                    
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