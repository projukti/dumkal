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
                    <h2><i class="glyphicon glyphicon-th"></i> Start Application</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                   <a href="<?php echo base_url();?>admin.php/Dashboard/web_visibility_yes"> <img src="<?php echo base_url();?>assets/admin/img/www2.jpg" width="400" height="350"></a><br/><?php if($webdata[0]['publish'] == 1) { ?><center><img src="<?php echo base_url();?>assets/admin/img/true.png" width="120" height="120"></center><?php } ?>
                    
                </div>
            </div>
            
        </div>
        <!--/span-->

        <div class="box col-md-6">
            <div class="box-inner">
                <div data-original-title="" class="box-header well">
                    <h2><i class="glyphicon glyphicon-th"></i> Close Application</h2>

                    <div class="box-icon">
                        
                        <a class="btn btn-minimize btn-round btn-default" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
                        <a class="btn btn-close btn-round btn-default" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                </div>
               <div class="box-content">
                   <a href="<?php echo base_url();?>admin.php/Dashboard/web_visibility_no"> <img src="<?php echo base_url();?>assets/admin/img/site-down-error.png"></a><br/><?php if($webdata[0]['publish'] == 0) { ?><center><img src="<?php echo base_url();?>assets/admin/img/true.png" width="120" height="120"></center><?php } ?>
                </div>
            </div>
        </div>
         
        
       
      
                <!--/span-->

    </div>
<?php require('footer.php'); ?>

