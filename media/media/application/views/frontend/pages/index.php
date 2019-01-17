
<style>

#insert_services label.error 
{
    color:red; 
}

#insert_services input.error,textarea.error,select.error 
{
    border:1px solid red;
    color:red; 
}



span.hid {
  display: block;
  font-size: 20px;
  font-weight: 600;
}
.rl p {
  text-align: justify;
  color: #fff;
  line-height: 40px;
  font-size: 17px;
  word-spacing: 0.2px;
}
.rl {

  padding: 15px 30px;
}
a.butn.butn-light.abt-btn {

  text-align: center;
}
.contact .butn {
  width: 39%;
  margin: 0 auto;
  display: block;
}

.succes_img{
  float:right !important;
  margin-top:5%;
  }
  .succes_cnt{
  float:right !important
  }
  .black{
    color:#888;
    }
  .succes_btn{
  float:right !important
  }
    .view-btn{
    padding: 10px 15px;
    background: #26cd7f !important;
    border: 1px solid #26cd7f !important;
    color: #fff !important;
    border-radius: 4px;
    border: 1px solid transparent;
    z-index: 3;
    -webkit-box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    -webkit-transition: all .4s;
    transition: all .4s;
    cursor: pointer;
    outline: none !important;
  position:relative;
  left:0px;
  right:0px;
  top:100px !important;
  
   }
   .view-btn:hover:before, .view-btn:hover:after {
    width: 100%;
}
.view-btn:before, .view-btn:after {
    content: '';
    width: 0;
    height: 100%;
  border-color:#26cd7f !important;
    position: absolute;
    left: 0;
    top: 0;
    -webkit-transition: width 0.4s;
    transition: width 0.4s;
    z-index: 1;
    opacity: .4;
  color:#fff !important;
}
.section-head{
  padding-bottom:0px !important;
  }
  .sp-head{
  text-align:center;
  font-size: 48px;
    font-weight: 300;
    letter-spacing: 2px;
    color: #333;
    padding-top:0px !important;
    margin-bottom:20px !important;
    }
    .facts.section-padding.bg-img.bg-fixed {
    margin-top: 0px !important;
}
.h_stages_info{
      min-height:713px;
  max-height:713px;
}
.h_stage{
    font-size:13px !important;
}
.h_date{
    font-size:10px !important;
    font-weight:900;
}
.h_desc{
    font-size:12px !important;
}
.rl p {
    line-height: 30px;
}
.header_success{
    min-height:763px;
}

.pad_0{
    padding-left:0px !important;
    padding-right:0px !important;
}
.homeBlogs {
    border: 1px solid #ccc;
    margin-bottom: 20px;
    height: 425px;
    overflow: hidden;
    
}
    .homeBlogs img {
    height: auto !important;
    width: auto !important;
}
    img.img-responsive.f1 {
       height: 162px !important;
}
    img.img-responsive.f2 {
    margin: 18% auto;
    display: block;
}
    .homeBlogs {
    
    height: 400px;
    }
    button.btn.btn-custome.pull-right {
    margin-top: 10px !important;
    }
    .news_head{
        text-align: center;
    font-size: 48px;
    font-weight: 300;
    letter-spacing: 2px;
    color: #333;
    padding-top: 0px !important;
    margin-bottom: 20px !important;
    }
    .back_trsp{
        background-color:transparent !important;
    }
    .butn span {
    font-size: 14px;
}
.on_top {
    min-height: 662px;
   /* overflow-y: auto; */
   overflow-y: auto;
}
.hsuccess_btn{
    margin-top:15px;
}
.news_hbtn{
    margin:0 auto;
    width:100%;
}

#hnewsVideo {
  right: 0;
  bottom: 0;
  width:100% !important;
}

/* Add some content at the bottom of the video/page */
.hnews-content {
  bottom: 0;
  background: #26cc7f;
  color: #f1f1f1;
  width: 100%;
  top:0;
  bottom:0;
  padding:70px;
  min-height:320px;
  max-height:320px;
}
.hnews_head{
    font-size:24px;
    margin-bottom:10px;
}
.hnews_date{
    font-size:15px;
    font-weight:900;
}
.hnews_date{
    font-size:16px;
    line-height:30px;
}
.hnews_btn{
    top: 12px !important;
    
}
.hnews_link{
    float: left !important;
}
.item-img-overlay{
  display:block !important;
  }
  .overlay h6{
    color:#fff;
    font-size: 20px;
    padding-top:20px;
  }
  .overlay h5{
    color:#fff;
    font-size: 15px;
    line-height:30px;
  }
  .overlay {
    top: 70%;
    text-align: center;
}
* {
  box-sizing: border-box;
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  margin: 0 auto;
  direction:ltr;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
   width: 2px;
  background-color: #68ABA3;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.timeline-box {
  padding: 10px 15px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline-box::after {
  content: '';
  position: absolute;
      width: 10px;
    height: 10px;
    right: -3px;
    background-color: #68ABA3;
    /* border: 4px solid #FF9F55; */
    top: 26px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left-box {
  left: 0;
}

/* Place the container to the right */
.right-box {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left-box::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 7px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right-box::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 7px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right-box::after {
  left: -8px;
}

/* The actual content */
.content {
  padding: 10px;
  background-color: white;
  position: relative;
  border-radius: 6px;
  direction:rtl;
  text-align:right;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .timeline-box {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .timeline-box::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left-box::after, .right-box::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right-box {
  left: 0%;
  }
}
.owl-theme .owl-nav {
    margin-top: 0px !important;
}
.timeline-head{
  text-align: center;
    font-size: 22px;
    color: #fff;
    margin-bottom: 10px;
  }
  .lef{
    text-align:left !important;
    }
    .leftrig{
    direction:ltr !important; 
      }
  .content h3{
    color:#000;
    text-align:right;
    font-size:15px;
    margin:10px 0px !important;
    font-weight:600;
    letter-spacing: 0px;
    }
    .content h2{
    color:#26cc7f;
    text-align:right;
    font-size:14px;
    margin:5px 0px !important;
    font-weight:600;
    line-height:25px;
    }
    .content p{
    color:#888;
    text-align:right;
    font-size:10px;
    margin:5px 0px !important;
    line-height:15px !important;
    }
.date2{
      color:#f26b31 !important;
  }
.timeline-btn{
  margin-top:5px !important;
  }
.date3{
  color:#554F75;
  }
.date4{
  color:#256b6b !important;
  }
.img-fluid{
min-height:450px;
max-height:450px;
}
.gallery-block{
  padding-top:0px;
}
.no-bgcolor{
  background-color:transparent !important;
  }


.section
{
  padding: 30px 0px;
}
.post-cont {
    padding: 40px;
    background-color: #26cc7f;
    height: 466px;
}

.rl2 p
{
   color:  #000 !important;
}
.item-img-overlay {
    display: none;
}
.portfolio .item-img:hover .item-img-overlay {
    visibility: hidden !important;
}

/* .on_top {
   min-height: 681px;
   overflow-y: auto;
} */
</style>

<?php if($lang=='en'){ ?>
<style type="text/css">


.ontop ul, .ontop h6 {
   text-align: left;
   color: #fff;
   font-weight: normal;
}
.succes_img {
   float: left!important;
   margin-top: 5%;
}
.succes_cnt {
   float: left !important;
}
.img2 {
   height: 209px;
}
</style>
<?php } ?>  




      <!-- End Navbar ====
        ======================================= -->


      <!-- =====================================
        ==== Start Header -->

        <header class="header slider-fade" data-scroll-index="0">

          <div class="owl-carousel owl-theme">

          <?php foreach ($index_banners as $key => $index_banner) { if($index_banner['file_type']==0){ ?>
            <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo base_url().$index_banner['image']; ?>">
              <div class="v-middle caption mt-30">
                <h1>
                  <?php echo $index_banner['title_'.$lang]; ?>
                </h1>
                
                <?php if($index_banner['flag']==1){ ?>
                  <a href="<?php echo base_url(); ?>home/index_banner_content/<?php echo $index_banner['id']; ?>" class="butn butn-light">
                    <span><?php echo $this->lang->line('h_view'); ?></span>
                  </a>
               <?php } ?> 
              </div>
            </div>
            <?php }else{ ?>
              <div class="item bg-img" data-overlay-dark="5">
                     <video autoplay muted loop id="myVideo" style="width:100%">
                      <source src="<?php echo base_url().$index_banner['image']; ?>" type="video/mp4">
                     </video>
                    <div class="v-middle caption mt-30">
                        <h1>
                        انطلاق معرض جدة الدولي للكتاب ١٤٤٠هـ 
                        </h1>
                        <a href="<?php echo base_url(); ?>home/index_banner_content/<?php echo $index_banner['id']; ?>" class="butn butn-light">
                            <span><?php echo $this->lang->line('h_view'); ?></span>
                        </a>
                    </div>
              </div>
          <?php } } ?>

<!--
          <div class="item bg-img" data-overlay-dark="5" data-background="<?php echo base_url(); ?>assets/frontend/img/homeb2.jpg">
            <div class="v-middle caption mt-30">
              <h1>الإعلام السعودي 
                مسيرة حافلة بالعطاء 
              </h1>
              <a href="<?php echo base_url(); ?>home/content/2" class="butn butn-light">
                <span>عرض التفاصيل </span>
              </a>
            </div>
          </div>
-->
              <!--  <div class="item bg-img" data-overlay-dark="5" data-background="img/bg2.jpg">
                   <div class="v-middle caption mt-30">
                        <h1>G20 SUMMIT IN BUENOS ARIES</h1>
                        <p>30 November and 1 December 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis aliquid veniam hic assumenda velit quos optio, accusamus quae maxime quia.</p>
                        <a href="#0" class="butn butn-light">
                            <span>عرض التفاصيل </span>
                        </a>
                       
                    </div>
                </div>
              -->
            </div>
          </header>

      <!-- End Header =========================================== -->



        <!-- ========================================= Start Hero -->



        <section class="contact second header_success" data-scroll-index="6">
           <div class="container-fluid">
              <div class="row">
                  <!--
                                      <div class="col-lg-4 col-md-6 contact-info half-padding   second">
                                          <div class="ontop">
                                             <div class="imgh">
                                              <img src="img/main/h.png" alt="" class="img-responsive">
                                              
                                              </div>
                  <h3>HELLO</h3>
                                              
                                          </div>
                                      </div>-->

                                      <div class="col-lg-5 col-md-6  h-r h_stages_info" >
                                          <div class="item mb-md50">
                                              <div class="post-img">
                                                  <a href="#0">
                                                      <img src="<?php echo base_url(); ?>assets/frontend/img/event-details.png" alt="">
                                                  </a>
                                              </div>
                                              <div class="post-cont">
                                               
                                                  <p class="sec"><?php echo substr($about_us['content1_'.$lang],0,850); ?></p>

                  <a href="<?php echo base_url(); ?>home/about" class="butn butn-light abt-btn ab1">
                                              <span>عرض التفاصيل </span>
                                          </a>
                                                  </p>
                                                     
                                                 
                                              </div>
                                          </div>
                                    
                                      </div>

                                      
                <div class="col-lg-7 col-md-6 contact-info half-padding second h-r h_stages_info" >

                    <div class="ontop rl on_top">
                        <div class="item">
                          <h2 class="timeline-head"> مراحل تطور مدينة الرياض  </h2>
                          <div class="timeline">
                          

                          <?php foreach ($development_map as $key => $map) { ?>
                            
                            <?php if(($key%2)!=0){ ?>
                              <div class="timeline-box left-box">
                                <div class="content">
                                  <h2><?php echo $map['year_'.$lang]; ?></h2>
                                  <h3><?php echo $map['title_'.$lang]; ?></h3>
                                </div>
                              </div>
                            <?php }else{ ?>
                              <div class="timeline-box right-box">
                                <div class="content leftrig">
                                  <h2><?php echo $map['year_'.$lang]; ?></h2>
                                  <h3><?php echo $map['title_'.$lang]; ?></h3>
                                  <span></span>
                                </div>
                              </div>

                          <?php } } ?>
                        </div>

                        <a href="<?php echo base_url(); ?>home/about" class="butn butn-light abt-btn ab1 timeline-btn">
                          <span>عرض التفاصيل </span>
                        </a>

                    </div>
                                  
                  </div>
                </div>
            </div>
          </div>
        </section>

        <!-- ========================================= Start Portfolio -->

      <section class="portfolio section-padding" data-scroll-index="2">
            <div class="container">
              <div class="row">
                <div class="section-head text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2">
                  <h4><?php echo $this->lang->line('h1_events'); ?></h4>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="row">
                <!-- filter links -->
                <!-- gallery -->
                <div class=" row  full-width">
                  <!-- gallery item -->

              <?php foreach ($events as $key => $event){ if($key<=2){ ?>    
                <div class="item col-lg-4">
                    <a href="<?php echo base_url(); ?>home/events">
                      <div class="item-img">
                       <div class="overlay">
                          <h4><?php echo $event['title_'.$lang]; ?></h4>
                          <h5><?php echo $event['location_'.$lang]; ?></h5>
                          <h5><?php echo $event['start_date']; ?></h5>
                          <h5><?php echo $event['end_date']; ?></h5>
                        </div>
                        <img src="<?php echo base_url().$event['image']; ?>" alt="image">
                        <div class="item-img-overlay">
                          <div class="overlay-info full-width">
                            <h6>مهرجان الجنادرية.. ملتقى عبق التاريخ </h6>
                            <h5>المجيد بالحاضر الزاهر</h5>
                            <h5>الجنادرية التاريخ: ٢٠ ديسمبر ٢٠١٨ - ١٠</h5>
                          </div>
                        </div>
                      </div>
                    </a>
                </div>
              <?php } } ?>
            </div>
          </div>
        </div>
      </section>



    <section class="team section-padding second" data-scroll-index="3" >
      <div class="container">
        <div class="row">
          <div class="section-head text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2">
            <h4><?php echo $this->lang->line('h1_gallery'); ?></h4>
          </div>

          <div class="col-lg-6">
            <div class="item mb-30">
             <a href="<?php echo base_url(); ?>home/gallery/<?php echo $gallery_albums[0]['id']; ?>">
               <div class="img">
                 <img src="<?php echo base_url().$gallery_albums[0]['image']; ?>" alt="">
               </div>
               <div class="valign">
                <div class="text-center full-width">
                  <p><?php echo $gallery_albums[0]['title_'.$lang]; ?></p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-6">
         <div class="row">

          <?php unset($gallery_albums[0]);

              foreach ($gallery_albums as $key => $album) { if($key>4) { break; }
           ?>

            <div class="col-md-6">
              <div class="item mb-30">
                <a href="<?php echo base_url(); ?>home/gallery/<?php echo $album['id']; ?>">
                  <div class="img">
                     <img src="<?php echo base_url().$album['image']; ?>" alt="" class="img2">
                  </div>
                  <div class="valign v1">
                    <div class="text-center full-width">
                        <p><?php echo $album['title_'.$lang]; ?></p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
    
          <?php } ?>
<!--s
            <div class="col-md-6">
              <div class="item mb-30">
                <a href="<?php echo base_url(); ?>home/gallery/1">
                   <div class="img">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/gallery/g4.1.jpg" alt="">
                  </div>
                  <div class="valign v1">
                    <div class="text-center full-width">
                      <p>انوجرافيكس (في التواصل) </p>
                    </div>
                  </div> 
                </a>
              </div>
            </div>

            <div class="col-md-6">
                <div class="item mb-sm30">
                  <a href="<?php echo base_url(); ?>home/gallery/1">
                    <div class="img">
                     <img src="<?php echo base_url(); ?>assets/frontend/img/gallery/g4.5.jpg" alt="">
                    </div>
                    <div class="valign v1">
                      <div class="text-center full-width">
                        <p>وعد الشمال  التاريخ: ٢٢ نوفمبر ٢٠١٨</p>
                      </div>  
                    </div> 
                  </a>  
                </div> 
            </div>

            <div class="col-md-6">
              <div class="item">
                <a href="<?php echo base_url(); ?>home/gallery/1">
                  <div class="img">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/gallery/g6.3.jpg" alt="">
                  </div>
                  <div class="valign v1">
                    <div class="text-center full-width">
                        <p>حفل تدشين المركز الإعلامي الموحد لليوم الوطني ٨٨التاريخ: ٢٠ سبتمبر ٢٠١٨ </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
-->
    </div>
  </div>

</div>
</div>
</section>



<section class="team section-padding" data-scroll-index="3" >
  <div class="container">
    <div class="row">

      <div class="section-head text-center col-lg-8 col-md-10 offset-md-1 offset-lg-2">
        <h4><?php echo $this->lang->line('h1_blog'); ?></h4>
      </div>

      <div class="col-lg-6">
        <div class="item mb-30">
          <div class="brdr bgc-fff  box-shad  property-listing">
            <a href="<?php echo base_url(); ?>home/blog"> 
                <div class="media">
                    <div class="media-left blog-left ">
                      <img alt="image" class="img-responsive one-l" src="<?php echo base_url().$blogs[0]['image']; ?>" >
                    </div>
                    <div class="media-body fnt-smaller">
                      <a href="#" target="_parent"></a>
                      <p class="bpl">
                        <?php echo $blogs[0]['title_'.$lang] ; ?>
                      </p>
                      <p><?php echo substr($blogs[0]['content_'.$lang],0,200) ; ?></p>
                      <a href="<?php echo base_url(); ?>home/blog" class="bba"><?php echo $this->lang->line('h_view'); ?></a>
                    </div>
                </div>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
       <div class="row">
        <?php unset($blogs[0]); foreach ($blogs as $key => $blog) {  if($key==3){ break; } ?>
            <div class="col-md-12">
              <div class="item mb-30">
               <div class="brdr bgc-fff  box-shad  property-listing">
                  <div class="media">
                    <div class="media-left blog-left">
                      <img alt="image" class="img-responsive one-l1" src="<?php echo base_url().$blog['image']; ?>" >
                    </div>
                    <div class="media-body fnt-smaller">
                      <a href="<?php echo base_url(); ?>home/blog" target="_parent"></a>
                      <p><?php echo substr($blog['title_'.$lang],0,200); ?></p>
                      <p class="bpl"><?php echo substr($blog['content_'.$lang],0,200); ?></p>
                      <a href="<?php echo base_url(); ?>home/blog" class="bba"><?php echo $this->lang->line('h_view'); ?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
        <?php } ?>

          </div>
        </div>
    </div>
  </div>
</section>



      <!-- ========================================= Start Features (Stories) --------------------------->

      <section class="features">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-lg-12 col-md-12 contact-info half-padding pad_0">
      				<div class="ontop rl2">
      					<h4 class="sp-head"><?php echo $this->lang->line('h1_stories'); ?></h4>
      					<div class="container">
      						<div class="row">
      							<div class="section-head text-center">
      								<div class="col-md-4 col-lg-4 succes_img">
      									<img src="<?php echo base_url(); ?>assets/frontend/img/main/footerlogo.png" alt="" class="sub-logo">
      								</div>
      								<div class="col-md-4 col-lg-4 succes_cnt">
      									<p><?php echo $stories[0]['title_'.$lang]; ?></p>
      									<p class="pl-p"> <?php echo substr($stories[0]['content_'.$lang],0,1500); ?><p>
      								</div>
      								<div class="col-md-4 col-lg-4 succes_btn">
      									<a href="<?php echo base_url(); ?>home/stories"><button class="btn view-btn"><?php echo $this->lang->line('h_more'); ?></button></a>
      								</div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </section>
      
      <!-- ========================================= Start Features (Stories End) --------------------------->

      <section class="features second no-bgcolor">
        <div class="container-fluid">
          <div class="row">
           <div class="col-lg-12 col-md-12 contact-info half-padding pad_0">
            <div class="ontop rl2 back_trsp">
              <h4 class="sp-head"><?php echo $this->lang->line('h1_exhib'); ?></h4>
              <div class="container">
                <div class="row">
                  <div class="section-head text-center">
                    <div class="col-md-4 col-lg-4 succes_img">
                      <img alt="image" class="img-responsive one-l" src="<?php echo base_url(); ?>assets/frontend/img/logo-light.png">
                    </div>
                    <div class="col-md-4 col-lg-4 succes_cnt">
                      <p class="black"><?php echo $exhibitions[0]['title_'.$lang]; ?></p>
                      <p class="black"><?php echo $exhibitions[0]['duration']; ?></p>

                      <p class="pl-p black"><?php echo $exhibitions[0]['content_'.$lang]; ?></p>

                    </div>
                    <div class="col-md-4 col-lg-4 succes_btn">
                      <a href="media-center-new-ar.php"><button class="btn view-btn"><?php echo $this->lang->line('h_view'); ?></button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>






      <!-- ========================================= Contact Form --------------------------->




  <div class="facts section-padding bg-img bg-fixed contact" data-overlay-dark="5" data-background="<?php echo base_url(); ?>assets/frontend/img/bg3.png">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 ">
          <form class="form half-padding" id="insert_services" method="post">

            <div class="messages"></div>
            <h4 class="sp-head text-center mb-20"><?php echo $this->lang->line('hc_communicate'); ?></h4>
            <div class="controls">

              <div class="row">

                <div class="col-md-6">
                    <div class="form-group has-error has-danger">
                     <label for="">
                     <?php echo $this->lang->line('hc_name') ; ?> *
                    </label>
                    <input style="color: white" id="form_name" type="text" name="data[name]" placeholder="<?php echo $this->lang->line('hc_name') ; ?>" required="required">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">
                      <?php echo $this->lang->line('hc_subject') ; ?> *
                    </label>
                    <input style="color: white" id="subject" type="text" name="data[subject]" placeholder="<?php echo $this->lang->line('hc_subject') ; ?>" required="required">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">
                      <?php echo $this->lang->line('hc_email') ; ?>  *
                    </label>
                    <input style="color: white" id="form_email" type="email" name="data[email]" placeholder="<?php echo $this->lang->line('hc_email') ; ?>" required="required">
                  </div>
                </div>


                <div class="col-md-6">
                  <div class="form-group">
                     <label for="">
                      <?php echo $this->lang->line('hc_message') ; ?>
                    </label>
                    <textarea style="color: white" id="form_message" name="data[message]" placeholder="<?php echo $this->lang->line('hc_message') ; ?>" rows="8" required></textarea>
                  </div>
                </div>

          </div>                             
        </div>

      </form>

        <div class="col-md-12 ">
          <p class="text-center" id="message" style="color: green"></p>
          <br>
        </div>

        <div class="col-md-12">
          <button type="submit" class="butn butn-bg insert_services"><span><?php echo $this->lang->line('hc_submit'); ?></span></button>
        </div>

    </div>
    
  </div>
</div>
</div>

 <!-- ========================================= Contact Form End --------------------------->



<script type="text/javascript">

    $("#insert_services").validate({       

               
           ignore:[],
              rules: 
              {

                    "data[name]"      : "required",
                    "data[email]"     : "required",
                    "data[subject]"   : "required",
                    "data[message]"   : "required",
                },
                messages : 
                {
                    "data[name]"      : "required",
                    "data[email]"     : "required",
                    "data[subject]"   : "required",
                    "data[message]"   : "required",
                },       

        });

    $('.insert_services').click(function(){ 

            var validator = $("#insert_services").validate();

                validator.form();

                if(validator.form() == true){

                  
                      var data = new FormData($('#insert_services')[0]);   

                    $.ajax({                

                        url: "<?php echo base_url();?>home/save_contact/contact_list",
                        type: "POST",
                        data: data,
                        mimeType: "multipart/form-data",
                        contentType: false,
                        cache: false,
                        processData:false,
                        error:function(request,response)
                        {
                          console.log(request);
                        },                  
                        success: function(result)
                        {
                           var data = JSON.parse(result);

                           $("#message").fadeIn('slow').html(data.message).delay(5000).fadeOut('slow');

                           $("#insert_services")[0].reset();
                        }

                    });

                }

            });
</script>