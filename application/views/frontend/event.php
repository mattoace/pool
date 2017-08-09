		
       <?php
           $query = $this->db->query('SELECT * FROM events WHERE title = "'.$_GET['title'].'"'); 
           $row = $query->result();	               
        ?>
		<div class="under_header">
			<img src="images/assets/breadcrumbs5.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" original-title="Homepage"> <i class="icon-home"></i> </a></li>
						<li><a href="news.html"> Event </a></li>
						<li> <?php echo $row[0]->title;?> </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->
			<div class="row row-fluid clearfix mbf">
				<div class="posts">
					<div class="def-block">
						<h4> <?php echo $row[0]->title;?></h4><span class="liner"></span><!-- title -->
						<img src='<?php echo base_url($row[0]->eventimage);?>' class="fll"><!-- news photo -->
                        <?php echo $row[0]->eventdetails;?>
					</div><!-- def block -->

					<div class="def-block news-meta mt clearfix">
						<div class="meta">
							<span> <i class="icon-user mi"></i> Admin </span>
							<span> <i class="icon-time mi"></i><?php echo $row[0]->datetime;?></span>
						</div>

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
					</div><!-- def block -->

					<div class="def-block mt">
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
				</div><!-- posts -->

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
