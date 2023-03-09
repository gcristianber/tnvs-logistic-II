$(document).ready(() => {
  $(function () {
    getData()
    var calendarEl = document.getElementById('fullcalendar');

    var calendarEvents = {
      backgroundColor: 'rgba(101, 113, 255, .15)',
      borderColor: '#6571ff',
      events: [
        {
          title: "isa",
          description: "Hello",
          start:  "2023-03-23"
        }
      ]
    };

    

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
          formData.append("start", selectedDate)

          const title = formData.get("title");

          if (!title) {
            console.log("Please put a title!");
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
              form.reset()
              $("#createEventModal").modal("hide");
            }
          })

        })



      },
    });

    function getData() {
      var currentUrl = $(location).attr('href');

      $.ajax({
        // Pass data into php
        url: currentUrl + '/getdata',
        method: "GET",
        dataType: "json",
        success: function (response) {
          // console.log(response)

          var fetchedEvents = response;

          // calendarEvents.events = response

          for (var i = 0; i < fetchedEvents.length; i++) {
            calendarEvents.events.push({
              title: fetchedEvents[i].title,
              start: fetchedEvents[i].start,
              description: fetchedEvents[i].description,
              // add any other relevant properties here
            });
          }
          console.log(calendarEvents.events)

          // calendarEvents.events.push(response)
  
          calendar.render();
        }
      })
    }




  });
})
