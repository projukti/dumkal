<?php include('header.php');?>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/student_details/submit_registration_details" method="post" enctype="multipart/form-data" onsubmit="return validate_transfer()">
            
          <input type="hidden" name="txt_stud_id" value="<?php echo $transfer[0]['stud_id'];?>"> 
            <fieldset>
                <legend>Registration of <b style="color:red;"><?php echo $transfer[0]['name'];?></b></legend>
              <div class="input-group-inline">
                <label for="">Reg. Number</label>
                <input type="text" name="txt_number" id="reg_no">
            </div>
            <div class="input-group-inline">
                <label for="">Reg. year</label>
                <input type="text" name="txt_year" id="reg_year">
            </div>  
            <div class="input-group-inline">
                <label for="">Reg. Date</label>
                <input type="text" name="txt_date" id="datepicker">
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script type="text/javascript">
    function validate_transfer() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                if ($('#reg_no').val() == '') {
                                    errors.push('Please Enter Registration Number.'); 
                                    
                                }
                                if ($('#reg_year').val() == '') {
                                    errors.push('Please Enter Registration year.'); 
                                    
                                }
                                 if ($('#datepicker').val() == '') {
                                    errors.push('Please Select a Date.'); 
                                    
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