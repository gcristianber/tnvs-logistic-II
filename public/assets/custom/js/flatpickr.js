const filter_date = document.querySelectorAll(".filter-date");
const flatpickrInstance = flatpickr(filter_date, {
    enableTime: true,
    dateFormat: "d/m/Y",
    defaultDate: new Date(),
    allowInput: true
});