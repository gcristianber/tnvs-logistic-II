$(document).ready(() => {

    const ocrBtn = $('#btnConvertOCR');

    $('#sendDocument').on("click", (e) => {
        e.preventDefault()
        const documentTitle = $('#documentTitle');
        const purpose = $('#purpose').val();
        const category = $('#categorySelect').val();
        const editor = tinymce.get('tinymceExample');
        const content = editor.getContent();

        var alert = document.getElementById("alert")
        var textAlert = document.getElementById("textAlert")

        const trimTitle = documentTitle[0].innerHTML.replace('<br>', '')


        $.ajax({
            type: "POST",
            data: {
                title: trimTitle,
                category: category,
                purpose: purpose,
                content: content
            },
            success: function (response) {
                console.log(response)
                if (response.success) {
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
                    alert.classList.add("d-none")
                } else {
                    alert.classList.remove("d-none")
                    textAlert.innerHTML = response;
                }


            }

        })




    })

    function showSwal() {

    }

    ocrBtn.on('click', () => {

        const editor = tinymce.get('tinymceExample');
        const content = editor.getContent();


        const fileInput = document.getElementById("myDropify")

        const file = fileInput.files[0]
        const reader = new FileReader()

        reader.readAsDataURL(file)

        reader.onload = async function () {
            const image = new Image()

            image.src = reader.result
            image.onload = async function () {
                const result = await Tesseract.recognize(image, 'eng', { logger: m => console.log(`OCR progress: ${Math.round(m.progress * 100)}%`) })

                console.log(result)
                console.log(result.data.text)


                editor.setContent(result.data.text)
            }


        }



    })


})