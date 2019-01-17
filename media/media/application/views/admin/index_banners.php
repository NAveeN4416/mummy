<!-- CONTENT-WRAPPER-->

    <div class="content-wrapper">
        <!-- Container-fluid starts -->
         <div class="container-fluid">

    <!-- Row Starts -->

    <div class="row">
      <div class="col-sm-12">
        <div class="main-header">
          <h4>Index Banners</h4>
          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
              <a href="#">
                <i class="icofont icofont-home">Home</i>
              </a>
            </li>
            <li class="breadcrumb-item"><a href="#:" >Add/Edit Index Banners</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Row end -->
    
    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Add/Edit Index Banners</h5>
              <span><button class="btn btn-success fa fa-plus add_category" style="margin-left:60%"> Index Banner </button></span>
<!--             <span><button class="btn btn-success fa fa-plus add_category" data-name="<?php echo @$current_page; ?>"> Sub service </button></span> -->
          </div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">

              <thead>
                <tr>
                  <th>S NO</th>
                  <th>Title</th>
                  <th>Image</th>
  				        <th>Content Action</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tfoot>
                 <tr>
                  <th>S NO</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Content Action</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>

              <tbody>

                   <?php $counter = 1;

                      foreach($index_banners as $banner) {
                          //echo $key[request_type];

                          if ($banner["status"] == "1") {

                              $status = "tag tag-success" ;
                              $status1='Active';

                          } else {

                              $status = "tag tag-default" ;
                               $status1='InActive';

                          } ?>
 
                              <tr id="hide<?php echo $banner["id"] ; ?>">

                                  <td><?php echo $counter ; ?></td> 
                                  <td style="width:300px;"><?php echo ucfirst($banner["title_en"]) ; ?></td> 
                                  <td style="width:300px;">
                                    <?php if($banner['file_type']==0){ ?>
                                      <img src="<?php echo base_url().$banner['image'] ?>" height=50px >
                                      <p>Image</p>
                                    <?php }else{ ?>
                                      <video autoplay muted loop id="myVideo" width="120" height="70">
                                        <source src="<?php echo base_url().$banner['image']; ?>" type="video/mp4">
                                      </video>
                                      <p>Video</p>
                                    <?php } ?>
                                  </td>  
                                  <td style="width:300px;">
                                    <?php if(@$banner['content']){ ?>
                                       <a href="<?php echo base_url(); ?>admin/add_index_banner_content/<?php echo $banner['id']; ?>/<?php echo $banner['content']['content_id'];  ?>"><span class="btn btn-warning btn-sm ">Edit/View Content</span></a>
                                    <?php }else{ ?>
                                      <a href="<?php echo base_url(); ?>admin/add_index_banner_content/<?php echo $banner['id']; ?>"><span class="btn btn-primary btn-sm">Add Content<span></a>
                                    <?php } ?>
                                  </td>  


                                  <td><span class="<?php echo $status ; ?>"><?php echo ucfirst($status1) ;?></span></td>

                                   <td style="white-space: nowrap; width: 1%;">
                                    <div class=" user-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <button type="button" class="btn btn-primary waves-effect waves-light add_category" data-toggle="modal"  data-target = "#add_category" data-id="<?php echo $banner["id"] ;?>"  style="float: none;margin: 5px;"> 
                                                <span class="icofont icofont-ui-edit"></span>
                                            </button>
<!--
                                            <button type="button" class="btn btn-primary waves-effect waves-light delete_categories" data-id="<?php echo $banner["id"] ; ?>" style="float: none;margin: 5px;"> 
                                                <span class="icofont icofont-ui-delete"></span>
                                            </button>
-->
                                         
                                        </div>                                                       
                                    </div>
                                </td>
                              </tr>
                      <?php $counter++; } ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>

        <!-- Container-fluid ends -->

</div>

 <!-- CONTENT-WRAPPER-->

  <section>

    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add_category" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>

    </section>

   <script>     

        var $modal = $('#add_category');

        $('.add_category').on('click',function(event){ 

            var id = $(this).data('id');

            event.stopPropagation();

            $modal.load('<?php echo site_url('admin/modal/add_index_banner/index_banners');?>', {id: id},

            function(){

            $modal.modal('show');

            });

        });


    //Delete 
    $('.delete_categories').on('click',function(event)
    { 
          var id = $(this).data('id');
                 
              swal({title: 'Delete This Banner ?', showCancelButton: true}).then(result => {
                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                   $.ajax({                
                        url: "<?php echo base_url();?>admin/delete/banners",
                        type: "POST",
                        data: {id:id},
                        error:function(request,response)
                        {
                            console.log(request);
                        },                  
                        success: function(result)
                        {
                            var res = jQuery.parseJSON(result);
                            if(res.status='success')
                            { 
                              //swal("Deleted!", "Category Deletion Is Success", "success"); 
                              location.reload();
                              $("#hide"+id).hide();
                            }
                        }
                  });
                }
              })

          });
  

$(".form_datetime").datetimepicker({
      format: "dd MM yyyy - hh:ii"
  });		

</script>

 