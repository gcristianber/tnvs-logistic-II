$(document).ready(() => {

    $("#requestorForm").submit((e) => {
        e.preventDefault();

        var form = document.getElementById("requestorForm")
        var alert = document.getElementById("alert")
        var textAlert = document.getElementById("textAlert")

        var formData = new FormData(form)

        $.ajax({
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {

                if ($.trim(response)) {

                    if (response.success) {
                        // ? RENDER DATA
                        console.log(response);
                        $("#requestorForm")[0].reset()
                        alert.classList.add("d-none")
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                        });

                        Toast.fire({
                            icon: 'success',
                            title: 'Request Sent!'
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