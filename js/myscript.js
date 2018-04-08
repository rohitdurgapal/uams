$(function(){
//for registration	
	$('#frmRegistration').submit(function(){
		if($.trim($('#username').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter User Name');
			$('#username').val('');
			$('#username').focus();
			$bool = false;
		} else if($.trim($('#createpassword').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Password');
			$('#createpassword').val('');
			$('#createpassword').focus();
			$bool = false;
		} else {
			$bool = true;
		}
		return $bool;
	});

//for login
	$('#frmLogin').submit(function(){
		if($.trim($('#uname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter User Name');
			$('#uname').val('');
			$('#uname').focus();
			$bool = false;
		} else if($.trim($('#password').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Password');
			$('#password').val('');
			$('#password').focus();
			$bool = false;
		} else {
			$bool = true;
		}
		return $bool;
	});

//for unit	
	$('#frmUnit').submit(function(){
		if($.trim($('#unitname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Unit Name');
			$('#unitname').val('');
			$('#unitname').focus();
			$bool = false;
			} else {
			$bool = true;
		}
		return $bool;
	});

//for category
	$('#frmCategory').submit(function(){
		if($.trim($('#categoryname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Category Name');
			$('#categoryname').val('');
			$('#categoryname').focus();
			$bool = false;
			} else {
			$bool = true;
		}
		return $bool;
	});

//for candidate table
	$('#frmCan').submit(function(){
		if($.trim($('#unit').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Unit ');
			$('#unit').val('');
			$('#unit').focus();
			$bool = false;
			}else if($.trim($('#category').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Category ');
			$('#category').val('');
			$('#category').focus();
			$bool = false;
			}else if($.trim($('#canname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Candidate Name ');
			$('#canname').val('');
			$('#canname').focus();
			$bool = false;
			}else if($.trim($('#gender').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Gender ');
			$('#gender').val('');
			$('#gender').focus();
			$bool = false;
			} else {
			$bool = true;
		}

		return $bool;
	});

//for attendance form
	$('#frmAttendance').submit(function(){
		if($.trim($('#unit').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Unit ');
			$('#unit').val('');
			$('#unit').focus();
			$bool = false;
			}else if($.trim($('#category').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Category ');
			$('#category').val('');
			$('#category').focus();
			$bool = false;
			}else if($.trim($('#date').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Date ');
			$('#date').val('');
			$('#date').focus();
			$bool = false;
			}else if($.trim($('#dob').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Time ');
			$('#dob').val('');
			$('#dob').focus();
			$bool = false;
			} else {
			$bool = true;
		}

		return $bool;
	});











//for add additional information
	$('#add').submit(function(){
		if($.trim($('#firstname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter First Name');
			$('#firstname').val('');
			$('#firstname').focus();
			$bool = false;
		} else if($.trim($('#mobno').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Mobile No');
			$('#mobno').val('');
			$('#mobno').focus();
			$bool = false;
		} else if($.trim($('#email').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Email ID');
			$('#email').val('');
			$('#email').focus();
			$bool = false;
		} else {
			$bool = true;
		}
		return $bool;
	});




//for country in unit table
	$('#country').change(function(){
		if($(this).val() == ''){
			$('#state').prop('disabled', true);
		} else {
			$('#state').prop('disabled', false);
		}
	});

//for category table

	$('#unit').change(function(){
		if($(this).val()==''){
			$('#categoryname').prop('disabled', true);

		}else{
			$('#categoryname').prop('disabled', false);
		}
	});

//for candidate unit 
	$('#unit').change(function(){
		if($(this).val()==''){
			$('#category').prop('disabled', true);

		}else{
			$('#category').prop('disabled', false);
		}
	});




});

