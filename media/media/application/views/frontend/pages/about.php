

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

<style>
.contact-head {
  font-size: 20px !important;
  margin-bottom:10px;
}

.contact_for {
  background-color: #EDEDED;
  padding: 60px 100px;
  width: 100% !important;
  margin: 0 auto !important; 
}
.map-div {
  padding: 25px 20px 0px 25px !important;
}
.map-div p {
  color: #333;
  font-size: 11px;
  line-height: 22px;
}
section {
  padding: 0 !important;
}
.contact>.contact-para {
 color: #000 !important;
 font-size: 14px;
 line-height: 26px;
}
.contact_for {
  background-color: #EDEDED;
  padding:20px; 
}
.contact>.contact-para {
  color: #000 !important;
  font-size: 11px;
  line-height: 20px;
}
.col-lg-6.p-l-0.p-r-0 img {
  height: 560px;
}
.a_stage{
  color:#26cd7f !important;
  font-size:13px;
  font-weight:800;
}
.a_date{
  color:#000;
  font-size:11px;
  font-weight:900;
}
.stages{
  margin-bottom:15px;
}
.stages>p{
  color:#000;
  line-height:20px;
}
.contact-para {
  font-size: 11px;
  padding-top:4px;
}
.new-contact-para{
	min-height:560px;
}
.new-contact-para p{
	line-height:30px !important;
}
.new-contact-for{
  min-height:560px;
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
  background-color:#fff;
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
  color: #black;
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

.contact_for {
 background-color: #EDEDED;
 padding: 20px;
 height: 560px;
 overflow-y: scroll;
}
</style>

    	<!-- End Navbar =========================================== -->
    	<!-- contact-banner==== ======================================= -->

       <section class="banner-section">
       	<div class="bg-overlay"></div>
       	<div class="banner">
       		<div class="container">
       			<div class="banner-info" style="color: white">
       				<h1><?php echo $this->lang->line('a_title'); ?></h1>
       				<ol class="breadcrumb banner-bc">
                <li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
                <li class="breadcrumb-item"><?php echo $this->lang->line('a_title'); ?></li>
              </ol>
            </div>
          </div>
        </div>
      </section>

       <!--end-contact-banner=========================================== -->
    	<!-- map-section=========================================== -->

       <section class="map-section">
         <div class="mapp-main-div">
          <div class="row margin-lr-0">
            <div class="col-lg-6 p-r-0 p-l-0">
             <div class="contact contact_for">
              <h2 class="timeline-head"> مراحل تطور مدينة الرياض  </h2>
              <div class="timeline">

              <?php foreach ($development_map as $key => $map) {  ?>

                <?php if(($key%2)!=0){ ?>
                  <div class="timeline-box left-box">
                    <div class="content">
                      <h2><?php echo $map['year_'.$lang]; ?></h2>
                      <h3><?php echo $map['title_'.$lang]; ?></h3>
                      <p ><?php echo $map['content_'.$lang]; ?></span>
                    </div>
                  </div>
                <?php }else{ ?>
                  <div class="timeline-box right-box">
                    <div class="content leftrig">
                      <h2 class="lef date2"><?php echo $map['year_'.$lang]; ?></h2>
                      <h3 class="lef"><?php echo $map['title_'.$lang]; ?></h3>
                      <p class="lef"><?php echo $map['content_'.$lang]; ?></span>
                    </div>
                  </div>
                <?php } } ?> 

           </div>
         </div>
       </div>
       <div class="col-lg-6 p-l-0 p-r-0">
         <div class="map">
          <img src="<?php echo base_url().$about_us['image1']; ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
        <!-- end-map-section=========================================== -->
    	<!-- contact-section=========================================== -->

       <section class="contact-section">
         <div class="contact-main-div">
          <div class="row margin-lr-0">
            <div class="col-lg-6 p-l-0 p-r-0">
              <img src="<?php echo base_url().$about_us['image2']; ?>"" alt="" style="min-height:560px;">
            </div>
            <div class="col-lg-6 p-r-0 p-l-0">
             <div class="contact contact_for  new-contact-para">
               <h3 class="contact-head">  مراحل تطور مدينة الرياض   </h3>
               <div class="stages">
                 <p class="contact-para ">
                  <?php echo $about_us['content3_'.$lang]; ?>
                </p>
              </div>

        </div>
      </div>
    </div>
  </div>
</section>




<section class="map-section">
 <div class="mapp-main-div">
  <div class="row margin-lr-0">
    <div class="col-lg-6 p-r-0 p-l-0">
     <div class="contact contact_for new-contact-para">
       <h3 class="contact-head">  مراحل تطور مدينة الرياض   </h3>
       <div class="stages">
        <p class="contact-para">
          <?php echo$about_us['content3_'.$lang]; ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 p-l-0 p-r-0">
   <div class="map">
    <img src="<?php echo base_url().$about_us['image3']; ?>"" alt="">
  </div>
</div>
</div>
</div>
</section>

