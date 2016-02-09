<?php
include('connection.php');
if($_REQUEST['id']=='1') {?>
<tr id="days">
				<td></td>
        <td class="center">
       <?php $sql = 'SELECT * FROM td_days WHERE cat_id='.$_REQUEST['data_id'];
$query = mysql_query($sql, $con) or die(mysql_error());
$data = mysql_fetch_assoc($query);
?>
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"><?php echo $data['days1'];?></textarea>  
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } elseif($_REQUEST['id']=='2')
{
?>
				<tr id="days">
                <td></td>
        <td class="center">
         <?php $sql = 'SELECT * FROM td_days WHERE cat_id='.$_REQUEST['data_id'];
$query = mysql_query($sql, $con) or die(mysql_error());
$data = mysql_fetch_assoc($query);
?>
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"><?php echo $data['days1'];?></textarea><br/> 
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="idesc"><?php echo $data['days2'];?></textarea><br/>  
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } else if($_REQUEST['id']=='3')
{?>
<tr id="days">
                <td></td>
        <td class="center">
        <?php $sql = 'SELECT * FROM td_days WHERE cat_id='.$_REQUEST['data_id'];
$query = mysql_query($sql, $con) or die(mysql_error());
$data = mysql_fetch_assoc($query);
?>
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"><?php echo $data['days1'];?></textarea><br/>  
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="idesc"><?php echo $data['days2'];?></textarea><br/> 
                    Day3 Itenerary : <textarea name="bdesc3" id="inputSuccess1" class="idesc"><?php echo $data['days3'];?></textarea> <br/>  
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } else if($_REQUEST['id']=='4')
{?>
<tr id="days">
                <td></td>
        <td class="center">
        <?php $sql = 'SELECT * FROM td_days WHERE cat_id='.$_REQUEST['data_id'];
$query = mysql_query($sql, $con) or die(mysql_error());
$data = mysql_fetch_assoc($query);
?>
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"><?php echo $data['days1'];?></textarea> <br/> 
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="idesc"><?php echo $data['days2'];?></textarea><br/> 
                    Day3 Itenerary : <textarea name="bdesc3" id="inputSuccess1" class="idesc"><?php echo $data['days3'];?></textarea><br/> 
                    Day4 Itenerary : <textarea name="bdesc4" id="inputSuccess1" class="idesc"><?php echo $data['days4'];?></textarea><br/>   
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } else if($_REQUEST['id']=='5')
{?>        
<tr id="days">
                <td></td>
        <td class="center">
        <?php $sql = 'SELECT * FROM td_days WHERE cat_id='.$_REQUEST['data_id'];
$query = mysql_query($sql, $con) or die(mysql_error());
$data = mysql_fetch_assoc($query);
?>
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="desc"><?php echo $data['days1'];?></textarea><br/>  
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="desc"><?php echo $data['days2'];?></textarea><br/> 
                    Day3 Itenerary : <textarea name="bdesc3" id="inputSuccess1" class="desc"><?php echo $data['days3'];?></textarea><br/> 
                    Day4 Itenerary : <textarea name="bdesc4" id="inputSuccess1" class="desc"><?php echo $data['days4'];?></textarea> <br/> 
                    Day5 Itenerary : <textarea name="bdesc5" id="inputSuccess1" class="desc"><?php echo $data['days5'];?></textarea><br/>  
        </td>
        <td class="center">  
        </td>
        </tr>

<?php } ?>