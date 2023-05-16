$(document).ready(() => {
    const urlParams = new URLSearchParams(window.location.search);
    const tenderId = urlParams.get('tender_id');
    const bidForm = document.getElementById("bidForm")

    bidForm.addEventListener("submit", event => {
        event.preventDefault()

        var form = event.target
        var formData = new FormData(form)
        formData.append("tender_id", tenderId)

        $.ajax({
            url: config.baseUrl + 'vendor_portal_admin/tenders/submit_bid',
            type: "POST",
            processData: false, 
            contentType: false,
            data: formData,
            success: function (response) {
                console.log(response)
            }
        })
    })
})