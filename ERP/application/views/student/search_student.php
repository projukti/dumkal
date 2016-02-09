<!DOCTYPE html>
<!-- DO NOT EDIT OR CUT THE FOLLOWING UPTO BODY -->
<html lang="en">
<?php include('header.php');?>

<div class="container">
     <div class="row">
        
    </div>
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/Student_details/search_student" method="get" enctype="multipart/form-data">
            
           
            <fieldset>
                <legend><b style="font-size:26px;">Student Details</b></legend>
                <div class="input-group-inline">
                <div class="radio-group">
                <input type="radio" id="radio-opt-1" value="NA" name="student_type" checked ><label for="radio-opt-1">Current Student</label>
                <input type="radio" id="radio-opt-2" value="yes" name="student_type" ><label for="radio-opt-2">Former Student</label>
                </div>
                </div>
                <div class="input-group-inline">
                <label for="">Student ID</label>
                <input type="text" name="txt_id" id="txt_id"/>
            </div>
                <div class="input-group-inline">
                <label for="">Student Name</label>
                <input type="text" name="txt_name" id="txt_name" />
            </div>
            
            <div class="input-group-inline">
                <label for="">Stream</label>
                <select name="txt_stream" id="txt_stream">
                <option value="">-Select-</option>
                <?php foreach($data as $val) {?>
    <option value="<?php echo $val['stream_id'];?>"><?php echo $val['stream_name'];?></option>
    <?php } ?>
    
</select>
            </div>
            <div class="input-group-inline">
                <label for="">Roll No</label>
                <input type="text" name="txt_roll" id="txt_roll"/>
            </div>
            <div class="input-group-inline">
                <label for="">Reg No</label>
                <input type="text" name="txt_reg" id="txt_reg"/>
            </div>
            <div class="input-group-inline">
                <label for="">Year</label>
                <input type="text" name="txt_year" id="txt_year"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 1</label>
                <input type="text" name="txt_sub1" id="txt_sub1"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 2</label>
                <input type="text" name="txt_sub2" id="txt_sub2"/>
            </div>
            <div class="input-group-inline">
                <label for="">Subject 3</label>
                <input type="text" name="txt_sub3" id="txt_sub3"/>
            </div>
            <div class="input-group-inline">
                <label for="">Sex</label>
                <input type="text" name="txt_sex" id="txt_sex"/>
            </div>
            <div class="input-group-inline">
                <label for="">Caste</label>
                <input type="text" name="txt_caste" id="txt_caste"/>
            </div>
            
            <div class="input-group-inline">
                <label for="">PH %</label>
                <input type="text" name="txt_ph" id="txt_ph"/>
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
function student_type(id) {
    if(id == 1) {
        $('#radio-opt-1').val('');
        $('#radio-opt-2').val('yes');
    }
    else if(id == 2) {
        $('#radio-opt-2').val('yes');
        $('#radio-opt-1').val('');
    }

}
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