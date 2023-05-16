$(document).ready(() => {
    let btns = document.querySelectorAll(".rowAwardBtn");

    const awardBtn = document.getElementById("awardedBtn")

    const urlParams = new URLSearchParams(window.location.search);
    const tenderId = urlParams.get('tender_id');

    awardBtn.addEventListener("click", () => {

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "info",
            showCancelButton: true,
            confirmButtonClass: "me-2",
            confirmButtonText: "Yes, continue!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: config.baseUrl + 'vendor_portal_admin/tenders/update_status',
                    type: 'POST',
                    data: {
                        status: "awarded",
                        id: tenderId
                    },
                    success: function (response) {
                        console.log(response)
                        location.href = config.baseUrl + "vendor_portal_admin/portal_requests"
                    }
                })
            }
        })

    })

    btns.forEach(function (btn) {
        btn.addEventListener("click", function (event) {
            var row = event.target.closest("tr")
            var dataId = row.getAttribute("data-id")

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
                    award_bid(dataId)
                    location.reload()
                }
            })
        });
    });

    function award_bid(bid_id) {
        $.ajax({
            url: config.baseUrl + 'vendor_portal_admin/tenders/award_bid',
            type: 'POST',
            data: {
                bid_id: bid_id
            },
            success: function (response) {
                console.log(response)

            }
        })
    }

    const checkboxes = document.querySelectorAll('.checkboxes')
    const compareSelectedBtn = document.getElementById("compare_selected")

    const comparedSelection = [];

    if (comparedSelection.length >= 2) {
        return;
    }

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function (event) {
            let checkedCount = document.querySelectorAll('.checkboxes:checked').length;
            compareSelectedBtn.disabled = (checkedCount === 0);

            let selected = event.target.value;

            if (event.target.checked) {
                comparedSelection.push(selected);
            } else {
                let index = comparedSelection.indexOf(selected);
                if (index !== -1) {
                    comparedSelection.splice(index, 1);
                }
            }

            console.log(comparedSelection);
        });
    });


    compareSelectedBtn.addEventListener('click', function () {
        $.ajax({
            url: config.baseUrl + 'vendor_portal_admin/portal_requests/compare_bid',
            method: 'POST',
            data: {
                array: comparedSelection
            },
            success: function (response) {
                var json = JSON.parse(response)
                console.log(response);
                compare_bid(json)
            }
        });
    });

    function compare_bid(jsonData) {
        const table = document.getElementById("compareTable");

        // Create a header row and add it to the table
        const headerRow = table.insertRow();
        const headerCell1 = headerRow.insertCell();
        headerCell1.innerText = "";
        const headerCell2 = headerRow.insertCell();
        headerCell2.colSpan = 1;
        headerCell2.innerHTML = `
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <p>${jsonData[0][0].display_name}</p>
            <small class="text-muted">${jsonData[0][0].email_address}</small>
            </div>
            <div>
            <button class="btn btn-primary btn-icon-text">
                <i data-feather="plus" class="btn-icon-prepend"></i>
                Award
            </button>
            <button class="btn btn-danger btn-icon">
                <i data-feather="trash-2"></i>
            </button>
            </div>
        </div>
        `;
        const headerCell3 = headerRow.insertCell();
        headerCell3.colSpan = 2;
        headerCell3.innerHTML = `
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <p>${jsonData[1][0].display_name}</p>
            <small class="text-muted">${jsonData[1][0].email_address}</small>
            </div>
            <div>
            <button class="btn btn-primary btn-icon-text">
                <i data-feather="plus" class="btn-icon-prepend"></i>
                Award
            </button>
            <button class="btn btn-danger btn-icon">
                <i data-feather="trash-2"></i>
            </button>
            </div>
        </div>
        `;

        // Create the data rows and add them to the table
        const bidRow = table.insertRow();
        const bidCell1 = bidRow.insertCell();
        bidCell1.innerText = "Bid";
        const bidCell2 = bidRow.insertCell();
        bidCell2.innerText = `PHP ${jsonData[0][0].bid.toLocaleString()}`;
        const bidCell3 = bidRow.insertCell();
        bidCell3.innerText = `PHP ${jsonData[1][0].bid.toLocaleString()}`;

        const qualityRow = table.insertRow();
        const qualityCell1 = qualityRow.insertCell();
        qualityCell1.innerText = "Quality";
        const qualityCell2 = qualityRow.insertCell();
        qualityCell2.innerText = jsonData[0][0].quality;
        const qualityCell3 = qualityRow.insertCell();
        qualityCell3.innerText = jsonData[1][0].quality;

        const discountRow = table.insertRow();
        const discountCell1 = discountRow.insertCell();
        discountCell1.innerText = "Discount";
        const discountCell2 = discountRow.insertCell();
        discountCell2.innerText = jsonData[0][0].discount;
        const discountCell3 = discountRow.insertCell();
        discountCell3.innerText = jsonData[1][0].discount;

        const locationRow = table.insertRow();
        const locationCell1 = locationRow.insertCell();
        locationCell1.innerText = "Location";
        const locationCell2 = locationRow.insertCell();
        locationCell2.innerText = jsonData[0][0].location;
        const locationCell3 = locationRow.insertCell();
        locationCell3.innerText = jsonData[1][0].location;

        const deliveryRow = table.insertRow();
        const deliveryCell1 = deliveryRow.insertCell();
        deliveryCell1.innerText = "Delivery";
        const deliveryCell2 = deliveryRow.insertCell();
        deliveryCell2.innerText = jsonData[0][0].delivery_time;
        const deliveryCell3 = deliveryRow.insertCell();
        deliveryCell3.innerText = jsonData[1][0].delivery_time;

        // Highlight the lowest bid
        const highestDiscount = Math.max(jsonData[0][0].discount, jsonData[1][0].discount);
        if (jsonData[0][0].bid === highestDiscount) {
            discountCell1.classList.add("bg-success", "text-success", "bg-opacity-10");
        } else {
            discountCell2.classList.add("bg-success", "text-success", "bg-opacity-10");
        }


        feather.replace()
    }

})