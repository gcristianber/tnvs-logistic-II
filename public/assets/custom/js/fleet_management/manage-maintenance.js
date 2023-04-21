
$(document).ready(function() {
  var currentUrl = $(location).attr("href");
  $('#add_new_maintenance').submit(function(e) {
    e.preventDefault(); // Prevent the form from reloading the page

    var form = e.target
    var formData = new FormData(form)

    $.ajax({
        url: currentUrl + 'fleet_management_admin/maintenance/insert_new_maintenance',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            console.log(response)
        }
    })

  });
});

