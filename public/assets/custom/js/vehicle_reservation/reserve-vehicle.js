$(document).ready(() => {
    $(".reserve-vehicle").on("click", function () {

        var myModal = $(this).closest('[data-id]');
        var currentUrl = $(location).attr('href');
        var dataId = myModal.attr('data-id');


        // ?Data
        var pickupDate = $("[name='pickup_date']").val()
        var returnDate = $("[name='return_date']").val()

        var emailAddress = $("[name='email_address']").val()
        var contactNumber = $("[name='contact_number']").val()

        var reason = $("[name='reason']").val()     

        $.ajax({
            type: "POST",
            url: currentUrl + '/reserve_vehicle',
            data: {
                vehicle_id: dataId,
                pickup_date: pickupDate,
                return_date: returnDate,
                email_address: emailAddress,
                contact_number: contactNumber,
                reason: reason,
            },
            success: function(response){
                console.log(response)
            }
        })


    })
})