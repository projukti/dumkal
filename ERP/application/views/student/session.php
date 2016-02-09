<?php include('header.php');?>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/student_details/submit_session_details" method="post" enctype="multipart/form-data" onsubmit="return validate_session()">
            
           
            <fieldset>
                <legend><b style="font-size:26px;">Session</b></legend>
                
            <div class="input-group-inline">
                <label for="">Session</label>
                <input type="text" name="txt_session" id="session">
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
                <span>Session: <?php echo $val['session'];?></span>
               
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
    function validate_session() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                
                                if ($('#session').val() == '') {
                                    errors.push('Please Enter a Session.'); 
                                    
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