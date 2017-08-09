		<div class="under_header">
			<img src="images/assets/breadcrumbs11.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li> User Registration </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<h4> Register </h4><span class="liner"></span>
						<p>Please fill in all sections below</p>
						<form method="post" id="contactForm" action="processForm.php">
							<div class="clearfix">
								<div class="grid_6 alpha fll"><input type="text" name="firstname" id="firstname" placeholder="Name *" class="requiredField" /></div>
								<div class="grid_6 omega flr"><input type="text" name="secondname" id="secondname" placeholder="Name *" class="requiredField" /></div>
								<div class="grid_12 alpha fll"><input type="text" name="email" id="email" placeholder="Email Address *" class="requiredField email" /></div>
							    <div class="grid_12 alpha fll"><input type="text" name="username" id="username" placeholder="Username *" class="requiredField username" /></div>
					            <div class="grid_12 alpha fll"><input type="text" name="pass" id="pass" placeholder="Password *" class="requiredField password" /></div>
							</div>							
							<input type="button" id="sendMessage" onClick="registerUser()" name="sendMessage" value="Register" />
							<span>  </span>
						</form><!-- end form -->
					</div><!-- def block -->
				</div><!-- span8 posts -->
		
			</div><!-- row clearfix -->
		</div><!-- end page content -->

    <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
	<script src='<?php echo base_url("assets/js/theme20.js");?>'></script>
	<script src='<?php echo base_url("assets/js/bootstrap.min.js");?>'></script>		
	<script src='<?php echo base_url("assets/js/jquery.prettyPhoto.js");?>'></script>
	<script src='<?php echo base_url("assets/js/jquery.flexslider-min.js");?>'></script>
	<script src='<?php echo base_url("assets/js/jquery.nicescroll.min.js");?>'></script>
	<!--<script src='<?php echo base_url("assets/js/jquery.tweet.js");?>'></script>-->
	<script src='<?php echo base_url("assets/js/custom.js");?>'></script>
	 <script src='<?php echo base_url("assets/js/user.js");?>'></script>



