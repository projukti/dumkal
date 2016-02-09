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
            <a href="#">Packages</a>
        </li>
    </ul>
</div>

<form name="news" id="news" action="<?php echo base_url();?>admin.php/dashboard/add_news" method="post" enctype="multipart/form-data" onsubmit="return validate_packages()">
<input type="hidden" name="category" id="category" value="" />
  <div class="row" id="about_contant" style="display:block;">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
         <h2><i class="glyphicon glyphicon-edit"></i> Add Packages</h2>

       
    </div>
    <div class="box-content">
   
    <table class="table table-striped table-bordered bootstrap-datatable responsive">
    <thead>
    <tr>
        <th>Content type</th>
        <th>Write here</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Package Category</td>
        <td class="center">
    <div class="control-group">
                    

                    <div class="controls">
                     <select id="selectError" data-rel="chosen" name="txt_nCategory">
                            <option value="Inbound">Inbound</option>
                           
                            <option value="Outbound">Outbound</option>
                        
                        </select>
                       
                    </div>
                </div>
                </td>
        
        
       
        <td class="center">
            
           
        </td>
    </tr>
    <tr>
        <td>Package Name</td>
        <td class="center">
		
                    <input type="text" name="txt_news" class="form-control news_name" id="inputSuccess1">
                
		</td>
		
		
       
        <td class="center">
            
           
        </td>
    </tr>
	<tr>
        <td>Package picture</td>
         <td class="center">
		
                   <input type="file" name="image_file1" id="exampleInputFile" class="image_name">
                
		</td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>Package Small Description</td>
        <td class="center">
        <textarea name="sdesc" id="inputSuccess1" class="sdesc"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td>Package Description</td>
        <td class="center">
		<textarea name="bdesc" id="inputSuccess1" class="desc"></textarea></td>
       
        <td class="center">
           
        </td>
    </tr>
	 <tr>
        <td>Package Price</td>
        <td class="center">
                    <input type="text" name="txt_price" class="form-control p_price" id="inputSuccess1">   
        </td>
        <td class="center">  
        </td>
    </tr>
     <tr>
        <td>Departure From</td>
        <td class="center">
                    <input type="text" name="txt_dep" class="form-control txt_dep" id="inputSuccess1">   
        </td>
        <td class="center">  
        </td>
    </tr>
     <tr>
        <td>Itinerary</td>
        <td class="center">
                    <input type="text" name="txt_iti" class="form-control txt_iti" id="inputSuccess1">   
        </td>
        <td class="center">  
        </td>
    </tr>
    <tr>
        <td>Package Inclusion</td>
        <td class="center">
                    <input type="text" name="txt_include" class="form-control txt_include" id="inputSuccess1">   
        </td>
        <td class="center">  
        </td>
    </tr>
	 <tr>
        <td>Package Days</td>
        <td class="center">
                    <div class="control-group">
                    <div class="controls">
                     <select id="selectError1" data-rel="chosen" name="txt_days" onchange="return day_itenerary();">
                     <option value="">Select Days</option>
                     <?php for($i=1; $i<=5; $i++) { ?>
                            <option value="<?php echo $i;?>">Day <?php echo $i;?></option>
                          <?php } ?>
                        </select>
                    </div>
                </div>
        </td>
        <td class="center">
        </td>
    </tr>
    <tr id="days">
        
    </tr>
	 <tr>
        <td>Submit here >></td>
        <td class="center">
		<button type="submit" class="btn btn-success">
                <i class="glyphicon glyphicon-zoom-in icon-white"></i>
                Submit
            </button>
       
        <td class="center">
           
        </td>
    </tr>
    <tr>
        <td></td>
        <td class="center"><a href="<?php echo base_url();?>admin.php/dashboard/package_view" class="btn btn-warning">View Packages</a></td>
       
       
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div>
	
	  
</form>
<div id="lazy_load"><img src="<?php echo base_url();?>/assets/admin/img/ajax-loaders/ajax-loader-7.gif" title="img/ajax-loaders/ajax-loader-7.gif" class="cvvhelp" style="display:none;" /></div>

<?php require('footer.php'); ?>
<script type="text/javascript">
	function day_itenerary() {
var days = $('#selectError1').val(); 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("days").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","<?php echo base_url();?>ajax_data.php?id="+days,true);
xmlhttp.send();
}
</script>
