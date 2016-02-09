<?php include('header.php');
function get_url()
{
    $CI =& get_instance();

    $url = $CI->config->site_url($CI->uri->uri_string());
    return $_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url;
}
?>
<div class="title_head">Former Student Details</div><hr />
<div class="container">
<div class="row">
</div>
    

<div class="container">
    <div class="row-full">
        
            <?php $i=1; foreach($students as $sval) {
                // echo 'SELECT * FROM td_student_stream WHERE stream_id ='.$sval['stream'];
                 $stream = $this->db->query('SELECT * FROM td_student_stream WHERE stream_id ='.$sval['stream'])->result_array();
                $subjects = $this->db->query('SELECT * FROM td_subject_group WHERE stream_id ='.$sval['stream'])->result_array();
                ?>
            <div class="list-item">
            
            <div class="box">
                <span>Name: <?php echo $sval['name'];?></span>
               
            </div>
            <div class="box">
                <span>Student Id: <?php echo $sval['student_id'];?></span>
                
            </div>
            <div class="box">
                <span>Roll: <?php echo $sval['roll'];?></span>
                
            </div>
            <div class="box">
                <span>Stream: <b id="st_name_<?php echo $sval['stud_id'];?>"><?php echo $stream[0]['stream_name'];?></b><a href="javascript:void(0);" onclick="st_plan(<?php echo $i;?>);" style="color:red;" id="strm_pln_<?php echo $i;?>">&nbsp;&nbsp;<b id="toggle_<?php echo $i;?>">Change</b></a></span>
                <div class='change_plan' id="stream_plan_<?php echo $i;?>" style=' display: none; width:260px;'>
                 <ul>
                 <?php foreach($data as $val_stm) {?>
                 <li class='first_plan'><input type='radio' name='change_plan' onclick='update_stream(<?php echo $val_stm['stream_id'];?>,<?php echo $sval['stud_id'];?>,"<?php echo $val_stm['stream_name'];?>");'><?php echo $val_stm['stream_name'];?><div class='clear'></div></li>
                <?php } ?>
                </ul>
              </div>
            </div>
            <div class="box">
                <span>Subject 1: <b id="sub_name1_<?php echo $sval['stud_id'];?>"><?php echo urldecode($sval['subject1']);?></b>&nbsp;&nbsp;<a href="javascript:void(0);" style="color:red;" id="chng_sub1_<?php echo $sval['stud_id'];?>" style="display:block;" onclick="change_subjects(1,<?php echo $sval['stud_id'];?>)">Change</a>
                    <select name="txt_sub1" id="txt_sub1_<?php echo $sval['stud_id'];?>" onchange="get_subject1(this.value,1,<?php echo $sval['stud_id'];?>)" style="display:none;">
                <option value="">-Select-</option>
                <?php foreach($subjects as $sub_list){?> 
    <option value="<?php echo $sub_list['subject_1'];?>"><?php echo $sub_list['subject_1'];?></option>
    <?php } ?>
    
</select>
                </span>
                
            </div>
            <div class="box">
                <span>Subject 2: <b id="sub_name2_<?php echo $sval['stud_id'];?>"><?php echo urldecode($sval['subject2']);?></b>&nbsp;&nbsp;<a href="javascript:void(0);" style="color:red;" id="chng_sub2_<?php echo $sval['stud_id'];?>" style="display:none;" onclick="change_subjects(2,<?php echo $sval['stud_id'];?>)">Change</a>

                <select name="txt_minor" id="txt_sub2_<?php echo $sval['stud_id'];?>" onchange="get_subject1(this.value,2,<?php echo $sval['stud_id'];?>)" style="display:none;">
                <option value="">-Select-</option>
                <?php foreach($subjects as $sub_list){?> 
    <option value="<?php echo $sub_list['subject_2'];?>"><?php echo $sub_list['subject_2'];?></option>
    <?php } ?>
    
</select></span>
                
            </div>
            <div class="box">
                <span>Subject 3: <b id="sub_name3_<?php echo $sval['stud_id'];?>"><?php echo urldecode($sval['subject3']);?></b>&nbsp;&nbsp;<a href="javascript:void(0);" style="color:red;" id="chng_sub3_<?php echo $sval['stud_id'];?>" style="display:none;" onclick="change_subjects(3,<?php echo $sval['stud_id'];?>)">Change</a>
                    <select name="txt_minor" id="txt_sub3_<?php echo $sval['stud_id'];?>" onchange="get_subject1(this.value,3,<?php echo $sval['stud_id'];?>)" style="display:none;">
                <option value="">-Select-</option>
                <?php foreach($subjects as $sub_list){?> 
    <option value="<?php echo $sub_list['subject_3'];?>"><?php echo $sub_list['subject_3'];?></option>
    <?php } ?>
    
</select>
                </span>
                
            </div>
            <div class="box">
                <span>Year: <b id="year_<?php echo $sval['stud_id'];?>"><?php echo $sval['year'];?></b>&nbsp;&nbsp;<a href="javascript:void(0);" onclick="upgrade(<?php echo $sval['year'];?>,<?php echo $sval['stud_id'];?>)" style="color:red;" id="upgrade_year_<?php echo $sval['stud_id'];?>">Upgrade</a>&nbsp;&nbsp;<a href="javascript:void(0);" onclick="degrade(<?php echo $sval['year'];?>,<?php echo $sval['stud_id'];?>)" style="color:red;" id="downgrade_year_<?php echo $sval['stud_id'];?>">Degrade</a></span>
                
            </div>
            <div class="box-button">
                    <a href="<?php echo base_url();?>index.php/student/Student_details/transfer_student/<?php echo $sval['stud_id'];?>"><button class="details">Transfer</button></a>
                    <a href="<?php echo base_url();?>index.php/student/Student_details/delete_student/<?php echo $sval['stud_id'];?>"><button class="details">Delete</button></a>
                    <br/>
                    <a href="<?php echo base_url();?>index.php/student/Edit_student_details/edit_student/<?php echo $sval['stud_id'];?>"><button class="edit"><span class="icon2-pencil"></span></button></a>
                    <a href="<?php echo base_url();?>index.php/student/student_details/student_profile/<?php echo $sval['stud_id'];?>"><button class="details">Profile</button></a>
                
            </div>
        </div>
            <?php $i++; } ?>
        
    </div>

</div>
<?php echo $res;?>
<footer class="container">Powered by <a class="micro-link" href="http://projukti.info">Projukti</a>.</footer>
 <script>
function st_plan(a){
    //alert(a);
    $('#stream_plan_'+a).fadeIn();
    $('#toggle_'+a).html('Close');
    $("#strm_pln_"+a).attr('onclick', 'st_plan1('+a+')')
}  

function st_plan1(b){
    //alert(b);
    $('#stream_plan_'+b).fadeOut();
    $('#toggle_'+b).html('Change');
    $("#strm_pln_"+b).attr('onclick', 'st_plan('+b+')')
}  
function update_stream(st_id,sid,st_name) {
$.ajax({
    type:'POST',
    url:'http://localhost/dumkal/ERP/index.php/student/Student_details/stream_update/'+st_id+'/'+sid,
    data:'stream_id='+st_id+'&stud_id='+sid,
    success: function(data){
         var res = data.split("|");
         if(res[0] == 'ok') {
             window.location.href="<?php echo get_url();?>";
         } 
    }
});
} 

function upgrade(year, st_id){
    //alert(b);
    var yr = +year + 1;
if(yr == 2 || yr == 3) {
   $.ajax({
    type:'POST',
    url:'http://localhost/dumkal/ERP/index.php/student/Student_details/year_upgrade/'+yr+'/'+st_id,
    data:'year='+yr+'&stud_id='+st_id,
    success: function(data){
         var res = data.split("|");
         if(res[0] == 'ok') {
            $('#year_'+st_id).html(yr);
            $('#upgrade_year_'+st_id).attr('onclick','upgrade('+yr+','+st_id+')');
            $('#downgrade_year_'+st_id).attr('onclick','degrade('+yr+','+st_id+')');
            // window.location.href="<?php echo base_url().'index.php/student/student_details/student_data';?>";
         } 
    }
});
}
else {
    alert('You can not upgrade year more than 3');
}
} 

function degrade(year, st_id){
    //alert(b);
    var yr = +year - 1;
if(yr == 2 || yr == 1) {
   $.ajax({
    type:'POST',
    url:'http://localhost/dumkal/ERP/index.php/student/Student_details/year_upgrade/'+yr+'/'+st_id,
    data:'year='+yr+'&stud_id='+st_id,
    success: function(data){
         var res = data.split("|");
         if(res[0] == 'ok') {
             $('#year_'+st_id).html(yr);
             $('#downgrade_year_'+st_id).attr('onclick','degrade('+yr+','+st_id+')');
             $('#upgrade_year_'+st_id).attr('onclick','upgrade('+yr+','+st_id+')');
            // window.location.href="<?php echo base_url().'index.php/student/student_details/student_data';?>";
         } 
    }
});
}
else {
    alert('You can not Degarde year less than 1');
}
} 

function get_subject1(b,c,d){
    
    $.ajax({
    type:'POST',
    url:'http://localhost/dumkal/ERP/index.php/student/Student_details/subject_upgrade/'+encodeURIComponent(b)+'/'+c+'/'+d,
    data:'subject='+b+'&subid='+c+'&stud_id='+d,
    success: function(data){
         var res = data.split("|");
         if(res[0] == 'ok') {
            if( c==1) {
                $('#sub_name1_'+d).html(b);
            }
            else if( c==2) {
                $('#sub_name2_'+d).html(b);
            }
            else if( c==3) {
                $('#sub_name3_'+d).html(b);
            }
            //window.location.href="<?php echo base_url().'index.php/student/student_details/student_data';?>";
         } 
    }
});
}

function change_subjects(no,id) {

if(no == 1) {
    $('#txt_sub1_'+id).css('display','block');
}
else if(no == 2) {
    $('#txt_sub2_'+id).css('display','block');
}
else if(no == 3) {
    $('#txt_sub3_'+id).css('display','block');
}
}     
</script>


<!-- jQuery and Scripts -->
<script src="<?php echo base_url();?>assets/employee/plugins/jQuery/jquery-1.11.3.min.js"></script>
<script src="<?php echo base_url();?>plugins/CSS3%20UI%20Kit/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="<?php echo base_url();?>assets/employee/js/sweet-alert.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/employee/css/sweet-alert.css">
  <style type="text/css">
.change_plan {
    border: 1px solid #999;
    box-shadow: 0 0 5px #aaa;
    font-size: 15px;
    margin: 10px 0;
    padding: 10px;
    -webkit-transition: all 2s;
    transition: all 2s;
}
  </style>
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
function get_subject() {
      var head1 = $('#txt_minor').val();
      // alert(head1);
  if(head1 == 2 || head1 == 4 || head1 == 6) {
  $.ajax({
    type:'POST',
    url:'http://localhost/dumkal/ERP/index.php/student/Student_details/get_subject',
    data:'head_ids='+head1,
    success: function(data){
         var res = data.split("|");
         $('#subj_details').css('display','block');
      $('#subj').html(res[1]);
     
    }

});
}
}         
</script>
</body>
</html>