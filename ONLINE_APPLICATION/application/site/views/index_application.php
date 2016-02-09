 <?php include('header.php');?>
<body>
<!-- Body Loader -->
<div class="se-pre-con"></div>

<!-- Body Loader Ends -->
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  
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
    <td bgcolor="#FFFFFF" align="center">
    	<img src="<?php echo base_url();?>assets/images/timeout.jpg" width="125"/><br /><br />
      	<p style="width:100%; float:left; text-align:center; font-size:26px; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; color:#CE2727">Application process is over. Please contact us for further details. </p>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" align="center">
    	<p class="contact" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">Dumkal college, Basantapur<br />
Murshidabad, West Bengal<br />
Pin - 742406</p>
		<p class="contact"style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">(03481) 230770 </p>

		<p class="contact"style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif;">dumkalcollege@gmail.com</p><br />
        
    </td>
  </tr>
  <!-- <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><table width="396" border="2" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#000000"><span class="style5">STEP - 1 : CHOOSE STREAM</span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#84E9F4"><span class="style18"><a href="<?php echo base_url();?>index.php/Index/step1/2">Application to B.A. Honours</a></span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#84E9F4"><span class="style18"><a href="<?php echo base_url();?>index.php/Index/step1/6">Application to B.Sc Honours</a></span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#84E9F4"><span class="style18"><a href="<?php echo base_url();?>index.php/Index/step1/4">Application to B.Com Honours</a></span></td>
      </tr>
      <tr>
        <td height="18" align="center" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#FEB385"><span class="style18"><a href="<?php echo base_url();?>index.php/Index/step1/1">Application to B.A. General</a></span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#FEB385"><span class="style18"><a href="<?php echo base_url();?>index.php/Index/step1/5">Application to B.Sc General</a></span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#FEB385"><span class="style18"><a href="<?php echo base_url();?>index.php/Index/step1/3">Application to B.Com General</a></span></td>
      </tr>
      <tr>
        <td height="18" align="center" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#66CC66"><span class="style18"><a href="#">Application to B.A. General with Geography</a></span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#66CC66"><span class="style18"><a href="#">Application to B.A. General with Physical Education</a></span></td>
      </tr>
      <tr>
        <td height="18" align="center" valign="middle" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#000000"><span class="style5">Please Check After Application</span></td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" bgcolor="#FFCC66" class="style18"><a href="download_applicationform.html" target="_blank">Download Application Form and Payment Slip</a></td>
      </tr>
      

    </table></td>
  </tr> -->
  
  <?php include('footer.php');?>
  <script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function get_honours(marks) {
$('#hs_marks').val(marks);
}

function get_eligibility(){
  var crsc = $('#course_name').val();
  var cst_name = $('#caste_name').val();
if( crsc == 'B.A Honours') {
  if(cst_name == 'Gen' || cst_name == 'OBC A' || cst_name == 'OBC B'){
    var hsMarks = $('#hs_marks').val();
    var bestFive = $('#best_f_marks').val();
    //alert(bestFive);
     if(hsMarks < 45) {
      if(bestFive > 274){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 45 && hsMarks < 55) {
      if(bestFive >= 250){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 55) {
      if(bestFive >= 225){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }
   
  } else {
      var hsMarks = $('#hs_marks').val();
    var bestFive = $('#best_f_marks').val();
    //alert(bestFive);
     if(hsMarks < 40) {
      if(bestFive > 249){
        $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 40 && hsMarks < 50) {
      if(bestFive >= 225){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 50) {
      if(bestFive >= 200){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }
  }
} 
else if(crsc == 'B.Sc Honours'){
  if(cst_name == 'Gen' || cst_name == 'OBC A' || cst_name == 'OBC B'){
     var hsMarks = $('#hs_marks').val();
    var bestFive = $('#best_f_marks').val();
    //alert(bestFive);
     if(hsMarks < 45) {
      if(bestFive > 274){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 45 && hsMarks < 55) {
      if(bestFive >= 250){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 55) {
      if(bestFive >= 225){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }
    
  } else {
      var hsMarks = $('#hs_marks').val();
    var bestFive = $('#best_f_marks').val();
    //alert(bestFive);
     if(hsMarks < 40) {
      if(bestFive > 249){
        $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 40 && hsMarks < 50) {
      if(bestFive >= 225){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }else if(hsMarks >= 50) {
      if(bestFive >= 200){$('#txt_eligibility').val('');
      $('#txt_eligibility').val('Eligible for Honours');
    } else {
      $('#txt_eligibility').val('');
      $('#txt_eligibility').val('Not Eligible for Honours');}
    }
  }
}

else {
  
      $('#txt_eligibility').val('Eligible for Apply');
}
 
}
function meritcal(rslt) {
        var sixth1 = ''
        var sixth = ''

        var one = parseInt(document.getElementById("txt_subject_1").value);
        var two = parseInt(document.getElementById("txt_subject_2").value);
        var third = parseInt(document.getElementById("txt_subject_3").value);
        var forth = parseInt(document.getElementById("txt_subject_4").value);
        var fifth = parseInt(document.getElementById("txt_subject_5").value);


        var a = document.getElementById("txt_subject_6");
        var strSub = a.value;
        if (strSub != '') {
            sixth = parseInt(document.getElementById("txt_subject_6").value);
        }
        else {
            sixth = '0'
        }




        var myarray = [parseFloat(one), parseFloat(two), parseFloat(third), parseFloat(forth), parseFloat(fifth), parseFloat(sixth)];
        var myarray1 = [parseFloat(one), parseFloat(two), parseFloat(third), parseFloat(forth), parseFloat(fifth)];


        myarray.sort(function (a, b) { return a - b });
        myarray1.sort(function (a, b) { return a - b });
        myarray.reverse();
        myarray1.reverse();



        if (strSub != '') {
            var txttotmks = parseFloat(document.getElementById("txt_subject_1").value, 8) + parseFloat(document.getElementById("txt_subject_2").value, 8) + parseFloat(document.getElementById("txt_subject_3").value, 8) + parseFloat(document.getElementById("txt_subject_4").value, 8) + parseFloat(document.getElementById("txt_subject_5").value, 8) + parseFloat(document.getElementById("txt_subject_6").value, 8);
            var bestmrk5 = myarray[0] + myarray[1] + myarray[2] + myarray[3] + myarray[4]

            if (!isNaN(txttotmks)) {
                document.getElementById("txt_best_marks").value = txttotmks
                document.getElementById("best_f_marks").value = txttotmks
                $('#txt_eligibility').val('');
                
            }
            else {
                document.getElementById("txt_best_marks").value = "0"
                 document.getElementById("best_f_marks").value = "0"
                 $('#txt_eligibility').val('');
                
            }
            if (!isNaN(bestmrk5)) {
                document.getElementById("txt_best_marks").value = bestmrk5
                 document.getElementById("best_f_marks").value = bestmrk5
                 $('#txt_eligibility').val('');
                
            }
            else {
                document.getElementById("txt_best_marks").value = "0"
                 document.getElementById("best_f_marks").value = "0"
                 $('#txt_eligibility').val('');
                
            }


        }
        else {
            var txttotmks = parseFloat(document.getElementById("txt_subject_1").value, 8) + parseFloat(document.getElementById("txt_subject_2").value, 8) + parseFloat(document.getElementById("txt_subject_3").value, 8) + parseFloat(document.getElementById("txt_subject_4").value, 8) + parseFloat(document.getElementById("txt_subject_5").value, 8);
            var bestmrk5 = parseFloat(myarray1[0]) + parseFloat(myarray1[1]) + parseFloat(myarray1[2]) + parseFloat(myarray1[3]) + parseFloat(myarray1[4])

            if (!isNaN(txttotmks)) {
                document.getElementById("txt_best_marks").value = txttotmks
                document.getElementById("best_f_marks").value = txttotmks
                $('#txt_eligibility').val('');
                
            }
            else {
                document.getElementById("txt_best_marks").value = "0"
                document.getElementById("best_f_marks").value = "0"
                $('#txt_eligibility').val('');
                
            }
            if (!isNaN(bestmrk5)) {
                document.getElementById("txt_best_marks").value = bestmrk5
                 document.getElementById("best_f_marks").value = bestmrk5
                 $('#txt_eligibility').val('');
                
            }
            else {
                document.getElementById("txt_best_marks").value = "0"
                document.getElementById("best_f_marks").value = "0"
                $('#txt_eligibility').val('');
               
            }



        }
$('#selected_sub1').val(myarray[0]);
$('#selected_sub2').val(myarray[1]);
$('#selected_sub3').val(myarray[2]);
$('#selected_sub4').val(myarray[3]);
$('#selected_sub5').val(myarray[4]);


    }
  </script>

