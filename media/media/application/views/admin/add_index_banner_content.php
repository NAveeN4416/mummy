<!-- CONTENT-WRAPPER-->
<style>

#insert_services label.error 
{
    color:red; 
}

    #insert_services input.error,textarea.error,select.error {

        border:1px solid red;

        color:red; 

    }

    .popover {

    z-index: 2000;

    position:relative;

    }
#post_form label.error {
    color:red; 
}
#post_form input.error,textarea.error,select.error {
    border:1px solid red;
    color:red; 
}
.popover {
    z-index: 2000;
    position:relative;
}
.error {
    
    color : red !important;
}
   
#map {
width: 50%;
height: 400px;
background-color: grey;
}
.bootstrap-select .dropdown-menu.inner{
    z-index:9999999 !important;
    
    position: inherit;
}

.bootstrap-select > .dropdown-toggle.bs-placeholder, .bootstrap-select > .dropdown-toggle.bs-placeholder:hover, .bootstrap-select > .dropdown-toggle.bs-placeholder:focus, .bootstrap-select > .dropdown-toggle.bs-placeholder:active {
    color: #333;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 20px;
    font-size: 11px;
}
.form-control {
    z-index: 1;
}   
    

</style>
    <div class="content-wrapper">

        <!-- Container-fluid starts -->
         <div class="container-fluid">

    <!-- Row Starts -->

    <!-- Row Starts -->
    <div class="row">
      <div class="col-sm-12">
        <div class="main-header">
          <h4>Index Banner Content</h4>
          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
              <a href="#">
                <i class="icofont icofont-home">Home</i>
              </a>
            </li>
			     <li class="breadcrumb-item"><a href="#:" >Index Banner Content</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Row end -->


    

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h5 class="card-header-text">Index Banner Content</h5></div>
          <div class="card-block">


              <form id="insert_services">                         

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Title 1 (En)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="title1_en" name="data[title_en]"  class="form-control"  value="<?php echo @$value['title_en'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Title 1 (Ar)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="title1_ar" name="data[title_ar]" class="form-control"  value="<?php echo @$value['title_ar'];?>">
                    </div>
                </div>
              <hr>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Heading 1 (En)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="heading1_en" name="data[heading1_en]"  class="form-control"  value="<?php echo @$value['heading1_en'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Heading 1 (Ar)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="heading1_ar" name="data[heading1_ar]" class="form-control"  value="<?php echo @$value['heading1_ar'];?>">
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Content 1 (En)*</label>
                    <div class="col-sm-9">
                        <textarea  id="content1_en" name="data[content1_en]"  class="form-control ckeditor" ><?php echo @$value['content1_en'];?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Content 1 (Ar)*</label>
                    <div class="col-sm-9">
                        <textarea  id="content1_ar" name="data[content1_ar]"  class="form-control ckeditor"><?php echo @$value['content1_ar'];?></textarea>
                    </div>
                </div>

              <hr>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Heading 2 (En)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="heading2_en" name="data[heading2_en]"  class="form-control"  value="<?php echo @$value['heading2_en'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Heading 2 (Ar)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="heading2_ar" name="data[heading2_ar]" class="form-control"  value="<?php echo @$value['heading2_ar'];?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Content 2 (En)*</label>
                    <div class="col-sm-9">
                        <textarea  id="content2_en" name="data[content2_en]"  class="form-control ckeditor" placeholder="Content" rows="10" cols="10"><?php echo @$value['content2_en'];?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Content 2 (Ar)*</label>
                    <div class="col-sm-9">
                        <textarea  id="content2_ar" name="data[content2_ar]"  class="form-control ckeditor" placeholder="Content" rows="10" cols="10"><?php echo @$value['content2_ar'];?></textarea>
                    </div>
                </div>

                <?php  if(@$value){ ?>
                 <img src="<?php echo base_url();?><?php echo @$value['image'];?>" height=100px;>
                    <input type="hidden" name="old_image" value="<?php echo @$value['image'];?>"> 
                 <?php   } ?>
                <div class="form-group row">
                     <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Image</label>
                    <div class="col-sm-9">
                        <input type="file" id="file"  name="file" class="form-control">
                    </div>
                </div>
                
                <input type="hidden" id="id" name="id" value="<?php echo @$value['id']; ?>">

                <input type="hidden" id="index_banner_id" name="data[index_banner_id]" value="<?php echo @$index_banner_id; ?>">

            </form> 
				
				 <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect waves-light insert_services">Save changes</button>
        </div>


          </div>

        </div>

      </div>

    </div>



  </div>

        <!-- Container-fluid ends -->

        

     </div>

 <!-- CONTENT-WRAPPER-->

  <section>

   

    </section>

   <script>     
$("#insert_services").validate({       

           
		   ignore:[],
    			rules: 
          {
                <?php  $id=@$value['id'];
                if($id==''){ ?>
                    "image"           : "required",
                <?php }?>
                "data[title_en]"      : "required",
                "data[title_ar]"      : "required",
                "data[heading1_en]"   : "required",
                "data[heading1_ar]"   : "required",
                "data[heading2_en]"   : "required",
                "data[heading2_ar]"   : "required",
        				"data[content1_en]"   :{
                                				required: function(textarea) 
                                				{
                                					 CKEDITOR.instances[textarea.id].updateElement();
                                					 var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                                					 return editorcontent.length === 0;
                                				}
                                		},
                "data[content1_ar]":{
                                			  required: function(textarea) 
                                			  {
                                					 CKEDITOR.instances[textarea.id].updateElement();
                                					 var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                                					 return editorcontent.length === 0;
                                				}
                                    },
                "data[content2_en]":{
                                        required: function(textarea) 
                                        {
                                           CKEDITOR.instances[textarea.id].updateElement();
                                           var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                                           return editorcontent.length === 0;
                                        }
                                    },
                "data[content2_ar]":{
                                       required: function(textarea) 
                                        {
                                           CKEDITOR.instances[textarea.id].updateElement();
                                           var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                                           return editorcontent.length === 0;
                                        }
                                    },
            },
            messages : 
            {
                    <?php  $id=@$value['id'];
                    if($id==''){ ?>
                        "image"           : "required",
                    <?php }?>
                    "data[title_en]"      : "required",
                    "data[title_ar]"      : "required",
                    "data[heading1_en]"   : "required",
                    "data[heading1_ar]"   : "required",
                    "data[heading2_en]"   : "required",
                    "data[heading2_ar]"   : "required",
                    "data[content1_en]"   : "Required",
                    "data[content1_ar]"   : "Required",
                    "data[content2_en]"   : "Required",
                    "data[content2_ar]"   : "Required",
            },       

    });

$('.insert_services').click(function(){ 

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

              
                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_data/index_banners_content",
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
                        if (result) 
                        {
                            location.reload();
                        } 
                    }

                });

            }

        });

</script>
