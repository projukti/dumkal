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
    <td height="20" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="488" align="center" valign="middle" bgcolor="#FFFFFF"><table width="781" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td height="40" align="center" valign="middle" bgcolor="#000000"><span class="style5">STEP - 4 : Application for <?php echo $_SESSION['session_stream_name'];?> (2015-16)</span></td>
      </tr>
      <tr>
        <td height="800" align="center" valign="middle" bgcolor="#EAEAEA">
          <form id="form8" name="form8" method="post" action="<?php echo base_url();?>index.php/Index/final_submit" onsubmit="return validate_last_form();">
        <table width="597" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="40" align="center" valign="middle">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="center" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
          </tr>
          <tr>
            <td width="50" height="40" align="center" valign="middle"><span class="style28">(1).</span></td>
            <td width="204" height="40" align="left" valign="middle" class="style28">Full Name of the Candidate</td>
            <td width="41" height="40" align="left" valign="middle" class="style28">:</td>
            <td width="302" height="40" align="left" valign="middle" class="style28"><input name="txt_name" id="txt_name" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style28">(2)</span></td>
            <td height="40" align="left" valign="middle" class="style28">Date of Birth of the Candidate</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_dob_day" id="txt_dob_day" style="width:53px; height:30px; outline:none;">
              <option selected="selected" value="">Day</option>
              <?php for($i=1; $i<=31; $i++) {?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ?>
	
            </select>
              <select name="txt_dob_month" id="txt_dob_month" style="width:120px; height:30px; outline:none;">
                <option selected="selected" value="">Month</option>
                <option value="01">January</option>
	<option value="02">February</option>
	<option value="03">March</option>
	<option value="04">April</option>
	<option value="05">May</option>
	<option value="06">June</option>
	<option value="07">July</option>
	<option value="08">August</option>
	<option value="09">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
              </select> <select name="txt_dob_year" id="txt_dob_year" style="width:60px; height:30px; outline:none;">
                <option selected="selected" value="">Year</option>
                <option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>

              </select></td>
           </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style28">(3)</span></td>
            <td height="40" align="left" valign="middle" class="style28">Sex / Gender</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_sex" id="txt_sex" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
              <option value="T">Transgender</option>
                        </select></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(4)</td>
            <td height="40" align="left" valign="middle" class="style28">Caste Category</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_cast" type="text" style="width:228px; height:20px; outline:none; padding:4px;" value="<?php echo $_SESSION['session_caste'];?>" readonly/></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style28">(5)</span></td>
            <td height="40" align="left" valign="middle" class="style28">Religion</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_religion" id="txt_religion" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="hindu">Hindu</option>
              <option value="muslim">Muslim</option>
              <option value="christian">Christian</option>
              
                        </select></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle"><span class="style28">(6)</span></td>
            <td height="40" align="left" valign="middle" class="style28">Nationality</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_nation" id="txt_nation" style="width:240px; height:30px; outline:none;" onchange="get_nation(this.value)">
              <option selected="selected" value="">Select Here</option>
              <option value="indian">Indian</option>
              <option value="others">Others</option>
              
                        </select></td>
          </tr>
          <tr style="display:none;" class="other_nation">
            <td height="40" align="center" valign="middle" class="style28"></td>
            <td height="40" align="left" valign="middle" class="style28">Enter Nationality</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_other_nation" id="txt_other_nation" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(7)</td>
            <td height="40" align="left" valign="middle" class="style28">Phone No / Mobile No</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_phn" id="txt_phn" type="text" style="width:228px; height:20px; outline:none; padding:4px;" placeholder="Your Mobile Number"/></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(8)</td>
            <td height="40" align="left" valign="middle" class="style28">Marital Status</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_marriage" id="txt_marriage" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="Unmarried">Unmarried</option>
              <option value="Married">Married</option>
              <option value="Widow">Widow</option>
              <option value="Divorced">Divorced</option>
                        </select></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(9)</td>
            <td height="40" align="left" valign="middle" class="style28">Father's Name</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_father" id="txt_father" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
         
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(11)</td>
            <td height="40" align="left" valign="middle" class="style28">Mother's Name</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_mother" id="txt_mother" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(13)</td>
            <td height="40" align="left" valign="middle" class="style28">Guardian's Name</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_gurdian" id="txt_gurdian" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(14)</td>
            <td height="40" align="left" valign="middle" class="style28">Relationship with the Guardian</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_gurdian_rltn" id="txt_gurdian_rltn" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(15)</td>
            <td height="40" align="left" valign="middle" class="style28">Guardian's Occupation</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_gurdian_occu" id="txt_gurdian_occu" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(16)</td>
            <td height="40" align="left" valign="middle" class="style28">Guardian's Contact Number</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_gurdian_phn" id="txt_gurdian_phn" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="20" align="center" valign="middle" class="style28" colspan="4">Present Residential Address 
              </td>
           
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(17)</td>
            <td height="40" align="left" valign="middle" class="style28">Vill / Street</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_pre_vill" id="txt_pre_vill" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(18)</td>
            <td height="40" align="left" valign="middle" class="style28">P.O</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_pre_po" id="txt_pre_po" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(19)</td>
            <td height="40" align="left" valign="middle" class="style28">P.S</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_pre_ps" id="txt_pre_ps" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(20)</td>
            <td height="40" align="left" valign="middle" class="style28">Distroict</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_pre_dist" id="txt_pre_dist" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(21)</td>
            <td height="40" align="left" valign="middle" class="style28">State</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_pre_state" id="txt_pre_state" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(22)</td>
            <td height="40" align="left" valign="middle" class="style28">PIN</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_pre_pin" id="txt_pre_pin" type="text" style="width:228px; height:20px; outline:none; padding:4px;" onkeypress="return isNumber(event)"/></td>
          </tr>
         <tr>
            <td height="20" align="center" valign="middle" class="style28" colspan="4">Permanent Residential Address 
              </td>
           
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(23)</td>
            <td height="40" align="left" valign="middle" class="style28">Vill / Street</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_per_vill" id="txt_per_vill" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(24)</td>
            <td height="40" align="left" valign="middle" class="style28">P.O</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_per_po" id="txt_per_po" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(25)</td>
            <td height="40" align="left" valign="middle" class="style28">P.S</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_per_ps" id="txt_per_ps" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(26)</td>
            <td height="40" align="left" valign="middle" class="style28">Distroict</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_per_dist" id="txt_per_dist" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(27)</td>
            <td height="40" align="left" valign="middle" class="style28">State</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_per_state" id="txt_per_state" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
           <tr>
            <td height="40" align="center" valign="middle" class="style28">(28)</td>
            <td height="40" align="left" valign="middle" class="style28">PIN</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_per_pin" id="txt_per_pin" type="text" style="width:228px; height:20px; outline:none; padding:4px;" onkeypress="return isNumber(event)"/></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(29)</td>
            <td height="40" align="left" valign="middle" class="style28">Whether under Minority Community</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_minor" id="txt_minor" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
                        </select></td>
          </tr>
          
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(30)</td>
            <td height="40" align="left" valign="middle" class="style28">Last Examination Passed</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_last_exam" type="text" style="width:228px; height:20px; outline:none; padding:4px;" value="<?php echo $_SESSION['session_last_exam'];?>" readonly/></td>
          </tr>
          
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(31)</td>
            <td height="40" align="left" valign="middle" class="style28">Name of the School / College</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_school_name" id="txt_school_name" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(32)</td>
            <td height="40" align="left" valign="middle" class="style28">Roll Number / Index Number</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_school_roll" id="txt_school_roll" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(33)</td>
            <td height="40" align="left" valign="middle" class="style28">Registration Number</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_school_reg" id="txt_school_reg" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(34)</td>
            <td height="40" align="left" valign="middle" class="style28">Grade / Division Obtained</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_school_grade" id="txt_school_grade" type="text" style="width:228px; height:20px; outline:none; padding:4px;" /></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(35)</td>
            <td height="40" align="left" valign="middle" class="style28">Please choose if you are a Physically Challenged</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_ph" id="txt_ph" style="width:240px; height:30px; outline:none;" onchange="get_ph(this.value);">
              <option selected="selected" value="">Select Here</option>
              <option value="NO">NO</option>
              <option value="YES">YES</option>
                        </select></td>
          </tr>
          <tr style="display:none;" class="ph_score">
            <td height="40" align="center" valign="middle" class="style28">(36)</td>
            <td height="40" align="left" valign="middle" class="style28">PH Score</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28"><input name="txt_ph_score" id="txt_ph_score" type="text" style="width:228px; height:20px; outline:none; padding:4px;" onkeypress="return isNumber(event)"/></td>
          </tr>
         <tr>
            <td height="40" align="center" valign="middle" class="style28">(37)</td>
            <td height="40" align="left" valign="middle" class="style28">First Generation Learner ?</td>
            <td height="40" align="left" valign="middle" class="style28">:</td>
            <td height="40" align="left" valign="middle" class="style28"><select name="txt_f_gen" id="txt_f_gen" style="width:240px; height:30px; outline:none;">
              <option selected="selected" value="">Select Here</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
                        </select></td>
          </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">(38)</td>
            <td height="40" colspan="3" align="left" valign="middle" class="style28"><span class="style31">Subject Combination to be taken</span></td>
            </tr>
          <tr>
            <td height="40" align="center" valign="top" class="style28">&nbsp;</td>
            <td height="40" colspan="3" align="left" valign="top" class="style28 style30">Applicant may choose Elective Subject(s) as per his/her choice. But finally the said subject(s) will be offered to him/her on availability or eligibility at the time of admission.</td>
            </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">&nbsp;</td>
            <td height="40" colspan="3" align="left" valign="middle" class="style28"><table width="535" border="0" align="left" cellpadding="0" cellspacing="2">
              <tr>
                <td width="150" height="30" align="center" valign="middle" bgcolor="#15D0FF">Hons/Gen Subject</td>
                <td width="150" height="30" align="center" valign="middle" bgcolor="#FFFF6A">General Subject 1</td>
                <td width="150" height="30" align="center" valign="middle" bgcolor="#59FB65">General Subject 2</td>
                <td width="85" align="center" valign="middle" bgcolor="#FF9A35">Select</td>
              </tr>
              <?php foreach($s_group as $sub_group) {?>
              <tr>
                <td height="30" align="center" valign="middle" bgcolor="#88E8FF"><?php echo $sub_group['subject_1'];?></td>
                <td height="30" align="center" valign="middle" bgcolor="#FFFFCC"><?php echo $sub_group['subject_2'];?></td>
                <td height="30" align="center" valign="middle" bgcolor="#B9FDBE"><?php echo $sub_group['subject_3'];?></td>
                <td align="center" valign="middle" bgcolor="#FFCC99">
                  <label>
                    <input type="checkbox" name="txt_subj_grp" id="txt_subj_grp" value="<?php echo $sub_group['grp_id'];?>" checked/>
                    </label>
                                </td>
              </tr>
              <?php } ?>
              
            </table></td>
            </tr>
          <tr>
            <td height="50" align="center" valign="middle" class="style28">
              <label>
                <input type="checkbox" name="txt_terms" id="txt_terms" value="0" onclick="check_terms()" />
                </label>
                        </td>
            <td height="50" colspan="3" align="left" valign="middle" class="style32">I hereby declare that, all the entries made by me in this form are true. If anything found inapproprate, I understand that my candidature stands cancelled.</td>
            </tr>
          <tr>
            <td height="40" align="center" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="left" valign="middle" class="style28">&nbsp;</td>
            <td height="40" align="right" valign="middle" class="style28"><input name="Submit" type="submit" value="Proceed to Online Payment" style="outline:none; background-color:#00CC66; border:2px solid #009966; height:32px; width:190px; cursor:pointer;" /></td>
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
  <script>
  function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
  function check_terms() {
   var trms = $('#txt_terms').val();
   if (trms == 0) {
    $('#txt_terms').val(1);
   }
   else if (trms == 1) {
    $('#txt_terms').val(0);
   }
  }
function get_ph(val) {
if (val == 'YES') {
  $('.ph_score').css('display','table-row');
}
if (val == 'NO') {
  $('.ph_score').css('display','none');
}
}

function get_nation(val) {
if (val == 'others') {
  $('.other_nation').css('display','table-row');
}
if (val == 'indian') {
  $('.other_nation').css('display','none');
}
}
  </script>
<script type="text/javascript">
    function validate_last_form() {
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
                                if ($('#txt_name').val() == '') {
                                    errors.push('Please Enter Your Full Name.'); 
                                    
                                }
                                if ($('#txt_dob_day').val() == '') {
                                    errors.push('Please Select Your Day of Birth'); 
                                    
                                }
                                if ($('#txt_dob_month').val() == '') {
                                    errors.push('Please Select your Month of Birth.'); 
                                    
                                }
                                if ($('#txt_dob_year').val() == '') {
                                    errors.push('Please Select Your Year of Birth.'); 
                                    
                                }
                                if ($('#txt_sex').val() == '') {
                                    errors.push('Please Select Your Gender'); 
                                    
                                }
                                if ($('#txt_religion').val() == '') {
                                    errors.push('Please Select Your Religion.'); 
                                    
                                }
                                 if ($('#txt_nation').val() == '') {
                                    errors.push('Please Select Your Nationality.'); 
                                    
                                }
                                if ($('#txt_phn').val() == '') {
                                    errors.push('Please Enter Your Phone Number.'); 
                                    
                                }
                                if ($('#txt_marriage').val() == '') {
                                    errors.push('Please Select Your Marital Status.'); 
                                    
                                }
                                if ($('#txt_father').val() == '') {
                                    errors.push('Please Enter Your Father Name.'); 
                                    
                                }
                                if ($('#txt_mother').val() == '') {
                                    errors.push('Please Enter Your Mother Name.'); 
                                    
                                }
                                if ($('#txt_gurdian').val() == '') {
                                    errors.push('Please Enter your Gurdian Name.'); 
                                    
                                }
                                if ($('#txt_gurdian_rltn').val() == '') {
                                    errors.push('Please Enter your Relationship with Guardian.'); 
                                    
                                }
                                if ($('#txt_gurdian_occu').val() == '') {
                                    errors.push('Please Enter Guardian Occupation.'); 
                                    
                                }
                                if ($('#txt_gurdian_phn').val() == '') {
                                    errors.push('Please Enter Guardian Phone number.'); 
                                    
                                }
                                if ($('#txt_pre_vill').val() == '') {
                                    errors.push('Please Enter Your Present Vill/Street Name.'); 
                                    
                                }
                                if ($('#txt_pre_po').val() == '') {
                                    errors.push('Please Enter your Present Post Office.'); 
                                    
                                }
                                if ($('#txt_pre_ps').val() == '') {
                                    errors.push('Please Enter your Present Police Station Name.'); 
                                    
                                }
                                if ($('#txt_pre_dist').val() == '') {
                                    errors.push('Please Enter your Present District Name.'); 
                                    
                                }
                                if ($('#txt_pre_state').val() == '') {
                                    errors.push('Please Enter your Present State Name.'); 
                                    
                                }
                                if ($('#txt_pre_pin').val() == '') {
                                    errors.push('Please Enter your Present Pin Code.'); 
                                    
                                }
                                 if ($('#txt_per_vill').val() == '') {
                                    errors.push('Please Enter Your Permanent Vill/Street Name.'); 
                                    
                                }
                                if ($('#txt_per_po').val() == '') {
                                    errors.push('Please Enter your Permanent Post Office.'); 
                                    
                                }
                                if ($('#txt_per_ps').val() == '') {
                                    errors.push('Please Enter your Permanent Police Station Name.'); 
                                    
                                }
                                if ($('#txt_per_dist').val() == '') {
                                    errors.push('Please Enter your Permanent District Name.'); 
                                    
                                }
                                if ($('#txt_per_state').val() == '') {
                                    errors.push('Please Enter your Permanent State Name.'); 
                                    
                                }
                                if ($('#txt_per_pin').val() == '') {
                                    errors.push('Please Enter your Permanent Pin Code.'); 
                                    
                                }
                                if ($('#txt_minor').val() == '') {
                                    errors.push('Please Select Your Minority.'); 
                                    
                                }
                                if ($('#txt_school_name').val() == '') {
                                    errors.push('Please Select Your Nationality.'); 
                                    
                                }
                                if ($('#txt_school_roll').val() == '') {
                                    errors.push('Please Enter Your Roll Number.'); 
                                    
                                }
                                if ($('#txt_school_reg').val() == '') {
                                    errors.push('Please Enter Your Registration Number.'); 
                                    
                                }
                                if ($('#txt_school_grade').val() == '') {
                                    errors.push('Please Enter Your School Grade.'); 
                                    
                                }
                                if ($('#txt_ph_score').val() == '') {
                                    errors.push('Please Enter Your PH Score.'); 
                                    
                                }
                                if ($('#txt_f_gen').val() == '') {
                                    errors.push('Please Select If You Are a First Generation Learner.'); 
                                    
                                }
                                
                                if ($('#txt_terms').val() == '0') {
                                    errors.push('Please Check Terms and Condition.'); 
                                    
                                }
                                
                              } else {

                                if ($('#txt_name').val() == '') {
                                    errors.push('Please Enter Your Full Name.'); 
                                    
                                }
                                if ($('#txt_dob_day').val() == '') {
                                    errors.push('Please Select Your Day of Birth'); 
                                    
                                }
                                if ($('#txt_dob_month').val() == '') {
                                    errors.push('Please Select your Month of Birth.'); 
                                    
                                }
                                if ($('#txt_dob_year').val() == '') {
                                    errors.push('Please Select Your Year of Birth.'); 
                                    
                                }
                                if ($('#txt_sex').val() == '') {
                                    errors.push('Please Select Your Gender'); 
                                    
                                }
                                if ($('#txt_religion').val() == '') {
                                    errors.push('Please Select Your Religion.'); 
                                    
                                }
                                 if ($('#txt_nation').val() == '') {
                                    errors.push('Please Select Your Nationality.'); 
                                    
                                }
                                if ($('#txt_phn').val() == '') {
                                    errors.push('Please Enter Your Phone Number.'); 
                                    
                                }
                                if ($('#txt_marriage').val() == '') {
                                    errors.push('Please Select Your Marital Status.'); 
                                    
                                }
                                if ($('#txt_father').val() == '') {
                                    errors.push('Please Enter Your Father Name.'); 
                                    
                                }
                                if ($('#txt_mother').val() == '') {
                                    errors.push('Please Enter Your Mother Name.'); 
                                    
                                }
                                if ($('#txt_gurdian').val() == '') {
                                    errors.push('Please Enter your Gurdian Name.'); 
                                    
                                }
                                if ($('#txt_gurdian_rltn').val() == '') {
                                    errors.push('Please Enter your Relationship with Guardian.'); 
                                    
                                }
                                if ($('#txt_gurdian_occu').val() == '') {
                                    errors.push('Please Enter Guardian Occupation.'); 
                                    
                                }
                                if ($('#txt_gurdian_phn').val() == '') {
                                    errors.push('Please Enter Guardian Phone number.'); 
                                    
                                }
                                if ($('#txt_pre_vill').val() == '') {
                                    errors.push('Please Enter Your Present Vill/Street Name.'); 
                                    
                                }
                                if ($('#txt_pre_po').val() == '') {
                                    errors.push('Please Enter your Present Post Office.'); 
                                    
                                }
                                if ($('#txt_pre_ps').val() == '') {
                                    errors.push('Please Enter your Present Police Station Name.'); 
                                    
                                }
                                if ($('#txt_pre_dist').val() == '') {
                                    errors.push('Please Enter your Present District Name.'); 
                                    
                                }
                                if ($('#txt_pre_state').val() == '') {
                                    errors.push('Please Enter your Present State Name.'); 
                                    
                                }
                                if ($('#txt_pre_pin').val() == '') {
                                    errors.push('Please Enter your Present Pin Code.'); 
                                    
                                }
                                 if ($('#txt_per_vill').val() == '') {
                                    errors.push('Please Enter Your Permanent Vill/Street Name.'); 
                                    
                                }
                                if ($('#txt_per_po').val() == '') {
                                    errors.push('Please Enter your Permanent Post Office.'); 
                                    
                                }
                                if ($('#txt_per_ps').val() == '') {
                                    errors.push('Please Enter your Permanent Police Station Name.'); 
                                    
                                }
                                if ($('#txt_per_dist').val() == '') {
                                    errors.push('Please Enter your Permanent District Name.'); 
                                    
                                }
                                if ($('#txt_per_state').val() == '') {
                                    errors.push('Please Enter your Permanent State Name.'); 
                                    
                                }
                                if ($('#txt_per_pin').val() == '') {
                                    errors.push('Please Enter your Permanent Pin Code.'); 
                                    
                                }
                                if ($('#txt_minor').val() == '') {
                                    errors.push('Please Select Your Minority.'); 
                                    
                                }
                                if ($('#txt_school_name').val() == '') {
                                    errors.push('Please Select Your Nationality.'); 
                                    
                                }
                                if ($('#txt_school_roll').val() == '') {
                                    errors.push('Please Enter Your Roll Number.'); 
                                    
                                }
                                if ($('#txt_school_reg').val() == '') {
                                    errors.push('Please Enter Your Registration Number.'); 
                                    
                                }
                                if ($('#txt_school_grade').val() == '') {
                                    errors.push('Please Enter Your School Grade.'); 
                                    
                                }
                                
                                if ($('#txt_f_gen').val() == '') {
                                    errors.push('Please Select If You Are a First Generation Learner.'); 
                                    
                                }
                                if ($('#txt_terms').val() == '0') {
                                    errors.push('Please Check Terms and Condition.'); 
                                    
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