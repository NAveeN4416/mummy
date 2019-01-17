
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">
	
<!-- End Navbar ========================================== -->
<!-- content-banner=========================================== -->

        <section class="content-banner content-banner-1">
	       	<div class="bg-overlay"></div>
	       	<div class="banner">
	       		<div class="container">
	       			<div class="banner-info content_b-info">
	       					<h1 style="color: white"><?php echo $content['title_'.$lang] ; ?></h1>
	       			</div>
	       		</div>
	       	</div>
        </section>
       <!--end-content-banner=========================================== -->
        <!-- summit-section=========================================== -->
             
             
             
    <section class="summit-section">
         <div class="summit-main-div">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                      <div class="summit-div">

                        <h4><?php echo $content['title_'.$lang] ; ?></h4>

                        <h6><?php echo $content['heading1_'.$lang] ; ?></h6>
                        
                        <span>
                          <?php echo $content['content1_'.$lang] ; ?>
                        </span>

                        <h6><?php echo $content['heading2_'.$lang] ; ?></h6>

                        <span><?php echo $content['content2_'.$lang] ; ?></span>

                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="summit-img">
                        <img src="<?php echo base_url().$content['image']; ?>">
                      </div>
                	</div>

              	</div>
            </div>
        </div>
	</section>