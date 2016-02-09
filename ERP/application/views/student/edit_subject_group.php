<?php include('header.php');?>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/Edit_student_details/update_group_details" method="post" enctype="multipart/form-data" onsubmit="return validate_group()">
            
           <input type="hidden" name="category" value="<?php echo $edit_data[0]['grp_id'];?>">
            <fieldset>
                <legend><b style="font-size:26px;">Subject Group</b></legend>
                <div class="input-group-inline">
                <label for="">Select Group</label>
                <select name="txt_group" id="txt_name">
                <option value="">Select a Group</option>
                    <option value="1" <?php if($edit_data[0]['group_name'] == 1) { ?> selected <?php }?>>Group 1</option>
                    <option value="2" <?php if($edit_data[0]['group_name'] == 2) { ?> selected <?php }?>>Group 2</option>
                    <option value="3" <?php if($edit_data[0]['group_name'] == 3) { ?> selected <?php }?>>Group 3</option>
                    <option value="4" <?php if($edit_data[0]['group_name'] == 4) { ?> selected <?php }?>>Group 4</option>
                    <option value="5" <?php if($edit_data[0]['group_name'] == 5) { ?> selected <?php }?>>Group 5</option>
                    <option value="6" <?php if($edit_data[0]['group_name'] == 6) { ?> selected <?php }?>>Group 6</option>
                    <option value="7" <?php if($edit_data[0]['group_name'] == 7) { ?> selected <?php }?>>Group 7</option>
                    <option value="8" <?php if($edit_data[0]['group_name'] == 8) { ?> selected <?php }?>>Group 8</option>
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Subjects</label>
                <input type="text" name="txt_subject" id="subject" value="<?php echo $edit_data[0]['subjects'];?>"> (Use Comma Separated Value Only)
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
    function validate_group() {
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
                                    errors.push('Please Select a Group.'); 
                                    
                                }
                                if ($('#subject').val() == '') {
                                    errors.push('Please Enter Subjects'); 
                                    
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