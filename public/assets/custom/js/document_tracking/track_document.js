$(document).ready(() => {
    $("#searchDocument").on("click", function(){
        let currentUrl = $(location).attr('href');
        let searchValue = $("#trackingForm").val()

        $.ajax({
            url: currentUrl + "/get_result",
            type: "POST",
            data: {
                tracking_id: searchValue
            },
            success: function(response){
                console.log(response)
                
                // Render response on dataTable table with id of resultTable
            }
        })
    })
});
