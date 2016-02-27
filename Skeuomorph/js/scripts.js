$(function() {
	$('.login').on('click', function(){
		alert('login');
		$("#outerform").dialog();
	});
	
	$('#uname, #email, #security_code').on('click', function(){
		$(this).val('');
		//alert($(this).attr('id'));
	}).on('blur', function(){
		if($(this).val() == ''){
			switch($(this).attr('id')){
				case 'uname':
				$(this).val('Username');
				break;
				
				case 'email':
				$(this).val('Email');
				break;
				
				case 'security_code':
				$(this).val('Security Code');
				break;
			}
		}
	});
	
	$('#askingform').submit(function(e){
		if($('#uname').val() == 'Username'){
			$(this).val('');
			alert('All fields must be completed.');
			e.preventDefault();
			return false;
		}
		
		if($('#email').val() == 'Email'){
			$(this).val('');
			alert('All fields must be completed.');
			e.preventDefault();
			return false;
		}
		
		if($('#security_code').val() == 'Security code'){
			$(this).val('');
			alert('All fields must be completed.');
			e.preventDefault();
			return false;
		}
	});
});