
<style type="text/css">
  img {
   width: 100%;
   height: 56%;
}
.e-btn {
   position: absolute;
   top: 23% !important; 
  }
</style>


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/inner-css.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/calender.css">



    	<!-- End Navbar =========================================== -->
    	<!-- event-banner=========================================== -->
    		<section class="event-banner">
    			<div class="bg-overlay"></div>
    			<div class="banner">
    				<div class="container">
    					<div class="banner-info" style="color: white">
    						<h1><?php echo $this->lang->line('e_title'); ?></h1>
    						<ol class="breadcrumb banner-bc">
    							<li class="breadcrumb-item"><?php echo $this->lang->line('h_home'); ?></li>
    							<li class="breadcrumb-item"><?php echo $this->lang->line('e_title'); ?></li>
    						</ol>
    					</div>
    				</div>
    			</div>
    		</section>
    		<!-----calender--------->
    		<section class="calender-section">
    			<div id='wrap'>
    				<div id='calendar'></div>
    				<div style='clear:both'></div>
    			</div>
    		</section>

       <!-- events-section====
       	======================================= -->
       	<section class="events-section">
       		<div class="events">
       			<div class="container">
       				<h1 class="events-head">قمة رواد التواصل الاجتماعي العرب</h1>
       				<!--<p class="events-subhead"> </p>-->
            <?php foreach ($events as $key => $event) {  ?>

       				<div class="row">
       					<div class="col-lg-12">
       						<div class="events-main-div">
       							<div class="row">
       								<div class="col-lg-4">
       									<img src="<?php echo base_url().$event['image']; ?>">
       								</div>
       								<div class="col-lg-4">
       									<div class="event-info ">
       										<h3><?php echo $event['title_'.$lang]; ?></h3>
       										<p><?php echo $event['location_'.$lang]; ?> :  
                            <img class="event-logo" src="<?php echo base_url().$event['image']; ?>">
                          </p>
                          <p><?php echo $event['start_date']; ?></p>
       										<p><?php echo $event['end_date']; ?></p>
       										<p>الموقع: 
                            <a href="<?php echo $event['website_link']; ?>">
                                <?php echo $event['website_link']; ?>
                            </a>
                          </p>
       									</div>
       								</div>
       								<div class="col-lg-4">
       									<div class="event-btn">
       										<a href="<?php echo base_url(); ?>home/event_details/<?php echo $event['id']; ?>" class="btn btn-primary e-btn"><span><?php echo $this->lang->line('h_view'); ?></span></a>
       									</div>
       								</div>
       							</div>
       						</div>
       					</div>
       				</div>
            
            <?php } ?>
<!--
       				<div class="row">
       					<div class="col-lg-12">
       						<div class="events-main-div event2">
       							<div class="row">
       								<div class="col-lg-4">
       									<img src="<?php echo base_url(); ?>assets/frontend/img/events/event-logo1.jpg">
       								</div>
       								<div class="col-lg-4">
       									<div class="event-info">
       										<h3> "السعودية للفورمولا-إي".. المملكة</h3>
       										<p>تخطف أنظار العالم <img class="event-logo" src="<?php echo base_url(); ?>assets/frontend/img/events/event-logo1.jpg"></p>
       										<p>التاريخ:  ١٣ ديسمبر - ١٥ ديسمبر ٢٠١٨</p>
       										<p class="time">الموقع: <a href="https://www.ad-diriyah-eprix.com/ar/">https://www.ad-diriyah-eprix.com/ar/</a></p>
       									</div>
       								</div>
       								<div class="col-lg-4">
       									<div class="event-btn">
       										<a href="<?php echo base_url(); ?>home/event_details/1" class="btn btn-primary e-btn"><span>عرض التفاصيل</span></a>
       									</div>
       								</div>
       							</div>
       						</div>
       					</div>
       				</div>

       				<div class="row">
       					<div class="col-lg-12">
       						<div class="events-main-div event3">
       							<div class="row">
       								<div class="col-lg-4">
       									<img src="<?php echo base_url(); ?>assets/frontend/img/events/event-logo2.jpg">
       								</div>
       								<div class="col-lg-4">
       									<div class="event-info">
       										<h3>ملتقى ألوان السعودية </h3>
       										<p>    <img class="event-logo" src="<?php echo base_url(); ?>assets/frontend/img/events/event-logo2.jpg"></p>
       										<p>التاريخ: ١٢-١٦ ديسمبر ٢٠١٨ </p>
       										<p class="time">الموقع: <a href="http://www.colors.sa/Pages/default.aspx
       											">https://www.ad-diriyah-eprix.com/ar/</a></p>                    


       										</div>
       									</div>
       									<div class="col-lg-4">
       										<div class="event-btn">
       											<a href="<?php echo base_url(); ?>home/event_details/1" class="btn btn-primary e-btn"><span>عرض التفاصيل</span></a>
       										</div>
       									</div>
       								</div>
       							</div>
       						</div>
       					</div>
       				</div>
-->
       			</div>
       		</section>

       		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
       		<script>

       			$(document).ready(function() {
       				var date = new Date();
       				var d = date.getDate();
       				var m = date.getMonth();
       				var y = date.getFullYear();



       				$('#external-events div.external-event').each(function() {

       					var eventObject = {
       						title: $.trim($(this).text()) 
       					};

       					$(this).data('eventObject', eventObject);

       					$(this).draggable({
       						zIndex: 999,
       						revert: true,    
       						revertDuration: 0  
       					});

       				});


       				var calendar =  $('#calendar').fullCalendar({
       					header: {
       						left: 'title',
       						center: 'agendaDay,agendaWeek,month',
       						right: 'prev,next today'
       					},
       					editable: true,
       					firstDay: 1, 
       					selectable: true,
       					defaultView: 'month',

       					axisFormat: 'h:mm',
       					columnFormat: {
       						month: 'ddd',  
       						week: 'ddd d', 
       						day: 'dddd M/d',  
       						agendaDay: 'dddd d'
       					},
       					titleFormat: {
       						month: 'MMMM yyyy', 
       						week: "MMMM yyyy", 
       						day: 'MMMM yyyy'    
       					},
       					allDaySlot: false,
       					selectHelper: true,
       					select: function(start, end, allDay) {
       						var title = prompt('Event Title:');
       						if (title) {
       							calendar.fullCalendar('renderEvent',
       							{
       								title: title,
       								start: start,
       								end: end,
       								allDay: allDay
       							},
       							true 
       							);
       						}
       						calendar.fullCalendar('unselect');
       					},
       					droppable: true, 
       					drop: function(date, allDay) { 

       						var originalEventObject = $(this).data('eventObject');

       						var copiedEventObject = $.extend({}, originalEventObject);

       						copiedEventObject.start = date;
       						copiedEventObject.allDay = allDay;

       						$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

       						if ($('#drop-remove').is(':checked')) {
       							$(this).remove();
       						}

       					},

       					events: [
       					{
       						title: 'All Day Event',
       						start: new Date(y, m, 1)
       					},
       					{
       						id: 999,
       						title: 'Repeating Event',
       						start: new Date(y, m, d-3, 16, 0),
       						allDay: false,
       						className: 'info'
       					},
       					{
       						id: 999,
       						title: 'Repeating Event',
       						start: new Date(y, m, d+4, 16, 0),
       						allDay: false,
       						className: 'info'
       					},
       					{
       						title: 'Meeting',
       						start: new Date(y, m, d, 10, 30),
       						allDay: false,
       						className: 'important'
       					},
       					{
       						title: 'Lunch',
       						start: new Date(y, m, d, 12, 0),
       						end: new Date(y, m, d, 14, 0),
       						allDay: false,
       						className: 'important'
       					},
       					{
       						title: 'Birthday Party',
       						start: new Date(y, m, d+1, 19, 0),
       						end: new Date(y, m, d+1, 22, 30),
       						allDay: false,
       					},
       					{
       						title: 'Click for Google',
       						start: new Date(y, m, 28),
       						end: new Date(y, m, 29),
       						url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
       						className: 'success'
       					}
       					],      
       				});


       			});

       		</script>
