$(document).ready(() => {
  const currentUrl = $(location).attr("href");
  $("#generate_report").on("click", () => {
    let editorContent = tinymce.get("reportTinyMCE").getContent();
    const overallAccuracy = $("#overallAccuracy")[0].textContent;
    console.log(overallAccuracy);
    // array to store the data
    const table_data = [];
    // loop through each row of the table
    $("#auditTable tbody tr").each(function () {
      const product_id = $(this).find("td:eq(0)").text();
      const product_name = $(this).find("td:eq(1)").text();
      const quantity = $(this).find("td:eq(2)").text();
      const unit_cost = $(this).find("td:eq(3)").text().replace("P ", "");
      const total = $(this).find("td:eq(4)").text().replace("P ", "");
      const actual_count = $(this).find("td:eq(5) input").val();
      const variance = $(this).find("td:eq(6)").text();
      const accuracy = $(this).find("td:eq(7)").text();
      // create an object with the row data
      const row = {
        product_id,
        product_name,
        quantity,
        unit_cost,
        total,
        actual_count,
        variance,
        accuracy,
      };
      // push the object to the data array
      table_data.push(row);
    });
    // log the data to the console for testing
    // code to download the data as a file

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
          url: currentUrl,
          type: "POST",
          data: {
            report: editorContent,
            table_data: table_data,
            overall_accuracy: overallAccuracy,
          },
          success: function (response) {
            console.log(response);
            console.log("Test")
            // Swal.fire(
            //   "Deleted!",
            //   "Your file has been deleted.",
            //   "success"
            // ).then(() => {
            //     // window.location.href = BASE_URL + 'audit_management/audit_requests';
                
            // });
          },
        });
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        Swal.fire("Cancelled", "Your imaginary file is safe :)", "error");
      }
    });
  });
});
