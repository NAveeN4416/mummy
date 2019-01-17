<style type="text/css">
  #overlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
</style>


<!-- CONTENT-WRAPPER-->

<div class="content-wrapper">
    <!-- Container-fluid starts -->
     <div class="container-fluid">

    <!-- Row Starts -->
    <div class="row">
      <div class="col-sm-12">
        <div class="main-header">
          <h4>Albums</h4>
          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
              <a href="#">
                <i class="icofont icofont-home">Home</i>
              </a>
            </li>
            <li class="breadcrumb-item"><a href="#:" >Add/Edit Album</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Row end -->

    

    <div class="row">
      <div class="col-sm-12">
        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Add/Edit Album</h5>
            <span style="margin-left:70%"><button class="btn btn-success fa fa-plus add_album" data-name="<?php echo @$current_page; ?>" > Album </button></span>
<!--             <span><button class="btn btn-success fa fa-plus add_gallery" data-name="<?php echo @$current_page; ?>"> Gallery </button></span> -->
          </div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">
              <thead>
                <tr>
                  <th>S NO</th>
                  <th>Album Title</th>
                  <th>Main Image</th>
                  <th>Gallery Actions</th>
                  <th>Status</th>
                  <th>Album Actions</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                  <th>S NO</th>
                  <th>Album Title</th>
                  <th>Main Image</th>
                  <th>Gallery Actions</th>
                  <th>Status</th>
                  <th>Album Actions</th>
                </tr>
              </tfoot>

              <tbody>
                   <?php 
                      $counter = 1;

                      foreach($albums as $key=>$album) 
                      {
                          if ($album["status"] == "1") 
                          {
                              $status = "tag tag-success" ;
                              $status1='Active';
                          }
                          else
                          {
                              $status = "tag tag-default" ;
                               $status1='InActive';

                          } ?>
 
                              <tr id="hide<?php echo $album["id"] ; ?>">

                                  <td><?php echo $counter ; ?></td> 
                                  <td style="width:200px;"><?php echo ucfirst($album["title_en"]) ; ?></td> 
                                  <td style="width:150px;"><img src="<?php echo base_url().$album['image'] ?>" height=100px ></td>
                                  
                                  <td>
                                    <?php if(@$album['gallery']){ ?>
                                        <button type="button" class="btn btn-info waves-effect waves-light" style="float: none;margin: 5px;"><span class="icofont icofont-ui-view">View Gallery</span>
                                        </button>

                                        <button type="button" class="btn btn-primary waves-effect waves-light add_gallery" data-toggle="modal"  data-target = "#add_services" data-id="<?php echo $album["id"] ;?>"  style="float: none;margin: 5px;"> 
                                        <span class="icofont icofont-ui-edit"></span> Edit
                                        </button>
                                    <?php }else{ ?>  
                                      <button type="button" class="btn btn-success fa fa-plus waves-effect waves-light add_gallery" data-toggle="modal"  data-target = "#add_services" data-id="<?php echo $album["id"] ;?>"  style="float: none;margin: 5px;"> 
                                        <span class="icofont icofont-ui-edit"></span> Add
                                      </button>
                                    <?php } ?>
                                  </td>
                                  <td><span class="<?php echo $status ; ?>"><?php echo ucfirst($status1) ;?></span></td>
                                  <td style="white-space: nowrap; width: 1%;">
                                    <div class=" user-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <button type="button" class="btn btn-primary waves-effect waves-light add_album" data-toggle="modal"  data-target = "#add_services" data-id="<?php echo $album["id"] ;?>"  style="float: none;margin: 5px;"> 
                                            <span class="icofont icofont-ui-edit"></span>
                                            </button>

                                            <button type="button" class="btn btn-primary waves-effect waves-light delete_team_mem" data-id="<?php echo $album["id"] ; ?>" style="float: none;margin: 5px;"> 
                                                <span class="icofont icofont-ui-delete"></span>
                                            </button>
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
    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add_services" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>
  </section>

   <script>     

        var $modal = $('#add_services');
        $('.add_album').on('click',function(event){ 
            var id = $(this).data('id');
            event.stopPropagation();
            $modal.load('<?php echo site_url('admin/add_album');?>', {id: id},
            function(){
              $modal.modal('show');
            });
        });


        var $sub_modal = $('#add_services');
        $('.add_gallery').on('click',function(event){ 
            var id = $(this).data('id');
            event.stopPropagation();
            $sub_modal.load('<?php echo site_url('admin/add_gallery');?>', {id: id},
            function()
            {
              $sub_modal.modal('show');
            });

        });


        //delete 
    $('.delete_team_mem').on('click',function(event)
    { 
          var id = $(this).data('id');
              swal({title: 'Delete This Service ?', showCancelButton: true}).then(result => {
                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                         $.ajax({                
                              url: "<?php echo base_url();?>admin/delete_data/services",
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
                                      swal("Deleted!", "Service Deletion Is Success", "success"); 
                                      location.reload();
                                      $("#hide"+id).hide();
                                  }
                              }
                        });
                   }
              })

          });
  

    $('.delete_sub_service').on('click',function(event)
    { 
          var id = $(this).data('id');
          swal({title: 'Delete This Sub Service ?', showCancelButton: true}).then(result => {

                if (result.value) 
                {
                        //swal("Deleted!", "Cancelled.", "success")
                } 
                else 
                {
                         $.ajax({                
                              url: "<?php echo base_url();?>admin/delete_sub_service",
                              type: "POST",
                              data: {id:id},
                              error:function(request,response)
                              {
                                  console.log(request);
                              },                  
                              success: function(result)
                              {

                                  if(result=='1')
                                  { 
                                      swal("Deleted !", "Sub Service Deletion Is Success", "success"); 
                                      location.reload();
                                  }
                                  else
                                  {
                                    swal("Failed !", "Something went wrong", "error"); 
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

 