$(document).ready(()=>{
    let currentUrl = $(location).attr('href');

    $("#createTemplate").on("click", function(){
        var content = tinymce.get("tinymceExample").getContent();
        var textArea = $("#description").val()
        var category_id = $("#categoryId").val()

        $.ajax({
            url: currentUrl + "/insert_template",
            type: "POST",
            data: {
                category_id: category_id,
                content: content,
                description: textArea
            },
            success: function(response){
                console.log(response)
            }
        })
    })

})