$(document).ready(() => {


    const reportForm = document.getElementById("reportForm")

    // get references to the input fields and table
    const employeeIdInput = document.querySelector('#employee-id');
    const fullNameInput = document.querySelector('#full-name');
    const table = document.querySelector('#counter_table tbody');

    const urlParams = new URLSearchParams(window.location.search);
    const transfer_id = urlParams.get('transfer_id');

    const data = []

    const inputsArray = [];


    reportForm.addEventListener("submit", event => {
        event.preventDefault()
        // Get the table element by its id
        const table = document.getElementById('productsTable');

        // Get all the rows in the table body
        const rows = table.querySelectorAll('tbody tr');

        // Initialize an empty array to store the inputs


        // Loop through each row
        rows.forEach(row => {
            // Get the data-id attribute value
            const dataId = row.getAttribute('data-id');

            // Get the input element within the row
            const input = row.querySelector('.actualCount');

            // Get the input value
            const inputValue = input.value;

            // Create an object to store the data-id and input value
            const rowObject = {
                product_id: dataId,
                actual_count: inputValue
            };

            // Push the row object to the array
            inputsArray.push(rowObject);
        });

        // Print the inputs array
        // console.log(inputsArray);

        var form = new FormData(event.target)
        form.append('transfer_id', transfer_id)
        form.append('inventory_counters', JSON.stringify(data))
        form.append('products', JSON.stringify(inputsArray))

        Swal.fire({
            title: 'Confirmation',
            html: `
            <div class="form-check form-check-inline">
                <input type="checkbox" class="form-check-input" id="checkbox" value="true">
                <label class="form-check-label" for="checkInline">
                    I agree with <a href="" class="link-primary">Terms and Conditions</a> and <a href="" class="link-primary">Legal Policy</a>. 
                </label>
            </div>
            `,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonClass: "me-2",
            confirmButtonText: "Yes, proceed!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true,
            preConfirm: () => {
                const checkbox = document.getElementById('checkbox');
                if (checkbox.checked) {
                    return true; // Proceed with the confirmation
                } else {
                    Swal.showValidationMessage('Please confirm the checkbox');
                    return false; // Prevent the confirmation
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: config.baseUrl + 'audit_management/audit_requests/insert_report',
                    type: "POST",
                    data: form,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response)
                    }
                })
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Action cancelled
                // ...
            }
        });



    })



    // attach event listener to "Add Data" button
    const addButton = document.querySelector('#add-counter');
    addButton.addEventListener('click', function () {
        // retrieve input values
        const employeeId = employeeIdInput.value;
        const fullName = fullNameInput.value;
        // create new table row
        const newRow = document.createElement('tr');
        newRow.setAttribute('class', 'align-middle');
        newRow.innerHTML = `
            <tr class='align-middle'>
            <td>${table.rows.length + 1}</td>
            <td>${employeeId}</td>
            <td>${fullName}</td>
            <td>
            <button class="btn btn-danger btn-icon removeItem">
                <i data-feather="minus-circle"></i>
            </button>
            </td>
        `;

        // attach event listener to "Remove" button
        const removeButton = newRow.querySelector('.removeItem');
        removeButton.addEventListener('click', function () {
            // remove current row from table
            table.removeChild(newRow);
            // remove corresponding item from data array
            const index = data.findIndex(item => item.employeeId === employeeId && item.fullName === fullName);
            if (index !== -1) {
                data.splice(index, 1);
            }
            console.log(data)
        });

        data.push({
            employee_id: employeeId,
            full_name: fullName,
        });

        // console.log(data)

        // append new row to table
        table.appendChild(newRow);

        // clear input fields
        employeeIdInput.value = '';
        fullNameInput.value = '';
        feather.replace()
    });
})