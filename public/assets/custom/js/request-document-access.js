$(document).ready(() => {

    $(".submitRequest").on("click", function () {

        var myModal = $(this).closest('[data-id]');
       
        var dataId = myModal.attr('data-id');
        var textArea = myModal.find('textarea')

        var textAreaValue = $.trim(textArea.val())

        // var textAlert = document.getElementById("textAlert");
        if (textAreaValue !== '') {

            $.ajax({
                type: "POST",
                data: {
                    target_id: dataId,
                    reason: textAreaValue
                },
                success: function (response) {
                    console.log(response)
                    textArea.val("")
                    myModal.modal("hide")
                }
            })

        }else{     
            $(this).closest("#textAlert").remove("d-none")
            // ! FIX: Alert when clicking the button
            console.log("Textarea is empty!")
        }


        

        


    })

})