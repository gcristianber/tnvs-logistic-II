$(document).ready(function () {
  var table = $('.dataTable').DataTable({
    lengthChange: false, // Disable length menu
    bInfo: false, // Disable "Showing X of Y entries" label
    paging: false,
  });
});
