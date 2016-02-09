<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spine List</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}
-->
</style></head>

<body>
<table width="793" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="22" height="920" align="center" valign="top">&nbsp;</td>
    <td width="751" height="920" align="left" valign="top"><table width="760" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="752" height="42">&nbsp;</td>
      </tr>
      <tr>
        <td width="752" height="1027" align="left" valign="top">
        <?php if (empty($spine)){?>                     
                        	<div align="center">No data found</div>                            
						<?php }else {?>
        <?php foreach ($spine as $spine){?>
        <table width="152" border="0" cellspacing="0" cellpadding="0" style="float:left;padding-right:11px;padding-left:11px;">
          <tr>
            <td width="144" height="79" align="center" valign="middle" class="style1">
           <?php echo $spine->classification_no."<br>".$spine->author_mark."<br>".$spine->acc_no; ?>
            <td width="8" height="79" align="center" valign="middle" class="style1">&nbsp;</td>
            </tr>
        </table>
        <?php }}?>
        </td>
      </tr>
      <tr>
        <td width="752" height="43">&nbsp;</td>
      </tr>
    </table></td>
    <td width="11" height="1112" align="center" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>
