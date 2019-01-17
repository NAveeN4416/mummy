
<style>
.homeBlogs 
{
  border: 1px solid #ccc;
  margin-bottom: 20px;
  height: 425px;
  overflow: hidden;

}

.homeBlogs img {
    height: 180px;
    width: 100%;

}
img.img-responsive.f1 {
 height: 162px !important;
}
img.img-responsive.f2 {
  display: block;
}
.homeBlogs {

  height: 400px;
}
button.btn.btn-custome.pull-right {
  margin-top: 10px !important;
}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

<!-- blog-banner====

  ======================================= -->

  <section class="blog-banner">
    <div class="bg-overlay"></div>
    <div class="banner">
      <div class="container">
        <div class="banner-info  blog-info" style="color: white">
          <h1><?php echo $this->lang->line('b_title'); ?></h1>
          <ol class="breadcrumb banner-bc">
            <li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
            <li class="breadcrumb-item"><?php echo $this->lang->line('b_title'); ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

       <!--end-contact-banner====

        ======================================= -->



<section class="blognews-section">

  <div class="row">
    <div class="container">
      <div id="" class="blognews-content">
        <div class="" id="saudiarb-dev">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <h2 class="blog-head"><?php echo $this->lang->line('b_title'); ?></h2>
            </div>
        
          <?php foreach ($blogs as $key => $blog) {  ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <a href="javascript:">
                <div class="homeBlogs">
                  <img src="<?php echo base_url().$blog['image']; ?>" class="img-responsive f2" alt="blogimg" height="100">
                  <div class="homeBlogs-contnet">
                    <div class="homeBlogs-contnetInner">
                      <h3 class="title-heading"><?php echo $blog['title_'.$lang]; ?></h3>
                      <p><?php echo $blog['content_'.$lang]; ?></p>                    
                    </div>
                    <button class="btn btn-custome pull-right" data-toggle="modal" data-target="#blogView<?php echo $key ; ?>">عرض التفاصيل </button>
                  </div>
                </div>
              </a>
            </div>
          <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php foreach ($blogs as $key => $blog) { ?>

        <div id="blogView<?php echo $key ?>" class="modal" role="dialog">
          <div class=" viewd-modal">
            <!-- Modal content-->
            <div class="modal-content viewd-content">
              <div class="modal-header viewd-content">
                <h4 class="modal-title view-head"><?php echo $blog['title_'.$lang]; ?></h4>
              </div>

              <div class="modal-body">
                <section id="team" class="white-bg pad-0">
                  <div class="bootstrap snippet">
                    <div class="row member-content">
                      <div class="col-sm-6  member-thumb  fade-right in">
                        <img class="img-responsive img-center img-thumbnail " src="<?php echo base_url().$blog['image']; ?>" alt="">
                      </div>

                      <div class="col-md-5 viewd-info">
                        <h3 style="font-size:16px;padding:5px 0px"><?php echo base_url().$blog['sub_title_'.$lang]; ?></h3>
                        <p class="viewd-para">
                         "><?php echo base_url().$blog['content_'.$lang]; ?>
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