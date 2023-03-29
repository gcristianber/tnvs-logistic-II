$(document).ready(() => {
  let currentUrl = $(location).attr("href");

  // TODO: Reserve a Vehicle
  $(".reserveVehicle").on("submit", function (e) {
    e.preventDefault();

    let myModal = $(this).closest("[data-id]");
    let dataId = myModal.attr("data-id");

    // console.log(dataId)

    // Get the form data and append it to the FormData object
    var form = $(this)[0];
    var form_data = new FormData(form);
    form_data.append("vehicle_id", dataId);

    console.log(form_data);

    $.ajax({
      url: currentUrl + "/reserve",
      type: "POST",
      data: form_data,
      processData: false,
      contentType: false,
      success: function () {
        form.reset()
        $(".modal").modal("hide")

        // TODO: Do an alert!

        $('.alert').addClass('d-block')
        $('.alert').removeClass('d-none')
      },
    });
  });
});
