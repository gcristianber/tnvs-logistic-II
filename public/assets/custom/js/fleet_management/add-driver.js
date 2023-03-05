$(document).ready(() => {
    $("#addDriverForm").submit((e) => {
      e.preventDefault();
  
      var form = document.getElementById("addDriverForm");
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
  
          $('#addDriverForm')[0].reset();
          $("#addDriverModal").modal("hide")
        },
      });
    });
  });
  