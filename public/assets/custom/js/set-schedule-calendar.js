$(document).ready(() => {
  $(function () {

    getData()
    // sample calendar events data

    // var Draggable = FullCalendar.Draggable;
    var calendarEl = document.getElementById('fullcalendar');
    // var containerEl = document.getElementById('external-events');

    var curYear = moment().format('YYYY');
    var curMonth = moment().format('MM');

    // console.log(curYear)
    // console.log(curMonth)
    // Calendar Event Source
    var calendarEvents = {
      // id: 001,
      backgroundColor: 'rgba(46, 204, 113,.15)',
      borderColor: '#2ecc71',
      events: [
        {
          audit_schedule_id: '001',
          section: 'Section A',
          start: '2023-03-08T11:19:00',
          // end: curYear + '-' + curMonth + '-09T15:00:00',
          title: 'test',
          description: 'test'
        }
      ]
    };

    // console.log(calendarEvents.events)

    // console.log(calendarEvents.events)


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
      height: 600,
      initialView: 'dayGridMonth',
      timeZone: 'UTC',
      hiddenDays: [],
      navLinks: 'true',
      // weekNumbers: true,
      // weekNumberFormat: {
      //   week:'numeric',
      // },
      dayMaxEvents: 2,
      events: [],
      eventSources: [calendarEvents],
      eventClick: function (info) {
        var eventObj = info.event;
        console.log(info);
        $('#modalTitle1').html(eventObj.title);
        $('#modalBody1').html(eventObj._def.extendedProps.description);
        $('#eventUrl').attr('href', eventObj.url);
        $('#fullCalModal').modal("show");
      },
      dateClick: function (info) {
        $("#createEventModal").modal("show");
        // console.log(info);

        $("#testForm").submit((e) => {
          e.preventDefault()
  
          const form = document.getElementById("testForm")
          const formData = new FormData(form)
          const selectedDate = info.dateStr
          formData.append("date_schedule", selectedDate)
  
          const title = formData.get("title");
          const section = formData.get("section_id");
          const time = formData.get("time_schedule");

          if (!title || !section || !time) {
            console.log("Please fill out all required fields.");
            return;
          }
  
          console.log("hello")
          $.ajax({
            // Pass data into php
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
              console.log(response)
              // loadSchedules()
              form.reset()
              $("#createEventModal").modal("hide");
            }
          })
  
        })



      },
    });

    function getData() {
      $.ajax({
        // Pass data into php
        url: 'http://localhost/ASADASDASDA/TNVS-LOGISTIC2/public/audit_management/cycle_count/getdata',
        method: "GET",
        dataType: "json",
        success: function (response) {

          console.log(response)
          calendarEvents.events = response
          // loadSchedules()

        }
      })
    }

    calendar.render();


  });
})
