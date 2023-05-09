$(document).ready(() => {

    // Get all submitReport button elements
    const submitButtons = document.querySelectorAll('.submitReport');

    // Loop through each submitReport button and add a click event listener
    submitButtons.forEach((submitButton) => {
        submitButton.addEventListener('click', event => {
            var row = event.target.closest("tr")
            var dataId = row.getAttribute("data-location_id")
            // Get all input elements with class "actualCount"
            const inputElements = submitButton.closest('.modal-content').querySelectorAll('.actualCount');

            // Create an object to hold the values of the input fields
            const inputValues = {};

            // Loop through each input element and get its value and product_id
            inputElements.forEach((inputElement) => {
                const inputValue = inputElement.value;
                const productId = inputElement.closest('tr').dataset.product_id;
                inputValues[productId] = inputValue;
            });

            // Log the object of input values to the console
            console.log(inputValues);
            console.log(`Location ID: ${dataId}`);

            $.ajax({
                url: config.baseUrl + 'audit_management/inventory/insert_report',
                type: 'POST',
                data: {
                    location_id: dataId,
                    line_items: inputValues
                },
                success: function(response){
                    console.log(response)
                }
            })

            // Add your code here to submit the form or handle the input values
        });
    });



})