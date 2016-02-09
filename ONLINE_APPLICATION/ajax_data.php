<?php  error_reporting(0);
if($_REQUEST['id']=='1')
{
?><tr id="days">
				<td></td>
        <td class="center">
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"></textarea>  
        </td>
        <td class="center">  
        </td>
        </tr>
<?php }else if($_REQUEST['id']=='2')
{
?>
				<tr id="days">
                <td></td>
        <td class="center">
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"></textarea><br/> 
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="idesc"></textarea><br/>  
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } else if($_REQUEST['id']=='3')
{?>
<tr id="days">
                <td></td>
        <td class="center">
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"></textarea><br/>  
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="idesc"></textarea><br/> 
                    Day3 Itenerary : <textarea name="bdesc3" id="inputSuccess1" class="idesc"></textarea> <br/>  
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } else if($_REQUEST['id']=='4')
{?>
<tr id="days">
                <td></td>
        <td class="center">
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="idesc"></textarea> <br/> 
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="idesc"></textarea><br/> 
                    Day3 Itenerary : <textarea name="bdesc3" id="inputSuccess1" class="idesc"></textarea><br/> 
                    Day4 Itenerary : <textarea name="bdesc4" id="inputSuccess1" class="idesc"></textarea><br/>   
        </td>
        <td class="center">  
        </td>
        </tr>
<?php } else if($_REQUEST['id']=='5')
{?>        
<tr id="days">
                <td></td>
        <td class="center">
                   Day1 Itenerary : <textarea name="bdesc1" id="inputSuccess1" class="desc"></textarea><br/>  
                    Day2 Itenerary : <textarea name="bdesc2" id="inputSuccess1" class="desc"></textarea><br/> 
                    Day3 Itenerary : <textarea name="bdesc3" id="inputSuccess1" class="desc"></textarea><br/> 
                    Day4 Itenerary : <textarea name="bdesc4" id="inputSuccess1" class="desc"></textarea> <br/> 
                    Day5 Itenerary : <textarea name="bdesc5" id="inputSuccess1" class="desc"></textarea><br/>  
        </td>
        <td class="center">  
        </td>
        </tr>

<?php } ?>