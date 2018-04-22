$(function(){
//for attendance form
	$('#showanother').click(function(){
		if(validate_Form() == true){
			$('#msg_').html('');
			var data_ = $('#submitattendance').serialize();
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
						if(obj.cols == 3){
							
							if(obj.candidates[loop1].ATTENDANCESTATUS == 1){
								str = str + '<td><input type="radio" class="candidate_attendance_P attendance_" value="1" checked name="'+obj.candidates[loop1].CANDIDATEID+'" id="'+obj.candidates[loop1].CANDIDATEID+'~">';
	                    		str = str + '&nbsp Attend &nbsp|&nbsp<input type="radio" class="candidate_attendance_A attendance_"  value="0" name="'+obj.candidates[loop1].CANDIDATEID+'" id ="'+obj.candidates[loop1].CANDIDATEID+'">&nbsp Absent</td>';
							} else {
								str = str + '<td><input type="radio" class="candidate_attendance_P attendance_" value="1"  name="'+obj.candidates[loop1].CANDIDATEID+'" id="'+obj.candidates[loop1].CANDIDATEID+'~">';
	                    		str = str + '&nbsp Attend &nbsp|&nbsp<input type="radio" class="candidate_attendance_A attendance_"  value="0" checked name="'+obj.candidates[loop1].CANDIDATEID+'" id ="'+obj.candidates[loop1].CANDIDATEID+'">&nbsp Absent</td>';
							}
						} else {
							str = str + '<td><input type="radio" class="candidate_attendance_P attendance_" value="1" name="'+obj.candidates[loop1].CANDIDATEID+'" id="'+obj.candidates[loop1].CANDIDATEID+'~">';
	                    	str = str + '&nbsp Attend &nbsp|&nbsp<input type="radio" class="candidate_attendance_A attendance_"  value="0" name="'+obj.candidates[loop1].CANDIDATEID+'" id ="'+obj.candidates[loop1].CANDIDATEID+'">&nbsp Absent</td>';
						}
	                    
	  					str = str + "</tr>";
				}
						str = str + "<tr>";
						str = str + "<td colspan='4'>";
						if(obj.cols == 3){
							
							str = str + '<td colspan="4"><input type="submit" class="btn btn-danger btn-sm" value="Update"></td>';

						} else {
							str = str + '<td colspan="4"><input type="submit" class="btn btn-danger btn-sm" value="Submit"></td>';
						}
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









//for showing candidates
$('#showcan').click(function(){
			$('#msg_').html('');
			var url_ = site_url_ + '/start/fetchCandidates1';
			var data_ = $('#frmShowCan').serialize();
			$.ajax({
				type: "POST",
				url: url_,
				data: data_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';

					for(loop1=0; loop1<obj.candidates1.length; loop1++){
						str = str + "<tr>";
						str = str + "<td>"+obj.candidates1[loop1].CANDIDATEID+"</td>";
						str = str + "<td>"+obj.candidates1[loop1].CANDIDATENAME+"</td>";
						str = str + "<td>"+obj.candidates1[loop1].DOB+"</td>";
						str = str + "<td>"+obj.candidates1[loop1].MOBILENO+"</td>";
						str = str + "<td>"+obj.candidates1[loop1].EMAIL+"</td>";
						str = str + "</tr>";
					}
					    $('#candidateshere').html(str);
				},
				error: function(xhr, error, status){
					$('#candidateshere').html(xhr.responseText);
				}

			});

			$('#hidedata1').css('display', 'block');
    });
	




//showing candidates attendnace date wise

$('#showatten').click(function(){
			$('#msg_').html('');
			var url_ = site_url_ + '/start/fetchCandidates2';
			var data_ = $('#frmShowCatt').serialize();
			$.ajax({
				type: "POST",
				url: url_,
				data: data_,
				success: function(data){
					var obj = JSON.parse(data);
					var str = '';

					for(loop1=0; loop1<obj.candidates2.length; loop1++){
						str = str + "<tr>";
						str = str + "<td>"+obj.candidates2[loop1].CANDIDATEID+"</td>";
						str = str + "<td>"+obj.candidates2[loop1].CANDIDATENAME+"</td>";
						str = str + "<td>"+obj.candidates2[loop1].TIME+"</td>";
						str = str + "<td>"+obj.candidates2[loop1].ATTENDANCESTATUS+"</td>";
						str = str + "</tr>";
					}
					    $('#attendancehere').html(str);
				},
				error: function(xhr, error, status){
					$('#attendancehere').html(xhr.responseText);
				}

			});

			$('#hidedata2').css('display', 'block');
    });












//check all and uncheck all
	$('body').on('click', '.check_uncheck', function(){
		if($("#pa_").prop('checked') == true){
			$('.candidate_attendance_P').prop('checked', true);
		} else {
			$('.candidate_attendance_A').prop('checked', true);
		}
	});











////for user creation user management
$('#frmuser').submit(function(){
		if($.trim($('#uname').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter User Name');
			$('#uname').val('');
			$('#uname').focus();
			$bool = false;
		} else if($.trim($('#cpass').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Enter Password');
			$('#cpass').val('');
			$('#cpass').focus();
			$bool = false;
		} else {
			$bool = true;
		}
		return $bool;
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
			} else if($.trim($('#country').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Country');
			$('#country').val('');
			$('#country').focus();
			$bool = false;
		} else if($.trim($('#state').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select State');
			$('#state').val('');
			$('#state').focus();
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
			}else if($.trim($('#time_').val()) == ''){
			$('#msg_').html('&nbsp;X:Please!..Select Time ');
			$('#time_').val('');
			$('#time_').focus();
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





	// Delete functions unit here

	$('body').on('click','.unitDelete', function(){
		var url_ = site_url_ + '/start/d_unit/'+this.id;
		
		if(confirm('Do you want to delete this unit?')){
			$(location).attr('href',url_);
		}

	});



	//delete user management
	$('body').on('click','.userdelete', function(){
		var url_ = site_url_ + '/start/d_user/'+this.id;
		
		if(confirm('Do you want to delete this user?')){
			$(location).attr('href',url_);
		}

	});








	// Delete functions category here

	$('body').on('click','.categoryDelete', function(){
		var url_ = site_url_ + '/start/d_category/'+this.id;
		
		if(confirm('Do you want to delete this category?')){
			$(location).attr('href',url_);
		}

	});

 // Delete functions candidate here

	$('body').on('click','.candidateDelete', function(){
		var url_ = site_url_ + '/start/d_candidate/'+this.id;
		
		if(confirm('Do you want to delete this candidate?')){
			$(location).attr('href',url_);
		}

	});
});