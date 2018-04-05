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

	$('#country').change(function(){
		if($(this).val() == ''){
			$('#state').prop('disabled', true);
		} else {
			$('#state').prop('disabled', false);
		}
	});


	$('#unit').change(function(){
		if($(this).val()==''){
			$('#categoryname').prop('disabled', true);

		}else{
			$('#categoryname').prop('disabled', false);
		}
	});

});

