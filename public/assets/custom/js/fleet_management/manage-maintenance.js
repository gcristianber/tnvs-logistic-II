
$(document).ready(function () {
  var currentUrl = $(location).attr("href");
  $('#add_new_maintenance').submit(function (e) {
    e.preventDefault(); // Prevent the form from reloading the page

    var form = e.target
    var formData = new FormData(form)

    $.ajax({
      url: currentUrl + '/insert_new_maintenance',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response)
      }
    })

  });


  const progressBtn = document.querySelectorAll(".progressBtn")
  const completeBtn = document.querySelectorAll(".completeBtn")

  progressBtn.forEach((btn) => {
    btn.addEventListener("click", e => {
      var row = e.target.closest("tr")
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
          updateStatus(dataId, 'in progress')
        }
      })

    })
  })

  completeBtn.forEach((btn) => {
    btn.addEventListener("click", e => {
      var row = e.target.closest("tr")
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
          updateStatus(dataId, 'completed')
        }
      })

    })
  })

  function updateStatus(id, status) {
    $.ajax({
      url: config.baseUrl + 'fleet_management_admin/maintenance/update_status',
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

