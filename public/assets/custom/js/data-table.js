$(document).ready(function () {
  // ? THIS WILL ALLOW ALL TABLES TO HAVE A SEARCH FIELD
  var table = $('.dataTable').DataTable({
    lengthChange: false, // Disable length menu
    bInfo: false, // Disable "Showing X of Y entries" label
    paging: false,
  });
});
