<style>
#bannerimage{
width:20%;
height:100px;
}

</style>
		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li>What kind of Artist do you need ? </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">

					<form id="booking-form" class="new_booking" action="mevent" accept-charset="UTF-8" method="post">
					<div class="def-block clearfix">

					<?php
							$query = $this->db->query('SELECT * FROM artistcategories'); 
							$row = $query->result();
							foreach ($row as $key => $artistdata) {								               	
							print('<div class="mbf clearfix">');
							print('<h4>'.$artistdata->artistname.'</h4><span class="liner"></span>');
							print('<img id="bannerimage" src='.base_url($artistdata->artistimage).' class="fll">'); 
							print('<a href="#external_id" data-gal="photo" title="">'.$artistdata->artistdescription.'</a>');							  
							print('<div id="external_id" style="">Select this artist <input type="checkbox" name="selectartist" value="selectartist"></div>');   
							print('</a>');
							print(''); 
							print('</div>');


					      }	               
					?>				

					<div class="grid_12">
					<input type="submit" name="commit" value="Continue" id="form-submit" class="time booking-next btn btn-gigtown btn-thick text-white m-t-3" data-disable-with="Continue" style="font-weight:900;"/>
					</div>

					</div><!-- def block -->
				</form>
				</div><!-- span8 posts -->

				<div class="span4 sidebar">
					<div class="def-block widget">
						<h4> Quick Links</h4><span class="liner"></span>
						<div class="widget-content">
							 <ul class="list">
							 <li><a href="cevent"><i class="icon-caret-right"></i><span style="color:#FA0F7E;">&nbsp;Artist Categories</span></li>
							 <li><a href="mevent"><i class="icon-caret-right"></i>&nbsp;Music Category</a></li>
							 <li><a href="aevent"><i class="icon-caret-right"></i>&nbsp;Additional Event/Gig Customization</a></li>					
							</ul>
						</div><!-- widget content -->
					</div><!-- def block widget categories -->
				</div><!-- span4 sidebar -->
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


