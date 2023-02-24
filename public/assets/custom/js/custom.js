$(document).ready(() => {

    const sendBtn = $('#sendDocument');
    const ocrBtn = $('#btnConvertOCR');

    sendBtn.on('click', () => {

        const documentTitle = $('#documentTitle');
        const editor = tinymce.get('tinymceExample');
        const content = editor.getContent();

        const trimTitle = documentTitle[0].innerHTML.replace('<br>', '')
        console.log(trimTitle)

        console.log(content)

        $.ajax({
            type: 'POST',
            data: {content: content},
            success: function(response){
                console.log(response)
            }
        })

        showSwal()
    })

    function showSwal() {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger me-2'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Your document will be sent!",
            icon: 'info',
            showCancelButton: true,
            confirmButtonClass: 'me-2',
            confirmButtonText: 'Yes, send it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                    'Sent!',
                    'Your document has been sent.',
                    'success'
                )
                // ! --> Function for upload here...
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Sending has been cancelled',
                    'error'
                )
            }
        })
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