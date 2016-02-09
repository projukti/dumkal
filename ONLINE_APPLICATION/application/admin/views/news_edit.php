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
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<form name="cms_page" id="category_page" action="<?php echo base_url();?>admin.php/Edit/category_submit" method="post" enctype="multipart/form-data" onsubmit="return category_submit();">
<input type="hidden" name="category" id="category" value="<?php echo $category[0]['category_id'];?>" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Service information</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info">Update Location Entry </div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Category name</td>
        <td class="center">
		
                    <input type="text" name="txt_location" class="form-control" id="inputSuccess1" value="<?php echo $category[0]['location'];?>">
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
    
    <tr>
        <td>Contact Number</td>
        <td class="center">
		<input type="text" name="txt_phn" class="form-control" id="inputSuccess1" value="<?php echo $category[0]['phn_no'];?>"></td>
       
        <td class="center">
           
        </td>
    </tr>
	 <tr>
        <td>Contact Person</td>
        <td class="center">
		<input type="text" name="txt_person" class="form-control" id="inputSuccess1" value="<?php echo $category[0]['contact_person'];?>"></td>
       
        <td class="center">
           
           
           
        </td>
    </tr>
	 <tr>
        <td>Contact Email</td>
        <td class="center">
		<input type="text" name="txt_email" class="form-control" id="inputSuccess1" value="<?php echo $category[0]['email'];?>"></td>
       
        <td class="center">
           
           
        </td>
    </tr>
	<tr>
        <td>Location Type</td>
        <td class="center">
		 <select id="selectError" name="txt_lcat_typ" data-rel="chosen">
		 <option value="<?php echo $category[0]['type'];?>"><?php echo $category[0]['type'];?></option>
		 <option value="">Select</option>
                           
							<option value="International">International</option>
							<option value="National">National</option>
							
                            
                        </select>
       
        <td class="center">
           
           
        </td>
    </tr>
	 
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Category entry
            </button><br/>
			<div id="status" style="color:red; font-size:16px; text-align:center;" align="left"></div>
       
        <td class="center">
           
        </td>
    </tr>
    
    </tbody>
    </table>
	</form>
	<form name="cms_page" id="category_page" action="<?php echo base_url();?>admin.php/Edit/category_imagesubmit" method="post" enctype="multipart/form-data" >
	<input type="hidden" name="category" id="category" value="<?php echo $category[0]['category_id'];?>" />
	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
     <div class="alert alert-info">Update Location Image</div>
    
    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
        <td class="  sorting_1">Uploaded Image </td>
        <td class="center ">
		
                    <img src="<?php echo base_url();?>category/<?php echo $category[0]['cat_image'];?> " />
                
		</td>
		
		
       
        <td class="center ">
            
           
        </td>
    </tr><tr class="even">
        <td class="  sorting_1">Upload New Image</td>
        <td class="center ">
		<input type="file" name="image_file1" id="exampleInputFile"></td>
       
        <td class="center ">
           
           
        </td>
    </tr>
	<tr class="odd">
        <td class="  sorting_1">Upload Image here &gt;&gt;</td>
        <td class="center ">
		<button class="btn btn-success" type="submit">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Image Update
            </button><br>
			
       
        </td><td class="center ">
           
        </td>
    </tr></tbody></table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	  
</form>
<div id="lazy_load"><img src="<?php echo base_url();?>/assets/admin/img/ajax-loaders/ajax-loader-7.gif" title="img/ajax-loaders/ajax-loader-7.gif" class="cvvhelp" style="display:none;" /></div>

<?php require('footer.php'); ?>

