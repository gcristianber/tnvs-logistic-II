$(function () {
  var calendarEl = document.getElementById("fullcalendar");

  var curYear = moment().format("YYYY");
  var curMonth = moment().format("MM");

  let currentUrl = $(location).attr("href");

  // Calendar Event Source
  var calendarEvents = {
    // id: 001,
    backgroundColor: "rgba(46, 204, 113,.15)",
    borderColor: "#6571ff",
    events: [],
  };

  // Fetch data from the server and add it to the events array
  fetch(
    "http://localhost/TNVS-LOGISTIC2/public/audit_management/cycle_count/getDates"
  )
    .then((response) => response.json())
    .then((data) => {
      calendar.addEventSource({
        events: data,
      });
    })
    .catch((error) => {
      console.error("Error fetching events", error);
    });

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,today,next",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
    },
    editable: true,
    fixedWeekCount: true,
    height: 600,
    initialView: "dayGridMonth",
    timeZone: "UTC",
    hiddenDays: [],
    navLinks: "true",
    dayMaxEvents: 2,
    events: [],
    eventSources: [calendarEvents],
    eventClick: function (info) {
      var eventObj = info.event;
      console.log(info);
      $("#modalTitle1").html(eventObj.title);
      $("#modalBody1").html(eventObj._def.extendedProps.description);
      $("#eventUrl").attr("href", eventObj.url);
      $("#fullCalModal").modal("show");
    },
    dateClick: function (info) {
      $("#createEventModal").modal("show");
      console.log(info.dateStr);

      $("#addSchedule").on("submit", (e) => {
        e.preventDefault();
        var form = e.target;
        var formData = new FormData(form);
        formData.append("start", info.dateStr);

        $.ajax({
          url: currentUrl + "/setDate",
          type: "POST",
          processData: false,
          contentType: false,
          data: formData,
          success: function (response) {
            console.log(response);
          },
        });
      });
    },
  });

  console.log(calendarEvents.events);

  calendar.render();
});
