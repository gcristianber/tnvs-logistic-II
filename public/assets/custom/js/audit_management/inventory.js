$(document).ready(() => {

    const auditForm = document.querySelectorAll(".auditForm")

    auditForm.forEach(submit => {
        submit.addEventListener("submit", event => {
            event.preventDefault()

            var row = event.target.closest("tr")
            var dataId = row.getAttribute("data-location_id")

            const inputElements = submit.closest('.modal-content').querySelectorAll('.actualCount');

            // Create an object to hold the values of the input fields
            const inputValues = [];

            // Loop through each input element and get its value, product_id, and quantity
            inputElements.forEach((inputElement) => {
                const inputValue = inputElement.value;
                const productId = inputElement.closest('tr').dataset.product_id;
                const quantity = inputElement.closest('tr').querySelector('td[data-quantity]').getAttribute('data-quantity');
                const productName = inputElement.closest('tr').querySelector('td[data-product_name]').getAttribute('data-product_name');

                inputValues.push({
                    productId: productId,
                    productName: productName,
                    inputValue: inputValue,
                    quantity: quantity,
                });
            });

            var form = event.target
            var formData = new FormData(form)
            formData.append('line_items', JSON.stringify(inputValues))
            formData.append('location_id', dataId)

            console.log(formData)

            Swal.fire({
                title: "Are you sure?",
                text: "You are about to cancel your request!",
                icon: "info",
                showCancelButton: true,
                confirmButtonClass: "me-2",
                confirmButtonText: "Yes, Submit it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true,
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: config.baseUrl + 'audit_management/inventory/insert_report',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            console.log(response);
                        }
                    });

                    // console.log(formData);
                    // location.reload()
                }
            })


        })
    });
})