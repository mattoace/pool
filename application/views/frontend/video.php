		   <?php
	               $query = $this->db->query('SELECT * FROM videos WHERE title="'.$_GET['title'].'"'); 
	               $row = $query->result(); 
           ?>

		<div class="under_header">
			<img src="images/assets/breadcrumbs2.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li><a href="videos.html"> Videos </a></li>
						<li> Preview Video</li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<div class="post row-fluid clearfix">
							<iframe src="http://player.vimeo.com/video/72456426?title=".<?php echo $row[0]->title;?>."byline=".<?php echo $row[0]->staring;?>."portrait=1" height="500"></iframe>

							<h3 class="post-title"> <a href="blog-single_half.html"><?php echo $row[0]->title;?></a> </h3>
							<?php echo $row[0]->body;?>
							<p>
								<span> Tags: </span>
								<a href="#" class="#"> video </a>,
								<a href="#" class="#"> player </a>,
								<a href="#" class="#"> youtube </a>,
								<a href="#" class="#"> vimeo </a>
							</p><!-- tags -->

							<div class="meta">
								<span> <i class="icon-user mi"></i> Admin </span>
								<span> <i class="icon-time mi"></i><?php echo $row[0]->datetime;?></span>
							</div><!-- meta -->


							<div class="like-post">
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-width="80" data-layout="button_count" data-show-faces="false" data-send="false"></div>
							</div><!-- like -->
						</div><!-- post -->

						<div class="post-links clearfix">
							<a class="fll" href="blog-single-video.html" title="#"><i class="icon-long-arrow-left"></i> Text here</a>
							<a class="flr" href="blog-single-slider.html" title="#">Text here <i class="icon-long-arrow-right"></i></a>
						</div><!-- post links -->

						<!-- Disqus Comment Form -->
							<div id="disqus_thread"></div>
							<script type="text/javascript">
							/* <![CDATA[ */
								var disqus_shortname = 'remixtemplate';
								(function() {
									var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
									dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
									(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
								})();
							/* ]]> */
							</script><noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						<!-- Disqus Comment Form -->

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

	<script type="text/javascript">
	/* <![CDATA[ */
	// Disqus
		var disqus_shortname = 'remixtemplate'; 
		(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = '//' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
	/* ]]> */
	</script>

