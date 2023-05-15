$(document).ready(() => {

    const publishBtn = document.querySelectorAll(".publishBtn")

    publishBtn.forEach(btn => {
        btn.addEventListener("click", (event) => {
            var row = event.target.closest("tr")
            var dataId = row.getAttribute("data-id")

            Swal.fire({
                title: "Are you sure?",
                text: "You are about to cancel your request!",
                icon: "info",
                showCancelButton: true,
                confirmButtonClass: "me-2",
                confirmButtonText: "Yes, cancel my request!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true,
            }).then((result) => {
                if (result.value) {
                    updateStatus(dataId, 'publish')
                }
            })
        })
    });

    function updateStatus(id, status) {
        $.ajax({
            url: config.baseUrl + 'vendor_portal_admin/portal_requests/update_status',
            type: 'POST',
            data: {
                id: id,
                status: status
            },
            success: function (response) {
                console.log(response)
                // location.reload()
            }
        })
    }
})