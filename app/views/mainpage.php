<div class="main-content">

	<div class="sidebar" role="navigation">
           <div class="navbar-collapse">
				
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						

						<li>
							<a href="<?php echo site_url('start');?>"<?php if($active == 'dashboard'){ echo 'class="active"'; } ?>><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						

						<li>
							<a href="<?php echo site_url('start/addadditional');?>"<?php if($active == 'addadditional'){ echo 'class="active"'; } ?>><i class="fa fa-book nav_icon"></i>Add Additional Information</a>
						</li>
						
						

						<li>
							<a href="<?php echo site_url('start/unit');?>"<?php if($active == 'unit'){ echo 'class="active"'; } ?>><i class="fa fa-book nav_icon"></i>Add New Unit</a>
						</li>
						
						

						<li>
							<a href="<?php echo site_url('start/category');?>"<?php if($active == 'category'){ echo 'class="active"'; } ?>><i class="fa fa-book nav_icon"></i>Add New Category</a>
						</li>
						

						<li>
							<a href="<?php echo site_url('start/addcan');?>"<?php if($active == 'addcan'){ echo 'class="active"'; } ?>><i class="fa fa-book nav_icon"></i>Add Candidates</a>
						</li>
						


						<li>
							<a href="<?php echo site_url('start/attendance');?>"<?php if($active == 'attendance'){ echo 'class="active"'; } ?>><i class="fa fa-table nav_icon"></i>Take Attendance</a>
						</li>

						<li>
							<a href="<?php echo site_url('start/logout');?>"<?php if($active == 'logout'){ echo 'class="active"'; } ?>><i class="fa fa-table nav_icon"></i>Logout</a>
						</li>

					</ul>


					
				</nav>
			</div>
		</div>




<div class="sticky-header header-section">
	<div class="header-left">
			<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
			<!--toggle button end-->
						
					<!--logo -->
			
			<div class="logo">
			<a href="<?php echo site_url('start/dashboard');?>">
						<h1>AdminPanel</h1>
						<span style="font-size:4pt">Universal Attendance Management System</span>
			</a>


			</div>
			
	 </div>

<!--for username password status usertype-->
<div class="table-responsive">
    <table class="table table-bodered">
        <tr>
            <th>User Name</th>
            <th>Password</th>
            <th>Status</th>
            <th>User Type</th>
            <th>User Upline</th>
        </tr>
        <?php 
        if(count($fetch_info) != 0)
        {
           foreach($fetch_info as $items)
           {
        ;?>  
                    <tr>    
                        <td><?php echo $items->USERNAME_; ?></td>
                        <td><?php echo $items->PASSWORD_; ?></td>
                        <td><?php echo $items->STATUS; ?></td>
                        <td><?php echo $items->TYPE; ?></td>
                        <td><?php echo $items->USER_UPLINE; ?></td>
                    </tr>
           <?php
            }
        }
        else{ ?>
            <tr>
                <td colspan="4">No Unit Found</td>
              </tr>
        <?php } ?>
        
    </table>
 </div>




</div>


</div>











<script src="<?php echo base_url('js/classie.js');?>"></script>
<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
</script>

					