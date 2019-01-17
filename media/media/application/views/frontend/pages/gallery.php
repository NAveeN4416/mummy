
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/compact-gallery.css">

<style>
img.img-fluid.image {
	height: 241;
}
</style>

<!-- End Navbar =========================================== -->

<!-- event-banner=========================================== -->

    		<section class="event-banner gallert-banner">
    			<div class="bg-overlay"></div>
    			<div class="banner">
    				<div class="container">
    					<div class="banner-info" style="color: white">
    						<h1><?php echo $this->lang->line('g_title'); ?></h1>
    						<ol class="breadcrumb banner-bc">
    							<li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
    							<li class="breadcrumb-item"><?php echo $this->lang->line('g_title'); ?></li>
    						</ol>
    					</div>
    				</div>
    			</div>
    		</section>

    		<!-----calender--------->

    		<section class="gallery-block compact-gallery">
    			<div class="container">

    				<div class="heading">
    					<h2> <?php echo $this->lang->line('g_title'); ?> </h2>
    				</div>

    				<div class="row no-gutters">
                    
                    <?php foreach($gallery as $key=>$image){ ?>

    					<div class="col-md-6 col-lg-3 item zoom-on-hover">
    						<a class="lightbox" href="<?php echo base_url().$image['image']; ?>">
    							<img class="img-fluid image" src="<?php echo base_url().$image['image']; ?>">
    						</a>
    					</div>

                    <?php } ?>

    				</div>

    			</div>
    		</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

<script>

	baguetteBox.run('.compact-gallery', { animation: 'slideIn'});

</script>

