

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

<style type="text/css">
.gallery-banner {
	background-size: cover;
	height: 100vh;
}
.gallery-section{
	background-image: url(&quot;img/pattern1.jpg&quot;);
}
.bg-gray {
	background: #f7f7f7;
}
.gallery-section{
	padding: 60px 0px !important;
}
.section-head {
	margin-bottom: 80px;
	padding-bottom: 30px;
	position: relative;
}
.blog-head{
	margin-bottom: 15px !important;
}
.blog .item {
	-webkit-box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
	box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
}
.blog .post-img {
	position: relative;
	overflow: hidden;
	height: 270px;
}
.blog .post-img img {
	-webkit-transition: all .4s;
	transition: all .4s;
	height: 270px;
}
.blog .post-cont {
	padding:20px;
	background-color: #fff;
}
.blog .post-cont .tag {
	font-size: 12px;
	padding: 8px 20px;
	border-radius: 30px;
	border: 1px solid #eee;
	color: #A9CD2E;
	margin-bottom: 10px;
}
.blog .post-cont h5 {
	font-weight: 700;
	font-size: 13px;
	line-height: 1.6;
	margin-bottom: 10px;
	margin-bottom: 0px;
}
.blog .post-cont .info {
	margin-top: 30px;
}
.blog .post-cont .info a {
	font-size: 12px;
	color: #888;
}
.blog .post-cont .info a:last-of-type {
	float: right;
}
.blog-cont p{
	color: #888;
}
.blog-div{
	background-color: #fff;
	margin: 15px 0px;
}
.blog-para{
	color: #888 !important;
}
</style>




        <!-- End Navbar =========================================== -->

        <!-- contact-banner=========================================== -->

        	<section class="gallery-banner">
        		<div class="bg-overlay"></div>
        		<div class="banner">
        			<div class="container">
        				<div class="banner-info" style="color: white">
        					<h1><?php echo $this->lang->line('ga_title'); ?></h1>
        					<ol class="breadcrumb banner-bc">
        						<li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
        						<li class="breadcrumb-item"><?php echo $this->lang->line('ga_title'); ?></li>
        					</ol>
        				</div>
        			</div>
        		</div>
        	</section>

       <!--end-contact-banner====

       	======================================= -->

       	<section class="blog section-padding bg-gray gallery-section" data-scroll-index="5" data-background="<?php echo base_url(); ?>assets/frontend/img/pattern1.jpg">
       		<div class="container">
       			<div class="row">
       				<div class="section-head text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2 blog-head">
       					<h4><?php echo $this->lang->line('ga_title'); ?></h4>
       				</div>
       				
            <?php foreach ($gallery_albums as $key => $album) { ?>

       				<div class="col-lg-4">
       					<div class="item mb-md50 blog-div">
       						<div class="post-img">
       							<a href="<?php echo base_url(); ?>home/gallery/<?php echo $album['id'] ; ?>">
       								<img src="<?php echo base_url().$album['image']; ?>" alt="">
       							</a>
       						</div>
       						<div class="post-cont blog-cont">
       							<h5>
       								<a href="<?php echo base_url(); ?>home/gallery/<?php echo $album['id']; ?>"> 
       									<?php echo $album['title_'.$lang]; ?>
       								</a>
       							</h5>
       						</div>
       					</div>
       				</div>
            
            <?php } ?>

       			</div>
       		</div>
       	</section>

