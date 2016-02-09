<div class="container">
    <div class="row">
        
    </div>
    <div class="row">
    <?php foreach($result as $result) { ?>
    <span class="msg_text"><?php echo $this->session->flashdata('messageup')."<br>";?></span>
        <form action="settings/update_settings" method="post">
            <fieldset>
                <legend>Settings</legend>                
            <div class="input-group-inline">
                <label for=""> Book To Student</label>
                <input type="text" name="to_student" value="<?php echo $result->to_student;?>"/>
            </div>    
            <div class="input-group-inline">
                <label for="">Book to Staff</label>
                <input type="text" name="to_teacher" value="<?php echo $result->to_teacher;?>"/>
            </div>
            <div class="input-group-inline">
                <label for="">Fine (Per Day Rs/-)</label>
                <input type="text" name="fine_student" value="<?php echo $result->fine_student;?>"/>
            </div>
            <button type="submit">Update</button> 
            </fieldset>
        </form>
        <?php }?>
    </div>
    <div class="row">
        
    </div>
</div>

