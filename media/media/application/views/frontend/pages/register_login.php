

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">

    	<!-- End Navbar =========================================== -->

    	<!-- register-banner=========================================== -->

       <section class="register-banner">
       	<div class="bg-overlay"></div>
       	<div class="banner">
       		<div class="container">
       			<div class="banner-info rbanner-text" style="color: white">
       				<ol class="breadcrumb banner-bc">
                    <li class="breadcrumb-item"><?php echo $this->lang->line('rl_register'); ?></li>
                     <li class="breadcrumb-item"><?php echo $this->lang->line('rl_login'); ?></li>
              </ol>
       			</div>
       		</div>
       	</div>
       </section>

       <!--end-contact-banner=========================================== -->


    	<!-- reglog-section=========================================== -->

       <section class="reglog-section">
          <div class="reglog-main-div">
            <div class="container">
                <div class="row margin-lr-0">

                    <div class="col-lg-6 p-l-0 p-r-0">
                      <div class="reglog-div contact contact_for ">
                        <h3 class="contact-head">Login</h3>
                        <form class="form contact-form" id="login" method="post">
                              <div class="col-lg-12 login-details p-l-0 p-r-0">
                                <label>Username or email address</label>
                                <input id="form_name" class="cont-input log-input" type="text" name="data[email]" required="required">
                              </div>

                              <div class="col-lg-12 login-details p-l-0 p-r-0">
                                <label>Password</label>
                                <input id="form_name" class="cont-input log-input" type="Password" name="data[password]" required="required">
                              </div>

                        </form>

                        <div class="log-btn">
                            <button class="butn butn-bg disabled contact-btn sub-btn login"><span>Login</span>
                            </button><a href="" class="forgot">Forgot Password ?</a>
                        </div>
                        <div id="messagelogin">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6 p-r-0 p-l-0">
                      <div class="contact contact_for reglog-div">
                      <h3 class="contact-head">Register</h3>
                        <form class="form contact-form" id="register" method="post">

                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>First Name</label>
                                    <input id="form_name" class="cont-input log-input" type="text" name="data[first_name]" required="required">
                                  </div>

                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>Last Name</label>
                                    <input id="form_name" class="cont-input log-input" type="text" name="data[last_name]" required="required">
                                  </div>

                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>Email</label>
                                    <input id="form_name" class="cont-input log-input" type="Email" name="data[email]" required="required">
                                  </div>

                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>Password</label>
                                    <input id="form_name" class="cont-input log-input" type="password" name="data[password]" required="required">
                                  </div>


                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>Mobile Number</label>
                                    <input id="form_name" class="cont-input log-input" type="text" name="data[phone_number]" required="required">
                                  </div>

                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>Occupation</label>
                                    <input id="form_name" class="cont-input log-input" type="text" name="data[occupation]" required="required">
                                  </div>

                                  <div class="col-lg-12 login-details p-l-0 p-r-0">
                                    <label>Type Of Account</label>
                                      <div class="row">

                                        <div class="col-lg-6">
                                          <input id="form_name" class="cont-input log-input log-check" type="checkbox" name="data[type]" required="required" value='1'><span> individual </span>
                                        </div>

                                        <div class="col-lg-6">
                                          <input id="form_name" class="cont-input log-input log-check" type="checkbox" name="data[type]" required="required" value='2'>
                                          <span> Media official</span>
                                        </div>

                                        <div class="col-lg-6">
                                          <input id="form_name" class="cont-input log-input log-check" type="checkbox" name="data[type]" required="required" value='3'> <span>Government official </span>
                                        </div>

                                        <div class="col-lg-6">
                                        </div>

                                      </div>
                                  </div>

                        </form>


                        <div class="log-btn">
                          <button class="butn butn-bg disabled contact-btn sub-btn register"><span>Register</span></button>
                        </div>

                        <div id="message">
                        </div>

                    </div>

                  </div>

                </div>

            </div>

          </div>

        </div>

    </section>


<script type="text/javascript">

    $("#register").validate({       

               
           ignore:[],
              rules: 
              {
                    "data[first_name]"     : "required",
                    "data[last_name]"      : "required",
                    "data[email]"          : "required",
                    "data[password]"       : "required",
                    "data[phone_number]"   : "required",
                    "data[occupation]"     : "required",
                    "data[type]"           : "required",
                },
                messages : 
                {
                    "data[first_name]"    : "required",
                    "data[last_name]"     : "required",
                    "data[email]"         : "required",
                    "data[password]"      : "required",
                    "data[phone_number]"  : "required",
                    "data[occupation]"    : "required",
                    "data[type]"          : "required",
                },       

        });

    $('.register').click(function(){ 

            var validator = $("#register").validate();

            $(".remove").remove();

                validator.form();

                if(validator.form() == true){

                  
                      var data = new FormData($('#register')[0]);   

                    $.ajax({                

                        url: "<?php echo base_url();?>home/save_user",
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

                           var str = '' ;

                           for(var k in data.message)
                           {  
                              str += "<p style='color:red' class='remove'>"+data.message[k]+"</p>"
                           }

                           $("#message").fadeIn('slow').append(str).delay(5000).fadeOut('slow');

                        }

                    });

                }

            });
</script>

<script type="text/javascript">
    $("#login").validate({       

               
           ignore:[],
              rules: 
              {
                    "data[email]"        : "required",
                    "data[password]"     : "required",
                },
                messages : 
                {
                    "data[email]"        : "required",
                    "data[password]"     : "required",
                },       

        });

    $('.login').click(function(){ 

            var validator = $("#login").validate();

            $(".remove").remove();

                validator.form();

                if(validator.form() == true){

                      var data = new FormData($('#login')[0]);   

                    $.ajax({                

                        url: "<?php echo base_url();?>home/user_authentication",
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

                           var str = '' ;

                          if(data.status==0)
                          {
                             str += "<br><p style='color:red' class='remove'>"+data.message+"</p>"
                          }
                          else
                          {
                             str += "<br><p style='color:green' class='remove'>"+data.message+"</p>"

                             if(data.status==1)
                             {
                               setTimeout( redirect() ,2000);
                             }
                             
                          }
                          
                           $("#messagelogin").fadeIn('slow').append(str).delay(5000).fadeOut('slow');

                        }

                    });

                }

            });

function redirect()
{
  location.href = '<?php echo base_url(); ?>admin/index';
}

</script>