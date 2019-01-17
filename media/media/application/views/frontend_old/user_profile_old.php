<style type="text/css">

.emp-profile{
    padding: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 50%;
    height: 50%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 50%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>


<?php
      //Getting message variable in from session
      
    $session = $this->session->userdata() ;

    $status  = (@$session['status']==2) ? '1' : '0' ;
    $message = @$session['message'] ;

    $this->session->unset_userdata('status');
    $this->session->unset_userdata('message');

 ?>


<!-- <div class="slider-wrapper dotted-style">

  <div class="container">

    <div class="row">

      <div class="col-lg-3 col-md-3 col-sm-3"> </div>

      <div class="col-lg-9 col-md-9 col-sm-9 mar_b-30">  -->

        <div class=" emp-profile">


            <form action="<?php echo base_url(); ?>home/change_profile_image" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                    

                        <div class="profile-img" >
                            <img src="<?php echo base_url().$userdata['image']; ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary" >
                                Change Photo
                                <input type="file" name="image" style="cursor: pointer" onchange="this.form.submit()" />
                            </div>
                        </div>

                    </form>    
                    </div>

                    <div class="col-md-6">
                        <div class="profile-head">

                                    <div class="alert alert-success  <?php if($status=='0') { echo 'hide' ; } ?>">
                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                      <strong>Success ! </strong> <?php echo $message ; ?>
                                    </div>

                                    <h5>
                                        <?php echo $userdata['username'] ; ?>
                                    </h5>
                                    <h6>
                                        Zido User
                                    </h6>
                                    <p class="proile-rating">Rating : 
                                      <span> 

                                      <?php for($i=1; $i<=5;$i++) { 

                                      if($i<=3){ ?>

                                        <i class="fa fa-star"></i>

                                      <?php }else{ ?>   

                                        <i class="fa fa-star-o"></i>
                                        
                                <?php } } ?>
  

                                      </span>

                                    </p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Subscription Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        
                      <button type="button" class="btn btn-primary waves-effect waves-light add" data-toggle="modal"  data-target = "#add" data-id="<?php echo $userdata['id'] ;?>"  style="float: none;margin: 5px;">
                      <span class="icofont icofont-ui-edit">Edit</span>

                    </div>
                    <div class="col-md-2">
                        
                      <button type="button" class="btn btn-primary waves-effect waves-light edit" data-toggle="modal"  data-target = "#add" data-id="<?php echo $userdata['id'] ;?>"  style="float: none;margin: 5px;"> 
                      <span class="icofont icofont-ui-edit">Edit Password</span>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
<!--                             <p>WORK LINK</p>
<a href="">Website Link</a><br/>
<a href="">Bootsnipp Profile</a><br/>
<a href="">Bootply Profile</a> -->

                            <p></p>

                            <button type="button" class="btn btn-primary">My Subscriptions</button>

                            <br/><br/>

                            <button type="button" class="btn btn-primary">Payment Methods</button>
                            
                            <br/><br/>

                            <a href="#my_favorites">
                            <button type="button" class="btn btn-primary">My Favorites <span class="badge badge-light"><?php echo $count_favorites; ?></span></button>
                            </a>

                            <br/><br/>
                            
                            <a href="#my_products">
                            <button type="button" class="btn btn-primary">My Items <span class="badge badge-light"><?php echo $count_products; ?></span></button>
                            </a>

                            <br/><br/>

                            <a href="#my_bids">
                            <button type="button" class="btn btn-primary">My Bids <span class="badge badge-light"><?php echo $count_bids; ?></span></button>
                            </a>

                            <br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane  active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $userdata['id'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $userdata['username'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $userdata['email'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $userdata['phone_number'] ; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                <?php if($package_details) { ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Package Name</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $package_details['package_name'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Package Limit</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $package_details['total_items'] ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Items Left</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>Still <?php echo $package_details['items_left'] ; ?> cars you can sell</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Duration</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p><?php echo $package_details['duration'] ; ?> months</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Subscription Status</label>
                                            </div>
                                            <div class="col-md-4">
                                                <p style="color: <?php echo ($package_details['status']) ? 'green' : 'red' ; ?>"><?php echo  ($package_details['status']) ? 'Active' : 'InActive' ; ?></p>

                                                <?php if(!$package_details['status']) { ?>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light activate" data-toggle="modal"  data-target = "#add" data-id="<?php echo $userdata['id'] ;?>"  style="float: none">
                                                    <span class="icofont icofont-ui-edit">Make Payment</span></button>
                                                    <br><br>
                                                    <span>If you want select new Package Subscribe here</span><br>
                                                    <a class="btn btn-primary waves-effect waves-light" href="<?php echo base_url(); ?>home/subscription">Subscribe</a>
                                                <?php } ?>    
                                            </div>
                                        </div>
                                <?php }else{ ?>       
                                
                                    <p>You don't have package yet ! Please Subscribe to enjoy our services :)</p>
                                    <p><a href="http://www.volive.in/zido/home/subscription" class="Subscrption-btn">Subscription</a></p>

                                <?php } ?> 
<!--                                 <div class="row">
    <div class="col-md-8">
        <label>Your Bio</label><br/>
        <p>Your detail description</p>
    </div>
</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

<!--       </div>


    </div>

  </div>

</div> -->




<div class="new-product-area new-product-area-3 pt-5 pb-5" id="my_favorites">

  <div class="container">

    <div class="container-inner">

      <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">

          <div class="section-title">

            <h2>My favorites</h2>

          </div>

        </div>

        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">

          <div class="mainmenu">

            <nav>

              <ul>

                <li class="active"><a href="#">All Favorites</a></li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="new-product-home-2-active">

        <?php 
            if(@$my_favorites){

            foreach ($my_favorites as $key => $product) {  ?>

          <div class="col-lg-12">

            <div class="single-new-product">

              <div class="product-img"> <a href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>"> <img src="<?php echo base_url().$product['image']; ?>" class="first_img" alt="" /> </a> </div>

              <div class="product-content text-center">

                <h6 class="brand-title"><?php echo $product['category_name'] ; ?><a href="javascript:" class="share-icon"><i class="fa fa-share-alt"></i></a></h6>

                <h3 class="brand-num"><?php echo $product['sub_category_name'] ; ?></h3>

                <div class="price-bid">

                  <h4><?php echo $product['price'] ; ?> SAR <a class="view-deal" href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>">View Deal</a></h4>

                </div>
                
                <div class="posted-date">
                      <h6><?php echo $product['created_at'] ; ?></h6>
                      </div>

              </div>

            </div>

          </div>
        
          <?php } }else{ ?>
          
             <p class='text-center'>You don't  have any favorites !</p>

          <?php } ?>


        </div>

      </div>

    </div>

  </div>

</div>

<div class="new-product-area new-product-area-3 pt-5 pb-5" id="my_products">

  <div class="container">

    <div class="container-inner">

      <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">

          <div class="section-title">

            <h2>My Items</h2>

          </div>

        </div>

        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">

          <div class="mainmenu">

            <nav>

              <ul>

                <li class="active"><a href="#">All Products</a></li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="new-product-home-2-active">

        <?php 

            if(@$my_products)
            {

              foreach ($my_products as $key => $product) {  ?>

          <div class="col-lg-12">

            <div class="single-new-product">

              <div class="product-img"> <a href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>"> <img src="<?php echo base_url().$product['image']; ?>" class="first_img" alt="" /> </a> </div>

              <div class="product-content text-center">

                <h6 class="brand-title"><?php echo $product['category_name'] ; ?><a href="javascript:" class="share-icon"><i class="fa fa-share-alt"></i></a></h6>

                <h3 class="brand-num"><?php echo $product['sub_category_name'] ; ?></h3>

                <div class="price-bid">

                  <h4><?php echo $product['price'] ; ?> SAR <a class="view-deal" href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>">View Deal</a></h4>

                </div>
                
                <div class="posted-date">
                      <h6><?php echo $product['created_at'] ; ?></h6>
                      </div>

              </div>

            </div>

          </div>
        
        <?php } }else{ ?>
          
             <p class='text-center'>You did't sell any product till now !</p>

        <?php } ?>
        </div>

      </div>

    </div>

  </div>

</div>

<div class="new-product-area new-product-area-3 pt-5 pb-50" id="my_bids">

  <div class="container">

    <div class="container-inner">

      <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12">

          <div class="section-title">

            <h2>My Bids</h2>

          </div>

        </div>

        <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">

          <div class="mainmenu">

            <nav>

              <ul>

                <li class="active"><a href="#">All Bids</a></li>

              </ul>

            </nav>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="new-product-home-2-active">

        <?php 

          if(@$my_bids)
          {
            foreach ($my_bids as $key => $product) {  ?>

          <div class="col-lg-12">

            <div class="single-new-product">

              <div class="product-img"> <a href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>"> <img src="<?php echo base_url().$product['image']; ?>" class="first_img" alt="" /> </a> </div>

              <div class="product-content text-center">

                <h6 class="brand-title"><?php echo $product['category_name'] ; ?><a href="javascript:" class="share-icon"><i class="fa fa-share-alt"></i></a></h6>

                <h3 class="brand-num"><?php echo $product['sub_category_name'] ; ?></h3>

                <div class="price-bid">

                  <h4><?php echo $product['price'] ; ?> SAR <a class="view-deal" href="<?php echo base_url() ;  ?>home/view_deals/<?php echo $product['product_id'] ; ?>">View Deal</a></h4>

                </div>
                
                <div class="posted-date">
                      <h6><?php echo $product['created_at'] ; ?></h6>
                      </div>

              </div>

            </div>

          </div>
        
        <?php } }else { ?>
  
          <p class='text-center'>You don't have BIDS !</p>

        <?php } ?>

        </div>

      </div>

    </div>

  </div>

</div>


<section>

  <div class = "modal fade" data-backdrop="static" data-keyboard="false" id="add" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <script>     

        var $modal = $('#add');

        $('.add').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $('#add').load('<?php echo site_url('home/edit_profile');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');

            });

        });


        var $modal = $('#add');

        $('.edit').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $('#add').load('<?php echo site_url('home/edit_password');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $modal.modal('show');

            });

        });



        var $activate = $('#add');

        $('.activate').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $('#add').load('<?php echo site_url('home/payment_method');?>', {id: id},

            function(){

            /*$('.modal').replaceWith('');*/

            $activate.modal('show');

            });

        });


</script>

<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>

