<div class="login" style="padding :1em 0 0">
		<h1 style="color:red">Registration</h1>
		<div class="login-bottom">
			
<div class="col-md-6">

				
				<div class="col-sm-16">
					<label for="username">User Name</label>
					<input class="login-mail" type="text" id="username" placeholder="User Name" style="width:220px">
				</div>
				
				<div class="col-sm-16">
					<label for="createpassword">Create Password</label>				
					<input class="login-mail" type="password" id="createpassword"   placeholder="Create Password" style="width:220px">
				</div>
<!--
				<div class="col-sm-16">
					<label for="confirmpassword">Confirm Password</label>
					<input class="login-mail" type="password" id="confirmpassword" placeholder="Confirm Password" style="width:220px">
				</div>
-->		
				<div class="col-sm-16">
				<label for="usertype">Select User Type</label>
						<select  id="usertype" class="login-mail" style="width:220px">
						<option selected>ADMIN</option>
						<option >USER</option>
						</select>
				</div>	

				
				<div class="col-sm-16">
				<label for="status">Select Status</label>
						<select id ="status" class="login-mail" style="width:220px">
						<option selected>1</option>
						<option>0</option>
						</select>
				</div>		



</div>




			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Submit">
					</label>
					<p>Already register?</p>
				<a href="<?php echo site_url('Start/login');?>" class="hvr-shutter-in-horizontal">Login</a>
			</div>

			<div class="clearfix"> </div>


		</div>
	

</div>



		
