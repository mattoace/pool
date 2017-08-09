		 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<style>
#bannerimage{
width:20%;
height:100px;
}
#booking-genres .choice-list {
    max-height: 335px;
}

.choice-list {
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow-x: hidden;
    overflow-y: hidden;
    text-align: left;
    opacity: 0.6;
}
ol, ul, dl {
    margin-bottom: 1rem;
    margin-top: 0;
}
.list-group {
    margin-bottom: 0;
    padding-left: 0;
}
.list-group-item {
    background-color: #fff;
    border: 1px solid #ddd;
    display: block;
    margin-bottom: -1px;
    padding: 0.75rem 1.25rem;
    position: relative;
}
.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}
.choice-list .list-group-item:first-child {
    border-top: medium none;
}
.choice-list .list-group-item {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee currentcolor;
    border-image: none;
    border-style: solid none;
    border-width: 1px medium;
    height: 41px;
    padding: 10px 10px 10px 30px;
}
.choice-list .choice-selected, .choice-list .choice:hover {
    background: #f7f7f7 none repeat scroll 0 0;
}
.choice-list .state-icon {
    background: white none repeat scroll 0 0;
    border: 1px solid #ddd;
    height: 40px;
    width: 40px;
}
.circle {
    border-radius: 50%;
}
.state-icon {
    background: white none repeat scroll 0 0;
    border: 1px solid #ddd;
    height: 46px;
    width: 46px;
}
.text-xs-center {
    text-align: center;
}
.pull-xs-left {
    float: left;
}
.choice-list .state-icon i {
    color: white;
    font-size: 15px;
    line-height: 36px;
}
.choice-list .list-group-item .choice-item-label {
    font-size: 15px;
    font-weight: 100;
    height: 46px;
    line-height: 40px;
    padding-left: 20px;
}
.text-secondary {
    color: #8a8a8a;
}
.pull-xs-left {
    float: left;
}
#usermessage{
	width:98% !important;
}
#userbudget{
	width:58% !important;
}
.span8.posts {
	background-color:#949C9F;

   /* background-color: #5f0f16;
    opacity: 0.6;*/
}
input[type='radio'] {
    transform: scale(2);
}
</style>
<!-- test -->
		<div class="under_header">
			<img src="images/assets/breadcrumbs1.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li>Further Customize your Event or Gig</li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
			<form id="booking-form" class="new_booking" action="aevent" accept-charset="UTF-8" method="post">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<h4> Customize Event/Gig</h4><span class="liner"></span>
						
							<div class="mbf clearfix">
								<ul class="tt-toggle">
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p>How many people will be attending?</p>
										</div>
										<div class="toggle-content">


								                 <div class="choice-list" data-maxselections="8" style="height:auto;">					
													<ul class="list-group checked-list-box">
											   
																<li class="choice list-group-item clickable disabled choice-selected">							
																	<div class="state-icon circle pull-xs-left text-xs-center">								
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="booking[genres][]" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																	</div>
																	<div class="choice-item-label pull-xs-left text-secondary">Less than 50 people</div>
																</li>
																<li class="choice list-group-item clickable disabled choice-selected">							
																	<div class="state-icon circle pull-xs-left text-xs-center">								
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="booking[genres][]" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																	</div>
																	<div class="choice-item-label pull-xs-left text-secondary">50-100 people</div>
																</li>
																<li class="choice list-group-item clickable disabled choice-selected">							
																	<div class="state-icon circle pull-xs-left text-xs-center">								
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="booking[genres][]" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																	</div>
																	<div class="choice-item-label pull-xs-left text-secondary">100-200 people</div>
																</li>
																<li class="choice list-group-item clickable disabled choice-selected">							
																	<div class="state-icon circle pull-xs-left text-xs-center">								
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="booking[genres][]" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																	</div>
																	<div class="choice-item-label pull-xs-left text-secondary">Over 200 people</div>
																</li>


													</ul>
													</div>	


										</div>
									</li>
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p>Where will the artist be playing?</p>
										</div>
										<div class="toggle-content">					



												<div class="grid_6 mbs">
													<ul class="tt-accordion">
														<li class="sub-accordion">
															<div class="accordion-head">
																<div class="accordion-head-sign"></div>
																<p><i class="icon-phone"></i>Indoors</p>
															</div>
															<div class="accordion-content">
																<div class="grid_6">
																	<img class="w-100 p-a-1" src="https://static.gigtown.com/assets/indoor-d19d24d014b3bda1cd13079517e1031e7c25c910708ac4e210661116a799acad.png" alt="Indoor" style="width:50%;"/>
																	 The artist will play indoors.
																</div>
																 <div class="grid_6 tt">
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="indooroutdoorradio" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																</div>
															</div>
																							
																
																
														</li>
														
													</ul><!-- end accordion -->
												</div><!-- end grid6 acc -->
							
												<div class="grid_6 mbs">
													<ul class="tt-accordion">
														<li class="sub-accordion">
															<div class="accordion-head">
																<div class="accordion-head-sign"></div>
																<p><i class="icon-desktop"></i>Outdoors</p>
															</div>
															<div class="accordion-content">
																<div class="grid_6">
																<img class="w-100 p-a-1" src="https://static.gigtown.com/assets/outdoor-5b2ba19c26811cee05f9fcf40c9d8495607c65d613114a8599f12dfc89026bd6.png" alt="Outdoor" style="width:50%;"/>
																The artist will play outdoors.																				</div>
																 <div class="grid_6 tt">
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="indooroutdoorradio" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																</div>
															</div>
														</li>								
													</ul>
												</div><!-- end grid6 acc -->									





										</div>
									</li>
									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p>Should artist bring their own PA System?</p>
										</div>
										<div class="toggle-content">


												<div class="grid_6 mbs">
													<ul class="tt-accordion">
														<li class="sub-accordion">
															<div class="accordion-head">
																<div class="accordion-head-sign"></div>
																<p><i class="icon-phone"></i>Yes</p>
															</div>
															<div class="accordion-content">
																<div class="grid_6">
																	<img class="w-100 p-a-1" src="https://static.gigtown.com/assets/equipment_yes-36d200a11e86397d70047277899eeea0b22ad0454871ee9f7435fef6ce9c63e7.png" alt="Indoor" style="width:50%;"/>
																	
																</div>
																 <div class="grid_6 tt">
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="equipmentradio" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																</div>
																<!--  The artist must provide their own sound equipment  -->
															</div>
																							
																
																
														</li>
														
													</ul><!-- end accordion -->
												</div><!-- end grid6 acc -->
							
												<div class="grid_6 mbs">
													<ul class="tt-accordion">
														<li class="sub-accordion">
															<div class="accordion-head">
																<div class="accordion-head-sign"></div>
																<p><i class="icon-desktop"></i>No</p>
															</div>
															<div class="accordion-content">
																<div class="grid_6">
																<img class="w-100 p-a-1" src="https://static.gigtown.com/assets/equipment_no-8957654e8e3b2de47723d1e740e9b50f7ee36f8c6b2b65b4c08f9427852ebe23.png" alt="Outdoor" style="width:50%;"/>
																																		</div>
																 <div class="grid_6 tt">
																	<i class="fa fa-check" aria-hidden="true"><input type="radio" name="equipmentradio" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>
																</div>
																<!-- The artist does not need to bring sound equipment. -->
															</div>
														</li>								
													</ul>
												</div><!-- end grid6 acc -->	

										</div>
									</li>


									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p>What is your budget?</p>
										</div>
										<div class="toggle-content">



							            	<p>
											  <label for="spinner"><span style="font-weight:900;">My Budget (KES): </span><input id="userbudget" name="userbudget" value="5"></label>
											  
											</p>


										</div>
									</li>


									<li class="sub-toggle">
										<div class="toggle-head">
											<div class="toggle-head-sign"></div>
											<p>Leave a message for the artist</p>
										</div>
										<div class="toggle-content">
                                              <textarea name="usermessage" id="usermessage" rows="8" placeholder="Your Message *" required=""></textarea>
										</div>
									</li>

								</ul>
							</div>


						<div class="grid_12">
						   <input type="submit" name="commit" value="Continue" id="form-submit" class="time booking-next btn btn-gigtown btn-thick text-white m-t-3" data-disable-with="Continue" style="font-weight:900;"/>
						</div>

							
					</div><!-- def block -->
				</div><!-- span8 posts -->
</form>
				<div class="span4 sidebar">
					<div class="def-block widget">
						<h4> Quick Links</h4><span class="liner"></span>
						<div class="widget-content">
							 <ul class="list">
							 <li><a href="cevent"><i class="icon-caret-right"></i>&nbsp;Artist Categories</a></li>
							 <li><a href="mevent"><i class="icon-caret-right"></i>&nbsp;Music Category</a></li>
							 <li><a href="aevent"><i class="icon-caret-right"></i><span style="color:#FA0F7E;">&nbsp;Additional Event/Gig Customization</span></a></li>						
							</ul>
						</div><!-- widget content -->
					</div><!-- def block widget categories -->
				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->



    <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
  <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
	<script src='<?php echo base_url("assets/js/theme20.js");?>'></script>
	<script src='<?php echo base_url("assets/js/bootstrap.min.js");?>'></script>		
	<script src='<?php echo base_url("assets/js/jquery.prettyPhoto.js");?>'></script>
	<script src='<?php echo base_url("assets/js/jquery.flexslider-min.js");?>'></script>
	<script src='<?php echo base_url("assets/js/jquery.nicescroll.min.js");?>'></script>
	<!--<script src='<?php echo base_url("assets/js/jquery.tweet.js");?>'></script>-->
	<script src='<?php echo base_url("assets/js/custom.js");?>'></script>	  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
   /* $( "#currency" ).on( "change", function() {
      $( "#spinner" ).spinner( "option", "culture", $( this ).val() );
    });*/
 
    $( "#userbudget" ).spinner({
      min: 5,
      max: 2500,
      step: 25,
      start: 1000,
      numberFormat: "C"
    });
  } );
  </script>