<link rel="stylesheet" href='<?php echo base_url("assets/plugins/jqueryfileupload/css/jquery.fileupload.css");?>'>
<link rel="stylesheet" href='<?php echo base_url("assets/plugins/jqueryfileupload/css/jquery.fileupload-ui.css");?>'>

<link rel="stylesheet" href='<?php echo base_url("assets/plugins/jqueryfileupload/css/jquery.fileupload-noscript.css");?>'>
<link rel="stylesheet" href='<?php echo base_url("assets/plugins/jqueryfileupload/css/jquery.fileupload-ui-noscript.css");?>'>

<style>
.well.popup_content {
    /*background: transparent none repeat scroll 0 0;*/
    opacity: 0.6 !important;
    text-align: center !important;
}
</style>


		<div class="under_header">
			<img src="images/assets/breadcrumbs9.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">

			<div class="row forum clearfix mb">
				<div class="def-block">
					<h2>User Profile | Music uploads<small>upload music/video</small></h2>
					<div class="search-forum">
						<form id="search-forum" method="post" action="#">
							<input type="text" onfocus="if (this.value == 'Search the knowledge base...') {this.value = '';}" onblur="if (this.value == '')  {this.value = 'Search the knowledge base...';}" value="Search the knowledge base..." name="s" autocomplete="off">
							<button type="submit"><i class="icon-search"></i></button>
						</form>
					</div><!-- search forum -->
				</div><!-- block -->
			</div><!-- row -->

            <div class="row clearfix mbf">
				<div class="music-player-list"></div>
			</div>
			<div class="row row-fluid forum clearfix mbf">



				<div class="span9 posts">
					<div class="def-block clearfix">

						<div class="mbf clearfix"> <h4> mp3 music </h4><span class="liner"></span>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Title</th>
										<th scope="col">Artist</th>
										<th scope="col">Rating</th>
										<th scope="col">Price</th>
										<th scope="col">Duration</th>
										<th scope="col">Front Cover</th>
									</tr>
								</thead>
								<tbody>

									   <?php
								               $query = $this->db->query('SELECT * FROM music'); 
								               $row = $query->result(); 
								               foreach ($row as $key => $musicdata) {
												print('<tr>');
												print('<td><a href="#">'.$musicdata->title.'</a></td>');
												print('<td>'.$musicdata->artist.'</td>');
												print('<td>'.$musicdata->rating.'</td>');
												print('<td>'.$musicdata->price.'</td>');
												print('<td>'.$musicdata->duration.'</td>');
												print('<td><img alt="" src="'.$musicdata->cover.'" class="avatar" height="20" width="20">&nbsp;<a href="#" title="'.$musicdata->title.'" rel="nofollow">'.$musicdata->title.'</a></td>');
												print('</tr>');							               	

								               }
							           ?>						
								</tbody>
								<tfoot><tr><td colspan="6"></td></tr></tfoot>
							</table>
						</div>




					 <div class="mbf clearfix"> <h4> Videos</h4><span class="liner"></span>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Title</th>
										<th scope="col">Artist</th>
										<th scope="col">Rating</th>
										<th scope="col">Price</th>
										<th scope="col">Duration</th>
										<th scope="col">Front Cover</th>
									</tr>
								</thead>
								<tbody>

									   <?php
								               $query = $this->db->query('SELECT * FROM videos'); 
								               $row = $query->result(); 
								               foreach ($row as $key => $musicdata) {
												print('<tr>');
												print('<td><a href="#">'.$musicdata->title.'</a></td>');
												print('<td>'.$musicdata->staring.'</td>');
												print('<td>'.$musicdata->rating.'</td>');
												print('<td>'.$musicdata->price.'</td>');
												print('<td>'.$musicdata->duration.'</td>');
												print('<td><img alt="" src="'.$musicdata->videocover.'" class="avatar" height="20" width="20">&nbsp;<a href="#" title="'.$musicdata->title.'" rel="nofollow">'.$musicdata->title.'</a></td>');
												print('</tr>');							               	

								               }
							           ?>						
								</tbody>
								<tfoot><tr><td colspan="6"></td></tr></tfoot>
							</table>
						</div>
	
				
					</div><!-- def block -->
				</div><!-- span9 posts -->

				<div class="span3 sidebar">
					<div class="def-block widget">
						<h4> Upload </h4><span class="liner"></span>
						<div class="widget-content clearfix">
	                       <!--  <div style="margin-bottom: 40px;">
                                <button type="submit" class="btn btn-danger pull-right btn-block btn-sm" onClick="uploadimage(this)">Upload Music</button>
	                        </div> -->
							<div method="post" id="loginform" action="#">

								<input type="text" name="title" id="title" placeholder="title" required="">
								<input type="text" name="artist" id="artist" placeholder="Artist" required="">
								<input type="text" name="price" id="price" placeholder="Price" required="">

								  <input type="radio" name="mtype"  value="mp3" checked="checked">Mp3<br>
								  <input type="radio" name="mtype"  value="video">Video<br>

								<button type="submit" class="btn btn-danger pull-right btn-block btn-sm" onClick="uploadimage(this)">Upload Music</button>
								<!-- <input type="submit" id="login-button" name="submit" value="Save"> -->
								<!-- <div class="login-links">
									<a href="#" title="Register" class="register-link">Register</a>
									<a href="#" title="Lost Password" class="lostpass-link">Lost Password</a>
								</div> -->
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget Login -->

					<div class="def-block widget">
						<h4> About</h4><span class="liner"></span>
						<div class="widget-content">
							<p>Upload your music and set price for downloading it.</p>
						</div><!-- widget content -->
					</div><!-- def block widget text -->

				</div><!-- span3 sidebar -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->





            <div id="uploadpopup" class="well" style="visibility:hidden;">
                <!-- The file upload form used as target for the file upload widget -->
                <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="hartist" id="hartist">
                  <input type="hidden" name="hprice" id="hprice">
                  <input type="hidden" name="htitle" id="htitle">
                  <input type="hidden" name="htype" id="htype">
                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                    <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                    <div class="row fileupload-buttonbar">
                        <div class="col-lg-7">
                            <!-- The fileinput-button span is used to style the file input field as button -->
                            <span class="btn btn-success fileinput-button">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="files[]" multiple>
                            </span>
                            <button type="submit" class="btn btn-primary start">
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start upload</span>
                            </button>
                            <button type="reset" class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel upload</span>
                            </button>
                            <button type="button" class="btn btn-danger delete">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" class="toggle">
                            <!-- The global file processing state -->
                            <span class="fileupload-process"></span>
                        </div>
                        <!-- The global progress state -->
                        <div class="col-lg-5 fileupload-progress fade">
                            <!-- The global progress bar -->
                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                            </div>
                            <!-- The extended global progress state -->
                            <div class="progress-extended">&nbsp;</div>
                        </div>
                    </div>
                    <!-- The table listing the files available for upload/download -->
                    <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                    </form>

                </div>
                


   <!-- <script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>-->
   <script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>
   	<script src="<?php echo base_url('assets/plugins/uploadplugin/jquery.knob.js')?>"></script> 
	<script src="<?php echo base_url('assets/plugins/uploadplugin/jquery.ui.widget.js')?>"></script> 

	<script src='<?php echo base_url("assets/js/theme20.js");?>'></script>
	<script src='<?php echo base_url("assets/js/bootstrap.min.js");?>'></script>		
	<script src='<?php echo base_url("assets/js/jquery.prettyPhoto.js");?>'></script>
	<script src='<?php echo base_url("assets/js/jquery.flexslider-min.js");?>'></script>
	<script src='<?php echo base_url("assets/js/jquery.nicescroll.min.js");?>'></script>
	<!--<script src='<?php echo base_url("assets/js/jquery.tweet.js");?>'></script>-->
	<script src='<?php echo base_url("assets/js/custom.js");?>'></script>

    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/tmpl.min.js')?>"></script> 
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/load-image.all.min.js')?>"></script> 
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/canvas-to-blob.min.js')?>"></script>           
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.blueimp-gallery.min.js')?>"></script>  
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.iframe-transport.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload-process.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload-image.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload-audio.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload-video.js')?>"></script> 
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload-validate.js')?>"></script> 
    <script src="<?php echo base_url('assets/plugins/jqueryfileupload/js/jquery.fileupload-ui.js')?>"></script> 



    <script src='<?php echo base_url("assets/plugins/jquery-popup-overlay-gh-pages/jquery.popupoverlay.js");?>'></script>

    <script src='<?php echo base_url("assets/js/userprofile.js");?>'></script>


            <!-- The blueimp Gallery widget -->
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div>
            <!-- The template to display files available for upload -->
            <script id="template-upload" type="text/x-tmpl">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-upload fade">
                    <td>
                        <span class="preview"></span>
                    </td>
                    <td>
                        <p class="name">{%=file.name%}</p>
                        <strong class="error text-danger"></strong>
                    </td>
                    <td>
                        <p class="size">Processing...</p>
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                    </td>
                    <td>
                        {% if (!i && !o.options.autoUpload) { %}
                            <button class="btn btn-primary start" disabled>
                                <i class="glyphicon glyphicon-upload"></i>
                                <span>Start</span>
                            </button>
                        {% } %}
                        {% if (!i) { %}
                            <button class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel</span>
                            </button>
                        {% } %}
                    </td>
                </tr>
            {% } %}
            </script>
            <!-- The template to display files available for download -->
            <script id="template-download" type="text/x-tmpl">
            {% for (var i=0, file; file=o.files[i]; i++) { %}
                <tr class="template-download fade">
                    <td>
                        <span class="preview">
                            {% if (file.thumbnailUrl) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                            {% } %}
                        </span>
                    </td>
                    <td>
                        <p class="name">
                            {% if (file.url) { %}
                                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                            {% } else { %}
                                <span>{%=file.name%}</span>
                            {% } %}
                        </p>
                        {% if (file.error) { %}
                            <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                        {% } %}
                    </td>
                    <td>
                        <span class="size">{%=o.formatFileSize(file.size)%}</span>
                    </td>
                    <td>
                        {% if (file.deleteUrl) { %}
                            <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                                <i class="glyphicon glyphicon-trash"></i>
                                <span>Delete</span>
                            </button>
                            <input type="checkbox" name="delete" value="1" class="toggle">
                        {% } else { %}
                            <button class="btn btn-warning cancel">
                                <i class="glyphicon glyphicon-ban-circle"></i>
                                <span>Cancel</span>
                            </button>
                        {% } %}
                    </td>
                </tr>
            {% } %}
            </script>



