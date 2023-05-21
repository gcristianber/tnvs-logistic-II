$(document).ready(function () {
  // Get the DataTable instance
  const table = $('.dataTable').DataTable({
    lengthChange: false,
    bInfo: false,
    paging: false,
  });

  // Get the search inputs and search buttons
  const searchInputs = document.querySelectorAll('.searchInput');
  const searchButtons = document.querySelectorAll('.search');
  const filterDateInputs = document.querySelectorAll('.filter-date');
  const filterSelectInputs = document.querySelectorAll('.filter-select');

  // Add event listener for each search button
  searchButtons.forEach((searchButton, index) => {
    searchButton.addEventListener('click', function () {
      searchRow(searchInputs[index].value.trim(), table);
    });
  });

  // Add event listener for each search input
  searchInputs.forEach((searchInput) => {
    searchInput.addEventListener('input', function () {
      if (this.value.trim() === '') {
        clearSearch(table);
      }
    });
  });

  // Add event listener for each date filter input
  filterDateInputs.forEach((filterDateInput) => {
    filterDateInput.addEventListener('change', function () {
      const selectedDate = this.value.trim();
      filterByDate(selectedDate, table);
    });
  });

  filterSelectInputs.forEach((filterSelectInput) => {
    filterSelectInput.addEventListener('change', function () {
      const selectedValue = this.value.trim();
      filterByDate(selectedValue, table);
      console.log(selectedValue)
    });
  });

  // Function to search the row
  function searchRow(value, dataTable) {
    dataTable.search(value).draw();
  }

  // Function to clear the search filter
  function clearSearch(dataTable) {
    dataTable.search('').draw();
  }

  // Function to filter by date
  function filterByDate(date, dataTable) {
    dataTable.search(date).draw();
  }

  function filterBySelect(value, dataTable) {
    dataTable.search(value).draw();
  }
});