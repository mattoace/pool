<link rel="stylesheet" media="screen" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<!-- <link rel="stylesheet" media="all" href="https://static.gigtown.com/assets/application-6b27db89e9708064a143972bc5d26c2aaa7a6dc3c9e18253273fc7681fa2be74.css" data-turbolinks-track="reload"/>
<link rel="stylesheet" media="all" href="https://static.gigtown.com/assets/booking-32416fc29bf222a3f3211bfd89f529d1ee9b6ea255d2b97c550381826baf67ca.css" data-turbolinks-track="reload"/> -->
<link rel="stylesheet" media="all" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.css" data-turbolinks-track="reload"/>
<link rel="stylesheet" media="screen" href="https://static.gigtown.com/assets/datepicker_override-88135885419465cae9cc2561f0f7f8e0486ca182a42d829373b67650291bcc64.css"/>
<link rel="stylesheet" media="all" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css" data-turbolinks-track="reload"/>
	

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
<script src="//js.braintreegateway.com/js/braintree-2.27.0.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js" data-turbolinks-track="reload" defer="defer"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js" data-turbolinks-track="reload"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
<script type="text/javascript">
$(function(){
  setTimeout(function(){
    var nextSaturday = 5;
    var $startDate = $('#booking_date')

    $startDate.datepicker({
      autoclose: true,
      format: 'D, M dd, yyyy',
      orientation: 'left bottom',
      startDate : new Date()
      //defaultDate: nextSaturday  TODO: This option is available but doesnt seem to work
    });
    if (false) {
      $startDate.datepicker("setDate", nextSaturday);
    }

    $('#booking-time .event-time .starttime-select').timepicker({
      autoclose: true,
      defaultTime: '6:30PM'
    });

    $('#booking-time .event-time .endtime-select').timepicker({
      autoclose: true,
      defaultTime: '8:30PM'
    });
  }, 100); // date/timepicker JS load is deferred (by partial), so delay this script load
});
</script>


		<!-- Start Revolution Slider -->
			<div class="sliderr">
				<div class="tp-banner-container">
                          <form id="booking-form" class="new_booking" action="cevent" accept-charset="UTF-8" method="post">
                            <div class="notification-box notification-box-error"  style="width:32%;height:auto;min-height:100px;position:fixed;margin:20%;z-index:10000;float:left;background-color:#323333;opacity:0.7;">
								<p><i class=""><img style="width:5%;border-radius:10;" src='<?php echo base_url("assets/images/event.jpg");?>'></i><span style="margin-top:-10px !important;">When is your event?</span></p>
								<a href="#" class="notification-close notification-close-error"><i class="icon-remove"></i></a>
										<div class="span4">
											<div class="grid_6">
												<input class="" type="text" value="Sat, Aug 12, 2017" name="bookingdate" id="booking_date" style="width:80%;font-size:10px;"/>
											</div>
											<div class="grid_2">
												<input class="" type="text" value="0830HRS" name="booking_start_time" id="booking_start_time" style="width:80%;padding:right:5%;font-size:10px;"/>
											</div>
											<div class="grid_2">
												<input class="" type="text" value="1830HRS" name="booking_end_time" id="booking_end_time" style="width:80%;padding:right:5%;font-size:10px;"/>
											</div>
										    <div class="grid_2">
												<input type="submit" name="commit" value="Create Event or Gig" id="form-submit" class="time booking-next btn btn-gigtown btn-thick text-white m-t-3" data-disable-with="Continue" style="font-weight:900;"/>
											</div>
										</div>

							</div>
						</form>
					
					<div class="tp-banner" >
						<ul>
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
								<!-- MAIN IMAGE -->
								<img src='<?php echo base_url("assets/images/slider4.jpg");?>'  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption fade"
									data-x="566"
									data-y="306"
									data-hoffset="0"
									data-speed="700"
									data-start="800"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src='<?php echo base_url("assets/images/slide1-cap1.png");?>' alt=""></div> 
	
								<div class="tp-caption lfb"
									data-x="566"
									data-y="305"
									data-hoffset="0"
									data-speed="700"
									data-start="1200"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src='<?php echo base_url("assets/images/slide1-cap2.png");?>' alt=""></div>
	
								<div class="tp-caption lft"
									data-x="741"
									data-y="305"
									data-hoffset="0"
									data-speed="700"
									data-start="1200"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src='<?php echo base_url("assets/images/slide1-cap3.png");?>' alt=""></div>
	
								<div class="tp-caption lfb"
									data-x="711"
									data-y="374"
									data-hoffset="0"
									data-speed="700"
									data-start="2000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src='<?php echo base_url("assets/images/slide1-cap4.png");?>' alt=""></div>
	
								<div class="tp-caption lft"
									data-x="714"
									data-y="374"
									data-hoffset="0"
									data-speed="700"
									data-start="2000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11"><img src='<?php echo base_url("assets/images/slide1-cap5.png");?>' alt=""></div>
							</li>
	
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
								<!-- MAIN IMAGE -->
								<img src='<?php echo base_url("assets/images/slider9.jpg");?>'  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption modern_big_bluebg randomrotate"
									data-x="603"
									data-y="384"
									data-hoffset="0"
									data-speed="700"
									data-start="1200"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Kenyan Gig Site</div>
	
								<div class="tp-caption modern_big_redbg randomrotate"
									data-x="701"
									data-y="328"
									data-hoffset="0"
									data-speed="700"
									data-start="1700"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">for all your entertainment needs</div>
							</li>
	
							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="5000" >
								<!-- MAIN IMAGE -->
								<img src='<?php echo base_url("assets/images/slider3.jpg");?>'  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
								<!-- LAYERS -->
								<div class="tp-caption modern_big_redbg randomrotate"
									data-x="560"
									data-y="253"
									data-hoffset="0"
									data-speed="700"
									data-start="1000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Freelancing</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="310"
									data-hoffset="0"
									data-speed="700"
									data-start="1500"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Find someone to do some work for you</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="355"
									data-hoffset="0"
									data-speed="700"
									data-start="2000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">Search from our database a collection of work.</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="400"
									data-hoffset="0"
									data-speed="700"
									data-start="2500"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">All categories of expertise can be outsourced,</div>
	
								<div class="tp-caption modern_m_bluebg randomrotate"
									data-x="560"
									data-y="445"
									data-hoffset="0"
									data-speed="700"
									data-start="3000"
									data-easing="Back.easeInOut"
									data-endspeed="300"
									style="z-index: 11">and Much More ...</div>
							</li>

						</ul><!-- End Slides -->
						<div class="tp-bannertimer"></div>										
					</div>					
				</div>
			</div>
		<!-- End Revolution Slider -->

		<div class="page-content">
			<div class="row clearfix mbf">
				<div class="music-player-list"></div>
			</div><!-- row music player -->



			<div class="row clearfix mbf">
				<div class="def-block animtt" data-gen="fadeUp" style="opacity:0;">
					<h4> New Videos </h4><span class="liner"></span>

					<div class="video-grid clearfix">
						<div class="videos-carousel">
							<div class="anyClass">
								<ul>
							    <?php
					               $query = $this->db->query('SELECT * FROM videos'); 
					               $row = $query->result(); 

							               foreach ($row as $key => $viddata) {

												print(' <li>');
												print('<a href="video/?title='.$viddata->title.'">');
												print('<img src="'. base_url($viddata->videocover).'" alt="#">');
												print('<span><strong>'.$viddata->staring.'</strong>'.$viddata->title.'</span>');
												print('</a>');
												print(' </li>');

							               }

					               ?>
								</ul>
							</div><!-- anyclass -->

							<div class="preve"><i class="icon-angle-left"></i></div><!-- carousel left -->
							<div class="nexte"><i class="icon-angle-right"></i></div><!-- carousel right -->

						</div><!-- carousel -->
					</div><!-- videos -->
				</div><!-- block -->
			</div><!-- row video jcarousel -->
















			<div class="row row-fluid clearfix mbf">
				<div class="span8">
					<div class="def-block">
						<h4>Events</h4><span class="liner"></span>
               <?php
               $query = $this->db->query('SELECT * FROM events'); 
               $row = $query->result(); 

		               foreach ($row as $key => $event) {

							print('<div class="news row-fluid animtt" data-gen="fadeUp" style="opacity:0;">');
							print('<div class="span5"><img class="four-radius" src='.base_url($event->image).' alt="#"></div>');
							print('<div class="span7">');
							print('<h3 class="news-title"> <a href="'.$event->slug.'">'.$event->title.'</a> </h3>');
							print('<p>'.$event->body.'</p>');
							print('<div class="meta">');
							print('	<span> <i class="icon-time mi"></i>'.$event->datetime.'</span> | <span> <a href="#"><i class="icon-comments-alt"></i> 14</a> </span>');
							print('</div>');
							print('<a href="event?title='.$event->title.'" class="sign-btn tbutton small"><span>Read More</span></a>');
							print('</div>');
							print('</div>');


		               }

               ?>

						<div class="load-news tac"><a href="#" class="tbutton small"><span>Load More</span></a></div>
					</div><!-- def block -->
				</div><!-- span8 news -->

				<div class="span4">
					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Countdown to Event </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="span12 mb">
								<ul id="event1" class="event-timer">
									<li>
										<span class="days">00</span>
										<p class="timeRefDays">days</p>
									</li>
									<li>
										<span class="hours">00</span>
										<p class="timeRefHours">hours</p>
									</li>
									<li>
										<span class="minutes">00</span>
										<p class="timeRefMinutes">min</p>
									</li>
									<li>
										<span class="seconds">00</span>
										<p class="timeRefSeconds">sec</p>
									</li>
								</ul> <!-- end timer -->
							</div><!-- timer -->

							<div class="grid_8">
								<p class="event-titlett">Bono Serenades Warren</p>
							</div>
							<div class="grid_4">
								<a href="#" class="tbutton buy-ticket small"><span>Buy Ticket</span></a>
							</div>

						</div><!-- widget content -->
					</div><!-- def block widget events -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Featured Videos </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src='<?php echo base_url("assets/images/video1.jpg");?>' alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Know You Want Me</h3>
											<span>Fitbull</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src='<?php echo base_url("assets/images/video2.jpg");?>' alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Like It</h3>
											<span>Enrique</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src='<?php echo base_url("assets/images/video3.jpg");?>' alt="#">
											<i class="icon-play-sign"></i>
											<h3>Tommorow</h3>
											<span>Dj Michele</span>
										</a>
									</li><!-- slide -->
								</ul>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Popular Tracks </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="scroll-mp3" style="height: 220px;">
								<div class="content">
									<ul class="tab-content-items">
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src='<?php echo base_url("assets/images/thumb-mp3-1.jpg");?>' alt="#"></a> 
											<h3><a href="mp3_single_half.html">Don’t go mary ( Remix )</a></h3>
											<span> Alexander </span>
											<span> 1,892,250 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src='<?php echo base_url("assets/images/thumb-mp3-2.jpg");?>' alt="#"></a>
											<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
											<span> Alexander Mikoole </span>
											<span> 998,879 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src='<?php echo base_url("assets/images/thumb-mp3-3.jpg");?>' alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Joe </span>
											<span> 792,240 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src='<?php echo base_url("assets/images/thumb-mp3-4.jpg");?>' alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Enrique </span>
											<span> 788,471 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src='<?php echo base_url("assets/images/thumb-mp3-5.jpg");?>' alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> Lura </span>
											<span> 710,105 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src='<?php echo base_url("assets/images/thumb-mp3-6.jpg");?>' alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
											<span> Babel </span>
											<span> 611,748 Plays </span>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget popular items -->

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->

		</div><!-- end page content -->


	<script type="text/javascript">	
	/* <![CDATA[ */
		jQuery(document).ready(function() {
			jQuery('.tp-banner').revolution({
				delay:9000,
				startwidth:1060,
				startheight:610,
				hideThumbs:10,
				navigationType:"off",
				fullWidth:"on",
				forceFullWidth:"on"
			});
			jQuery("#event1").countdown({
				date: "8 August 2017 23:59:59",
				format: "on"
			},
			function() {
				// callback function
			});
		});
	/* ]]> */
	</script>

