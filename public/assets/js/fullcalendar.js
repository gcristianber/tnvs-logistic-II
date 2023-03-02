$(function() {

  // sample calendar events data

  // var Draggable = FullCalendar.Draggable;
  var calendarEl = document.getElementById('fullcalendar');
  // var containerEl = document.getElementById('external-events');

  var curYear = moment().format('YYYY');
  var curMonth = moment().format('MM');

  // Calendar Event Source
  var calendarEvents = {
    // id: 001,
    backgroundColor: 'rgba(46, 204, 113,.15)',
    borderColor: '#2ecc71',
    events: [
      {
        id: '001',
        section: 'Section A',
        start: curYear+'-'+curMonth+'-08T08:30:00',
        end: curYear+'-'+curMonth+'-09T15:00:00',
        title: 'Audit Report for Section A',
        description: 'Perform audit for section A'
      },
      {
        id: '002',
        section: 'Section b',
        start: curYear+'-'+curMonth+'-08T08:30:00',
        end: curYear+'-'+curMonth+'-09T15:00:00',
        title: 'test',
        description: 'test'
      }
    ]
  };


  // new Draggable(containerEl, {
  //   itemSelector: '.fc-event',
  //   eventData: function(eventEl) {
  //     return {
  //       title: eventEl.innerText
  //     };
  //   }
  // });


  // initialize the calendar
  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,today,next",
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    fixedWeekCount: true,
    height:  600,
    initialView: 'dayGridMonth',
    timeZone: 'UTC',
    hiddenDays:[],
    navLinks: 'true',
    // weekNumbers: true,
    // weekNumberFormat: {
    //   week:'numeric',
    // },
    dayMaxEvents: 2,
    events: [],
    eventSources: [calendarEvents],
    eventClick: function(info) {
      var eventObj = info.event;
      console.log(info);
      $('#modalTitle1').html(eventObj.title);
      $('#modalBody1').html(eventObj._def.extendedProps.description);
      $('#eventUrl').attr('href',eventObj.url);
      $('#fullCalModal').modal("show");
    },
    dateClick: function(info) {
      $("#createEventModal").modal("show");
      console.log(calendarEvents.events[0]);

      // $.each(calendarEvents.events, function(index, value){
      //   console.log(value.section)
      // })
      
      

    },
  });

  calendar.render();


});