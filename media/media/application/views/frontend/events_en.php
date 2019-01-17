

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/inner-css.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/calender.css">

	
    	
    	<!-- End Navbar ====
    	======================================= -->
    	<!-- event-banner====
    	======================================= -->
       <section class="event-banner">
       	<div class="bg-overlay"></div>
       	<div class="banner">
       		<div class="container">
       			<div class="banner-info">
       				<h1>Events</h1>
       				<ol class="breadcrumb banner-bc">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Events</li>
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
            <h1 class="events-head">December 9 , 2018 Events</h1>
          <p class="events-subhead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="row">
              <div class="col-lg-12">
                <div class="events-main-div">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="<?php echo base_url(); ?>assets/img/events/e1.png">
                    </div>
                    <div class="col-lg-4">
                      <div class="event-info ">
                        <h3>E-commerce World Expo</h3>
                        <p>Host : Abdul Al Saud <img class="event-logo" src="<?php echo base_url(); ?>assets/img/events/event-logo.png"></p>
                        <p>Date : 9 November</p>
                        <p class="time">Time : 2018 9:00 AM</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="event-btn">
                        <button class="btn btn-primary e-btn"><span>View Details</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <div class="row">
              <div class="col-lg-12">
                <div class="events-main-div event2">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="<?php echo base_url(); ?>assets/img/events/e2.png">
                    </div>
                    <div class="col-lg-4">
                      <div class="event-info">
                        <h3>E-commerce World Expo</h3>
                        <p>Host : Abdul Al Saud <img class="event-logo" src="<?php echo base_url(); ?>assets/img/events/event-logo.png"></p>
                        <p>Date : 9 November</p>
                        <p class="time">Time : 2018 9:00 AM</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="event-btn">
                        <button class="btn btn-primary e-btn"><span>View Details</span></button>
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
                      <img src="<?php echo base_url(); ?>assets/img/events/e3.png">
                    </div>
                    <div class="col-lg-4">
                      <div class="event-info">
                        <h3>E-commerce World Expo</h3>
                        <p>Host : Abdul Al Saud <img class="event-logo" src="<?php echo base_url(); ?>assets/img/events/event-logo.png"></p>
                        <p>Date : 9 November</p>
                        <p class="time">Time : 2018 9:00 AM</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="event-btn">
                        <button class="btn btn-primary e-btn"><span>View Details</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                        <div class="row">
              <div class="col-lg-12">
                <div class="events-main-div event4">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="<?php echo base_url(); ?>assets/img/events/e4.png">
                    </div>
                    <div class="col-lg-4">
                      <div class="event-info">
                        <h3>E-commerce World Expo</h3>
                        <p>Host : Abdul Al Saud <img class="event-logo" src="<?php echo base_url(); ?>assets/img/events/event-logo.png"></p>
                        <p>Date : 9 November</p>
                        <p class="time">Time : 2018 9:00 AM</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="event-btn">
                        <button class="btn btn-primary e-btn"><span>View Details</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

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
	