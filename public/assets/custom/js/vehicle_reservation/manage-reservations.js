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
        location.reload()
      }
    })
  }
});

