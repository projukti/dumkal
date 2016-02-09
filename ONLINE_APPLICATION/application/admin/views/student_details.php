<?php require('header.php'); 
?>
<style>
#lazy_load {
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: black;
    z-index: 1001;
    -moz-opacity: 0.8;
    opacity: .80;
    filter: alpha(opacity=80);
}
.cvvhelp {
    border: medium none;
    display: none;
    height: auto;
    left: 50%;
    margin: 0 0 0 -155px;
    padding: 0;
    position: fixed;
    text-align: left;
    top: 50%;
    width: auto;
    z-index: 1002;
}
</style>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="<?php echo base_url();?>admin.php/dashboard/student_list">Student Details</a>
        </li>
    </ul>
</div>

<div class="row">
        <div class="box col-md-6">
                    <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-th"></i> Student General Details</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-4"><h6>Name</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['name'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>DOB</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['dob'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Sex</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['sex'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Caste</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['caste'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Religion</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['religion'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Nationality</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php if($data[0]['nationality_name'] == 'na') { echo $data[0]['nationality']; } else { echo $data[0]['nationality_name'];}?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Phone</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['phn'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Marital Status</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['marital'];?></h6></div>
                    </div>
                   <div class="row">
                        <div class="col-md-4"><h6>Father's Name</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['father_name'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Mother's Name</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['mother_name'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Guardian Name</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['g_name'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Guardian Reltn</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['g_rltn'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Guardian Occupation</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['g_occu'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Guardian Phone</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['g_phn'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Minority?</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['minority'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>PH </h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['ph_score'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Last Exam Passed</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['last_exam'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>School Name</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['school_name'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>School Roll</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['school_roll'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Registration No</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['school_reg'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Grade</h6></div>
                        <div class="col-md-4"><h6>:</h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['school_grade'];?></h6></div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!--/span-->

        <div class="box col-md-6">
            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-th"></i> Student Present Address</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
               <div class="box-content">
                    <div class="row">
                        <div class="col-md-4"><h6>Village / Street</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['pre_vill'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Post Office</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['pre_po'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Police Station</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['pre_ps'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>District</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['pre_dist'];?></h6></div>
                    </div>

                     <div class="row">
                        <div class="col-md-4"><h6>state</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['pre_state'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Pin</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['pre_pin'];?></h6></div>
                    </div>
                    
                </div>
            </div>
        </div>
         <div class="box col-md-6">
            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-th"></i> Student Permanent Address</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
               <div class="box-content">
                    <div class="row">
                        <div class="col-md-4"><h6>Village / Street</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_vill'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Post Office</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_po'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Police Station</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_ps'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>District</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_dist'];?></h6></div>
                    </div>

                     <div class="row">
                        <div class="col-md-4"><h6>State</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_state'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Pin</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_pin'];?></h6></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php 
        $sApply = $this->db->query('SELECT * FROM td_student_general_details WHERE stud_gen_id='.$data[0]['stud_gen_id'])->result_array();
        ?>
         <div class="box col-md-6">
            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-th"></i> Student Application Details</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
               <div class="box-content">
                    <div class="row">
                        <div class="col-md-4"><h6>Application Date</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['adate'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Stream Name</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['stream_name'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Chosen Subject</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['hons_sub'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Last Exam</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['last_exam'];?></h6></div>
                    </div>

                     <div class="row">
                        <div class="col-md-4"><h6>Stream</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['stream'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Hons. Subject Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['marks'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Year</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['year'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Subject 1</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_1'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Sub 1 Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_1_total'];?></h6></div>
                    </div>
                     <div class="row">
                        <div class="col-md-4"><h6>Best Subject 2</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_2'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Sub 2 Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_2_total'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Subject 3</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_3'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Sub 3 Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_3_total'];?></h6></div>
                    </div>
                     <div class="row">
                        <div class="col-md-4"><h6>Best Subject 4</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_4'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Sub 4 Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_4_total'];?></h6></div>
                    </div>
                     <div class="row">
                        <div class="col-md-4"><h6>Best Subject 5</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_5'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Sub 5 Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_5_total'];?></h6></div>
                    </div>
                     <div class="row">
                        <div class="col-md-4"><h6>Best Subject 6</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_6'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Best Sub 6 Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_6_total'];?></h6></div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-4"><h6>Stream Name</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $sApply[0]['best_sub_6_total'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Chosen Subject</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_ps'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Last Exam</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_dist'];?></h6></div>
                    </div>

                     <div class="row">
                        <div class="col-md-4"><h6>Stream</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_state'];?></h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h6>Hons. Subject Marks</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6><?php echo $data[0]['per_pin'];?></h6></div>
                    </div> -->
                </div>
            </div>
        </div>
       <!--  <div class="box col-md-6 col-md-offset-6">

            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-th"></i> Net Profit Calculation</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <div class="row">
                        <div class="col-md-4"><h6>Gross Profit Done</h6></div>
                        <div class="col-md-4"><h6></h6></div>
                        <div class="col-md-4"><h6>Rs.  0</h6></div>
                    </div>
                    
                </div>
            </div>
        </div> -->
                <!--/span-->

    </div>
<?php require('footer.php'); ?>

