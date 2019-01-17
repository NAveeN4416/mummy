
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />

<style>
.text-center.p
	{
		
    width: 80%;
    margin: 0 auto;
}
	
</style>


<div class="breadcrumb-area">
		    <div class="container">
		        <div class="row">
		            <div class="col-12">
		                <div class="breadcrumb-content text-center">
                            <h1 class="breadmome-name"><?php echo $this->lang->line('s_sell_product') ; ?></h1>
		                    <ul>
		                        <li><a href="<?php echo  base_url(); ?>home/index"><?php echo $this->lang->line('h_home') ; ?></a></li>
		                        <li class="active"><?php echo $this->lang->line('s_sell_product') ; ?></li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

<?php
      //Getting message variable in from session
      
    $session = $this->session->userdata() ;

    $status  = (@$session['status']) ;
    $message = @$session['message'] ;

    print_r($status);

    if($status==0)
    {
      $status = '0' ;
    }
    elseif($status==1 || $status==2)
    {
      $status = ($status==1) ? 'success' : 'info'  ;
    }
    else
    {
      $status = 'danger' ;
    }


    $this->session->unset_userdata('status');
    $this->session->unset_userdata('message');

 ?>


        
<div class="innersection">
		    <div class="container">
		        <div class="row">
            <div class="text-center p">

                <div class="alert alert-<?php echo $status ; ?>  <?php if($status=='0') { echo 'hide' ; } ?>">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong><?php echo $status ; ?>!</strong> <?php echo $message ; ?>
                </div>
              
              <?php $flag = 0; if($status=='0') { if(!sizeof($subscription)) {  $flag = 1; ?>
                <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Info !</strong> You dont have packages yet! Please subscribe <a href="<?php echo base_url(); ?>home/subscription"> here </a>
                </div>
              <?php }elseif($subscription['status']=='0') {  $flag = 1; ?> 
                <div class="alert alert-info">
                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                  <strong>Info !</strong> Please complete the payment <a href="<?php echo base_url(); ?>home/user_profile" style="font-size: 25px"> in your profile  </a> to sell product
                </div>

              <?php } } ?> 


            	 <h2><?php echo $auction['title_'.$lang] ; ?></h2>
	            <p><?php echo $auction['content_'.$lang] ; ?></p>
            </div>
	           
		            <div class="col-md-offset-1 col-md-10">
		                <div class="login-form">
		                    <div class="login-form-container">
		                        <div class="login-form">
		                            <form action="<?php echo base_url(); ?>home/save_product" method="POST" enctype='multipart/form-data'>
                                   
                                   <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_make'); ?></label>
                                    <select name="category_id" id="category_id" onchange="load_sub_cat(this.value);" required="">
                                        <option value="" selected disabled>--SELECT--</option>
                                      <?php foreach($categories as $key=>$category) { ?>  

                                        <option value="<?php echo $category['id'] ; ?>"><?php echo $category['name_'.$lang] ; ?></option>
                                      
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_model'); ?></label>
                                    <select name="sub_category_id" id="sub_category_id" disabled required="">
                                      <option value="" selected disabled>--SELECT--</option>
<!--                                     <?php foreach($sub_categories as $key=>$sub_category) { ?>
                                          <option value="<?php echo $sub_category['id'] ; ?>"><?php echo $sub_category['name_'.$lang] ; ?></option>
                                         <?php } ?>   -->
                                    </select>
                                   </div>
                                   
                                  
                                   
                                     <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_ext_color'); ?></label>
                                    <select name="exterior_color_id" id="exterior_color_id" required="">
                                    <option value="" selected disabled>--SELECT--</option>
                                      <?php foreach($colors as $key=>$color) { ?>  

                                        <option value="<?php echo $color['id'] ; ?>"><?php echo $color['color_'.$lang] ; ?></option>
                                      
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                   
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_int_color'); ?></label>
                                    <select name="interior_color_id" id="interior_color_id" required="">
                                    <option value="" selected disabled>--SELECT--</option>
                                      <?php foreach($colors as $key=>$color) { ?>  

                                        <option value="<?php echo $color['id'] ; ?>"><?php echo $color['color_'.$lang] ; ?></option>
                                      
                                      <?php } ?>
                                    </select>
                                   </div>
                                   
                                   
                                   <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_year'); ?></label>
                                    <input type="text" name="year" id="year" required="">
<!--                                     <select name="" id="year">
                                          <option value="" selected disabled>--SELECT--</option>
                                          <option value="">2000</option>
                                          <option value="">2001</option> -->
                                   </div>
                                   
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_mileage'); ?></label>
                                    <select name="milage" id="milage">
                                    <?php for($i=1000; $i<=10000; $i+=500) { ?>
                                      <option value="<?php echo $i; ?>"><?php echo $i; ?> kmph</option>
                                    <?php } ?>
                                  </select>
                                   </div>
                                   
                                   
                                     <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_warranty'); ?></label>
                                    <select name="warranty" id="warranty">
                                      <option value="no">No</option>
                                      <option value="yes">Yes</option>
                                    </select>
                                   </div>
                                   
                                   
                                   
                                   <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_inspected'); ?></label>
                                    <select name="inspected" id="inspected" required="">
                                      <option value="no">No</option>
                                      <option value="yes">Yes</option>
                                    </select>
                                   </div>
                                   
                                  
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_gears'); ?></label>
                                    <select name="gears" id="gears" required="">
                                      <option value="1">Manual System</option>
                                      <option value="0">Auto System</option>
                                    </select>
                                   </div>
                                   
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_cylinders'); ?></label>
                                    <select name="cylinders" id="cylinders" required="">
                                      <option value="4">4</option>
                                      <option value="6">6</option>
                                      <option value="8">8</option>
                                      <option value="10">10</option>
                                      <option value="12">12</option>
                                    </select>
                                   </div>
                                   
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_city'); ?></label>
                                   	
                                    <select name="country_id" id="country_id" required="">
                                      <option value="" selected disabled>--SELECT--</option>
                                    <?php foreach ($cities as $key => $country) { ?>
                                    
                                      <option value="<?php echo $country['id']; ?>"><?php echo $country['name_'.$lang]; ?></option>

                                    <?php } ?>

                                  <!-- <option value="">Riyadh</option>
                                  <option value="">Makkah</option>
                                  <option value="">Medina</option>
                                  <option value="">Jeddah</option>
                                  <option value="">Dammam</option>
                                  <option value="">Hail</option>
                                  <option value="">Tabuk</option>
                                  <option value="">Qassim</option>
                                  <option value="">Abha</option>
                                  <option value="">Baha</option>
                                  <option value="">Jazan</option>
                                  <option value="">Najran</option>
                                  <option value="">Rafha</option>
                                  <option value="">Bisha</option>
                                  <option value="">Arar</option>
                                  <option value="">Taif</option>
                                  <option value="">Hafar Al Batin </option>
                                  <option value="">Yanbu</option>
                                  <option value="">Sakaka</option>
                                  <option value="">Hasa</option>
                                  <option value="">Qurayyat</option>
                                  <option value="">Jubail</option>
                                  <option value="">Duwadmi</option>
                                  <option value="">Dubai</option>
                                  <option value="">Kuwait</option>
                                  <option value="">Bahrain</option>
                                  <option value="">Abu Dhabi </option>
                                  <option value="">Muscat</option> -->
                                  
                                    </select>
                                   </div>
                                   
                                    
                                    <div class="col-md-6">
                                   	<label style="color:red;"><?php echo $this->lang->line('s_pin_num'); ?></label>
                                    <input type="text" name="serial_num" required="">
                                   </div>
                                   
                                    <div class="col-md-12">
                                   	<label><?php echo $this->lang->line('s_sun_roof'); ?></label>
                                    <select name="sun_roof" id="sun_roof" required="">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                    </select>
                                   </div>
                                   
                                   <div class="col-md-12">
                                   	<label><?php echo $this->lang->line('s_car_desc'); ?></label>
									                     <textarea row="3" name="description" id="description" placeholder="300 Letters Only" required=""></textarea>
                                   </div>
                                    
		                                
                                    <div class="col-md-6">
                                   	<label style="color:red;"><?php echo $this->lang->line('s_price'); ?> (SAR)</label>
                                    <input type="number" name="price" id="price" required="">
                                   </div>
                                        
                                           
                                    <div class="col-md-6">
                                   	<label><?php echo $this->lang->line('s_min_bid'); ?> (SAR)</label>
                                      <!-- <input type="Number" name="minimum_bid" id="minimum_bid" required=""> --> 
                                      <select name="minimum_bid" id="minimum_bid" required="">
                                      <?php for($i=100; $i<=1000;$i+=100){ ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?> SAR</option>
                                      <?php } ?>
                                      </select>  
                                   </div>

                                    <div class="col-md-12">
                                     	<label><?php echo $this->lang->line('s_upload'); ?>
                                              <span style="color: red"> * 1 image should be upload</span>
                                      </label>
                                      <input type="file" name="images[]" id="images" multiple required="">
                                    </div>
                                           
                                    <div class="col-md-12">
                                      <button class="default-btn pull-right" <?php echo ($flag==1) ? 'disabled' : '' ; ?> ><?php echo $this->lang->line('s_next'); ?></button>
                                    </div>

		                            </form>

		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

<!-- footer-area-start -->

<style>

.category-menu-list { display:none; }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>


<script type="text/javascript">
  
function load_sub_cat($category_id) 
{ 
 //alert($category_id); 
    $.ajax({
            url: "<?php echo base_url();?>home/load_sub_categories",
            type: "POST",
            data: {'category_id':$category_id},
/*            dataType: 'text',
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,*/
            error:function(request,response){
                console.log(request);
            },                  
            success: function(result)
            { 
              //alert(result);

              var json_obj = JSON.parse(result) ;

              var sub_categories = json_obj.sub_categories

              var str = '' ;

              var count = 1 ;
              
              for(var i in sub_categories)
              {
                if(count)
                {
                  str += "<option value=''>--Select--</option>" ;
                  count = 0 ;
                }

                var sub_category = sub_categories[i] ;

                str  += "<option value='"+sub_category['id']+"'>"+sub_category['name_<?php echo $lang ; ?>']+"</option>\n" ;
              }

              if(str!='')
              {
                $('#sub_category_id').html(str);
                $('#sub_category_id').removeAttr("disabled");
              }
              else
              {
                str = "<option value='' selected disabled>--SELECT--</option>" ;

                $('#sub_category_id').html(str);
                $('#sub_category_id').attr("disabled",true);
              }
            
            }  
          });

}



$('.save_product').click(function(e){ 

    var myvars = {} ;

    myvars['category_id']       = $('#category_id').val();
    myvars['sub_category_id']   = $('#sub_category_id').val();
    myvars['exterior_color_id'] = $('#exterior_color_id').val();
    myvars['interior_color_id'] = $('#interior_color_id').val();
    myvars['year']              = $('#year').val();
    myvars['milage']            = $('#milage').val();
    myvars['warranty']          = $('#warranty').val();
    myvars['inspected']         = $('#inspected').val();
    myvars['gears']             = $('#gears').val();
    myvars['country_id']        = $('#country_id').val();
    myvars['serial_num']        = $('#serial_num').val();
    myvars['sun_roof']          = $('#sun_roof').val();
    myvars['images']            = $('textarea#description').val();
    myvars['min_bid']           = $('#min_bid').val();
    myvars['price']             = $('#price').val();

    $null_count = 0

    for(var i in myvars)
    {
        if(myvars[i]==null)
        {
          $null_count += 1
        }
        else if(myvars[i]==undefined)
        {
          $null_count += 1 
        }
        else
        {

        }

        alert($num_count);
    }




});


</script>


<script type="text/javascript">
var todayDate = new Date().getDate();
$("#year").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    //changeMonth: true,
    changeYear: true,
    //maxDate: new Date(),
    //minDate: "-100Y",
	 yearRange: '-100:+0'
   
});

</script> 

<script type="text/javascript">
  
  $(document).ready(function(){

    $('div#cate-toggle').css({"display":"none"});// remove existing

  })


</script>
