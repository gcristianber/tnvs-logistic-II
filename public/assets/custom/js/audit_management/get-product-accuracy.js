$(document).ready(function() {
    // Get the table body
    var tableBody = $('#auditTable tbody');
    
    // Listen for changes in the Actual Count input fields
    tableBody.on('change', 'input[type="number"]', function() {
      // Get the current row
      var row = $(this).closest('tr');
      
      // Get the values of Quantity and Actual Count
      var quantity = parseInt(row.find('.text-end:nth-child(3)').text().replace(/\D/g, ''));
      var actualCount = parseInt($(this).val());
      
      // Calculate the variance and accuracy
      var variance = actualCount - quantity;
      var accuracy = (actualCount / quantity) * 100;
      
      // Update the Variance and Accuracy columns in the table
      row.find('.text-end:nth-child(7)').text(variance);
      row.find('.text-end:nth-child(8)').text(accuracy.toFixed(2) + '%');
      
      // Compute the overall accuracy for all rows
      var overallAccuracy = 0;
      var numRows = 0;
      tableBody.find('tr').each(function() {
        var accuracyText = $(this).find('.text-end:nth-child(8)').text();
        if (accuracyText !== '--') {
          var accuracy = parseFloat(accuracyText.replace('%', ''));
          overallAccuracy += accuracy;
          numRows++;
        }
      });
      overallAccuracy /= numRows;
      
      // Update the Overall Accuracy element
      $('#overallAccuracy').text(overallAccuracy.toFixed(2) + '%');
    });
  });
  