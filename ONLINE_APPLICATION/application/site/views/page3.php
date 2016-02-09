<?php include('header.php');
?>
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
    <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF">
    <form name="form2" method="post" action="<?php echo base_url();?>index.php/Index/secondform_submit" enctype="multipart/form-data" onsubmit="return validate_form2()">
    <table width="722" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#000000"><span class="style5">STEP - 3 : Marks obtained in your last Examination (HS / ISC / CBSE / HS Equivalent)</span></td>
      </tr>
      <tr>
        <td height="40" align="center" valign="middle"><span class="style26">DO NOT enter the marks of Environmental Studies</span></td>
      </tr>
      <tr>
        <td height="400" align="center" valign="middle" bgcolor="#EAEAEA">
       
        <input type="hidden" name="sub_1" value="English">
        <table width="625" border="0" align="center" cellpadding="0" cellspacing="2">
          <tr>
            <td width="26" height="50" align="center" valign="middle" bgcolor="#999999"><span class="style25">Sl No</span></td>
            <td width="209" height="50" align="center" valign="middle" bgcolor="#CC9900"><span class="style25">Subjects</span></td>
            <td height="50" colspan="2" align="center" valign="middle" bgcolor="#00CCFF"><span class="style25">Marks Obtained</span></td>
            <td height="50" colspan="2" align="center" valign="middle" bgcolor="#66CC66"><span class="style25">Full Marks</span></td>
            <td width="118" height="50" align="center" valign="middle" bgcolor="#FF9966"><span class="style25">Aggregate<br />
              (Best of 5 Subjects)</span></td>
          </tr>
          
          <tr>
            <td height="40" align="center" valign="middle"><span class="style20">1</span></td>
            <td height="40" align="center" valign="middle" class="style20"><select name="sub_2" id="sib_2" style="width:200px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="Bengali">Bengali</option>
  <option value="Hindi">Hindi</option>
  <option value="Arabic">Arabic</option>
  <option value="Gujarati">Gujarati</option>
  <option value="Nepali">Nepali</option>
  <option value="Oriya">Oriya</option>
  <option value="Persian">Persian</option>
  <option value="Punjabi">Punjabi</option>
  <option value="Sanskrit">Sanskrit</option>
  <option value="Santhali">Santhali</option>
  <option value="Telegu">Telegu</option>
  <option value="Urdu">Urdu</option>

            </select></td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><input name="txt_subject_2" id="txt_subject_2" type="text" maxlength="3" style="width:30px; height:20px; outline:none; padding:4px;" onkeyup="meritcal('2'); get_valid(this.value,2);" onkeypress="return isNumber(event)"/> </td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><?php if($_SESSION['session_board'] == 22) {?>200 <?php } else { ?>100<?php } ?></td>
            <td rowspan="2" align="center" valign="middle" bgcolor="#FF9966" class="style20"><input name="txt_best_marks" id="txt_best_marks" type="text" style="width:60px; height:30px; outline:none; padding:4px; text-align:center; font-weight:bold; font-size:20px; font-family:Arial, Helvetica, sans-serif;" value="0"/></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style20">2</span></td>
            <td height="40" align="center" valign="middle" class="style20">ENGLISH (Compulsory)</td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><input name="txt_subject_1" id="txt_subject_1" type="text" maxlength="3" style="width:30px; height:20px; outline:none; padding:4px;" onkeyup="meritcal('1'); get_valid(this.value,1);" onkeypress="return isNumber(event)"/></td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><?php if($_SESSION['session_board'] == 22) {?>200 <?php } else { ?>100<?php } ?></td>
            </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style20">3</span></td>
            <td height="40" align="center" valign="middle" class="style20"><select name="sub_3" id="sib_3" style="width:200px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="Accountancy">Accountancy</option>
	<option value="ACRM">ACRM</option>
	<option value="Agronomy">Agronomy</option>
	<option value="AHP2">AHP2</option>
	<option value="AIEM">AIEM</option>
	<option value="Anthropology">Anthropology</option>
	<option value="Arabic">Arabic</option>
	<option value="ARAC">ARAC</option>
	<option value="AUMC">AUMC</option>
	<option value="AUSM ">AUSM </option>
	<option value="BAHD ">BAHD </option>
	<option value="Bengali">Bengali</option>
	<option value="Biology">Biology</option>
	<option value="BMAS">BMAS</option>
	<option value="BNG2 ">BNG2 </option>
	<option value="BS22">BS22</option>
	<option value="BS23">BS23</option>
	<option value="BS25">BS25</option>
	<option value="Business Organization">Business Organization</option>
	<option value="Business Studies">Business Studies</option>
	<option value="CAAM">CAAM</option>
	<option value="CAVC">CAVC</option>
	<option value="CCMT">CCMT</option>
	<option value="CENT ">CENT </option>
	<option value="CFAP ">CFAP </option>
	<option value="CFAV">CFAV</option>
	<option value="Chemistry">Chemistry</option>
	<option value="CIEM ">CIEM </option>
	<option value="CMAP ">CMAP </option>
	<option value="COAC">COAC</option>
	<option value="Commerce">Commerce</option>
	<option value="Commercial Law">Commercial Law</option>
	<option value="Computer Application">Computer Application</option>
	<option value="Computer Science">Computer Science</option>
	<option value="DAFM">DAFM</option>
	<option value="Data Entry (operation)">Data Entry (operation)</option>
	<option value="DIET">DIET</option>
	<option value="Economics">Economics</option>
	<option value="Education">Education</option>
	<option value="Environmental Studies">Environmental Studies</option>
	<option value="EVMG">EVMG</option>
	<option value="EWAI ">EWAI </option>
	<option value="FPAP">FPAP</option>
	<option value="FRCL">FRCL</option>
	<option value="Geography">Geography</option>
	<option value="Geology">Geology</option>
	<option value="GMDG">GMDG</option>
	<option value="Gujarati">Gujarati</option>
	<option value="HIN2">HIN2</option>
	<option value="Hindi">Hindi</option>
	<option value="History">History</option>
	<option value="HLCA">HLCA</option>
	<option value="HNMG">HNMG</option>
	<option value="Home Management">Home Management</option>
	<option value="HOMG">HOMG</option>
	<option value="HPMG">HPMG</option>
	<option value="INDC">INDC</option>
	<option value="IPCL">IPCL</option>
	<option value="ITES">ITES</option>
	<option value="Journalism and Mass Communication">Journalism and Mass Communication</option>
	<option value="LAIS">LAIS</option>
	<option value="MAAP">MAAP</option>
	<option value="MACC">MACC</option>
	<option value="MASS">MASS</option>
	<option value="Mathematics">Mathematics</option>
	<option value="MCTM ">MCTM </option>
	<option value="MRCL">MRCL</option>
	<option value="MRED ">MRED </option>
	<option value="Music">Music</option>
	<option value="NEP2">NEP2</option>
	<option value="Nepali">Nepali</option>
	<option value="Nutrition">Nutrition</option>
	<option value="OFFM">OFFM</option>
	<option value="Oriya">Oriya</option>
	<option value="Painting (Theory)">Painting (Theory)</option>
	<option value="PCMT ">PCMT </option>
	<option value="Performing Arts">Performing Arts</option>
	<option value="Persian">Persian</option>
	<option value="Philosophy">Philosophy</option>
	<option value="Physical Education">Physical Education</option>
	<option value="Physics">Physics</option>
	<option value="PLPT">PLPT</option>
	<option value="Political Science">Political Science</option>
	<option value="POMT ">POMT </option>
	<option value="PPAG">PPAG</option>
	<option value="PPFV">PPFV</option>
	<option value="PROJ">PROJ</option>
	<option value="PSCL">PSCL</option>
	<option value="Psychology">Psychology</option>
	<option value="Punjabi">Punjabi</option>
	<option value="RTMG">RTMG</option>
	<option value="Sanskrit">Sanskrit</option>
	<option value="Santhali">Santhali</option>
	<option value="Sociology">Sociology</option>
	<option value="Statistics">Statistics</option>
	<option value="STOP">STOP</option>
	<option value="TEDG">TEDG</option>
	<option value="Telegu">Telegu</option>
	<option value="TRAT">TRAT</option>
	<option value="TXPR">TXPR</option>
	<option value="URD2">URD2</option>
	<option value="Urdu">Urdu</option>
	<option value="Visual Arts">Visual Arts</option>


            </select></td>
            
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><input name="txt_subject_3" id="txt_subject_3" type="text" maxlength="3" style="width:30px; height:20px; outline:none; padding:4px;" onkeyup="meritcal('3'); get_valid(this.value,3);"/></td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><?php if($_SESSION['session_board'] == 22) {?>200 <?php } else { ?>100<?php } ?></td>
            <td height="40" align="center" valign="middle" bgcolor="#FF9966" class="style20"><input name="Reset" type="button" value="Calculate Merit" style="outline:none; background-color:#FF3300; border:1px solid #000000; height:28px; width:100px; cursor:pointer; color:#FFFFFF;" onclick="calculate_price()" onkeypress="return isNumber(event)"/></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style20">4</span></td>
            <td height="40" align="center" valign="middle" class="style20"><select name="sub_4" id="sib_4" style="width:200px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="Accountancy">Accountancy</option>
              <option value="ACRM">ACRM</option>
              <option value="Agronomy">Agronomy</option>
              <option value="AHP2">AHP2</option>
              <option value="AIEM">AIEM</option>
              <option value="Anthropology">Anthropology</option>
              <option value="Arabic">Arabic</option>
              <option value="ARAC">ARAC</option>
              <option value="AUMC">AUMC</option>
              <option value="AUSM ">AUSM </option>
              <option value="BAHD ">BAHD </option>
              <option value="Bengali">Bengali</option>
              <option value="Biology">Biology</option>
              <option value="BMAS">BMAS</option>
              <option value="BNG2 ">BNG2 </option>
              <option value="BS22">BS22</option>
              <option value="BS23">BS23</option>
              <option value="BS25">BS25</option>
              <option value="Business Organization">Business Organization</option>
              <option value="Business Studies">Business Studies</option>
              <option value="CAAM">CAAM</option>
              <option value="CAVC">CAVC</option>
              <option value="CCMT">CCMT</option>
              <option value="CENT ">CENT </option>
              <option value="CFAP ">CFAP </option>
              <option value="CFAV">CFAV</option>
              <option value="Chemistry">Chemistry</option>
              <option value="CIEM ">CIEM </option>
              <option value="CMAP ">CMAP </option>
              <option value="COAC">COAC</option>
              <option value="Commerce">Commerce</option>
              <option value="Commercial Law">Commercial Law</option>
              <option value="Computer Application">Computer Application</option>
              <option value="Computer Science">Computer Science</option>
              <option value="DAFM">DAFM</option>
              <option value="Data Entry (operation)">Data Entry (operation)</option>
              <option value="DIET">DIET</option>
              <option value="Economics">Economics</option>
              <option value="Education">Education</option>
              <option value="Environmental Studies">Environmental Studies</option>
              <option value="EVMG">EVMG</option>
              <option value="EWAI ">EWAI </option>
              <option value="FPAP">FPAP</option>
              <option value="FRCL">FRCL</option>
              <option value="Geography">Geography</option>
              <option value="Geology">Geology</option>
              <option value="GMDG">GMDG</option>
              <option value="Gujarati">Gujarati</option>
              <option value="HIN2">HIN2</option>
              <option value="Hindi">Hindi</option>
              <option value="History">History</option>
              <option value="HLCA">HLCA</option>
              <option value="HNMG">HNMG</option>
              <option value="Home Management">Home Management</option>
              <option value="HOMG">HOMG</option>
              <option value="HPMG">HPMG</option>
              <option value="INDC">INDC</option>
              <option value="IPCL">IPCL</option>
              <option value="ITES">ITES</option>
              <option value="Journalism and Mass Communication">Journalism and Mass Communication</option>
              <option value="LAIS">LAIS</option>
              <option value="MAAP">MAAP</option>
              <option value="MACC">MACC</option>
              <option value="MASS">MASS</option>
              <option value="Mathematics">Mathematics</option>
              <option value="MCTM ">MCTM </option>
              <option value="MRCL">MRCL</option>
              <option value="MRED ">MRED </option>
              <option value="Music">Music</option>
              <option value="NEP2">NEP2</option>
              <option value="Nepali">Nepali</option>
              <option value="Nutrition">Nutrition</option>
              <option value="OFFM">OFFM</option>
              <option value="Oriya">Oriya</option>
              <option value="Painting (Theory)">Painting (Theory)</option>
              <option value="PCMT ">PCMT </option>
              <option value="Performing Arts">Performing Arts</option>
              <option value="Persian">Persian</option>
              <option value="Philosophy">Philosophy</option>
              <option value="Physical Education">Physical Education</option>
              <option value="Physics">Physics</option>
              <option value="PLPT">PLPT</option>
              <option value="Political Science">Political Science</option>
              <option value="POMT ">POMT </option>
              <option value="PPAG">PPAG</option>
              <option value="PPFV">PPFV</option>
              <option value="PROJ">PROJ</option>
              <option value="PSCL">PSCL</option>
              <option value="Psychology">Psychology</option>
              <option value="Punjabi">Punjabi</option>
              <option value="RTMG">RTMG</option>
              <option value="Sanskrit">Sanskrit</option>
              <option value="Santhali">Santhali</option>
              <option value="Sociology">Sociology</option>
              <option value="Statistics">Statistics</option>
              <option value="STOP">STOP</option>
              <option value="TEDG">TEDG</option>
              <option value="Telegu">Telegu</option>
              <option value="TRAT">TRAT</option>
              <option value="TXPR">TXPR</option>
              <option value="URD2">URD2</option>
              <option value="Urdu">Urdu</option>
              <option value="Visual Arts">Visual Arts</option>
            </select></td>
            
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><input name="txt_subject_4" id="txt_subject_4" onkeyup="meritcal('4'); get_valid(this.value,4);" type="text" maxlength="3" style="width:30px; height:20px; outline:none; padding:4px;" onkeypress="return isNumber(event)"/></td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><?php if($_SESSION['session_board'] == 22) {?>200 <?php } else { ?>100<?php } ?></td>
            <td height="40" align="center" valign="middle" class="style20">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style20">5</span></td>
            <td height="40" align="center" valign="middle" class="style20"><select name="sub_5" id="sib_5" style="width:200px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="Accountancy">Accountancy</option>
              <option value="ACRM">ACRM</option>
              <option value="Agronomy">Agronomy</option>
              <option value="AHP2">AHP2</option>
              <option value="AIEM">AIEM</option>
              <option value="Anthropology">Anthropology</option>
              <option value="Arabic">Arabic</option>
              <option value="ARAC">ARAC</option>
              <option value="AUMC">AUMC</option>
              <option value="AUSM ">AUSM </option>
              <option value="BAHD ">BAHD </option>
              <option value="Bengali">Bengali</option>
              <option value="Biology">Biology</option>
              <option value="BMAS">BMAS</option>
              <option value="BNG2 ">BNG2 </option>
              <option value="BS22">BS22</option>
              <option value="BS23">BS23</option>
              <option value="BS25">BS25</option>
              <option value="Business Organization">Business Organization</option>
              <option value="Business Studies">Business Studies</option>
              <option value="CAAM">CAAM</option>
              <option value="CAVC">CAVC</option>
              <option value="CCMT">CCMT</option>
              <option value="CENT ">CENT </option>
              <option value="CFAP ">CFAP </option>
              <option value="CFAV">CFAV</option>
              <option value="Chemistry">Chemistry</option>
              <option value="CIEM ">CIEM </option>
              <option value="CMAP ">CMAP </option>
              <option value="COAC">COAC</option>
              <option value="Commerce">Commerce</option>
              <option value="Commercial Law">Commercial Law</option>
              <option value="Computer Application">Computer Application</option>
              <option value="Computer Science">Computer Science</option>
              <option value="DAFM">DAFM</option>
              <option value="Data Entry (operation)">Data Entry (operation)</option>
              <option value="DIET">DIET</option>
              <option value="Economics">Economics</option>
              <option value="Education">Education</option>
              <option value="Environmental Studies">Environmental Studies</option>
              <option value="EVMG">EVMG</option>
              <option value="EWAI ">EWAI </option>
              <option value="FPAP">FPAP</option>
              <option value="FRCL">FRCL</option>
              <option value="Geography">Geography</option>
              <option value="Geology">Geology</option>
              <option value="GMDG">GMDG</option>
              <option value="Gujarati">Gujarati</option>
              <option value="HIN2">HIN2</option>
              <option value="Hindi">Hindi</option>
              <option value="History">History</option>
              <option value="HLCA">HLCA</option>
              <option value="HNMG">HNMG</option>
              <option value="Home Management">Home Management</option>
              <option value="HOMG">HOMG</option>
              <option value="HPMG">HPMG</option>
              <option value="INDC">INDC</option>
              <option value="IPCL">IPCL</option>
              <option value="ITES">ITES</option>
              <option value="Journalism and Mass Communication">Journalism and Mass Communication</option>
              <option value="LAIS">LAIS</option>
              <option value="MAAP">MAAP</option>
              <option value="MACC">MACC</option>
              <option value="MASS">MASS</option>
              <option value="Mathematics">Mathematics</option>
              <option value="MCTM ">MCTM </option>
              <option value="MRCL">MRCL</option>
              <option value="MRED ">MRED </option>
              <option value="Music">Music</option>
              <option value="NEP2">NEP2</option>
              <option value="Nepali">Nepali</option>
              <option value="Nutrition">Nutrition</option>
              <option value="OFFM">OFFM</option>
              <option value="Oriya">Oriya</option>
              <option value="Painting (Theory)">Painting (Theory)</option>
              <option value="PCMT ">PCMT </option>
              <option value="Performing Arts">Performing Arts</option>
              <option value="Persian">Persian</option>
              <option value="Philosophy">Philosophy</option>
              <option value="Physical Education">Physical Education</option>
              <option value="Physics">Physics</option>
              <option value="PLPT">PLPT</option>
              <option value="Political Science">Political Science</option>
              <option value="POMT ">POMT </option>
              <option value="PPAG">PPAG</option>
              <option value="PPFV">PPFV</option>
              <option value="PROJ">PROJ</option>
              <option value="PSCL">PSCL</option>
              <option value="Psychology">Psychology</option>
              <option value="Punjabi">Punjabi</option>
              <option value="RTMG">RTMG</option>
              <option value="Sanskrit">Sanskrit</option>
              <option value="Santhali">Santhali</option>
              <option value="Sociology">Sociology</option>
              <option value="Statistics">Statistics</option>
              <option value="STOP">STOP</option>
              <option value="TEDG">TEDG</option>
              <option value="Telegu">Telegu</option>
              <option value="TRAT">TRAT</option>
              <option value="TXPR">TXPR</option>
              <option value="URD2">URD2</option>
              <option value="Urdu">Urdu</option>
              <option value="Visual Arts">Visual Arts</option>
            </select></td>
            
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><input name="txt_subject_5" id="txt_subject_5" type="text" maxlength="3" style="width:30px; height:20px; outline:none; padding:4px;" onkeyup="meritcal('5');  get_valid(this.value,5);" onkeypress="return isNumber(event)"/></td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><?php if($_SESSION['session_board'] == 22) {?>200 <?php } else { ?>100<?php } ?></td>
            <td height="40" align="center" valign="middle" class="style20">&nbsp;</td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style20">6</td>
            <td height="40" align="center" valign="middle" class="style20"><select name="sub_6" id="sib_6" style="width:200px; height:30px; outline:none;">
              <option selected="selected" value="-Select Subject-">Select Here</option>
              <option value="Accountancy">Accountancy</option>
              <option value="ACRM">ACRM</option>
              <option value="Agronomy">Agronomy</option>
              <option value="AHP2">AHP2</option>
              <option value="AIEM">AIEM</option>
              <option value="Anthropology">Anthropology</option>
              <option value="Arabic">Arabic</option>
              <option value="ARAC">ARAC</option>
              <option value="AUMC">AUMC</option>
              <option value="AUSM ">AUSM </option>
              <option value="BAHD ">BAHD </option>
              <option value="Bengali">Bengali</option>
              <option value="Biology">Biology</option>
              <option value="BMAS">BMAS</option>
              <option value="BNG2 ">BNG2 </option>
              <option value="BS22">BS22</option>
              <option value="BS23">BS23</option>
              <option value="BS25">BS25</option>
              <option value="Business Organization">Business Organization</option>
              <option value="Business Studies">Business Studies</option>
              <option value="CAAM">CAAM</option>
              <option value="CAVC">CAVC</option>
              <option value="CCMT">CCMT</option>
              <option value="CENT ">CENT </option>
              <option value="CFAP ">CFAP </option>
              <option value="CFAV">CFAV</option>
              <option value="Chemistry">Chemistry</option>
              <option value="CIEM ">CIEM </option>
              <option value="CMAP ">CMAP </option>
              <option value="COAC">COAC</option>
              <option value="Commerce">Commerce</option>
              <option value="Commercial Law">Commercial Law</option>
              <option value="Computer Application">Computer Application</option>
              <option value="Computer Science">Computer Science</option>
              <option value="DAFM">DAFM</option>
              <option value="Data Entry (operation)">Data Entry (operation)</option>
              <option value="DIET">DIET</option>
              <option value="Economics">Economics</option>
              <option value="Education">Education</option>
              <option value="Environmental Studies">Environmental Studies</option>
              <option value="EVMG">EVMG</option>
              <option value="EWAI ">EWAI </option>
              <option value="FPAP">FPAP</option>
              <option value="FRCL">FRCL</option>
              <option value="Geography">Geography</option>
              <option value="Geology">Geology</option>
              <option value="GMDG">GMDG</option>
              <option value="Gujarati">Gujarati</option>
              <option value="HIN2">HIN2</option>
              <option value="Hindi">Hindi</option>
              <option value="History">History</option>
              <option value="HLCA">HLCA</option>
              <option value="HNMG">HNMG</option>
              <option value="Home Management">Home Management</option>
              <option value="HOMG">HOMG</option>
              <option value="HPMG">HPMG</option>
              <option value="INDC">INDC</option>
              <option value="IPCL">IPCL</option>
              <option value="ITES">ITES</option>
              <option value="Journalism and Mass Communication">Journalism and Mass Communication</option>
              <option value="LAIS">LAIS</option>
              <option value="MAAP">MAAP</option>
              <option value="MACC">MACC</option>
              <option value="MASS">MASS</option>
              <option value="Mathematics">Mathematics</option>
              <option value="MCTM ">MCTM </option>
              <option value="MRCL">MRCL</option>
              <option value="MRED ">MRED </option>
              <option value="Music">Music</option>
              <option value="NEP2">NEP2</option>
              <option value="Nepali">Nepali</option>
              <option value="Nutrition">Nutrition</option>
              <option value="OFFM">OFFM</option>
              <option value="Oriya">Oriya</option>
              <option value="Painting (Theory)">Painting (Theory)</option>
              <option value="PCMT ">PCMT </option>
              <option value="Performing Arts">Performing Arts</option>
              <option value="Persian">Persian</option>
              <option value="Philosophy">Philosophy</option>
              <option value="Physical Education">Physical Education</option>
              <option value="Physics">Physics</option>
              <option value="PLPT">PLPT</option>
              <option value="Political Science">Political Science</option>
              <option value="POMT ">POMT </option>
              <option value="PPAG">PPAG</option>
              <option value="PPFV">PPFV</option>
              <option value="PROJ">PROJ</option>
              <option value="PSCL">PSCL</option>
              <option value="Psychology">Psychology</option>
              <option value="Punjabi">Punjabi</option>
              <option value="RTMG">RTMG</option>
              <option value="Sanskrit">Sanskrit</option>
              <option value="Santhali">Santhali</option>
              <option value="Sociology">Sociology</option>
              <option value="Statistics">Statistics</option>
              <option value="STOP">STOP</option>
              <option value="TEDG">TEDG</option>
              <option value="Telegu">Telegu</option>
              <option value="TRAT">TRAT</option>
              <option value="TXPR">TXPR</option>
              <option value="URD2">URD2</option>
              <option value="Urdu">Urdu</option>
              <option value="Visual Arts">Visual Arts</option>
            </select></td>
            
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><input name="txt_subject_6" id="txt_subject_6" type="text" maxlength="3" style="width:30px; height:20px; outline:none; padding:4px;" onkeyup="meritcal('6'); get_valid(this.value,6);" onkeypress="return isNumber(event)"/></td>
            <td height="40" colspan="2" align="center" valign="middle" class="style20"><?php if($_SESSION['session_board'] == 22) {?>200 <?php } else { ?>100<?php } ?></td>
            <td height="40" align="center" valign="middle" class="style20">&nbsp;</td>
          </tr>
          <tr>
            <td height="20">&nbsp;</td>
            <td height="20">&nbsp;</td>
            <td height="20" colspan="2">&nbsp;</td>
            <td width="64" height="20">&nbsp;</td>
            <td width="64" height="20">&nbsp;</td>
            <td height="20">&nbsp;</td>
          </tr>
          <tr>
            <td height="40">&nbsp;</td>
            <td height="40">&nbsp;</td>
            <td width="64" height="40">&nbsp;</td>
            <td height="40" colspan="2" align="right" valign="middle"><input name="Reset2" type="button" value="Reset" style="outline:none; background-color:#00CCFF; border:1px solid #0099FF; height:28px; width:60px; cursor:pointer;" onClick="this.form.reset()"/></td>
            <td height="40" colspan="2" align="right" valign="middle"><input name="Submit2" type="submit" value="Proceed to Next Step" style="outline:none; background-color:#00CC66; border:1px solid #009966; height:28px; width:160px; cursor:pointer;" />
            <input type="hidden" name="txt_aggregate_marks" id="txt_aggregate_marks" value="0">
            <input type="hidden" name="selected_sub1" id="selected_sub1" value="">
            <input type="hidden" name="selected_sub2" id="selected_sub2" value="">
            <input type="hidden" name="selected_sub3" id="selected_sub3" value="">
            <input type="hidden" name="selected_sub4" id="selected_sub4" value="">
            <input type="hidden" name="selected_sub5" id="selected_sub5" value="">
            <input type="hidden" name="full_marks" id="full_marks" value="100">
            </td>
            </tr>
        </table>
        </form>
          <br /></td>
      </tr>
      

    </table></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <?php include('footer.php');?>
  <script type="text/javascript">
    function validate_form2() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                if ($('#sib_6').val() == '-Select Subject-') {
                                if ($('#txt_subject_1').val() == '') {
                                    errors.push('Please Enter Marks of English.'); 
                                    
                                }
                                if ($('#sib_2').val() == '') {
                                    errors.push('Please Select Second Subject'); 
                                    
                                }
                                if ($('#txt_subject_2').val() == '') {
                                    errors.push('Please Enter Marks of Second Subject.'); 
                                    
                                }
                                if ($('#sib_3').val() == '') {
                                    errors.push('Please Select Third Subject'); 
                                    
                                }
                                if ($('#txt_subject_3').val() == '') {
                                    errors.push('Please Enter Marks of Third Subject.'); 
                                    
                                }
                                if ($('#sib_4').val() == '') {
                                    errors.push('Please Select Fourth Subject'); 
                                    
                                }
                                if ($('#txt_subject_4').val() == '') {
                                    errors.push('Please Enter Marks of Forth Subject'); 
                                    
                                }
                              if ($('#sib_5').val() == '') {
                                    errors.push('Please Select Fifth Subject'); 
                                    
                                }
                                if ($('#txt_subject_5').val() == '') {
                                    errors.push('Please Enter Marks of Fifth Subject'); 
                                    
                                }
                                if ($('#txt_best_marks').val() == '0') {
                                    errors.push('Please Calculate Best of Five'); 
                                    
                                }
                              } else {

                                if ($('#txt_subject_1').val() == '') {
                                    errors.push('Please Enter Marks of English.'); 
                                    
                                }
                                if ($('#sib_2').val() == '') {
                                    errors.push('Please Select Second Subject'); 
                                    
                                }
                                if ($('#txt_subject_2').val() == '') {
                                    errors.push('Please Enter Marks of Second Subject.'); 
                                    
                                }
                                if ($('#sib_3').val() == '') {
                                    errors.push('Please Select Third Subject'); 
                                    
                                }
                                if ($('#txt_subject_3').val() == '') {
                                    errors.push('Please Enter Marks of Third Subject.'); 
                                    
                                }
                                if ($('#sib_4').val() == '') {
                                    errors.push('Please Select Fourth Subject'); 
                                    
                                }
                                if ($('#txt_subject_4').val() == '') {
                                    errors.push('Please Enter Marks of Forth Subject'); 
                                    
                                }
                              if ($('#sib_5').val() == '') {
                                    errors.push('Please Select Fifth Subject'); 
                                    
                                }
                                if ($('#txt_subject_5').val() == '') {
                                    errors.push('Please Enter Marks of Fifth Subject'); 
                                    
                                }
                                if ($('#txt_subject_6').val() == '') {
                                    errors.push('Please Enter Marks of Sixth Subject'); 
                                    
                                }
                                if ($('#txt_best_marks').val() == '0') {
                                    errors.push('Please Calculate Best of Five'); 
                                    
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
  function meritcal(rslt) {
        var sixth1 = ''
        var sixth = ''

        var one = parseInt(document.getElementById("txt_subject_1").value);
        var two = parseInt(document.getElementById("txt_subject_2").value);
        var third = parseInt(document.getElementById("txt_subject_3").value);
        var forth = parseInt(document.getElementById("txt_subject_4").value);
        var fifth = parseInt(document.getElementById("txt_subject_5").value);


        var a = document.getElementById("sib_6");
        var strSub = a.options[a.selectedIndex].value;
        if (strSub != '-Select Subject-') {
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



        if (strSub != '-Select Subject-') {
            var txttotmks = parseFloat(document.getElementById("txt_subject_1").value, 8) + parseFloat(document.getElementById("txt_subject_2").value, 8) + parseFloat(document.getElementById("txt_subject_3").value, 8) + parseFloat(document.getElementById("txt_subject_4").value, 8) + parseFloat(document.getElementById("txt_subject_5").value, 8) + parseFloat(document.getElementById("txt_subject_6").value, 8);
            var bestmrk5 = myarray[0] + myarray[1] + myarray[2] + myarray[3] + myarray[4]

            if (!isNaN(txttotmks)) {
                document.getElementById("txt_aggregate_marks").value = txttotmks
            }
            else {
                document.getElementById("txt_aggregate_marks").value = "0"
            }
            if (!isNaN(bestmrk5)) {
                document.getElementById("txt_aggregate_marks").value = bestmrk5
            }
            else {
                document.getElementById("txt_aggregate_marks").value = "0"
            }


        }
        else {
            var txttotmks = parseFloat(document.getElementById("txt_subject_1").value, 8) + parseFloat(document.getElementById("txt_subject_2").value, 8) + parseFloat(document.getElementById("txt_subject_3").value, 8) + parseFloat(document.getElementById("txt_subject_4").value, 8) + parseFloat(document.getElementById("txt_subject_5").value, 8);
            var bestmrk5 = parseFloat(myarray1[0]) + parseFloat(myarray1[1]) + parseFloat(myarray1[2]) + parseFloat(myarray1[3]) + parseFloat(myarray1[4])

            if (!isNaN(txttotmks)) {
                document.getElementById("txt_aggregate_marks").value = txttotmks
            }
            else {
                document.getElementById("txt_aggregate_marks").value = "0"
            }
            if (!isNaN(bestmrk5)) {
                document.getElementById("txt_aggregate_marks").value = bestmrk5
            }
            else {
                document.getElementById("txt_aggregate_marks").value = "0"
            }



        }
$('#selected_sub1').val(myarray[0]);
$('#selected_sub2').val(myarray[1]);
$('#selected_sub3').val(myarray[2]);
$('#selected_sub4').val(myarray[3]);
$('#selected_sub5').val(myarray[4]);


    }


function calculate_price() {
  <?php if($_SESSION['session_board'] == 22) {?>
  var data = $('#txt_aggregate_marks').val() / 2;
  $('#txt_best_marks').val(data);
<?php } else {?>
  var data = $('#txt_aggregate_marks').val();
  $('#txt_best_marks').val(data);
  <?php } ?>
}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function get_valid(num,count) {
  //alert(num);
  //alert(count);
  var numb = $('#full_marks').val();
  <?php if($_SESSION['session_board'] == 22) {?>
    if(num > 200) {
    alert('Please Insert Marks Less than 200');
    $('#txt_subject_'+count).val('');
  }
  <?php } else { ?>
  if(num > 100) {
    alert('Please Insert Marks Less than'+numb);
    $('#txt_subject_'+count).val('');
  }
<?php } ?>
}
</script>