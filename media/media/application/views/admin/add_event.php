<!-- CONTENT-WRAPPER-->
<style>

    #insert_services label.error {

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

          <h4>Add/Edit Event</h4>

          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">

            <li class="breadcrumb-item">

              <a href="#">

                <i class="icofont icofont-home">Home</i>

              </a>

            </li>
			 <li class="breadcrumb-item"><a href="#:" >Add/Edit Event</a></li>


          

          </ol>

        </div>

      </div>

    </div>

    <!-- Row end -->


    

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header"><h5 class="card-header-text">Add/Edit Event</h5></div>

          <div class="card-block">


              <form id="insert_services">                         

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Title (En)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="titl1_en" name="data[title_en]"  class="form-control"  value="<?php echo @$value['title_en'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Title (Ar)*</label>
                    <div class="col-sm-9">
                        <input type="text"  id="title_ar" name="data[title_ar]" class="form-control"  value="<?php echo @$value['title_ar'];?>">
                    </div>
                </div>
                
                 <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Content (En)*</label>
                    <div class="col-sm-9">
                        <textarea  id="content_en" name="data[content_en]"  class="form-control ckeditor" ><?php echo @$value['content_en'];?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Content (Ar)*</label>
                    <div class="col-sm-9">
                        <textarea  id="content_ar" name="data[content_ar]"  class="form-control ckeditor"><?php echo @$value['content_ar'];?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Start Date</label>
                    <div class="col-sm-3">
                        <input  id="start_date" name="data[start_date]"  class="form-control" value="<?php echo @$value['start_date'];?>">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">End Date</label>
                    <div class="col-sm-3">
                        <input  id="end_date" name="data[end_date]"  class="form-control" value="<?php echo @$value['end_date'];?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Location Name En</label>
                    <div class="col-sm-9">
                        <input  id="location_en" name="data[location_en]" placeholder="Eg:Riyadh"  class="form-control" value="<?php echo @$value['location_en'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Location Name Ar</label>
                    <div class="col-sm-9">
                        <input  id="location_ar" name="data[location_ar]" placeholder="Eg:مدينة الرياض"  class="form-control" value="<?php echo @$value['location_ar'];?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Website Link</label>
                    <div class="col-sm-9">
                        <input  id="website_link" name="data[website_link]"  class="form-control" value="<?php echo @$value['website_link'];?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">GoogleMaps Link</label>
                    <div class="col-sm-9">
                        <input  id="google_map" name="data[google_map]"  class="form-control" value="<?php echo @$value['google_map'];?>">
                    </div>
                </div>


                <?php  if(@$value){ ?>
                   <img src="<?php echo base_url();?><?php echo @$value['image'];?>" height=100px;>
                      <input type="hidden" name="old_image1" value="<?php echo @$value['image'];?>"> 
                <?php   } ?>
                <div class="form-group row">
                     <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Event Image</label>
                    <div class="col-sm-9">
                        <input type="file" id="file1"  name="image" class="form-control">
                    </div>
                </div>
 
                <?php  if(@$value){ ?>
                   <img src="<?php echo base_url();?><?php echo @$value['org_logo'];?>" height=100px;>
                      <input type="hidden" name="old_image2" value="<?php echo @$value['org_logo'];?>"> 
                <?php   } ?>
                <div class="form-group row">
                     <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Organisation Logo</label>
                    <div class="col-sm-9">
                        <input type="file" id="file2"  name="org_logo" class="form-control">
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Selected Location</label>
                    <div class="col-sm-9">
                        <input type="hidden" class="form-control" name="data[latitude]" id="latitude" value="<?php echo (@$value['latitude']) ? $value['latitude'] :'24.7150996'; ?>" readonly>
                    </div>

                    <div class="col-sm-9">
                        <input type="hidden" class="form-control" name="data[longitude]" id="longitude" value="<?php echo (@$value['longitude'])? $value['longitude']:'44.6999739'; ?>" readonly>
                    </div>
                    

                    <div class="col-sm-9">
                        <input type="text" class="form-control" name='data[address]' id='show_address' placeholder="Selected address" value="<?php echo @$value['address'] ; ?>" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-tel-input" class="col-xs-3 col-form-label form-control-label">Select Location</label>
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div id="outlet_map" style="height:300px"></div>
                    </div>
                </div>

                <input type="hidden" id="id" name="id" value="<?php echo @$value['id']; ?>">

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
                    "org_logo"       : "required",
                    "image"          : "required",
                <?php }?>
                "data[title_en]"     : "required",
                "data[title_ar]"     : "required",
                "data[website_link]" : "required",
                "data[location_en]"  : "required",
                "data[location_ar]"  : "required",
                "data[google_map]"   : "required",
                "data[start_date]"   : "required",
                "data[end_date]"     : "required",
        		"data[content_en]":{
                                				required: function(textarea) 
                                				{
                                					 CKEDITOR.instances[textarea.id].updateElement();
                                					 var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                                					 return editorcontent.length === 0;
                                				}
                                		},
                "data[content_ar]":{
                                			  required: function(textarea) 
                                			  {
                                					 CKEDITOR.instances[textarea.id].updateElement();
                                					 var editorcontent = textarea.value.replace(/<[^>]*>/gi, '');
                                					 return editorcontent.length === 0;
                                				}
                                    }

            },
            messages : 
            {
                    <?php  $id=@$value['id'];
                    if($id==''){ ?>
                        "org_logo"       : "required",
                        "image"          : "required",
                    <?php }?>
                    "data[website_link]" : "required",
                    "data[location_en]"  : "required",
                    "data[location_ar]"  : "required",
                    "data[google_map]"   : "required",
                    "data[start_date]"   : "required",
                    "data[end_date]"     : "required",
            	      "data[title_en]"     : "Required",
                    "data[title_ar]"     : "Required",
                    "data[content_en]"   : "Required",
                    "data[content_ar]"   : "Required",
            },       

    });

$('.insert_services').click(function(){ 

        var validator = $("#insert_services").validate();

            validator.form();

            if(validator.form() == true){

              
                  var data = new FormData($('#insert_services')[0]);   

                $.ajax({                

                    url: "<?php echo base_url();?>admin/save_events",
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
                        //alert(result);
                        if (result) 
                        {
                          location.reload();
                        } 
                    }

                });

            }

        });

   

    

    </script>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">

/*$("#start_date").datepicker({
                                format: "dd MM yyyy", 
                                todayHighlight: true,
                                startDate: new Date(),          
                                autoclose: true
                            });*/

    var today = new Date();

    $('#start_date').datepicker({
        format: "dd MM yyyy",
        todayHighlight: true,
        startDate: today,
        autoclose: true,
    }).on('changeDate', function (ev) {
      $('#end_date').datepicker({
                                        format: "dd MM yyyy",
                                        todayHighlight: true,
                                        startDate: new Date($('#start_date').val()),
                                        autoclose: true,
                                });
    });

</script>

 <script >
     
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      //Set up some of our variables.
      var map; //Will contain map object.
      var marker = false; ////Has the user plotted their location marker? 

   
      function initAutocomplete() {
        //The center location of our map.
        
         <?php if(@$value['latitude']!=0 && @$value['longitude']!=0) {  ?>  

            var centerOfMap   = new google.maps.LatLng(<?php echo $value['latitude']; ?>,<?php echo $value['longitude']; ?>);

            var options      = {center: centerOfMap, zoom: 10};

            //map        = new google.maps.Map(document.getElementById("outlet_map"), mapOptions);
           // marker     = new google.maps.Marker({position:centerOfMap});

            //marker.setMap(map);

         <?php }else{ ?> 

                var centerOfMap = new google.maps.LatLng(24.741112, 46.652154);
                  //Map options.
                  var options = {
                    center: centerOfMap, //Set center.
                    zoom: 10 //The zoom value.
                  };

        <?php } ?>  

                  //Create the map object.
                  map = new google.maps.Map(document.getElementById('outlet_map'), options);

                  var geocoder = new google.maps.Geocoder();

                  //On load show address
                  geocoder.geocode({
                                      'latLng': centerOfMap
                                    }, function(results, status) {
                                      if (status == google.maps.GeocoderStatus.OK) {
                                        if (results[0]) {
                                          $('#show_address').val(results[0].formatted_address);
                                        }
                                      }
                                    });

                  //On click Update address
                  google.maps.event.addListener(map, 'click', function(event) {
                                      geocoder.geocode({
                                        'latLng': event.latLng
                                      }, function(results, status) {
                                        if (status == google.maps.GeocoderStatus.OK) {
                                          if (results[0]) {
                                             $('#show_address').val(results[0].formatted_address);
                                          }
                                        }
                                      });
                                    });



                  marker     = new google.maps.Marker({position:centerOfMap});
                  marker.setMap(map);
               
                  //Listen for any clicks on the map.
                  google.maps.event.addListener(map, 'click', function(event) {                
                      //Get the location that the user clicked.
                      var clickedLocation = event.latLng;
                      //If the marker hasn't been added.
                      if(marker === false)
                      {
                          //Create the marker.
                          marker = new google.maps.Marker({
                              position: clickedLocation,
                              map: map,
                              draggable: true //make it draggable
                          });
                          //Listen for drag events!
                          google.maps.event.addListener(marker, 'dragend', function(event){
                              markerLocation();
                          });
                      } 
                      else
                      {
                          //Marker has already been added, so just change its location.
                          marker.setPosition(clickedLocation);
                      }
                      //Get the marker's location.
                      markerLocation();
                  });

                // Create the autocomplete object, restricting the search to geographical
                // location types.
                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */(document.getElementById('show_address')),
                    {types: ['geocode']});
                
                // When the user selects an address from the dropdown, populate the address
                // fields in the form.
                autocomplete.addListener('place_changed', fillInAddress);

              
      }
        
      //This function will get the marker's current location and then add the lat/long
      //values to our textfields so that we can save the location.
      function markerLocation(){
          //Get location.
          var currentLocation = marker.getPosition();
          var geocoder = new google.maps.Geocoder;
          //Add lat and lng values to a field that we can save.
          document.getElementById('latitude').value = currentLocation.lat(); //latitude
          document.getElementById('longitude').value = currentLocation.lng(); //longitude
          var latlng = {lat: currentLocation.lat(), lng: currentLocation.lng()};
          geocoder.geocode({'location': latlng}, function(results, status) {
            if (status === 'OK') {
              if (results[1]) {
                for (var component in componentForm) {
                  document.getElementById(component).value = '';
                  document.getElementById(component).disabled = false;
                }
                //console.log( JSON.stringify(results) );
                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < results[0].address_components.length; i++) {
                  var addressType = results[0].address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = results[0].address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                  }
                }
              } else {
                window.alert('No results found');
              }
            } else {
              window.alert('Geocoder failed due to: ' + status);
            }
          });
      }
        
        

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        
        for (var component in componentForm) 
        {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();
        document.getElementById("latitude").value  = place.geometry.location.lat();
        document.getElementById("longitude").value = place.geometry.location.lng();
        data = {lat: lat, lng: lng};
        var map = new google.maps.Map(document.getElementById('outlet_map'), {
          zoom: 10,
          center: data
        });
        var marker = new google.maps.Marker({
          position: data,
          map: map
        });
        //Listen for any clicks on the map.
          google.maps.event.addListener(map, 'click', function(event) {                
              //Get the location that the user clicked.
              var clickedLocation = event.latLng;
              //If the marker hasn't been added.
              if(marker === false){
                  //Create the marker.
                  marker = new google.maps.Marker({
                      position: clickedLocation,
                      map: map,
                      draggable: true //make it draggable
                  });
                  //Listen for drag events!
                  google.maps.event.addListener(marker, 'dragend', function(event){
                      markerLocation();
                  });
              } else{
                  //Marker has already been added, so just change its location.
                  marker.setPosition(clickedLocation);
              }
              //Get the marker's location.
              markerLocationNew(marker);
          });


      }
       function markerLocationNew(marker){
          //Get location.
          var currentLocation = marker.getPosition();
          var geocoder = new google.maps.Geocoder;
          //Add lat and lng values to a field that we can save.
          document.getElementById('latitude').value = currentLocation.lat(); //latitude
          document.getElementById('longitude').value = currentLocation.lng(); //longitude
          var latlng = {lat: currentLocation.lat(), lng: currentLocation.lng()};
          geocoder.geocode({'location': latlng}, function(results, status) {
            if (status === 'OK') {
              if (results[1]) {
                for (var component in componentForm) {
                  document.getElementById(component).value = '';
                  document.getElementById(component).disabled = false;
                }
                //console.log( JSON.stringify(results) );
                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < results[0].address_components.length; i++) {
                  var addressType = results[0].address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = results[0].address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                  }
                }
              } else {
                window.alert('No results found');
              }
            } else {
              window.alert('Geocoder failed due to: ' + status);
            }
          });
      }
      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }

      /*document.getElementById("map_error").onclick = function() {
        setTimeout(function(){ google.maps.event.trigger(map, "resize"); }, 1000);
      };*/
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB985jmPF1O1jxwIROcqBF8c2T2Jd563ZM&libraries=places&callback=initAutocomplete" async defer></script>
 </script>