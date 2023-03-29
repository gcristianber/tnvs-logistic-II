$(document).ready(() => {
  $("#selectCategory").on("change", function () {
    console.log(this.value);
    switch (this.value) {
      case "all":
        getAll();
        break;
      case "1":
        getBy(this.value);
        break;
      case "2":
        getBy(this.value);
        break;
      case "3":
        getBy(this.value);
        break;
    }
  });

  function getAll() {
    var overallAccuracyElement = document.querySelector("#overallAccuracy");
    overallAccuracyElement.textContent = "--";
    fetch(
      "http://localhost/TNVS-LOGISTIC2/public/audit_management/audit_requests/fetch_all_category"
    )
      .then((res) => res.json())
      .then((json) => {
        const tableBody = document.querySelector("#auditTable tbody");
        overallAccuracyElement.textContent = "--";
        tableBody.innerHTML = ""; // clear any existing rows
        let totalAccuracy = 0; // variable to store the total accuracy of all rows
        let rowCount = 0; // variable to count the number of rows

        json.forEach((data) => {
          const row = document.createElement("tr");
          row.innerHTML = `
                <td>${data.product_id}</td>
                <td>${data.product_name}</td>
                <td>${data.quantity}</td>
                <td>${data.unit_cost}</td>
                <td>${data.total}</td>
                <td><input type="number" class="form-control" name="" id=""></td>
                <td>--</td>
                <td>--</td>
              `;
          tableBody.appendChild(row);

          const quantity = parseInt(data.quantity);
          const actualCountInput = row.querySelector("td:nth-child(6) input");
          const varianceTd = row.querySelector("td:nth-child(7)");
          const accuracyTd = row.querySelector("td:nth-child(8)");

          actualCountInput.addEventListener("change", function () {
            const actualCount = parseInt(actualCountInput.value);
            const variance = quantity - actualCount;
            varianceTd.textContent = variance;
            const accuracy = (actualCount / quantity) * 100;
            accuracyTd.textContent = accuracy.toFixed(2) + "%";

            // update total accuracy and row count
            totalAccuracy += accuracy;
            rowCount++;
            // update overall accuracy
            const overallAccuracy = totalAccuracy / rowCount;
            const overallAccuracyElement =
              document.querySelector("#overallAccuracy");
            overallAccuracyElement.textContent =
              overallAccuracy.toFixed(2) + "%";
          });
        });
      })
      .catch((error) => console.error(error));
  }

  function getBy(id) {
    var overallAccuracyElement = document.querySelector("#overallAccuracy");
    overallAccuracyElement.textContent = "--";
    fetch(
      `http://localhost/TNVS-LOGISTIC2/public/audit_management/audit_requests/fetch_by_category/${id}`
    )
      .then((res) => res.json())
      .then((json) => {
        console.log(json);
        const tableBody = document.querySelector("#auditTable tbody");

        tableBody.innerHTML = ""; // clear any existing rows
        let totalAccuracy = 0; // variable to store the total accuracy of all rows
        let rowCount = 0; // variable to count the number of rows

        json.forEach((data) => {
          const row = document.createElement("tr");
          row.innerHTML = `
                  <td>${data.product_id}</td>
                  <td>${data.product_name}</td>
                  <td>${data.quantity}</td>
                  <td>${data.unit_cost}</td>
                  <td>${data.total}</td>
                  <td><input type="number" class="form-control" name="" id=""></td>
                  <td>--</td>
                  <td>--</td>
                `;
          tableBody.appendChild(row);

          const quantity = parseInt(data.quantity);
          const actualCountInput = row.querySelector("td:nth-child(6) input");
          const varianceTd = row.querySelector("td:nth-child(7)");
          const accuracyTd = row.querySelector("td:nth-child(8)");

          actualCountInput.addEventListener("change", function () {
            const actualCount = parseInt(actualCountInput.value);
            const variance = quantity - actualCount;
            varianceTd.textContent = variance;
            const accuracy = (actualCount / quantity) * 100;
            accuracyTd.textContent = accuracy.toFixed(2) + "%";

            // update total accuracy and row count
            totalAccuracy += accuracy;
            rowCount++;
            // update overall accuracy
            const overallAccuracy = totalAccuracy / rowCount;
            const overallAccuracyElement =
              document.querySelector("#overallAccuracy");
            overallAccuracyElement.textContent =
              overallAccuracy.toFixed(2) + "%";
          });
        });
      })
      .catch((error) => console.error(error));
  }
});
