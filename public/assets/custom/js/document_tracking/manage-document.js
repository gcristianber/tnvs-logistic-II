$(document).ready(() => {
    const sendBtns = document.querySelectorAll(".sendBtn")

    sendBtns.forEach(btn => {
        btn.addEventListener("click", e => {
            var row = e.target.closest("tr")
            var id = row.getAttribute("data-id")

            Swal.fire({
                title: "Are you sure?",
                text: "You are about to send the document!",
                icon: "info",
                showCancelButton: true,
                confirmButtonClass: "me-2",
                confirmButtonText: "Yes, proceed!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true,
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: config.baseUrl + "document_tracking/manage_documents/update_status",
                        type: "POST",
                        data: {
                            id: id,
                            status: 'outgoing'
                        },
                        success: function(response){
                            // console.log(response)
                            location.reload()
                        }
                    })
                }
            })
            
        })
    });
})