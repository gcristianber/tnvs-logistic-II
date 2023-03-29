$(document).ready(() => {
  var currentUrl = $(location).attr("href");

  // TODO: Add Vehicle
  $("#addVehicle").on("submit", function (e) {
    e.preventDefault();

    let form = document.getElementById("addVehicle");
    let formData = new FormData(form);

    $.ajax({
      url: currentUrl + "/insert",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);

        
      },
    });
  });
});
