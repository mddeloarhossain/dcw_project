$(document).ready(function(){

	$('#ShowSignUpForm').click(function(){
		$('#login_form_box').hide();
		$('#register_form_box').show();
	});

	$('#ShowSignInForm').click(function(){
		$('#register_form_box').hide();
		$('#login_form_box').show();
	});

	$('#ShowforgottenForm').click(function(){
		$('#login_form_box').hide();
		$('#forgotten_form_box').show();
	});

	$('#Back').click(function(){
		$('#forgotten_form_box').hide();
		$('#login_form_box').show();
	});
});