$(document).ready(function () {
  const currentUrl = $(location).attr("href");

  const urlParams = new URLSearchParams(currentUrl.split("?")[1]); // Extract query string portion
  const productID = urlParams.get("product_id");

  var actualCountInput = $('input[name="actual_count"]');

  var currentQty = $("#currentQty").text().trim();

  var varianceOutput = $("#variance");
  var accuracyOutput = $("#accuracy");

  actualCountInput.on("change", updateFields);

  function updateFields() {
    // Get the actual count value
    var actualCount = parseInt(actualCountInput.val());

    // Calculate the variance and accuracy
    var variance = actualCount - currentQty;
    var accuracy = (actualCount / currentQty) * 100;

    // Update the variance and accuracy outputs
    varianceOutput.text(variance);
    accuracyOutput.text(accuracy + "%");
  }

  $("#cycleForm").on("submit", (event) => {
    event.preventDefault();

    var form = event.target;
    var formData = new FormData(form);
    formData.append("product_id", productID);
    formData.append("variance", varianceOutput.text().trim());
    formData.append("accuracy", accuracyOutput.text().trim());

    console.log(formData);

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
          url: BASE_URL + "audit_management/cycle_count/insert_cycle_count",
          type: "POST",
          processData: false,
          contentType: false,
          data: formData,
          success: function (response) {
            console.log(response)
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

    // // ? SEND TO BACKEND
  });
});
