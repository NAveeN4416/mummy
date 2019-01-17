<style>

#insert_services label.error 
{
  color:red; 
}

#insert_services input.error,textarea.error,select.error 
{
  border:1px solid red;
  color:red; 
}

.popover 
{
  z-index: 2000;
  position:relative;
}

.thumb{
    margin: 10px 5px 0 0;
    width: 80px;
    height: 80px;
}

.container 
{
  position: relative;
  color:red;
  float: left;
}

.top-right {
  position: absolute;
  top: -2px;
  right: 16px;
  font-weight: bold;
  cursor: pointer;
}


</style>



<div class="modal-dialog" role="document">
    <div class="modal-content" style="overflow:hidden">

        <div class="modal-header" style="border-bottom-color: #ccc;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">X</span>
            </button>
            <h4 class="modal-title" align="center">Add/Edit Gallery</h4>
        </div>

        <div class="modal-body">
            <form id="insert_banner">             

                <div class="form-group row">
                    <label class="col-xs-4 col-form-label form-control-label">Select Album</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="data[album_id]">
                          <?php foreach ($albums as $key => $album) { ?>
                            <option value="<?php echo $album['id']; ?>" <?php echo ($album_id==$album['id']) ?  'selected' : '' ; ?> > <?php echo $album['title_en']; ?></option>
                          <?php } ?>
                        </select>
                  </div> 
                </div>            

<!-- 
               <div class="form-group row">
                    <div class="form-group">
                        <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Title En</label>
                        <div class="col-sm-8">
                            <input type="text" id="name_en"  name="data[title_en]"  class="form-control" value="<?php echo @$value['title_en'];?>">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group">
                       <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Title Ar</label>
                       <div class="col-sm-8">
                        <input type="text" id="name_ar"  name="data[title_ar]"  class="form-control" value="<?php echo @$value['title_ar'];?>">
                      </div>
                    </div>
                </div> 
-->

                <div class="form-group row">
                    <div class="form-group">
                       <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Add Images</label>
                       <div class="col-sm-8">
                         <input type="file" id="file-input"  name="files[]"  class="form-control" multiple>
                       </div>
                    </div>
                </div>
                
                <?php  if(@$gallery){ ?>
                  <span style="color: green;font-weight: bold;display: none" id="message">Image removed from gallery</span><br>
                  <div class="form-group">
                      <div class="form-group row">
                        <div id="thumb-output">
                          <?php foreach ($gallery as $key => $image) { ?>
                            <div class="container image<?php echo $image['id'];?>">
                              <img src="<?php echo base_url().$image['image']; ?>" class='thumb'>
                              <span class="top-right" onclick="remove_image('<?php echo $image['id']; ?>')">x</span>
                            </div>
                          <?php } ?>
                        </div>  
                      </div>
                  </div>
                <?php }else{ ?>

<!--
                  <div class="form-group row">
                      <div class="form-group">
                         <label for="example-tel-input" class="col-xs-4 col-form-label form-control-label">Select Images</label>
                         <div class="col-sm-8">
                           <input type="file" id="file-input"  name="files[]"  class="form-control" multiple>
                         </div>
                      </div>
                  </div>

-->
                  <div class="form-group row">
                    <div id="thumb-output">
                    </div>  
                  </div>
                <?php } ?>    
    

<!--
                <div class="form-group row">
                    <label class="col-xs-4 col-form-label form-control-label">Status</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="data[status]">
                          <option value="1" <?php if(isset($value['status'])) { if($value['status'] == "1"){ echo "selected";}}  else { echo "selected"; } ?>>Active</option>
                          <option value="0" <?php if(isset($value['status'])) { if($value['status'] == "0"){ echo "selected";}} ?>>InActive</option>
                        </select>
                  </div> 
                </div>
-->
                <input type="hidden" name="id" value="<?php echo @$value['id']; ?>">    
            </form> 
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect waves-light insert_banner">Save changes</button>
        </div>

    </div>
</div>


<script>

    $("#insert_banner").validate({
        rules: {
            <?php  $id=@$value['id'];
            if($id==''){ ?>
                "files[]"                 : "required",
            <?php }?>
        },
        messages : {
           <?php  if($id==''){ ?>
            "files[]"                     : "Required",
        <?php }?>
    },      
});


    $('.insert_banner').click(function(){ 
        var validator = $("#insert_banner").validate();
        validator.form();
        if(validator.form() == true){
          var data = new FormData($('#insert_banner')[0]);   
          $.ajax({                
            url: "<?php echo base_url();?>admin/save_gallery/gallery",
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
                location.reload();
            }
        });
      }
  });

function remove_image($image_id)
{
    $.ajax({                
      url: "<?php echo base_url();?>admin/delete/gallery",
      type: "POST",
      data: {'id':$image_id},
      error:function(request,response)
      {
        console.log(request);
      },                  
      success: function(result)
      {
        //location.reload();
        $('.image'+$image_id).remove();
        $("#message").fadeIn(1000).delay(4000).fadeOut('slow');
      }
  });
}


</script>


<!-- Image preview -->

<script type="text/javascript">
$(document).ready(function(){
    $('#file-input').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data
            
            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                       var str = "<div class='container'><img src='"+e.target.result+"' class='thumb'></div>"

                        $('#thumb-output').append(str);

/*
                        <span class='top-right' style='color:red;'>x</span>
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element 
                        var container = $('<div></div>').addClass('container'); //create image element 
                        var remove    = $('<div></div>').addClass('top-right'); //create image element 
                        $('.container').append(img); //append image to output element
                        $('.container').append(remove); //append image to output element
                        $('#thumb-output').append(container); //append image to output element*/
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });
            
        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
  
  $(".remove").click(function (e) {
        e.preventDefault();
        data.splice(0, 1);
        $('#thumb-output a').eq(data.length).remove();
    });
});




</script>