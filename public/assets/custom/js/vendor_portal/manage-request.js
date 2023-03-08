$(document).ready(() => {
    $('.publish-request').click(function (e) {
        e.preventDefault();
        var currentUrl = $(location).attr('href');
        var id = $(this).closest('tr').data('id'); // get the ID of the row to update

        console.log(id)

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger me-2'
            },
            buttonsStyling: false,
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'me-2',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )

                // ? IF YES THEN APPROVE THE REQUEST
                $.ajax({
                    type: "POST",
                    url: currentUrl + '/approve_request',
                    data: {
                        target_id: id
                    },
                    success: function (response) {
                        console.log(response)
                    }
                })
            } else if (
                // Read more about handling dismissals
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })



    });
})