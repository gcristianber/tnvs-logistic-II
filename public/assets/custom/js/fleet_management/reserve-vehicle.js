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

    $.ajax({
      url: currentUrl + "/insert_reservation",
      type: "POST",
      data: form_data,
      processData: false,
      contentType: false,
      success: function (response) {
        form.reset()
        console.log(response)

        $(".modal").modal("hide")

        // TODO: Do an alert!

        $('.alert').addClass('d-block')
        $('.alert').removeClass('d-none')
      },
    });
  });
});
