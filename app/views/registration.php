<div class="login" style="padding :1em 0 0">
	<h1 style="color:red">Registration</h1>
		<div class="login-bottom">
			<form name="frmRegistration" id="frmRegistration" action="<?php echo site_url('start/submitRegistration');?>" method="post">
			<div class="col-md-6">
				<div class="col-sm-16">
					<label for="username">User Name</label>
					<input class="login-mail" type="text" id="username" name="username" placeholder="User Name" style="width:220px">
				</div>
				

				<div class="col-sm-16">
					<label for="createpassword">Create Password</label>				
					<input class="login-mail" type="password" id="createpassword" name="createpwd"  placeholder="Create Password" style="width:220px">
				</div>

	
				<div class="col-sm-16">
				<label for="usertype">Select User Type</label>
					 <select  id="usertype" name="type" class="login-mail" style="width:220px">
					 <?php foreach($type_ as $item){?>
					 <option selected value="<?php echo $item->TYPEID; ?>"><?php echo $item->TYPE; ?></option>
					 <?php } ?>
					 </select>
				</div>	

				
				<div class="col-sm-16">
				<label for="status">Select Status</label>
					  <select id ="status" name="sta_" class="login-mail" style="width:220px">
					  <option selected value="1">1</option>
					  </select>
				</div>		



		   </div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Register" class="hvr-shutter-in-horizontal">
					</label>
					<p>Already register?</p>
				<a href="<?php echo site_url('Start/login');?>" class="hvr-shutter-in-horizontal">Login</a>
			</div>
		</form>
			<div class="clearfix"> </div>
			<div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4"></div>
		</div>

</div>



		
