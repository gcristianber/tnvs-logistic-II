$(document).ready(() => {
  $("#addVehicleForm").submit((e) => {
    e.preventDefault();

    var form = document.getElementById("addVehicleForm");
    var formData = new FormData(form);
    formData.append('file', $('input[type=file]')[0].files[0]);
    // console.log(this);
    $.ajax({
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        console.log(response);

        $('#addVehicleForm')[0].reset();
        $("#addVehicleModal").modal("hide")
      },
    });
  });
});
