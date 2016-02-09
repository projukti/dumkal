<?php include('header.php');
$stream = $this->db->query('SELECT * FROM td_student_stream WHERE stream_id ='.$profile[0]['stream'])->result_array();
?>


<div class="container">
    <div class="row">
        <form action="">
            <div class="input-group-inline">
                <label for=""></label>
                <img <?php if($profile[0]['student_image'] == '') { ?>src="<?php echo base_url();?>assets/employee/img/blank_image.jpg"<?php } else { ?>src="<?php echo base_url();?>student_image/<?php echo $profile[0]['student_image'];?>" <?php } ?> width="200" height="170">
            </div>
            <div class="input-group-inline">
                <label for=""></label>
                <img <?php if($profile[0]['student_signature'] == '') { ?>src="<?php echo base_url();?>assets/employee/img/blank_image.jpg"<?php } else { ?>src="<?php echo base_url();?>student_image/<?php echo $profile[0]['student_signature'];?>" <?php } ?>  style="clear:left;" width="200" height="130">
            </div>
            <div class="box-button">
                    <a href="<?php echo base_url();?>index.php/student/Student_details/transfer_student/<?php echo $profile[0]['stud_id'];?>"><button class="details">ID Card</button></a>
                    <a href="<?php echo base_url();?>index.php/student/Student_details/delete_student/<?php echo $profile[0]['stud_id'];?>"><button class="details">Library Card</button></a>
            </div>
        </form>
    </div>
    <div class="row">
        <form action="">
            <div class="input-group-inline">
                <label for="">ID :</label>
                <strong><?php echo $profile[0]['student_id'];?></strong>
            </div>
            <div class="input-group-inline">
                <label for="">Name :</label>
                <?php echo $profile[0]['name'];?>
            </div>
            <div class="input-group-inline">
                <label for="">Roll :</label>
                <?php echo $profile[0]['roll'];?>
            </div>
            <div class="input-group-inline">
                <label for="">Sex :</label>
                <?php echo $profile[0]['sex'];?>
            </div>
            <div class="input-group-inline">
                <label for="">Caste :</label>
                <?php echo $profile[0]['caste'];?>
            </div>
            <div class="input-group-inline">
                <label for="">Religion :</label>
                <?php echo $profile[0]['religion'];?>
            </div>
             <div class="input-group-inline">
                <label for="">DOB :</label>
                <?php echo $profile[0]['dob'];?>
            </div>
             <div class="input-group-inline">
                <label for="">Vill :</label>
                <?php echo $profile[0]['vill'];?>
            </div>
             <div class="input-group-inline">
                <label for="">PO :</label>
                <?php echo $profile[0]['po'];?>
            </div>
            <div class="input-group-inline">
                <label for="">PS :</label>
                <?php echo $profile[0]['ps'];?>
            </div>
            <div class="input-group-inline">
                <label for="">State :</label>
                <?php echo $profile[0]['state'];?>
            </div>
            <div class="input-group-inline">
                <label for="">District :</label>
                <?php echo $profile[0]['dist'];?>
            </div>
            
        </form>
    </div>
    <div class="row">
        <form action="">
            <div class="input-group-inline">
                <label for="">Stream :</label>
                <?php echo $stream[0]['stream_name'];?>
            </div>
            <div class="input-group-inline">
                <label for="">1st Subject :</label>
                <?php echo $profile[0]['subject1'];?>
            </div>
            <div class="input-group-inline">
                <label for="">2nd Subject :</label>
                <?php echo $profile[0]['subject2'];?>
            </div>
            <div class="input-group-inline">
                <label for="">3rd Subject :</label>
               <?php echo $profile[0]['subject3'];?>
            </div>
            <div class="input-group-inline">
                <label for="">Admission Date :</label>
               <?php echo $profile[0]['date'];?>
            </div>
            <div class="input-group-inline">
                <label for="">Registration Date :</label>
                <?php echo $profile[0]['registration_date'];?>
            </div>
             <div class="input-group-inline">
                <label for="">Registration Number :</label>
                <?php if($profile[0]['registration_no'] == '') echo 'N/A'; else echo $profile[0]['registration_no'];?>
            </div>
             <div class="input-group-inline">
                <label for="">Registration Year :</label>
                <?php echo $profile[0]['reg_year'];?>
            </div>
             <div class="input-group-inline">
                <label for="">PH % :</label>
                <?php if($profile[0]['ph'] == '') echo 'N/A'; else echo $profile[0]['ph'];?>
            </div>
        </form>
    </div>
</div>
<footer class="container">Powered by <a class="micro-link" href="http://projukti.info">Projukti</a>.</footer>
</body>
</html>