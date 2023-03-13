$(document).ready(()=>{
    let currentUrl = $(location).attr('href');
    
    $(".reviewBtn").on("click", function(){
        var dataId = $(this).closest("tr").data("id")
        var selfTextArea = $('#req-' + dataId + ' #textArea-' + dataId)
        var textareaValue = selfTextArea.val();


        console.log(textareaValue)

        selfTextArea.val("")
        $.ajax({
            url: currentUrl + "/review_request",
            type: "POST",
            data: {
                tracking_id: dataId,
                remarks: textareaValue
            },
            success: function(response){
                console.log(response)
            }
        })
    })

    $(".workingBtn").on("click", function(){
        var dataId = $(this).closest("tr").data("id")
        var selfTextArea = $('#req-' + dataId + ' #textArea-' + dataId)
        var textareaValue = selfTextArea.val();

        console.log(dataId)

        $.ajax({
            url: currentUrl + "/working_request",
            type: "POST",
            data: {
                tracking_id: dataId,
                remarks: textareaValue,
            },
            success: function(response){
                console.log(response)
            }
        })


    })

    $(".releaseBtn").on("click", function(){
        var dataId = $(this).closest("tr").data("id")
        var selfTextArea = $('#req-' + dataId + ' #textArea-' + dataId)
        var textareaValue = selfTextArea.val();

        var content = tinymce.get("tinymceExample").getContent();

        
        console.log(dataId)

        
        selfTextArea.val("")
        $.ajax({
            url: currentUrl + "/release_request",
            type: "POST",
            data: {
                tracking_id: dataId,
                remarks: textareaValue,
                content: content
            },
            success: function(response){
                console.log(response)
            }
        })
    })



    

})