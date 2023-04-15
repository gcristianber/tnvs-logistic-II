$(document).ready(function () {
  const currentUrl = $(location).attr("href");
  $(".receive-request").click(function () {
    var dataId = $(this).closest("tr").attr("data-id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonClass: "me-2",
      confirmButtonText: "Yes, delete it!",
      cancelButtonText: "No, cancel!",
      reverseButtons: true,
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: currentUrl + "/update_status",
          type: "POST",
          data: {
            status_type: "receive",
            reference_number: dataId,
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

  $(".decline-request").click(function () {
    var myModal = $(this).closest("[data-id]");
    var dataId = myModal.attr("data-id");

    $.ajax({
      url: currentUrl + "/update_status",
      type: "POST",
      data: {
        status_type: "decline",
        reference_number: dataId,
        remarks: null,
        remark_type: null,
      },
      success: function (response) {
        console.log(response);
        location.reload();
      },
    });
  });
});
