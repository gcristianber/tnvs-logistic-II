$(document).ready(() => {

    const actualCount = document.querySelectorAll(".actualCount")

    const submitReport = document.getElementById("submitReport")

    submitReport.addEventListener("click", () => {
        actualCount.forEach(element => {
            var row = element.closest("tr")
            var dataId = row.getAttribute("data-id")
            console.log("ID:" + dataId + "Value:"+element.value)

            
        });
    })

})