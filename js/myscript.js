$(function(){
	$('#frmRegistration').submit(function(){
		if($.trim($('#username').val()) == ''){
			$('#msg_').html('&nbsp;X: Username khali nahi chodo');
			$('#username').val('');
			$('#username').focus();
			$bool = false;
		} else if($.trim($('#createpassword').val()) == ''){
			$('#msg_').html('&nbsp;X: Password khali nahi chodo');
			$('#createpassword').val('');
			$('#createpassword').focus();
			$bool = false;
		} else {
			$bool = true;
		}
		return $bool;
	});
});