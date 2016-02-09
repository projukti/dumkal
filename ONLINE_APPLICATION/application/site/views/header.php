<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dumkal College - UG Online Application Process</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="<?php echo base_url();?>assets/js/sweet-alert.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sweet-alert.css">
<link id="ui-theme" rel="stylesheet" type="text/css"
          href="http://code.jquery.com/ui/1.10.0/themes/ui-lightness/jquery-ui.css"/>

    <link rel="stylesheet" type="text/css"
          href="http://pontikis.github.com/jui_alert/v2.0.0/jquery.jui_alert.css"/>

    <link rel="stylesheet"
          href="/labs/jui_alert/demo/index.css">

    <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.min.js"
            type="text/javascript"></script>

    <script src="http://pontikis.github.com/jui_alert/v2.0.0/jquery.jui_alert.min.js"
            type="text/javascript"></script>

    <script src="http://pontikis.github.com/jui_alert/v2.0.0/i18n/en.js"
            type="text/javascript"></script>

<script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	function sMsg(subject) {
$("#user_message3").jui_alert({
			containerClass: "container3 ui-widget",
			message: "You have selected "+subject+" For the application to Dumkal College",
			timeout: 1200,
			messageAreaClass: "jui_alert_message_area ui-state-error ui-corner-all",
			messageIconClass: "jui_alert_icon ui-icon ui-icon-alert"
		});
}
function cMsg(course) {
$("#user_message2").jui_alert({
			containerClass: "container3 ui-widget",
			message: "You have Applied for "+course+" For the application to Dumkal College",
			timeout: 1200,
			messageAreaClass: "jui_alert_message_area ui-state-error ui-corner-all",
			messageIconClass: "jui_alert_icon ui-icon ui-icon-alert"
		});
}

function caste(caste) {
$("#user_message1").jui_alert({
			containerClass: "container3 ui-widget",
			message: "You have selected "+caste+" as your Caste For the application to Dumkal College",
			timeout: 1200,
			messageAreaClass: "jui_alert_message_area ui-state-error ui-corner-all",
			messageIconClass: "jui_alert_icon ui-icon ui-icon-alert"
		});
}
function board(brd) {
$("#user_message4").jui_alert({
			containerClass: "container3 ui-widget",
			message: "You have selected "+brd+" as your Last Board For the application to Dumkal College",
			timeout: 1200,
			messageAreaClass: "jui_alert_message_area ui-state-error ui-corner-all",
			messageIconClass: "jui_alert_icon ui-icon ui-icon-alert"
		});
}
function get_sub(sub) {
$('#subject_name').val(sub);	
sMsg(sub);
}

function cancel() {
     $('#txt_course option').prop('selected', function() {
        return this.defaultSelected;
    });
     $('.overlay').css('display','none');
}

function h_sub_marks() {
   var phys_mark = $('#txt_phys').val();
   var math_mark = $('#txt_math').val();
   if( (phys_mark != '') && (math_mark != '')) {
   if( (phys_mark >=30) && (math_mark >= 30)) {
   $("#txt_course").val('B.Sc Honours');
   do_job();
} else {
    $('#txt_course option').prop('selected', function() {
        return this.defaultSelected;
    });
    do_job1();
}
} 
}
function do_job() {
     $('.overlay')
    .show({duration: 0, queue: true})
    .delay(2000)
    .hide({duration: 0, queue: true});
    $('#div_msg2').css('display','none');
    $('#div_msg').css('display','block');
    sub_list('B.Sc Honours');
}
function do_job1() {
     $('.overlay')
    .show({duration: 0, queue: true})
    .delay(2000)
    .hide({duration: 0, queue: true});
    $('#div_msg2').css('display','block');
    $('#div_msg').css('display','none');
    
}
function visible_vocational(cdval) {
if(cdval == 'B.Sc Honours' || cdval == 'B.A Honours' || cdval == 'B.Com Honours') {
    $('#txt_voc_id').css('display','none');
} else {
    $('#txt_voc_id').css('display','block');
}
}
function get_course(course) {
$('#course_name').val(course);
cMsg(course);
if( course == 'B.Sc Honours' || course == 'B.Sc Gen') {
    //alert(course);
$('#txt_phys').val('');
$('#txt_math').val('');
 $('#div_msg2').css('display','none');
    $('#div_msg').css('display','none');
    $('.overlay').css('display','block');
    $('#txt_voc_id').css('display','none');
}
else {
    $('#txt_voc_id').css('display','block');
  sub_list(course);  
}
}
function get_caste(cst) {
$('#caste_name').val(cst);
caste(cst);
}
function get_board(brd) {
board(brd);
if(brd == 'Other'){
	$('.show_other').css('display','table-row')
} else {
	$('.show_other').css('display','none')
}
}
function get_ph(ph) {
if(ph == 1) {
$('.show_ph').css('display','table-row');
$('#ph_data').val(ph)
} else if(ph == 0) {
$('.show_ph').css('display','none');
$('#ph_data').val(ph);
}
}	

function b_subject1(s_name) {
$('#drop_subject1').val(s_name);
subject_check();
}
function b_subject2(s_name2) {
$('#drop_subject2').val(s_name2);
subject_check(s_name2,2);
}
function b_subject3(s_name3) {
$('#drop_subject3').val(s_name3);
subject_check(s_name3,3);
}
function b_subject4(s_name4) {
$('#drop_subject4').val(s_name4);
subject_check(s_name4,4);
}	
function b_subject5(s_name5) {
$('#drop_subject5').val(s_name5);
subject_check(s_name5,5);
}
function b_subject6(s_name6) {
$('#drop_subject6').val(s_name6);
subject_check(s_name6,6);
}
function subject_check(check_duplicate,count) {
var data1 = $('#drop_subject2').val();
var data2 = $('#drop_subject3').val();
var data3 = $('#drop_subject4').val();
var data4 = $('#drop_subject5').val();
var data5 = $('#drop_subject6').val();
if(( check_duplicate == data1 && count !=2) || (check_duplicate == data2 && count !=3) || (check_duplicate == data3 && count !=4) || (check_duplicate == data4 && count !=5) || (check_duplicate == data5 && count !=6)) {
$('#show_al_msg').css('display','block');
 $('#sib_'+count+' option').prop('selected', function() {
        return this.defaultSelected;
       
    });
//$('#sib_'+count).selectedIndex = -1;

} else {
	 $('#show_al_msg').css('display','none');
}
}

function sub_list(sname) {
  
    // die;
  $.ajax({
    type:'POST',
    url:'<?php echo base_url();?>subject_list.php',
    data:'head_id='+sname,
    success: function(data){
        $('#lazy_load')
    .show({duration: 0, queue: true})
    .delay(2000)
    .hide({duration: 0, queue: true});
        $('.head_rows1').css('display','table-cell');
      $('.head_rows').html(data);
    }

});
}
function geo_validate(dval) {
if( dval == 'g1') {
    $('.hide_panel').css('display','block');
} else {
   $('.overlay').css('display','none'); 
   sub_list('B.Sc Honours');
}
}

</script>
 <script>
  $(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
   
  });
  </script>

<script type="text/javascript">
    function validate_first_form() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                if ($('.txt_ph').val() == 1) {
                                if ($('.txt_sub').val() == '') {
                                    errors.push('Please Select Honours Subject.'); 
                                    
                                }
                                if ($('.txt_course').val() == '') {
                                    errors.push('Please Select Your Course'); 
                                    
                                }
                                if ($('.txt_caste').val() == '') {
                                    errors.push('Please Select your Caste.'); 
                                    
                                }
                               
                                if ($('.txt_board').val() == '') {
                                    errors.push('Please Select Your Board'); 
                                    
                                }
                                if ($('#txt_hon_marks').val() == '') {
                                    errors.push('Please Enter Your Honours Marks.'); 
                                    
                                }
                                if ($('#txt_subject_1').val() == '') {
                                    errors.push('Please Enter your subject 1 marks'); 
                                    
                                }
                                if ($('#txt_subject_2').val() == '') {
                                    errors.push('Please Enter your subject 2 marks'); 
                                    
                                }
                                if ($('#txt_subject_3').val() == '') {
                                    errors.push('Please Enter your subject 3 marks'); 
                                    
                                }
                                if ($('#txt_subject_4').val() == '') {
                                    errors.push('Please Enter your subject 4 marks'); 
                                    
                                }
                                if ($('#txt_subject_5').val() == '') {
                                    errors.push('Please Enter your subject 5 marks'); 
                                    
                                }
                                 if ($('#txt_hs_marks').val() == '') {
                                    errors.push('Please Enter your 10+2 marks'); 
                                    
                                }
                                if ($('#sib_2').val() == '') {
                                    errors.push('Please Select your subject Two'); 
                                    
                                }
                                if ($('#sib_3').val() == '') {
                                    errors.push('Please Select your subject Three'); 
                                    
                                }
                                if ($('#sib_4').val() == '') {
                                    errors.push('Please Select your subject four'); 
                                    
                                }
                                if ($('#sib_5').val() == '') {
                                    errors.push('Please Select your subject five'); 
                                    
                                }

                              } else {

                                  if ($('.txt_sub').val() == '') {
                                    errors.push('Please Select Honours Subject.'); 
                                    
                                }
                                if ($('.txt_course').val() == '') {
                                    errors.push('Please Select Your Course'); 
                                    
                                }
                                if ($('.txt_caste').val() == '') {
                                    errors.push('Please Select your Caste.'); 
                                    
                                }
                                 if ($('.txt_ph').val() == '') {
                                    errors.push('Please Check If you are physically handicraft.'); 
                                    
                                }
                                if ($('#txt_ph_score').val() == '') {
                                    errors.push('Please Enter your PH Score.'); 
                                    
                                }
                                if ($('.txt_board').val() == '') {
                                    errors.push('Please Select Your Board'); 
                                    
                                }
                                if ($('#txt_hon_marks').val() == '') {
                                    errors.push('Please Enter Your Honours Marks.'); 
                                    
                                }
                                if ($('#txt_subject_1').val() == '') {
                                    errors.push('Please Enter your subject 1 marks'); 
                                    
                                }
                                if ($('#txt_subject_2').val() == '') {
                                    errors.push('Please Enter your subject 2 marks'); 
                                    
                                }
                                if ($('#txt_subject_3').val() == '') {
                                    errors.push('Please Enter your subject 3 marks'); 
                                    
                                }
                                if ($('#txt_subject_4').val() == '') {
                                    errors.push('Please Enter your subject 4 marks'); 
                                    
                                }
                                if ($('#txt_subject_5').val() == '') {
                                    errors.push('Please Enter your subject 5 marks'); 
                                    
                                }
                                 if ($('#txt_hs_marks').val() == '') {
                                    errors.push('Please Enter your 10+2 marks'); 
                                    
                                }
                                if ($('#sib_2').val() == '') {
                                    errors.push('Please Select your subject Two'); 
                                    
                                }
                                if ($('#sib_3').val() == '') {
                                    errors.push('Please Select your subject Three'); 
                                    
                                }
                                if ($('#sib_4').val() == '') {
                                    errors.push('Please Select your subject four'); 
                                    
                                }
                                if ($('#sib_5').val() == '') {
                                    errors.push('Please Select your subject five'); 
                                    
                                }
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
<style type="text/css">
#lazy_load {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: white;
    z-index: 1001;
    -moz-opacity: 0.8;
    opacity: .90;
    filter: alpha(opacity=80);
}
.cvvhelp {
    border: medium none;
    display: none;
    height: auto;
    left: 50%;
    margin: 0 0 0 -155px;
    padding: 0;
    position: fixed;
    text-align: left;
    top: 50%;
    width: auto;
    z-index: 1002;
}
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(http://localhost/dumkal/ONLINE_APPLICATION/assets/images/pattern.png);
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-size: 12px;
}
.style2 {
	font-size: 36px;
	color: #000000;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style3 {font-size:32px; border:2px solid #000000; padding:0px 3px 0px 3px; background-color:#000000; color:#FFFFFF;}
.style4 {font-size: 32px; border:2px solid #000000; padding:0px 8px 0px 3px; background-color:#666666; color:#FFFFFF;}
.style5 {
	color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}

a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style18 {color: #000000; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
.style19 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FF0000;
}
-->
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(http://localhost/dumkal/ONLINE_APPLICATION/assets/images/496.GIF) center no-repeat #fff;
}
.heart {
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    color: red;
    padding: 0;
    margin: 0;
}
.pulse2 {
    -webkit-animation: pulse2 1s linear infinite;
    -moz-animation: pulse2 1s linear infinite;
    -ms-animation: pulse2 1s linear infinite;
    animation: pulse2 1s linear infinite;
}

@keyframes "pulse2" {
 0% {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
 }
 50% {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -o-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
 }
 100% {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
 }

}

@-moz-keyframes pulse2 {
 0% {
   -moz-transform: scale(1.1);
   transform: scale(1.1);
 }
 50% {
   -moz-transform: scale(0.8);
   transform: scale(0.8);
 }
 100% {
   -moz-transform: scale(1);
   transform: scale(1);
 }

}

@-webkit-keyframes "pulse2" {
 0% {
   -webkit-transform: scale(1.1);
   transform: scale(1.1);
 }
 50% {
   -webkit-transform: scale(0.8);
   transform: scale(0.8);
 }
 100% {
   -webkit-transform: scale(1);
   transform: scale(1);
 }

}

@-ms-keyframes "pulse2" {
 0% {
   -ms-transform: scale(1.1);
   transform: scale(1.1);
 }
 50% {
   -ms-transform: scale(0.8);
   transform: scale(0.8);
 }
 100% {
   -ms-transform: scale(1);
   transform: scale(1);
 }
</style></head>