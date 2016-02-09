function show_basic() {

$('#lazy_load')
    .show({duration: 0, queue: true})
    .delay(2000)
    .hide({duration: 0, queue: true});
$('.cvvhelp')
    .show({duration: 0, queue: true})
    .delay(2000)
    .hide({duration: 0, queue: true});
var opt = $('#selectError').val();
if ( opt == 'about') { 
$('#about_contant').css('display','block');
$('#content_type').html('About Us Content');
$('#privacy_contant').css('display','none');
$('#contact_contant').css('display','none');
$('#career_contant').css('display','none');
$('#blank_contant').css('display','none');
$('#category').val('About');
}
else if( opt == 'privacy') {
$('#privacy_contant').css('display','block');
$('#content_type').html('Privacy Page Content');
$('#about_contant').css('display','none');
$('#contact_contant').css('display','none');
$('#career_contant').css('display','none');
$('#blank_contant').css('display','none');
$('#category').val('Privacy');
}
else if (opt == 'career') { 
$('#career_contant').css('display','block');
$('#content_type').html('Career Page Content');
$('#about_contant').css('display','none');
$('#privacy_contant').css('display','none');
$('#contact_contant').css('display','none');
$('#blank_contant').css('display','none');
$('#category').val('Career');
}
else {
$('#blank_contant').css('display','block');
$('#content_type').html('About Us Content');
$('#about_contant').css('display','none');
$('#privacy_contant').css('display','none');
$('#contact_contant').css('display','none');
$('#career_contant').css('display','none');
$('#category').val('');
 }	
}

function form_submit() {
var page_ajax = 'send_mail.php';
		//alert($('#order_form').serialize());
		$.ajax({type:'POST', url: 'page_submit', data:$('#cms_page').serialize(), success: function(response) {
			  //alert(response);
	//$('#txt_mission').removeAttr('readonly');

    

        }});
		return false;                                   
                                    //return true;                                
                               
}
function add_service() {
var page_ajax = 'send_mail.php';
		//alert($('#order_form').serialize());
		$.ajax({type:'POST', url: 'add_service', data:$('#service_form').serialize(), success: function(response) {
			  //alert(response);
	//$('#txt_mission').removeAttr('readonly');

    

        }});
		return false;                                   
                                    //return true;                                
                               
}
