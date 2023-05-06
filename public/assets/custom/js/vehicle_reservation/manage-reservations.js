$(document).ready(function () {

  const approveBtns = document.querySelectorAll(".approveBtn")
  approveBtns.forEach(btn => {
    btn.addEventListener("click", event => {
      var row = event.target.closest("tr")
      var dataId = row.getAttribute("data-id")

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, approve it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          updateStatus(dataId, 'approve')
        }
      })

    })
  });

  const dispatchBtns = document.querySelectorAll(".dispatchBtn")
  dispatchBtns.forEach(btn => {
    btn.addEventListener("click", event => {
      var row = event.target.closest("tr")
      var dataId = row.getAttribute("data-id")

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, approve it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          updateStatus(dataId, 'dispatch')
        }
      })

    })
  });

  const returnBtns = document.querySelectorAll(".returnBtn")
  returnBtns.forEach(btn => {
    btn.addEventListener("click", event => {
      var row = event.target.closest("tr")
      var dataId = row.getAttribute("data-id")

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, approve it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          updateStatus(dataId, 'return')
        }
      })

    })
  });

  const declineBtns = document.querySelectorAll(".declineBtn")
  declineBtns.forEach(btn => {
    btn.addEventListener("click", event => {
      var row = event.target.closest("tr")
      var dataId = row.getAttribute("data-id")

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, decline it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          updateStatus(dataId, 'decline')
        }
      })

    })
  });

  const cancelBtns = document.querySelectorAll(".cancelBtn")
  cancelBtns.forEach(btn => {
    btn.addEventListener("click", event => {
      var row = event.target.closest("tr")
      var dataId = row.getAttribute("data-id")

      Swal.fire({
        title: "Are you sure?",
        text: "You are about to cancel your request!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, cancel my request!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          updateStatus(dataId, 'cancel')
        }
      })

    })
  });

  const reportForm = document.querySelectorAll(".reportForm")
  reportForm.forEach(submit => {
    submit.addEventListener("submit", event => {
      event.preventDefault()
      var row = event.target.closest("tr")
      var dataId = row.getAttribute("data-id")

      var form = event.target
      var formData = new FormData(form)
      formData.append("reservation_id", dataId)

      console.log(formData)

      Swal.fire({
        title: "Are you sure?",
        text: "You are about to cancel your request!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, Submit it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: config.baseUrl + 'vehicle_reservation/manage_reservations/insert_report',
            type: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
              console.log(response)
              location.reload()
            }
          })
        }
      })



    })

  });
  const mntForm = document.querySelectorAll(".maintenanceForm")
  mntForm.forEach(submit => {
    submit.addEventListener("submit", event => {
      event.preventDefault()
      var dataId = submit.getAttribute("data-vehicle")

      var form = event.target
      var formData = new FormData(form)
      formData.append("vehicle_id", dataId)

      console.log(dataId)

      Swal.fire({
        title: "Are you sure?",
        text: "You are about to cancel your request!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, Submit it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: config.baseUrl + 'vehicle_reservation/manage_reservations/insert_maintenance',
            type: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
              console.log(response)
              location.reload()
            }
          })
        }
      })

    })
  });

  function updateStatus(id, status) {
    $.ajax({
      url: config.baseUrl + 'vehicle_reservation/manage_reservations/update_status',
      type: 'POST',
      data: {
        id: id,
        status: status
      },
      success: function (response) {
        console.log(response)
        // location.reload()
      }
    })
  }

});

