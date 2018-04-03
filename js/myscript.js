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

$(document).ready(function(){
	$('#country').on('change',function(){
		var COUNTRYID = $(this).val();
		if(COUNTRYID =='')
		{
			$('#state').prop('disabled',true);
		}
		else
		{
			$('state').prop('disabled',false);
		}
	});
});
