$(document).ready(function () {
  // ? THIS WILL ALLOW ALL TABLES TO HAVE A SEARCH FIELD
  $("table.display").DataTable({
    lengthChange: false, // Disable length menu
    bInfo: false, // Disable "Showing X of Y entries" labe
  });
});
