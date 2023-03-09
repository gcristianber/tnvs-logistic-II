$(document).ready(() => {

    $("#sendInvite").on("click", function () {
        var checkedBoxes = $('input[name="vendors"]:checked');

        var urlParams = new URLSearchParams(window.location.search);
        var pr_id = urlParams.get('pr_id')

        var checkedValues = [];
        checkedBoxes.each(function () {
            checkedValues.push($(this).val());
        });

        $.ajax({
            type: "POST",
            data: {
                pr_id: pr_id, 
                invite: checkedValues
            },
            success: function (response) {
                console.log(response)

                $('input[name="vendors"]').prop('checked', false);
                $("#inviteVendors").modal("hide");
            }

        })

    })


})