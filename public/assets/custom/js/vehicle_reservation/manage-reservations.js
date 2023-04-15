$(document).ready(function () {
  const MODULE_PATH = "vehicle_reservation/manage_reservations";

  $(".approve_btn").on("click", (event) => {
    var dataId = $(event.target).closest("tr").attr("data-id");
    console.log(dataId);
    $(event.target).closest(".modal").modal("hide");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonClass: "me-2",
      confirmButtonText: "Yes, approve it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true,
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: BASE_URL + MODULE_PATH + "/update_status",
          type: "POST",
          data: {
            status_type: "approve",
            id: dataId,
          },
          success: function (response) {
            console.log(response);
            Swal.fire(
              "Success!",
              "Request has been approved!",
              "success"
            ).then(() => {
              location.reload();
            });
          },
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
  });

  $(".decline_btn").on("click", (event) => {
    var dataId = $(event.target).closest("tr").attr("data-id");
    console.log(dataId);
    $(event.target).closest(".modal").modal("hide");
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonClass: "me-2",
      confirmButtonText: "Yes, decline it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true,
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: BASE_URL + MODULE_PATH + "/update_status",
          type: "POST",
          data: {
            status_type: "decline",
            id: dataId,
          },
          success: function (response) {
            console.log(response);
            Swal.fire(
              "Deleted!",
              "Your file has been deleted.",
              "success"
            ).then(() => {
              location.reload();
            });
          },
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
  });
});
