$(function(){


//for attendance form
	$('#showanother').click(function(){
		if(validate_Form() == true){
			$('#msg_').html('');
			var data_ = $('#TakeAttendance').serialize();
			var url_ = site_url_ + '/start/fetchCandidates';
			$.ajax({
				type: "POST",
				url: url_,
				data: data_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';
					for(loop1=0; loop1<obj.candidates.length; loop1++){
						str = str + "<tr>";
						str = str + "<td>"+obj.candidates[loop1].CANDIDATEID+"</td>";
						str = str + "<td>"+obj.candidates[loop1].CANDIDATENAME+"</td>";
	                    //str = str + '<td><input type="radio" checked value="Attend" name="action" id="action">';
	                    //str = str + '&nbsp Attend &nbsp|&nbsp<input type="radio"  value="Absence" name="action" id ="action">&nbsp Absense</td>';
	  					//str = str + "</tr>";
					


						str = str + '<td><input type="radio" checked value="Attend" name="action" id="action">';
	                    str = str + '&nbsp Attend &nbsp|&nbsp<input type="radio" value="Absence" name="action" id ="action">';
	  					str = str + '&nbsp Absense &nbsp|&nbsp<input type="radio"  value="Leave" name="action" id ="action">&nbsp Leave</td>';
	   					str = str + "</tr>";
					







					}


					str = str + "<tr>";
						str = str + "<td colspan='4'>";
						str = str + '<td colspan="4"><input type="submit" class="btn btn-success btn-sm"></td>';
						str = str + "</tr>";
					$('#candidates_here').html(str);
				},
				error: function(xhr, error, status){
					alert(xhr.responseText);
				}

			});

			$('#hidedata').css('display', 'block');
		} 
    });




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
	function validate_Form(){
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
			$('#msg_').html('&nbsp;X:Please!..Select Date ');
			$('#date').val('');
			$('#date').focus();
			$bool = false;
			}else if($.trim($('#time').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Time ');
			$('#time').val('');
			$('#time').focus();
			$bool = false;
			}else {
			$bool = true;
		}

		return $bool;
	}











//for add additional information
	$('#add').submit(function(){
		if($.trim($('#firstname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter First Name');
			$('#firstname').val('');
			$('#firstname').focus();
			$bool = false;
		}else if($.trim($('#gender').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Gender');
			$('#gender').val('');
			$('#gender').focus();
			$bool = false;
		}else if($.trim($('#mobno').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Mobile No');
			$('#mobno').val('');
			$('#mobno').focus();
			$bool = false;
		}else if($.trim($('#email').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Email ID');
			$('#email').val('');
			$('#email').focus();
			$bool = false;
		}else {
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

//fetch Category via unit
	$('#unit').change(function(){
		var data_ = 'unit='+$('#unit').val();
		var url_ = site_url_ + '/start/fetchcategory_via_ajax';
		$.ajax({
			type: "POST",
			url: url_,
			data: data_,
			success:  function(data){
				var obj = JSON.parse(data);

				var str = '';
				str = str + "<option value=''>Select Category</option>";
				for(loop1=0; loop1< obj.category.length; loop1++){
					str = str + "<option value='"+obj.category[loop1].CATEGORYID+"'>"+obj.category[loop1].CATEGORYNAME+"</option>";
				}

				$('#category').html(str);
			},
			error: function(xhr, error, status){
				$('#ho').html(xhr.responseText);
			}
		});
	});


});


