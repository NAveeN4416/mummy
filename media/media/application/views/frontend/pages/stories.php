

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

<style>
.success-section {
	background-size: cover;
	height: 100vh;
}
.item-img{
	height:418px;
}
.item-img-overlay{
	overflow:auto !important;
	visibility:visible !important;
}
.overlay {
	background: rgba(0, 0, 0, 0.21);

}
.portfolio .item-img-overlay p {
	color: #00000094;
}
.item-img-overlay {
	visibility: visible !important;
	opacity: 1;
	-webkit-transform: scale(1, 1);
	transform: scale(1, 1);
}
.overlay-info{
	visibility: visible !important;
}
.item-img-overlay {
	text-align: justify;
	font-size: 17px !important;
	height: 400px;
}
.item-img-overlay  p{
	color:#000 !important;
}
.homeBlogs-contnet {

	padding: 10px 15px;
}

button.btn.btn-custome.pull-right {
	margin-top: 20px !important;
}
.viewd-info p {
	color: #000 !important;
	padding: 16px;
	text-align: justify;
	line-height: 25px;
	word-spacing: 0.2px;
}
.homeBlogs-contnet .homeBlogs-contnetInner {
	height: auto;
}
.homeBlogs {
	height: 340px;
}
</style>



<!-- End Navbar =========================================== -->
	<section class="success-section">
		<div class="bg-overlay"></div>
		<div class="banner">
			<div class="container">
				<div class="banner-info" style="color: white">
					<h1><?php echo $this->lang->line('s_title'); ?></h1>
					<ol class="breadcrumb banner-bc">
						<li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
						<li class="breadcrumb-item"><?php echo $this->lang->line('s_title'); ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

<!-- contact-banner=========================================== -->

	<section class="hero section-padding" data-scroll-index="1">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
					<div class=" text-center">
						<h6 class="section-head"><?php echo $this->lang->line('s_title'); ?></h6>
					</div>
				</div>

				<?php foreach ($stories as $key => $story) { ?>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<a href="javascript:" class="">
						<div class="homeBlogs">
							<div class="homeBlogs-contnet">
								<div class="homeBlogs-contnetInner">
									<h3 class="title-heading"><?php echo $story['title_'.$lang]; ?></h3>
									<p><?php echo substr($story['content_'.$lang],0,300) ; ?></p>
								</div>
								<button class="btn btn-custome pull-right" data-toggle="modal" data-target="#blogView<?php echo $key; ?>">عرض التفاصيل </button> 
							</div>
						</div>
					</a>
				</div>
				
				<?php } ?>
			</div>
		</div>
	</section>




<?php foreach ($stories as $key => $story) { ?>
<div id="blogView<?php echo $key; ?>" class="modal" role="dialog">

	<div class=" viewd-modal">

		<!-- Modal content-->

		<div class="modal-content viewd-content">
			<div class="modal-header viewd-content">
				<h4 class="modal-title view-head"><?php echo $story['title_'.$lang]; ?></h4>
			</div>

			<div class="modal-body">
				<section id="team" class="white-bg pad-0">
					<div class="bootstrap snippet">
						<div class="row member-content">
							<!--<div class="col-sm-6  member-thumb  fade-right in" >
								<img class="img-responsive img-center img-thumbnail " src="img/blog/blog2.png" alt="">
							</div>-->
							<div class="col-md-12 viewd-info">
								<h3 style="font-size:16px;padding:5px 0px"><?php echo $story['sub_title_'.$lang]; ?></h3>
								<h3></h3>

								<p><?php echo $story['content_'.$lang]; ?>
								.</p>
								<p>
									<!--<a type="" href="http://www.arabnews.com/" target="_blank" class="butn butn-bg disabled contact-btn viewd-btn"><span>الموقع الالكتروني </span></a>-->
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
				<button type="button" class="btn btn-default" data-dismiss="modal">أغلق</button>
			</div>

		</div>

	</div>
</div>
<?php } ?>
