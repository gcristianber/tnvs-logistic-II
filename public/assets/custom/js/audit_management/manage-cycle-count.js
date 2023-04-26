$(document).ready(() => {

  const currentUrl = $(location).attr('href');

  $("#add_cycle_count").on("submit", (e) => {
    e.preventDefault()
    var form = e.target
    var formData = new FormData(form)

    console.log(currentUrl)
    $.ajax({
      type: "POST",
      processData: false,
      contentType: false,
      data: formData,
      success: function(response){
        console.log(response)
      }
    })
  })
})