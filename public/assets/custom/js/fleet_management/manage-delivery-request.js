$(document).ready(() => {
  $("#delivery_form").on("submit", (event) => {
    event.preventDefault();

    var form = event.target;
    var formData = new FormData(form);

    console.log(formData);
    // create an empty array to hold the data
    var delivery_products = [];

    // loop through each row of the table
    $("#delivery_products tbody tr").each(function () {
      // create an object to hold the data from the row
      var rowData = {};
      $(this)
        .find("td:not(:last-child)")
        .each(function (index, element) {
          // get the text content of each cell and add it to the object
          rowData[
            $("#delivery_products thead th")
              .eq(index)
              .text()
              .toLowerCase()
              .replace(" ", "_")
          ] = $(element).text();
        });
      // push the object into the array
      delivery_products.push(rowData);
    });

    $.ajax({
      url:
        BASE_URL + "fleet_management_admin/delivery_requests/insert_delivery",
      type: "POST",
      processData: false,
      contentType: false,
      data: formData,
      success: function (response) {
        console.log(response);
      },
    });
  });
});
