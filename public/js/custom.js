//Show loader on load
$(window).on('load',function(){
	$('#preloader').show();
});

$(document).ready(function(){
	//hide loader
	$('#preloader').remove();

	var contact = $('#contact-confirmation').val();
	if(contact == 'ok'){
		$('#contactModal').modal('show');
		$('#contactModal').hide('slow');

	}
	
	//Show error on mobile only
	if(isMobile()){
		$('#error-contact-modal').modal('show');
	}

	
});


//Toggle navbar mobile
 function toggleNav(){
 	var className = $('#nav-icon').hasClass('fa-bars');
 	if(className){
 		$('#nav-icon').removeClass('fa-bars');
 		$('#nav-icon').addClass('fa-times');
 	}else{

 		$('#nav-icon').removeClass('fa-times');
 		$('#nav-icon').addClass('fa-bars');
 	}

 }

 //detect mobile
function isMobile() {
  try{ document.createEvent("TouchEvent"); return true; }
  catch(e){ return false; }
}