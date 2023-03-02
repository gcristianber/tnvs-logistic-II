$(document).ready(() => {

    $("#uploadForm").submit((e) => {
        e.preventDefault();
        var form = document.getElementById("uploadForm")
        var alert = document.getElementById("alert")
        var textAlert = document.getElementById("textAlert")

        var formData = new FormData(form)

        $.ajax({
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {

                console.log(response)
                if ($.trim(response)) {

                    if (response.success) {
                        // ? RENDER DATA
                        console.log(response);
                        console.log("Hello");
                        // render_data(response)

                        $("#uploadForm")[0].reset()
                        $("#uploadModal").modal("hide")
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                        });

                        Toast.fire({
                            icon: 'success',
                            title: 'Uploaded Successfully!'
                        })
                    } else {
                        alert.classList.remove("d-none")
                        textAlert.innerHTML = response;
                    }

                }
            }
        })
    })


})