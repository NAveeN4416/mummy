
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">
<style>
.event-details {
	background-size: cover;
	height: 100vh;
}

section.eve-section {
	padding: 80px 0;
}

ul.scf>li img {
	width: auto;
	height: 25px;
	margin-right: 12px;
}

ul.scf>li {
	color: #000;
}

ul.scf>li span {
	letter-spacing: 1px;
	font-size: 17px;
	margin: 20px 0;
}

.loc {
	float: right;
}

.eve-iframe {
	width: 100% !important;
	height: 395px;
}

.p-div {
	padding: 60px 10px;
	text-align: justify;
}

.p-div p {
	font-size: 15px;
	color: #333;
	line-height: 34px;
}

.eve-left-lst>li {
	color: #333;
}

.row.l-r h2 {
	font-size: 30px;
	font-weight: 500;
}

ul.eve-left-lst {
	margin-top: 30px;
}

ul.eve-left-lst>li {
	margin-bottom: 15px;
	font-size: 12px;
}

img.eve-host {
	width: auto;
	height: 55px;
	margin-left: 8%;
	margin-top: 10px;
}

ul.eve-left-lst img {
	width: auto;
	height: 15px;
	margin-right: 10px;
}

.eve-cour h4 {
	color: #333;
}

.post-img-eve img {
	height: 200px;
}

.info.cor-text h6 {
	font-size: 17px;
	font-weight: 500;
	margin-bottom: 10px;
	color: #fff;
}

.info.cor-text p {
	font-size: 14px;
	letter-spacing: 1.2px;
}

button.butn.butn-bg-cour {
	background: #333 !important;
	border: 1px solid #333 !important;
	margin-top: 15px;
}

button.butn.butn-bg-cour:before,
button.butn.butn-bg-cour:after {
	background: #26cc7f;
}

.post-img-eve {
	padding: 8px 8px;
}

.item.host3.mb-md50,
.sub-host3 {
	background: #936f59;
}

.item.host2.mb-md50,
.sub-host2 {
	background: #256b6b;
}

.item.host1,
.sub-host1 {
	background: #f26b31;
}
		
</style>

<!-- End Navbar =========================================== -->
<!-- contact-banner=========================================== -->



	<section class="event-details">
		<div class="bg-overlay"></div>
		<div class="banner">
			<div class="container">
				<div class="banner-info" style="color: white">
					<h1><?php echo $event_details['title_'.$lang]; ?></h1>
					<ol class="breadcrumb banner-bc">
						<li class="breadcrumb-item"><?php echo $event_details['location_'.$lang]; ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<!--end-contact-banner========================================== -->

	<!---map-section========================================== -->

	<section class="eve-section">
		<div class="mapp-main-div">
			<div class="container">
				<div class="row margin-lr-0">

					<div class="col-lg-12 p-l-0 p-r-0">
						<div class="eve-div">
							<h5><?php echo $event_details['title_'.$lang]; ?></h5>
							<h5><?php echo $event_details['location_'.$lang]; ?></h5>
							<ul class="scf">
								<li><span><img src="<?php echo base_url(); ?>assets/frontend/img/eve1.png" alt="">
									<?php echo $event_details['start_date']; ?>-<?php echo $event_details['end_date']; ?>
								</span> <span class="loc"><a href="<?php echo $event_details['google_map']; ?>" target="_blank"><img src="img/eve3.png" alt=""><?php echo $event_details['google_map']; ?></span></a> </li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="left-img"> <img src="<?php echo base_url().$event_details['image']; ?>" alt="" class="img-responsive"> </div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 p-div">
						<p><?php echo $event_details['content_'.$lang]; ?></p>
					</div>
				</div>

				<div class="row l-r">
					<div class="col-lg-6">
						<h2>تفاصيل</h2>
						<ul class="eve-left-lst">
							<li><b><?php echo $event_details['location_'.$lang]; ?> :</b>
								<?php echo $event_details['start_date']; ?>-<?php echo $event_details['end_date']; ?>
							</li>
							<li><a href="<?php echo $event_details['website_link']; ?>" target="_blank"><b>الموقع:</b>
								<?php echo $event_details['website_link']; ?></a></li>
						</ul>
					</div>
					<div class="col-lg-6">
						<h2>مضيف الحدث</h2> <img src="<?php echo base_url().$event_details['org_logo']; ?>" alt="" class="eve-host">
						<ul class="eve-left-lst">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- end-map-section=========================================== -->
<!-- contact-section=========================================== -->

	<section class="section-padding bg-gray ">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<div class="container">
				<div class="row">
					<div class="section-head eve-cour text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2">
						<h4>أحداث أخرى</h4>
					</div>
					<!-- Indicators -->
					<!-- The slideshow -->
					<div class="carousel-inner">
					
					<?php foreach ($events as $k1 => $chunk_events) { ?>

							<div class="carousel-item <?php if($k1==0){ echo 'active' ;} ?>">
								<div class="row">

									<?php foreach ($chunk_events as $k2 => $event) { ?>
										<div class="col-lg-4">
											<div class="item host3 mb-md50">
												<div class="post-img-eve">
													<a href="#0"> <img src="<?php echo base_url().$event['image']; ?>"> </a>
												</div>
												<div class="post-cont sub-host3">
													<div class="info cor-text">
														<h6><?php echo $event['title_'.$lang]; ?></h6>
														<p><?php echo $event['location_'.$lang]; ?></p>
														<p><?php echo $event['start_date']; ?>-<?php echo $event['end_date']; ?></p>
														<a href="<?php echo base_url(); ?>home/event_details/<?php echo $event['id'] ?>"><button type="button" class="butn butn-bg-cour "><span><?php echo $this->lang->line('h_view'); ?></span></button>
														</a>	
													</div>
												</div>
											</div>
										</div>
									<?php } ?>

								</div>
							</div>
						<?php } ?>
	
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a>
						<a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>
					</div>
				</div>
			</div>
		</div>
	</section>