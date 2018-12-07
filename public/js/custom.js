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
