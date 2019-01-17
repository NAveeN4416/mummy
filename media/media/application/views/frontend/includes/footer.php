<style type="text/css">
    .footer-about p
    {
        color: #fff;
    }
</style>    

    <footer class="text-center contact">
    	<div class="container">

    		<div class="row">
    			<div class="col-lg-4 half-padding-footer">
    				<img src="<?php echo base_url(); ?>assets/frontend/img/main/footerlogo.png" alt="" class="footerlogo">
    			</div>
    		</div>

    		<div class="row">

                <div class="col-lg-4 offset-lg-1 col-md-6 contact-info half-padding-footer-2">
                    <form class="form half-padding-footer-2" >
                        <div class="ontop">
                            <h6><?php echo $this->lang->line('f_followus'); ?></h6>


                            <ul class="list-inline twi-li">
                                <p class="dep"><?php echo $this->lang->line('f_ministry'); ?></p>
                                <li><a href="https://twitter.com/media_ksa" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/img/main/twitter.png" alt="" style="height: 36px;"></a></li>
                                <!--<li><a href=""><img src="img/main/snapchat.png" alt=""></a></li>-->
                                <!--<li><a href=""><img src="img/main/youtube.png" alt=""></a></li>-->
                                <li><a href="https://www.instagram.com/media_ksa/" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/img/main/instagram.png" alt=""></a></li>

                            </ul>

                            <ul class="list-inline twi-li">
                                <p class="dep"><?php echo $this->lang->line('f_communication'); ?></p>
                                <li><a href="https://twitter.com/cgcsaudi?lang=ar" target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/img/main/twitter.png" alt="" style="height: 36px;"></a></li>
                                <!--<li><a href=""><img src="img/main/snapchat.png" alt=""></a></li>-->
                                <!--<li><a href=""><img src="img/main/youtube.png" alt=""></a></li>-->
                                <li><a href="https://www.instagram.com/cgcsaudi/
                                    " target="_blank"><img src="<?php echo base_url(); ?>assets/frontend/img/main/instagram.png" alt=""></a></li>

                                </ul>
                                <br> 
                                <h6 class="nletter"><?php echo $this->lang->line('f_newsletter'); ?></h6>
                            
                            </div>
                        </form>
                        <form method="post" action="<?php echo base_url(); ?>home/newsletter_subscriptions">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" required="" placeholder="Email Address" id="mail" name="email">
                                <div class="input-group-append" style="cursor: pointer">
                                    <input type="submit" value="Subscribe" class="input-group-text">
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <form class="form half-padding-footer-2" >
                        <div class="ontop">
                            <h6><?php echo $this->lang->line('f_sitemap'); ?></h6>
                                    <ul class="footer-ul">
                                        <li><a href="#"><?php echo $this->lang->line('fs_main'); ?></a></li>
                                        <li><a href="#"><?php echo $this->lang->line('fs_capital'); ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/events"><?php echo $this->lang->line('fs_events'); ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/blog"><?php echo $this->lang->line('fs_blog'); ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/stories"><?php echo $this->lang->line('fs_stories'); ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>home/exhibition"><?php echo $this->lang->line('fs_exibi'); ?></a>
                                        </li>  
                                        <li><a href="https://www.volivesolutions.com/media/public/media-center-new-ar.php"><?php echo $this->lang->line('fs_center'); ?></a></li> 
                                        <li><a href="<?php echo base_url(); ?>home/media_database"><?php echo $this->lang->line('fs_database'); ?></a></li>
                                    </ul>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="item fist-sec footer-about">
                            <h6>                                   <li><a style="text-align:right" href="https://www.volivesolutions.com/media/contact-ar.php"> معلومات عنا </a></li><h6>
                                <p class="footer-about">تم اختيار مدينة الرياض، عاصمة المملكة العربية السعودية، كعاصمة للإعلام العربي لعام 2018-2019، من قِبل مجلس وزراء الإعلام العرب. وأكد المجلس في قراره الصادر عن الدورة 49، التي عقدت الأربعاء 9 مايو/أيار الجاري، بمقر الأمانة العامة لجامعة الدول العربية بالقاهرة.</p>
                        </div>
                    </div>

    			</div>
    		</div>
    		<footer class="final-t">
    			<div class="container-fluid">
    				<div class="row">
    					<div class="col-lg-5 offset-lg-1 float-lg-right">@copyright All Rights Reserved</div>
    					<div class="col-lg-5 float-lg-left">Powered by Volive</div>
    				</div>
    			</div>
    		</footer>
    	</footer>






    	<!-- jQuery -->
    	<!--<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-3.0.0.min.js"></script>-->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-migrate-3.0.0.min.js"></script>

    	<!-- popper.min -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/popper.min.js"></script>

    	<!-- bootstrap -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>

    	<!-- scrollIt -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/scrollIt.min.js"></script>

    	<!-- jquery.waypoints.min -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.waypoints.min.js"></script>

    	<!-- jquery.counterup.min -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.counterup.min.js"></script>

    	<!-- circle-progress.min -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/circle-progress.min.js"></script>

    	<!-- owl carousel -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script>

    	<!-- jquery.magnific-popup js -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.magnific-popup.min.js"></script>

    	<!-- stellar js -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.stellar.min.js"></script>

    	<!-- isotope.pkgd.min js -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/isotope.pkgd.min.js"></script>

    	<!-- YouTubePopUp.jquery -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/YouTubePopUp.jquery.js"></script>

    	<!-- circle-progress.min -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/circle-progress.min.js"></script>

    	<!-- Map -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/map.js"></script>

    	<!-- validator js -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/validator.js"></script>

    	<!-- custom scripts -->
    	<script src="<?php echo base_url(); ?>assets/frontend/js/scripts.js"></script>

    	<!--Calendar -->
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/calender.js"></script>


    </body>

    </html>

