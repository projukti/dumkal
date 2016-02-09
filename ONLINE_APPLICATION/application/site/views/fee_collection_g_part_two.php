<?php 
include_once 'include/connection.php';
if(empty($_SESSION['user'])) 
{ 
header("Location: index.php"); 
die("Redirecting to index.php"); 
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE ADMISSION</title>
<!----------------------validation----------------------------->

 <script type="text/javascript" src="js/jquery.js"></script>  
  <script type="text/javascript" src="js/validate.js"></script>  
  <!----------------------validation----------------------------->
 <script src="../js/jquery.min-1.js"></script>

<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    
<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#fees").validate({
                rules: {
                    stream: "required",
                    term: "required",
					particulars: "required",
					fee: {
					required: true
					},
					year:"required",
					student:"required",
					fee_sub_date:"required"
                },
                messages: {
                    stream: "<br /><span style='color:#FF0000;'>stream required</span>",
                    term: "<br /><span style='color:#FF0000;'>Term required</span>",
					particulars: "<br /><span style='color:#FF0000;'>Particulars required</span>",
					fee: {
					required: "<br /><span style='color:#FF0000;'>Fee required</span>"
					},
					year:"<br /><span style='color:#FF0000;'>year required</span>",
					student:"<br /><span style='color:#FF0000;'>student required</span>",
					fee_sub_date:"<br /><span style='color:#FF0000;'>date required</span>"
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
<!----------------------validation-----------------------------> 
<script type="text/javascript">
$(document).ready(function(){ 
    

	$("#form_fee").validate({
		rules: {
                    stream: {required: true },
					rect_no: {required: true },
					caution_fund:{required: true },
					libray_fund:{ required: true},
					sports_fund:{required: true },
					dev_fund: {required: true },
					stdaid_fund:{required: true },
					fee_sub_date:{required: true}
			
		 
		}, //end rules
		messages: {
								stream: {required: "<br /> Stream Required."},
								rect_no: {required: "<br /> Rect No Required."},
			                    caution_fund: {required: "<br /> Fee Required."},
								libray_fund: {required: "<br /> Fee Required."},
			                    sports_fund: {required: "<br /> Fee Required."},
								dev_fund: {required: "<br /> Fee Required."},
			                    stdaid_fund: {required: "<br /> Fee Required."},
			                    fee_sub_date: {required: "<br /> Date Required."}
			
		} //end messages
		
	}); //end validate
	
	
  });
</script>
<!----------------------no validation----------------------------->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
</SCRIPT>
<!----------------------no validation----------------------------->
<!----------------------number validation---------------->
<script type="text/javascript">
function getsubject(id)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("getsubject").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","ajax_subject.php?id="+id,true);
xmlhttp.send();
}
function getsubjects(id)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("getsubjects").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","ajax_subject.php?id="+id,true);
xmlhttp.send();
}
</script>
<!--//////////////popup///////////////////-->
<script language="javascript" type="text/javascript">

function popitup(url) {
	newwindow=window.open(url,'name','height=500,width=900');
	if (window.focus) {newwindow.focus()}
	return false;
}


</script>
<!----------------------------------------->
<!-----------------------------datepicker-------------------->
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		g_globalObject =new JsDatePick({
			useMode:2,
			target:"fee_sub_date",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>
<!-----------------------------datepicker-------------------->
<script type="text/javascript">
function gettotal() {
var fund1 = document.getElementById('labsubs_fee').value;
var fund2 = document.getElementById('labpractical_fee').value;
var fund3 = document.getElementById('labmaterial_fee').value;
var fund4 = document.getElementById('centre_fee').value;
var fund5 = document.getElementById('exam_fee').value;
var fund6 = document.getElementById('marksheet_fee').value;
var fund7 = document.getElementById('tution_fee').value;


var total = (parseInt(fund1)+ parseInt(fund2)+ parseInt(fund3)+ parseInt(fund4)+parseInt(fund5)+parseInt(fund6)+ parseInt(fund7));
document.getElementById('total').value = total;
}
</script>
</head>

<body onLoad="doOnLoad();">
<?php include_once 'include/header.php';?>
 <!-- tophead class ends here -->

<?php include_once 'include/menu.php';?>
 <!-- menubg class ends here -->

<div class="stockbody">
<table width="800" border="0" cellspacing="0" cellpadding="0">
   	 <tr>
        <td align="center" valign="top" height="50">
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="4" height="40px;" style="border-bottom:2px solid #000000;border-top:2px solid #000000;font-size: 24px;font-family: Georgia, "Times New Roman", Times, serif;"><span class="style6">FEE COLLECTION B.A. GENERAL PART TWO</span></td>
            </tr>
          <tr>
            <td width="258">&nbsp;</td>
            <td width="258" id="getsubject4">&nbsp;</td>
            <td width="233">&nbsp;</td>
            <td width="151">&nbsp;</td>
          </tr>
          </table>
        </td>
   </tr>
   	 <tr>
       <td align="center" valign="top"><?php if(isset($_REQUEST['success'])){echo "Student Admitted successfully";}?></td>
      </tr> 
      <tr>
        <td align="center" valign="top">
<?php
if(!isset($_REQUEST['edit']))
{
$Stream=mysql_fetch_array(mysql_query("select * from stream where id= '".$_REQUEST['s']."'"));		  
$Session=mysql_fetch_array(mysql_query("select * from `session` where `active`='1'"));
$stdnt= mysql_fetch_array(mysql_query("select * from student where id='".$_REQUEST['a']."'"));	
$fee= mysql_fetch_array(mysql_query("select * from fees where stream='".$_REQUEST['s']."'"));

$fees_part2= mysql_fetch_array(mysql_query("select * from fees_part2 where stream='".$_REQUEST['s']."'"));
//echo '<pre>';print_r($fees_part2);die;

}

?>
        <form action="preview_g_part_two.php" method="post" name="form_fee" id="form_fee" enctype="multipart/form-data"> 
        <input type="hidden" name="session" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['session'];}else{ echo $Session['id'];}?>" />        							        <input type="hidden" name="e1" value="<?php  echo $_REQUEST['e1'];?>" />
        <input type="hidden" name="e2" value="<?php  echo $_REQUEST['e2'];?>" />
        <input type="hidden" name="e3" value="<?php  echo $_REQUEST['e3'];?>" />
        
        <?php if(!isset($_REQUEST['edit'])) { ?>
        <input type="hidden" name="admission_fee" value="<?php echo $fee['admission_fee'];?>" />
        <input type="hidden" name="athletic_fee" value="<?php echo $fee['athletic_fee'];?>" />
        <input type="hidden" name="building_fee" value="<?php echo $fee['building_fee'];?>" />
        <input type="hidden" name="charity_fee" value="<?php echo $fee['charity_fee'];?>" />
        <input type="hidden" name="clgexam_fee" value="<?php echo $fee['clgexam_fee'];?>" />
        <input type="hidden" name="commonroom_fee" value="<?php echo $fee['commonroom_fee'];?>" />
        <input type="hidden" name="cultural_fee" value="<?php echo $fee['cultural_fee'];?>" />
        <input type="hidden" name="development_fee" value="<?php echo $fee['development_fee'];?>" />
        <input type="hidden" name="electric_fee" value="<?php echo $fee['electric_fee'];?>" />
        <input type="hidden" name="identitycard_fee" value="<?php echo $fee['identitycard_fee'];?>" />
        <input type="hidden" name="labcaution_fee" value="<?php echo $fee['labcaution_fee'];?>" />
        <!--<input type="hidden" name="labsubs_fee" value="<?php echo $fee['labsubs_fee'];?>" />-->
        <input type="hidden" name="librarycaution_fee" value="<?php echo $fee['librarycaution_fee'];?>" />
        <input type="hidden" name="librarysubs_fee" value="<?php echo $fee['librarysubs_fee'];?>" />
        <input type="hidden" name="magazine_fee" value="<?php echo $fee['magazine_fee'];?>" />
        <input type="hidden" name="registration_fee" value="<?php echo $fee['registration_fee'];?>" />
        <input type="hidden" name="sports_fee" value="<?php echo $fee['sports_fee'];?>" />
        <input type="hidden" name="studenthealth_fee" value="<?php echo $fee['studenthealth_fee'];?>" />
        <!--<input type="hidden" name="tution_fee" value="<?php echo $fee['tution_fee'];?>" />-->
        <input type="hidden" name="union_fee" value="<?php echo $fee['union_fee'];?>" />
		
		<input type="hidden" name="labsubs_fee" value="<?php echo $fees_part2['labsubs_fee'];?>" />
		<input type="hidden" name="labpractical_fee" value="<?php echo $fees_part2['labpractical_fee'];?>" />
		<input type="hidden" name="labmaterial_fee" value="<?php echo $fees_part2['labmaterial_fee'];?>" />
		<input type="hidden" name="centre_fee" value="<?php echo $fees_part2['centre_fee'];?>" />
		<input type="hidden" name="exam_fee" value="<?php echo $fees_part2['exam_fee'];?>" />
		<input type="hidden" name="marksheet_fee" value="<?php echo $fees_part2['marksheet_fee'];?>" />
		<input type="hidden" name="tution_fee" value="<?php echo $fees_part2['tution_fee'];?>" />
		<input type="hidden" name="total" value="<?php echo $fees_part2['total'];?>" />
		
		<input type="hidden" name="back" value="<?php echo $stdnt['back'];?>" />
        
        <?php } 
		else if(isset($_REQUEST['edit'])) 
		{ ?>
        
        <input type="hidden" name="admission_fee" value="<?php echo $_REQUEST['admission_fee'];?>" />
        <input type="hidden" name="athletic_fee" value="<?php echo $_REQUEST['athletic_fee'];?>" />
        <input type="hidden" name="building_fee" value="<?php echo $_REQUEST['building_fee'];?>" />
        <input type="hidden" name="charity_fee" value="<?php echo $_REQUEST['charity_fee'];?>" />
        <input type="hidden" name="clgexam_fee" value="<?php echo $_REQUEST['clgexam_fee'];?>" />
        <input type="hidden" name="commonroom_fee" value="<?php echo $_REQUEST['commonroom_fee'];?>" />
        <input type="hidden" name="cultural_fee" value="<?php echo $_REQUEST['cultural_fee'];?>" />
        <input type="hidden" name="development_fee" value="<?php echo $_REQUEST['development_fee'];?>" />
        <input type="hidden" name="electric_fee" value="<?php echo $_REQUEST['electric_fee'];?>" />
        <input type="hidden" name="identitycard_fee" value="<?php echo $_REQUEST['identitycard_fee'];?>" />
        <input type="hidden" name="labcaution_fee" value="<?php echo $_REQUEST['labcaution_fee'];?>" />
        <!--<input type="hidden" name="labsubs_fee" value="<?php echo $_REQUEST['e3'];?>" />-->
        <input type="hidden" name="librarycaution_fee" value="<?php echo $_REQUEST['librarycaution_fee'];?>" />
        <input type="hidden" name="librarysubs_fee" value="<?php echo $_REQUEST['librarysubs_fee'];?>" />
        <input type="hidden" name="magazine_fee" value="<?php echo $_REQUEST['magazine_fee'];?>" />
        <input type="hidden" name="registration_fee" value="<?php echo $_REQUEST['registration_fee'];?>" />
        <input type="hidden" name="sports_fee" value="<?php echo $_REQUEST['sports_fee'];?>" />
        <input type="hidden" name="studenthealth_fee" value="<?php echo $_REQUEST['studenthealth_fee'];?>" />
        <!--<input type="hidden" name="tution_fee" value="<?php echo $_REQUEST['e3'];?>" />-->
        <input type="hidden" name="union_fee" value="<?php echo $_REQUEST['union_fee'];?>" />
		
		<input type="hidden" name="labsubs_fee" value="<?php echo $_REQUEST['labsubs_fee'];?>" />
		<input type="hidden" name="labpractical_fee" value="<?php echo $_REQUEST['labpractical_fee'];?>" />
		<input type="hidden" name="labmaterial_fee" value="<?php echo $_REQUEST['labmaterial_fee'];?>" />
		<input type="hidden" name="centre_fee" value="<?php echo $_REQUEST['centre_fee'];?>" />
		<input type="hidden" name="exam_fee" value="<?php echo $_REQUEST['exam_fee'];?>" />
		<input type="hidden" name="marksheet_fee" value="<?php echo $_REQUEST['marksheet_fee'];?>" />
		<input type="hidden" name="tution_fee" value="<?php echo $_REQUEST['tution_fee'];?>" />
		<input type="hidden" name="total" value="<?php echo $_REQUEST['total'];?>" />
		
		<input type="hidden" name="back" value="<?php echo $_REQUEST['back'];?>" />
        
        <?php } ?>
        
		<?php 
		if(isset($_REQUEST['edit'])){
		$is_back_student_or_not = $_REQUEST['student'];
		$xback = mysql_query("SELECT * FROM student where id=$is_back_student_or_not");
		$xbackarray = mysql_fetch_array($xback );
		$back = $xbackarray['back'];
		}
		else
		{ 
			//$is_back_student_or_not = $_REQUEST['student'];
			$xback = mysql_query("select * from student where id='".$_REQUEST['a']."'");
			$xbackarray = mysql_fetch_array($xback );
			$back = $xbackarray['back'];
			/*if($back = 'N')
			{
				$back = 'N';
			}
			else
			{
				$back = 'Y';
			}*/
		}
		?>

<table width="900" border="0" cellspacing="0" cellpadding="0" style="padding-top:15px; padding-left:15px;">
              	<tr>
                <td height="35" align="left" class="bodytxt4">Stream  <?php //echo $stdnt['back'];?></td>
                <td height="35" align="center" class="bodytxt5">:</td>
                <td width="208" height="35" align="left" class="bodytxt5">
                <input type="hidden" name="stream" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['stream'];}else{ echo $Stream['id'];}?>" />
                BA. General
                </td>
                <td width="158" align="left" class="bodytxt4">Year</td>
                <td align="left" class="bodytxt5">:</td>
                <td align="left" class="bodytxt5">
                <input type="hidden" name="year" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['year'];}else{ echo $_REQUEST['y'];}?>" />
                <?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['year'];}else{ echo $_REQUEST['y'];}?>
                </td>
                </tr>
              <tr>
                <td width="167" height="35" align="left" class="bodytxt4">Student</td>
                <td width="13" height="35" align="center" class="bodytxt5">:</td>
                <td height="35" colspan="2" align="left" class="bodytxt5"  id="stdnt">
                  <input type="hidden" name="student" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['student'];}else{echo $stdnt['id'];}?>" />
                  <input type="hidden" name="particulars" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['particulars'];}else{echo "Fee Collection-".$stdnt['addmission_no']."-".$stdnt['name'];}?>" />               
                  <input type="hidden" name="name" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['name'];}else{echo $stdnt['name'];}?>" />
                  <input type="hidden" name="addmission_no" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['addmission_no'];}else{echo $stdnt['addmission_no'];}?>" />
                  
                <?php  if(isset($_REQUEST['edit'])){ echo $_REQUEST['name']."-".$_REQUEST['addmission_no'];}else{echo $stdnt['name']."-".$stdnt['addmission_no'];}?>                <!--Rect No.--></td>
                <td width="16" align="left" class="bodytxt5"><!--:--></td>
                <td width="208" align="left" class="bodytxt5">
                <?php /*?><input type="text" name="rect_no" id="rect_no" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['rect_no'];}?>" onkeypress="return isNumberKey(event);" /><?php */?></td> 
              </tr>
              <tr>
                <td height="35" align="left" class="bodytxt4">Fee submission date</td>
                <td height="35" align="center" class="bodytxt5">:</td>
                <td height="35" align="left" class="bodytxt5" id="stdnt10">
                <input type="text" name="fee_sub_date" id="fee_sub_da" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['fee_sub_date'];}else{ echo date('Y-m-d'); }?>" readonly="readonly"/></td>
				
				<?php if(($_REQUEST['e1']=='Geography')||($_REQUEST['e2']=='Geography')||($_REQUEST['e3']=='Geography')){?>
				
                <td align="left" class="bodytxt4">Lab Sub Fee</td>
                <td align="left" class="bodytxt5">:</td>
                <td align="left" class="bodytxt5">
                <input type="text" name="labsubs_fee" id="labsubs_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['labsubs_fee'];}else{echo $fees_part2['labsubs_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" onblur="gettotal()"/></td>
				
				<?php }else{?><input type="hidden" name="labsubs_fee" id="labsubs_fee" class="inputbox1" value="0" />
                <?php }?>
			  
              </tr>
			  
			  <?php if(($_REQUEST['e1']=='Geography')||($_REQUEST['e2']=='Geography')||($_REQUEST['e3']=='Geography')){?>
              <tr>
                <td height="35" align="left" class="bodytxt4">Lab Practical Fee</td>
                <td height="35" align="center" class="bodytxt5">:</td>
                <td height="35" align="left" class="bodytxt5" id="stdnt7"><input type="text" name="labpractical_fee" id="labpractical_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['labpractical_fee'];}else{echo $fees_part2['labpractical_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" /></td>
                <td align="left" class="bodytxt4" id="stdnt7">Lab Material Fee</td>
                <td align="left" class="bodytxt5" id="stdnt7">:</td>
                <td align="left" class="bodytxt5" id="stdnt7"><input type="text" name="labmaterial_fee" id="labmaterial_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['labmaterial_fee'];}else{echo $fees_part2['labmaterial_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" /></td>
              </tr>
               <?php }else{?><input type="hidden" name="labpractical_fee" id="labpractical_fee" class="inputbox1" value="0" />
              <input type="hidden" name="labmaterial_fee" id="labmaterial_fee" class="inputbox1" value="0" /><?php }?>
			  
			  
              <tr>
                <td height="35" align="left" class="bodytxt4">Centre Fee</td>
                <td height="35" align="center" class="bodytxt5">:</td>
                <td height="35" align="left" class="bodytxt5" id="stdnt7"><input type="text" name="centre_fee" id="centre_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['centre_fee'];}else{echo $fees_part2['centre_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" /></td>
                <td align="left" class="bodytxt4" id="stdnt7">Exam Fee</td>
                <td align="left" class="bodytxt5" id="stdnt7">:</td>
                <td align="left" class="bodytxt5" id="stdnt7"><input type="text" name="exam_fee" id="exam_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['exam_fee'];}else{echo $fees_part2['exam_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" /></td>
              </tr>
              <tr>
                <td height="35" align="left" class="bodytxt4">Marksheet Fee</td>
                <td height="35" align="center" class="bodytxt5">:</td>
                <td height="35" align="left" class="bodytxt5" id="stdnt7"><input type="text" name="marksheet_fee" id="marksheet_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['marksheet_fee'];}else{echo $fees_part2['marksheet_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" /></td>
				
				<?php if($back == 'N') { ?>
                <td align="left" class="bodytxt4" id="stdnt7">Tution Fee</td>
                <td align="left" class="bodytxt5" id="stdnt7">:</td>
                <td align="left" class="bodytxt5" id="stdnt7"><input type="text" name="tution_fee" id="tution_fee" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['tution_fee'];}else{echo $fees_part2['tution_fee'];}?>" onkeypress="return isNumberKey(event);" onkeyup="gettotal()" /></td>
				
				<?php }else{?><input type="hidden" name="tution_fee" id="tution_fee" class="inputbox1" value="0" />
                <?php }?>
              </tr>              
              
              <tr>
                <td height="35">Total</td>
                <td height="35">&nbsp;</td>
                <td height="35" align="left">
                  <input type="text" name="total" id="total" class="inputbox1" value="<?php if(isset($_REQUEST['edit'])){ echo $_REQUEST['total'];}else{
				  if(($stdnt['back'] == 'Y') && (($_REQUEST['e1']=='Geography')||($_REQUEST['e2']=='Geography')||($_REQUEST['e3']=='Geography')))
				  { $total = $fees_part2['total'] - $fees_part2['tution_fee'];}
				  else if(($_REQUEST['e1']=='Geography')||($_REQUEST['e2']=='Geography')||($_REQUEST['e3']=='Geography'))
				  {$total=$fees_part2['total'];}				  
				 else if(($stdnt['back'] == 'Y') && (($_REQUEST['e1']!='Geography')||($_REQUEST['e2']!='Geography')||($_REQUEST['e3']!='Geography')))
				 {$total = $fees_part2['total'] - $fees_part2['tution_fee']-$fees_part2['labsubs_fee']-$fees_part2['labpractical_fee']-$fees_part2['labmaterial_fee'];}
				  else{$total=$fees_part2['total']-$fees_part2['labsubs_fee']-$fees_part2['labpractical_fee']-$fees_part2['labmaterial_fee'];}echo $total;}?>"  readonly="readonly"/>
                </td>
                <td align="left" style="padding-left:15px;">&nbsp;</td>
                <td align="left" style="padding-left:15px;">&nbsp;</td>
                <td align="left" style="padding-left:15px;"><input name="submit" type="submit" class="btn" value="Submit" /></td>
              </tr>
            </table>
        </form>
        </td>
      </tr>
      <tr>
        <td></td>
      </tr>
      </table>
</div>

<?php include_once 'include/footer.php';?>

</body>
</html>
