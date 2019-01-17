<!DOCTYPE html>
 <html lang="zxx">

<head>

    	<!-- Metas -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	
		<meta name="author" content="" />

		<!-- Title  -->
		<title>.:MEDIA:.</title>

		<!-- Favicon -->
		

<?php if(@$lang=='en'){ ?>
		<!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css">

<?php }else{ ?>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css">
    <!-- Core Style Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/rtl.css">

<?php } ?>
		<!-- Plugins -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/plugins.css" />

        <!-- Core Style Css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style-gold.css" />

        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-3.0.0.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

   <style>
	.navbar>.container, .navbar>.container-fluid {
    display: block !important;
	   }
	   ul.navbar-nav {
    margin: 15px auto;
	
}
	   .post-cont {
    padding: 40px;
    background-color: #26cc7f;
}
	   .mb-30 {
    margin-bottom: 26px !important;
}
	</style>
    </head>

    <body>

 	<nav class="navbar navbar-expand-lg">
			<div class="container">
			<div class="row">
           <div class="col">
            <!-- Logo -->
            <a class="logo" href="<?php echo base_url(); ?>home/index">
                <img src="<?php echo base_url(); ?>assets/frontend/img/logo-light.png" alt="logo">          
            </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-bar"><i class="fas fa-bars"></i></span>
			  </button>
</div>
			 

			  <!-- navbar links -->
			  <div class="col-10 text-center">
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ">
			      <li class="nav-item">
			        <a class="nav-link active" href="<?php echo base_url(); ?>home/index" ><?php echo $this->lang->line('h_home'); ?></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/about"" ><?php echo $this->lang->line('h_about'); ?></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/news"" ><?php echo $this->lang->line('h_news'); ?></a>
			      </li>

<!-- 			      <li class="nav-item">
                    <a class="nav-link" href="#" ><?php echo $this->lang->line('h_rcam'); ?></a>
                  </li>
                   -->

                  <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/blog"" ><?php echo $this->lang->line('h_blog'); ?></a>
			      </li>


			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/stories"" ><?php echo $this->lang->line('h_stories'); ?></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/events" ><?php echo $this->lang->line('h_events'); ?></a>
			      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>home/gallery_albums" ><?php echo $this->lang->line('h_gallery'); ?></a>
                  </li>
			      <li class="nav-item">
                    <a class="nav-link" href="https://www.volivesolutions.com/media/public/media-center-new-ar.php" target="blank">Media Center</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>home/media_database" ><?php echo $this->lang->line('h_media_database'); ?></a>
                  </li>
			      
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/contact" ><?php echo $this->lang->line('h_contact'); ?></a>
			      </li>
			        <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url(); ?>home/register"><?php echo $this->lang->line('h_login'); ?> &nbsp;|&nbsp;<?php echo $this->lang->line('h_register'); ?></a>
			      </li>

			    <form name="form" action="<?php echo base_url(); ?>language/change_lang" method="POST">
				    <?php if(@$lang=='en'){ ?>
				       <li class="nav-item last">
				       		<input type="hidden" name="current_url" value="<?php echo current_url(); ?>">
				       		<input type="hidden" name="lang" value="ar">
				        	<input type="submit" class="nav-link btn btn-primary btn-sm arb-btn" href="javascript:" value="Arb" >
				      </li>
				    <?php }else{ ?>
				    	<li class="nav-item last">
				  			<input type="hidden" name="current_url" value="<?php echo current_url(); ?>">
				       		<input type="hidden" name="lang" value="en">
				    		<input type="submit" class="nav-link btn btn-primary btn-sm arb-btn" href="javascript:" value="Eng" >
				    	</li>
					<?php } ?>
				</form>
			    </ul>
			     
			  </div>
			</div>
			
			
		
				</div>
			</div>

		</nav>


<?php if($lang=='ar'){ ?>
<style type="text/css">
.navbar .navbar-nav .nav-link {
    font-size: 12px;
}
</style>
<?php } ?>



<style type="text/css">
.banner-section, .blog-banner, .gallery-banner,.success-section,.event-details,.event-banner,.news-banner,.event-details{

    background-image: url("<?php echo base_url().$banners['image'];  ?>");
}
</style>
