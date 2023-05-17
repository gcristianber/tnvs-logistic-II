$(document).ready(() => {
  var currentUrl = $(location).attr("href");

  // TODO: Add Vehicle
  $("#addVehicle").on("submit", function (e) {
    e.preventDefault();

    let form = document.getElementById("addVehicle");
    let formData = new FormData(form);

    $.ajax({
      url: currentUrl + "/put_vehicle",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);

      },
    });
  });

  const updateForm = document.querySelectorAll(".updateForm")
  updateForm.forEach(submit => {
    submit.addEventListener("submit", event => {
      event.preventDefault()
      var dataId = event.target.getAttribute("data-id")

      var form = event.target
      var formData = new FormData(form)
      formData.append("vehicle_id", dataId)

      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "info",
        showCancelButton: true,
        confirmButtonClass: "me-2",
        confirmButtonText: "Yes, Save it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true,
      }).then((result) => {
        if (result.value) {
          console.log(formData)
          $.ajax({
            url: config.baseUrl + 'fleet_management_admin/manage_vehicles/update_details',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
              console.log(response)
              location.reload()
            }
          })
        }
      })

    })
  })
});
