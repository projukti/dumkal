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
            <a href="<?php echo base_url();?>admin.php/dashboard/student_list">Student List</a>
        </li>
    </ul>
</div>

 <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Showing Applied Student's information</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr><th>Application Id</th>
        <th>Student Name</th>
        <th>Application Date</th>
        <th>Student DOB</th>
        <th>Student Caste</th>
        <th>Student Sex</th>
        <th>Student Phone</th>
        <th>Student Address</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	<?php foreach ($data as $value) { ?>
    <tr>
        
        <td class="center">
		
                   <?php echo $value['aply_id'] ;?></br>
                   <a href="<?php echo base_url();?>admin.php/Dashboard/student_details/<?php echo $value['aply_id'] ;?>"><span class="label label-info">View Details</span>
                
		</td>
        <td class="center">
        
                   <?php echo $value['name'] ;?>
                
        </td>
        <td class="center">
        
                  <?php echo $value['adate'] ;?>
                
        </td>
        <td class="center">
        
                   <?php echo $value['dob'];?>
                
        </td>
        <td class="center">
        
                  <?php echo $value['caste'] ;?>
                
        </td>
        
        <td class="center">
        
                 <?php echo $value['sex'] ;?>
                
        </td>
        <td class="center">
        
                 <?php echo $value['phn'] ;?>
                
        </td>
        <td class="center">
        
                 Vill : <?php echo $value['per_vill'] ;?><br/>
                 P.O : <?php echo $value['per_po'] ;?><br/>
                 P.S : <?php echo $value['per_ps'] ;?><br/>
                 Dist : <?php echo $value['per_dist'] ;?><br/>
                 State : <?php echo $value['per_state'] ;?><br/>
                 Pin : <?php echo $value['per_pin'] ;?><br/>
        </td>
       
        <td class="center">
            
            <a class="btn btn-info" href="<?php echo base_url();?>admin.php/Dashboard/edit_packages/<?php echo $value['aply_id'] ;?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit
            </a>
            <a class="btn btn-danger" href="<?php echo base_url();?>admin.php/Dashboard/delete_package/<?php echo $value['aply_id'] ;?>">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                Delete
            </a>
        </td>
    </tr>
    <?php } ?>
	
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
<div id="lazy_load"><img src="<?php echo base_url();?>/assets/admin/img/ajax-loaders/ajax-loader-7.gif" title="img/ajax-loaders/ajax-loader-7.gif" class="cvvhelp" style="display:none;" /></div>

<?php require('footer.php'); ?>

