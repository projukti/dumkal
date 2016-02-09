<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
<?php } ?>
</div><!--/fluid-row-->
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

  

    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; 2015 - <?php echo date('Y') ?></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="http://usman.it/free-responsive-admin-template">Projukti</a></p>
    </footer>
<?php } ?>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo base_url();?>/assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url();?>/assets/admin/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url();?>/assets/admin/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url();?>/assets/admin/js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url();?>/assets/admin/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url();?>/assets/admin/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url();?>/assets/admin/bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url();?>/assets/admin/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url();?>/assets/admin/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url();?>/assets/admin/js/charisma.js"></script>

<script src="<?php echo base_url();?>/assets/admin/js/script.js"></script>
<script src="<?php echo base_url();?>/assets/admin/js/jquery.magnific-popup.min.js"></script> 
<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script>//tinymce.init({selector:'textarea'});</script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/admin/js/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/admin/css/sweet-alert.css">
<script type="text/javascript">

$( document ).ready(function() {
    days_itenerary1();
});

  function validate_packages() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                                 
                                    if ($('.txt_news').val() == '') {
                                    errors.push('Please Enter Package Title.'); 
                                    
                                }
                                if ($('.image_name').val() == '') {
                                    errors.push('Please Select Package Image'); 
                                    
                                }
                                if ($('.sdesc').val() == '') {
                                    errors.push('Please Enter Package Short Description'); 
                                    
                                } 
                                if ($('.desc').val() == '') {
                                    errors.push('Please Enter Package Description'); 
                                    
                                }
                                 if ($('.p_price').val() == '') {
                                    errors.push('Please Enter Package Price'); 
                                    
                                } 
                                if ($('.txt_dep').val() == '') {
                                    errors.push('Please Enter Departure Location'); 
                                    
                                } 
                                if ($('.txt_iti').val() == '') {
                                    errors.push('Please Enter Itineraries'); 
                                    
                                } 
                                if ($('.txt_include').val() == '') {
                                    errors.push('Please Enter Package Includes'); 
                                    
                                } 
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
 
</script>
</body>
</html>
