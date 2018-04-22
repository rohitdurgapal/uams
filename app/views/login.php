<div class="login" style="padding :1em 0 0;">

	<h1 style="background-repeat:no-repeat;color:#FF5733;font-size:46px;height:40px;">Login Here</h1>
		
		<div class="login-bottom" style="background:linear-gradient(#ddd6f3,#faaca8)">
			<form name="frmLogin" id="frmLogin" action="<?php echo site_url('start/signin');?>" method="post">
				<div class="col-md-6">
					<div class="col-sm-16">
						<label for="uname">User Name</label>
						<input id="uname" class="login-mail" type="text" name="TXT_USER" placeholder="User Name"  style="width:220px">
					</div>
					
					<div class="col-sm-16">
						<label for="password">Password</label>
						<input class="login-mail" type="password" id="password" name="TXT_PWD"  placeholder="Password" style="width:220px">
					</div>
					
				</div>


				
				<div class="col-md-6 login-do">
					<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="Login" class="hvr-shutter-in-horizontal">
					</label>
					
						<p>Already register?</p>
					<a href="<?php echo site_url('Start/registration');?>" class="hvr-shutter-in-horizontal">Signup</a>
				
				</div>
			</form>
			
						<div class="clearfix"> </div>
						<div id="msg_" style="border-radius: 4px; font-size: 15px; color: blue; font-weight: bold; background:#ffE4C4"></div>

		</div>
	
</div>



