

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">



<!-- End Navbar =========================================== -->
<!-- contact-banner=========================================== -->

<section class="event-details">
	<div class="bg-overlay"></div>
	<div class="banner">
		<div class="container">
			<div class="banner-info" style="color: white">
				<h1 ><?php echo $this->lang->line('md_title1'); ?></h1>
				<ol class="breadcrumb banner-bc">
					<li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
					<li class="breadcrumb-item"><?php echo $this->lang->line('md_title2'); ?></li>
				</ol>
			</div>
		</div>
	</div>
</section>



<?php foreach ($media_databases as $k1 => $database) { if(sizeof($database['sites'])){ ?>

<section class="section-padding bg-gray " >

	<div id="demo<?php echo $k1; ?>" class="carousel slide" data-ride="carousel">

		<div class="container">

			<div class="row">

				<div class="section-head eve-cour col-lg-12">
					<h4><?php echo $database['title_'.$lang]; ?></h4>
					<!--<p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh<br> Quisque volutpat condime.</p>-->
				</div>
				<!-- Indicators -->

				<!-- The slideshow -->

				<div class="container">

						<div class="carousel-inner">

						<?php foreach ($database['sites'] as $k2 => $chunk) {  ?>
							<div class="carousel-item <?php echo ($k2==0) ? 'active' : '' ; ?> ">
								<div class="row">
									<?php foreach ($chunk as $k3 => $site) {  ?>	
										<div class="col-lg-3">
											<div class="item all-c mb-md50">
												<div class="post-img-eve">
													<a href="#0">
														<img src="<?php echo base_url().$site['image']; ?>" alt="">
													</a>
												</div>
												<div class="post-cont db common">
													<div class="info cor-text">
														<button type="button" class="butn butn-bg-media" data-toggle="modal" data-target="#viewdModal<?php echo $k1.$k2.$k3; ?>"><span>
															<?php echo $site['site_title_'.$lang] ; ?></span></button>
														</div>
												</div>
											</div>
										</div>
									<?php } ?>
			                	</div>
			            	</div>
						<?php } ?>
		            
			        </div>

			        <!-- Left and right controls -->

			        <a class="carousel-control-prev1 carousel-pos" href="#demo<?php echo $k1; ?>" data-slide="prev">
			        	<span class=""><i class="fa fa-angle-left lr"></i></span>
			        </a>

			        <a class="carousel-control-next1 carousel-pos" href="#demo<?php echo $k1; ?>" data-slide="next">
			        	<span class=""><i class="fa fa-angle-right rll"></i></span>
			        </a>

		    	</div>

			</div>

		</div>

	</div>

</section>

<?php } } ?>


<!-- Modals -->

<?php foreach ($media_databases as $k1 => $database) { if(sizeof($database['sites'])){ ?>
	<?php foreach ($database['sites'] as $k2 => $chunk) {  ?>
		<?php foreach ($chunk as $k3 => $site) {  ?>
			<div id="viewdModal<?php echo $k1.$k2.$k3; ?>" class="modal" role="dialog">
				<div class=" viewd-modal">
					<!-- Modal content-->
					<div class="modal-content viewd-content">

						<div class="modal-header viewd-content">
							<h4 class="modal-title view-head">Event details</h4>
						</div>

						<div class="modal-body">

							<section id="team" class="white-bg pad-0">

								<div class="bootstrap snippet">

									<div class="row member-content">
										<div class="col-sm-6  member-thumb  fade-right in">
											<img class="img-responsive img-center img-thumbnail " src="<?php echo base_url().$site['image']; ?>" alt="">
										</div>

										<div class="col-md-5 viewd-info">
											<p class="viewd-para"><?php echo $site['content_'.$lang]; ?></p>
											<p>
												<a type="" href="<?php echo $site['site_url']; ?>" target="_blank" class="butn butn-bg disabled contact-btn viewd-btn"><span>الموقع الالكتروني </span></a>
											</p>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
										</div>
									</div>

								</div>
							</section>    
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
						</div>

					</div>
				</div>
			</div>
<?php } } } } ?>


