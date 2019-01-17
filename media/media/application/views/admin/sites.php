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
          <h4>Media Sites</h4>
          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
              <a href="#">
                <i class="icofont icofont-home">Home</i>
              </a>
            </li>
            <li class="breadcrumb-item"><a href="#:" >Add/Edit Media Sites</a></li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Row end -->

    

    <div class="row">
      <div class="col-sm-12">
        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Add/Edit Media Sites</h5>
            <span style="margin-left:65%">
              <a href="<?php echo base_url(); ?>admin/add_site"><button class="btn btn-success fa fa-plus" data-name="<?php echo @$current_page; ?>" > Site </button>
              </a>  
            </span>
<!--             <span><button class="btn btn-success fa fa-plus add_gallery" data-name="<?php echo @$current_page; ?>"> Gallery </button></span> -->
          </div>

          <div class="card-block">

            <table id="advanced-table" class="table dt-responsive table-striped table-bordered nowrap">
              <thead>
                <tr>
                  <th>S NO</th>
                  <th>Database</th>
                  <th>Site Name</th>
                  <th>Site Url</th>
                  <th>Status</th>
                  <th>Site Actions</th>
                </tr>
              </thead>

              <tfoot>
                <tr>
                <tr>
                  <th>S NO</th>
                  <th>Database</th>
                  <th>Site Name</th>
                  <th>Site Url</th>
                  <th>Status</th>
                  <th>Site Actions</th>
                </tr>
              </tfoot>

              <tbody><?php $counter = 1;

                      foreach($media_sites as $key=>$m_site) 
                      {
                          if ($m_site["status"] == "1") 
                          {
                              $status = "tag tag-success" ;
                              $status1='Active';
                          }
                          else
                          {
                              $status = "tag tag-default" ;
                              $status1='InActive';

                          } ?>
 
                              <tr id="hide<?php echo $m_site['id'] ; ?>">

                                  <td><?php echo $counter ; ?></td> 
                                  <td ><?php echo ucfirst($m_site["database_name"]) ; ?></td>
                                  <td >
                                  	<p style="text-align:center"><?php echo ucfirst($m_site["site_title_en"]) ; ?></p>
                                  	<p style="text-align:center"><img src="<?php echo base_url().$m_site['image']; ?>" height="50"></p>
                                  </td>
                                  <td >
                                  	<p style="text-align:center"><?php echo $m_site["site_url"] ; ?></p><br>
                                  	<p style="text-align:center"><a href="<?php echo $m_site["site_url"] ; ?>" class="btn btn-primary btn-sm" target="_blank">Website</a></p>
                                  </td>

                                  <td><span class="<?php echo $status ; ?>"><?php echo ucfirst($status1) ;?></span></td>
                                  <td style="white-space: nowrap; width: 1%;">
                                    <div class=" user-toolbar btn-toolbar" style="text-align: left;">
                                        <div class="btn-group btn-group-sm" style="float: none;">
                                            <a href="<?php echo base_url(); ?>admin/add_site/<?php echo $m_site['id']; ?>">
                                              <button type="button" class="btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;"> 
                                               <span class="icofont icofont-ui-edit"></span>
                                              </button>
                                            </a>

                                            <button type="button" class="btn btn-primary waves-effect waves-light delete_team_mem" data-id="<?php echo $m_site["id"] ; ?>" style="float: none;margin: 5px;"> 
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
        $('.add_site').on('click',function(event){ 
            var id = $(this).data('id');
            event.stopPropagation();
            $modal.load('<?php echo site_url('admin/add_site');?>', {id: id},
            function(){
              $modal.modal('show');
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

 