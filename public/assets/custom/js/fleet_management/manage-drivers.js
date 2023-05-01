$(document).ready(() => {

    const addDriverForm = document.getElementById("addDriverForm")


    addDriverForm.addEventListener("submit", (e) => {
        e.preventDefault()

        var form = e.target
        var formData = new FormData(form)
        add_driver(formData)


    })

    const exportCSVBtn = document.getElementById("exportCSV")
    exportCSVBtn.addEventListener("click", () => {
        $.ajax({
            url: config.baseUrl + 'fleet_management_admin/manage_drivers/export_csv',
            type: 'POST',
            success: function (response) {
                // Navigate to the file URL to trigger download
                window.location.href = response;
            }
        });
    });



    function add_driver(data) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "info",
            showCancelButton: true,
            confirmButtonClass: "me-2",
            confirmButtonText: "Yes, award it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: config.baseUrl + 'fleet_management_admin/manage_drivers/add_driver',
                    type: "POST",
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function (response) {
                        console.log(response)
                    }
                })
            }
        })

    }

})