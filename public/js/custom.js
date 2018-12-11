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
