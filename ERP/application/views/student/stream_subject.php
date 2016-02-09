<?php include('header.php');?>

<div class="container" style="margin:0 0 0 30%">
    
    <div class="row">
        <form name="emp_dtls" action="<?php echo base_url();?>index.php/student/student_details/submit_details" method="post" enctype="multipart/form-data" onsubmit="return validate_group()">
            
           
            <fieldset>
                <legend><b style="font-size:26px;">Subject Group</b></legend>
                <div class="input-group-inline">
                <label for="">Select Group</label>
                <select name="txt_group" id="txt_name">
                <option value="">Select a Group</option>
                <?php foreach($stream as $strm) { ?>
                    <option value="<?php echo $strm['stream_id'];?>"><?php echo $strm['stream_name'];?></option>
                <?php } ?>    
                   
                </select>
            </div>
            <div class="input-group-inline">
                <label for="">Subjects</label>
                <input type="text" name="txt_subject" id="subject"> (Use Comma Separated Value Only)
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
                <span>Subject Group: Group <?php echo $val['group_name'];?></span>
               
            </div>
            <div class="box">
                <span><?php echo $val['subjects'];?></span>
                
            </div>
            
            <div class="box-button">
               
                    <a href="<?php echo base_url();?>index.php/student/Student_details/delete_subject_group/<?php echo $val['grp_id'];?>"><button class="details">Delete</button></a>
                    
                    <a href="<?php echo base_url();?>index.php/student/Edit_student_details/edit_subject_group/<?php echo $val['grp_id'];?>"><button class="edit"><span class="icon2-pencil"></span></button></a>
                
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