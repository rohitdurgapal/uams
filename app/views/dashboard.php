<?php $this->load->view('mainpage')?>

		<div id="page-wrapper">
			<div style="background:linear-gradient(#ddd6f3,#faaca8") class="form-title">
                <h2 >Reports Available</h2>
            </div>
			<div class="main-page" style="z-index: 99999 !important">
				
						<div class="row-one">
							
							<a href="<?php echo site_url('start/showunitcategory') ;?>">
								<div class="col-md-4 widget">
								
								<div style="background:linear-gradient(#ddd6f3,#faaca8") class="stats-left ">
									<h5 style="font-size:21px;color:blue;">All</h5>
									<h5 style="font-size:22px;color:white;font-weight:bold">UNITS</h5>
									<h5>AND</h5>
									<h5 style="font-size:22px;color:white;font-weight:bold">CATEGORIES</h5>
								</div>

								<div class="stats-right">
									<label style="font-size:15px;">Display</label>
								</div>
							
								
								</div>
							</a>
							<a href="<?php echo site_url('start/submitunitandcategory') ;?>">
							<div class="col-md-4 widget states-mdl">
								<div style="background:linear-gradient(#ddd6f3,#faaca8") class="stats-left ">
									<h5 style="font-size:21px;color:blue;">All</h5>
									<h5 style="font-size:22px;color:white;font-weight:bold">CANDIDATES</h5>
									<h5 style="font-size:20px;color:white;">UNITS AND CATEGORY WISE</h5>
								</div>

								<div class="stats-right" style="background:blue;">
									<label style="font-size:15px;">Display</label>
								</div>	
							</div>
							</a>





							<a href="<?php echo site_url('start/showattendance');?>">
							<div class="col-md-4 widget states-last">
								<div style="background:linear-gradient(#ddd6f3,#faaca8") class="stats-left">
									<h5 style="font-size:21px;color:blue;">All</h5>
									<h5 style="font-size:22px;color:white;font-weight:bold">CANDIDATES</h5>
									<h5 style="font-size:20px;color:white;">DATE DAY WISE ATTENDANCE</h5>
								</div>

								<div class="stats-right" style="background:blue;">
									<label style="font-size:15px;">Display</label>
								</div>	
							</div>	
							</a>
				
						</div>

		</div>
</div>


