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
    overflow-y: auto;
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
    height: 61px;
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
    font-size: 20px;
    line-height: 36px;
}
.choice-list .list-group-item .choice-item-label {
    font-size: 20px;
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
input[type='checkbox'] {
    transform: scale(2);
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
						<li>Select the kind of music you want played on your event or gigs </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">

					<form id="booking-form" class="new_booking" action="aevent" accept-charset="UTF-8" method="post">
					<div class="def-block clearfix">

                 <div class="mbf clearfix">
					<h4> Select Music Categories</h4><span class="liner"></span>
					<div class="choice-list" data-maxselections="8" style="height:500px;">					
						<ul class="list-group checked-list-box">
				        <?php
								$query = $this->db->query('SELECT * FROM genre'); 
								$row = $query->result();
								foreach ($row as $key => $genredata) {	
									print('<li class="choice list-group-item clickable disabled choice-selected">');								
									print('<div class="state-icon circle pull-xs-left text-xs-center">');								
									print('<i class="fa fa-check" aria-hidden="true"><input type="checkbox" name="booking[genres][]" value="punk_ska" class="choice-checkbox hiddener" style="margin:0px !important;"/></i>');
									print('</div>');
									print('<div class="choice-item-label pull-xs-left text-secondary">'.$genredata->genre.'</div>');
									print('</li>');


						      }	              
						?>	
						</ul>
						</div>	
					</div>
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
							 <li><a href="cevent"><i class="icon-caret-right"></i>&nbsp;Artist Categories</a></li>
							 <li><a href="mevent"><i class="icon-caret-right"></i><span style="color:#FA0F7E;">&nbsp;Music Category</span></a></li>
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


