<?php include('header.php');?>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/student_details/submit_transfer_details" method="post" enctype="multipart/form-data" onsubmit="return validate_transfer()">
            
          <input type="hidden" name="txt_stud_id" value="<?php echo $transfer[0]['stud_id'];?>"> 
            <fieldset>
                <legend><b style="font-size:26px;">Student Transfer</b></legend>
              <div class="input-group-inline">
                <label for="">Transfer Reason</label>
                <textarea rows="10" cols="30" name="txt_trans" id="transfer"></textarea>
            </div>  
            <div class="input-group-inline">
                <label for="">Date</label>
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
                                
                                if ($('#transfer').val() == '') {
                                    errors.push('Please Enter Transfer Reason.'); 
                                    
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