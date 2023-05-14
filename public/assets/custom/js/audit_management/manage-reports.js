$(document).ready(() => {


    const solveBtn = document.querySelectorAll(".solveReport")

    solveBtn.forEach((btn) => {
        btn.addEventListener("click", e => {
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
                    updateStatus(dataId, 'solve')
                }
            })

        })
    })

    function updateStatus(id, status) {
        $.ajax({
            url: config.baseUrl + 'audit_management/audit_reports/update_status',
            type: 'POST',
            data: {
                id: id,
                status: status
            },
            success: function (response) {
                console.log(response)
                location.reload()
            }
        })
    }

})