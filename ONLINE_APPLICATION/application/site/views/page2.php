<?php include('header.php');?>
<body>
<!-- Body Loader -->
<div class="se-pre-con"></div>
<!-- Body Loader Ends -->
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" align="center" valign="middle" bgcolor="#333333"><span class="style1">Important : Use Google Chrome Browser only. To see the changes (if any) please press Control + F5 to refresh</span></td>
  </tr>
  <tr>
    <td height="150" align="center" valign="middle" bgcolor="#FFFFFF"><img src="<?php echo base_url();?>assets/images/logo_dumkalcollege.jpg" width="750" height="108" /></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><span class="style2"><span class="style3">&#x270d;</span><span class="style4">&nbsp;ONLINE APPLICATION PROCESS</span></span></td>
  </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="36" align="center" valign="middle" bgcolor="#FFFFFF"><span class="style19"><a href="<?php echo base_url();?>">&#10094;&#10094;&#10094;&nbsp;&nbsp;BACK TO PREVIOUS PAGE</a></span></td>
  </tr>
  <tr>
    <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF">
<form name="first_form" id="first_form" method="post" action="<?php echo base_url();?>index.php/Index/firstform_submit" enctype="multipart/form-data" onsubmit="return validate_first_form();">
    <input type="hidden" name="stream_id" value="<?php echo $data[0]['stream_id'];?>">
    <table width="722" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#000000"><span class="style5">STEP - 2 : <?php echo $data[0]['stream_name'];?> 2015-16</span></td>
      </tr>
      <tr>
        <td height="500" align="center" valign="middle" bgcolor="#EAEAEA"><table width="625" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="280" height="30" align="right" valign="middle"><span class="style20">Please choose your HONOURS Subject</span></td>
            <td width="37" height="30" align="center" valign="middle"><span class="style22">:</span></td>
            <td height="30" colspan="2" align="left" valign="middle">
            <select style="width:240px; height:30px; outline:none;" name="txt_honours_sub" id="txt_honours_sub">
              <option selected="selected" value="">Select Here</option>
              <?php foreach($subjects as $subject) {?>
              <option value="<?php echo $subject['subject_1'];?>"><?php echo $subject['subject_1'];?></option>
              <?php } ?>
            </select></td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle">&nbsp;</td>
            <td height="30" align="center" valign="middle"><span class="style23"></span></td>
            <td height="30" colspan="2" align="left" valign="middle"><span class="style20">Note : <a href="javascript:void(0);" onclick="popupCenter('<?php echo base_url();?>assets/terms.html', 'best window',450,450);">Check Honours Criteria</a></span></td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle"><span class="style20">Please choose your BOARD / COUNCIL</span></td>
            <td height="30" align="center" valign="middle"><span class="style23"><span class="style22">:</span></span></td>
            <td height="30" colspan="2" align="left" valign="middle">
            <select name="txt_board" id="txt_board" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="01">West Bengal Council of Higher Secondary Education (WBCHSE)</option>
	<option value="02">Central Board of Secondary Education (CBSE), Delhi</option>
	<option value="03">Council for Indian School Certificate Examinations (ISCE), New Delhi</option>
	<option value="04">National Institute of Open Schooling (formerly National Open School), New Delhi</option>
	<option value="05">Gujrat Secondary &amp; Higher Secondary Education Board, Gandhinagar</option>
	<option value="06">Hariyana Board of Education, Hansi Road, Bhiwani</option>
	<option value="07">Himachal Pradesh Board of School Education, Dharmasala</option>
	<option value="08">J &amp; K State Board of School Education, Jammu</option>
	<option value="09">Karnataka Secondary Education Examination Board, Bangalore</option>
	<option value="10">Goa Board of Secondary and Higher Secondary Education</option>
	<option value="11">Kerala Board of Higher Secondary Education, Thiruvananthapuram</option>
	<option value="12">Maharashtra State Board of Secondary &amp; Higher Secondary Education, Pune</option>
	<option value="13">Madhya Pradesh Board of Secondary Education, Bhopal</option>
	<option value="14">Manipur Council of Higher Secondary Education, Imphal</option>
	<option value="15">Orissa Council of Higher Secondary Education, Bhubaneswar</option>
	<option value="16">Rajasthan Board of Secondary Education, Ajmer</option>
	<option value="17">Kerala Board of Higher Secondary Education</option>
	<option value="18">Tamilnadu Board of Higher Secondary Education, Chennai.</option>
	<option value="19">Board of Secondary Education, Madhya Pradesh</option>
	<option value="20">Tripura Board of Secondary Education, Agartala, Tripura West</option>
	<option value="21">U.P. Board of High School &amp; Intermediate Education, Allahabad</option>
	<option value="22">Rabindra Mukta Vidyalaya (W. B. State Open School)</option>
	<option value="23">West Bengal Board of Madrasha Education</option>
	<option value="24">Bihar Intermediate Education Council, Patna</option>
	<option value="25">Andhra Pradesh Board of Secondary Education, Hyderabad</option>
	<option value="26">Assam Higher Secondary Education Council, Bamunimaidan, Guwahati</option>

                        </select></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td height="20" align="center" valign="middle"><span class="style23"></span></td>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle"><span class="style20">Last Exam Passed</span></td>
            <td height="30" align="center" valign="middle"><span class="style23"><span class="style22">:</span></span></td>
            <td height="30" colspan="2" align="left" valign="middle">
            <select name="txt_last_exam" id="txt_last_exam" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="HS">Higher Secondary</option>
              <option value="ISC">ISC</option>
              
                        </select></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td height="20" align="center" valign="middle"><span class="style23"></span></td>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle"><span class="style20">Please choose your 10+2 Stream</span></td>
            <td height="30" align="center" valign="middle"><span class="style23"><span class="style22">:</span></span></td>
            <td height="30" colspan="2" align="left" valign="middle">
            <select name="txt_stream" id="txt_stream" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="Arts">Arts</option>
              <option value="Science">Science</option>
              <option value="Commerce">Commerce</option>
                        </select></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td height="20" align="center" valign="middle"><span class="style23"></span></td>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle"><span class="style20">Please choose your Caste Category</span></td>
            <td height="30" align="center" valign="middle"><span class="style22">:</span></td>
            <td height="30" colspan="2" align="left" valign="middle">
            <select name="txt_cast" id="txt_cast" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="General">General</option>
              <option value="SC">SC</option>
              <option value="ST">ST</option>
              <option value="OBC-A">OBC-A</option>
              <option value="OBC-B">OBC-B</option>
                        </select></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td height="20" align="center" valign="middle">&nbsp;</td>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle"><span class="style20">Honours or related subject marks in 10+2</span></td>
            <td height="30" align="center" valign="middle"><span class="style22">:</span></td>
            <td height="30" colspan="2" align="left" valign="middle"><input name="txt_marks" id="txt_marks" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
         <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td height="20" align="center" valign="middle">&nbsp;</td>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle"><span class="style20">Year of Passing</span></td>
            <td height="30" align="center" valign="middle"><span class="style22">:</span></td>
            <td height="30" colspan="2" align="left" valign="middle"><select name="txt_passing_year" id="txt_passing_year" style="width:240px; height:30px; outline:none;">
              <option selected="selected">Select Here</option>
              <option value="<?php echo date("Y",strtotime("+1 year"));?>"><?php echo date("Y",strtotime("+1 year"));?></option>
              <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
              <option value="<?php echo date("Y",strtotime("-1 year"));?>"><?php echo date("Y",strtotime("-1 year"));?></option>
                        </select></td>
          </tr>
         
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td height="20" align="center" valign="middle">&nbsp;</td>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td height="30" align="right" valign="middle">&nbsp;</td>
            <td height="30" align="center" valign="middle">&nbsp;</td>
            <td width="81" height="30" align="left" valign="middle"><input name="Reset" type="button" value="Reset" style="outline:none; background-color:#00CCFF; border:1px solid #0099FF; height:28px; width:60px; cursor:pointer;" onClick="this.form.reset()"/></td>
            <td width="227" align="left" valign="middle"><input name="Submit" type="submit" value="Proceed to Next Step" style="outline:none; background-color:#00CC66; border:1px solid #009966; height:28px; width:160px; cursor:pointer;" /></td>
          </tr>

         
        </table>

        </td>
      </tr>
      

    </table></form></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <?php include('footer.php');?>
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
                                if ($('#txt_ph').val() == 'YES') {
                                if ($('#txt_honours_sub').val() == '') {
                                    errors.push('Please Select Honours Subject.'); 
                                    
                                }
                                if ($('#txt_board').val() == '') {
                                    errors.push('Please Select Your Last Academic Board'); 
                                    
                                }
                                if ($('#txt_last_exam').val() == '') {
                                    errors.push('Please Select your Last Exam Passed.'); 
                                    
                                }
                                if ($('#txt_stream').val() == '') {
                                    errors.push('Please Select Your HS Stream.'); 
                                    
                                }
                                if ($('#txt_cast').val() == '') {
                                    errors.push('Please Select Your Caste'); 
                                    
                                }
                                if ($('#txt_marks').val() == '') {
                                    errors.push('Please Enter Your HS Marks.'); 
                                    
                                }
                                 if ($('#txt_passing_year').val() == '') {
                                    errors.push('Please Select Your Passing Year.'); 
                                    
                                }
                                
                              } else {

                                if ($('#txt_honours_sub').val() == '') {
                                    errors.push('Please Select Honours Subject.'); 
                                    
                                }
                                if ($('#txt_board').val() == '') {
                                    errors.push('Please Select Your Last Academic Board'); 
                                    
                                }
                                if ($('#txt_last_exam').val() == '') {
                                    errors.push('Please Select your Last Exam Passed.'); 
                                    
                                }
                                if ($('#txt_stream').val() == '') {
                                    errors.push('Please Select Your HS Stream.'); 
                                    
                                }
                                if ($('#txt_cast').val() == '') {
                                    errors.push('Please Select Your Caste'); 
                                    
                                }
                                if ($('#txt_marks').val() == '') {
                                    errors.push('Please Enter Your HS Marks.'); 
                                    
                                }
                                if ($('#txt_passing_year').val() == '') {
                                    errors.push('Please Select Your Passing Year.'); 
                                    
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
<script>
function popupCenter(url, title, w, h) {
var left = (screen.width/2)-(w/2);
var top = (screen.height/2)-(h/2);
return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
} 


</script>