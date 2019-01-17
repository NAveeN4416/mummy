<style type="text/css">
    
#insert_services label.error 
{
    color:red; 
}

#insert_services input.error,textarea.error,select.error 
{
    border:1px solid red;
    color:red; 
}

</style>


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

    	<!-- End Navbar =========================================== -->

    	<!-- contact-banner=========================================== -->

	<section class="banner-section bg_img">
		<div class="bg-overlay"></div>
		<div class="banner">
			<div class="container">
				<div class="banner-info" style="color:white">
					<h1><?php echo $this->lang->line('cu_title1'); ?></h1>
					<ol class="breadcrumb banner-bc">
						<li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
						<li class="breadcrumb-item"><?php echo $this->lang->line('cu_title1'); ?></li>
					</ol>
				</div>
			</div>
		</div>
	</section>

       <!--end-contact-banner=========================================== -->

    	<!-- map-section=========================================== -->

    		<section class="contact-section">
    			<div class="contact-main-div">
    				<div class="row margin-lr-0">

                    <div class="col-lg-12 p-r-0 p-l-0">
                    	<div class="contact contact_for">
                    		<h3 class="contact-head"><?php echo $this->lang->line('cu_title2'); ?></h3>

                    		<form class="form contact-form" method="post" id="insert_services">
                    			<div class="row">

                    				<div class="col-md-12">
                    					<div class="form-group cont-group">
                    						<input style="color: black" id="name" class="cont-ar-input" type="text" name="data[name]" placeholder="<?php echo $this->lang->line('cu_name'); ?>" required="required">
                    						<span class="icon-form cont-icon"><i class="icofont-ui-user"></i></span>
                    					</div>
                    				</div>

                    				<div class="col-md-12">
                    					<div class="form-group cont-group">
                    						<span class="icon-form cont-icon"><i class="icofont-envelope"></i></span>
                    						<input style="color: black" id="email" class="cont-ar-input" type="email" name="data[email]" placeholder="<?php echo $this->lang->line('cu_email'); ?>" required="required">
                    					</div>
                    				</div>

                    				<div class="col-md-12">
                    					<div class="form-group cont-group">
                    						<span class="icon-form cont-icon"><i class="icofont-edit"></i></span>
                    						<input style="color: black" id="form_subject" class="cont-ar-input" type="text" name="data[subject]" placeholder="<?php echo $this->lang->line('cu_subject'); ?>" required="">
                    					</div>
                    				</div>

                    				<div class="col-md-12">
                    					<div class="form-group cont-group">
                    						<textarea style="color: black" class="contact-ta" id="form_message" name="data[message]" placeholder="<?php echo $this->lang->line('cu_message'); ?>" rows="4" required></textarea>
                    					</div>
                    				</div>

                           
            				</form>

                            <div class="col-md-12">
                                <button type="button" class="butn butn-bg contact-btn sub-btn insert_services">
                                    <span></span>
                                    <i class="fas fa-paper-plane send-img"></i><span><?php echo $this->lang->line('cu_submit'); ?></span>
                                </button>
                            </div>
                            <br>
                            <div class="col-md-12 ">
                              <p class="text-center" id="message" style="color: green"></p>
                              <br>
                            </div> 

            			</div>

            		</div>

            	</div>

            </div>

        </div>

    </section>



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