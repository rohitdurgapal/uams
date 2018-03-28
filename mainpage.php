<div class="main-content">

	<div class=" sidebar" role="navigation">
           <div class="navbar-collapse">
				
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="" class="active"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
						

						<li>
							<a href=""><i class="fa fa-book nav_icon"></i>Add Additional Information</a>
						</li>
						
						
						<li>
							<a href=""><i class="fa fa-book nav_icon"></i>Add New Unit</a>
						</li>
						
						
						<li>
							<a href=""><i class="fa fa-book nav_icon"></i>Add New Category</a>
						</li>
						

						<li>
							<a href=""><i class="fa fa-book nav_icon"></i>Add Candidates</a>
						</li>
						

						<li>
							<a href=""><i class="fa fa-table nav_icon"></i>Take Attendance</a>
						</li>


					</ul>


					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>



				<div class="sticky-header header-section ">
						<div class="header-left">
							<!--toggle button start-->
								<button id="showLeftPush"><i class="fa fa-bars"></i></button>
								<!--toggle button end-->
						<!--logo -->
							<div class="logo">
									<a href="">
										<h1>AdminPanel</h1>
								<span style="font-size:6pt">Universal Attendance Management System</span></br>
									</a>
							</div>

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

					