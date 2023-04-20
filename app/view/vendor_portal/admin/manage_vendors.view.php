<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Maintenance</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- endinject -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>
<style>
  .dataTables_filter {
    display: none;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">
        <div class="row h-100">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">

                <div class="row">
                  <div class="col-3 border-end">
                    <div class="mb-3 border-bottom pb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <p class="fs-4">Filters</p>
                        <p>Companies: <strong>35</strong></p>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="mb-2">
                        <p class="fs-5">Categories</p>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Office Supplies</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Food and Beverages</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Transportation</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Services</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="mb-2">
                        <p class="fs-5">Company Types</p>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Public Company</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Private Company (LTD)</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="mb-2">
                        <p class="fs-5">Status</p>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Active</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Inactive</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Expired</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="mb-3">
                      <div class="d-flex gap-2">
                        <div class="input-group">
                          <div class="input-group-text" id="btnGroupAddon2">
                            <i data-feather="search"></i>
                          </div>
                          <input type="text" class="form-control" placeholder="Search Vendor" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                        </div>

                        <button class="btn btn-primary btn-icon-text  flex-shrink-0" disabled>
                          <i data-feather="plus" class="btn-icon-prepend"></i>
                          Create Message
                        </button>

                      </div>
                    </div>
                    <div class="">
                      <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                        <div class="flex-grow-1">
                          <label for="" class="form-label">Choose message template</label>
                          <select name="" class="form-select" id="">
                            <option selected disabled>Select template</option>
                            <option value="">Invitation to Bid</option>
                            <option value="">Notification</option>
                            <option value="">RFQ</option>
                            <option value="">RFP</option>
                          </select>
                        </div>
                        <div class="flex-grow-1">
                          <label for="" class="form-label">Select Tender</label>
                          <select name="" class="form-select" id="">
                            <option selected disabled>Select Tender</option>
                            <option value="">Invitation to Bid</option>
                            <option value="">Notification</option>
                            <option value="">RFQ</option>
                            <option value="">RFP</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Subject</label>
                        <input type="text" name="" id="" class="form-control">
                      </div>
                      <div class="mb-3">
                      <label for="" class="form-label">Message</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                      </div>
                      <div class="mb-3 text-end">
                        <button class="btn btn-primary btn-icon-text">
                          <i data-feather="send" class="btn-icon-prepend"></i>
                          Send message
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="request_tbl" class="table display table-hover">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>company name</th>
                            <th>category</th>
                            <th>location</th>
                            <th>status</th>
                            <th>rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="align-middle" data-status="verified">
                            <td>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkDefault">
                              </div>
                            </td>
                            <td>National Bookstore</td>
                            <td>Office Supplies</td>
                            <td>Quezon City, Philippines</td>
                            <td>
                              <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                              <div class="d-inline">
                                8/10 <i data-feather="star" fill="currentColor" class="icon-lg text-warning"></i>
                              </div>
                            </td>
                          </tr>
                          <tr class="align-middle" data-status="verified">
                            <td>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkDefault">
                              </div>
                            </td>
                            <td>SM Supermalls</td>
                            <td>Office Supplies</td>
                            <td>Quezon City, Philippines</td>
                            <td>
                              <span class="badge bg-danger">Expired</span>
                            </td>
                            <td>
                              <div class="d-inline">
                                8/10 <i data-feather="star" fill="currentColor" class="icon-lg text-warning"></i>
                              </div>
                            </td>
                          </tr>
                          <tr class="align-middle" data-status="verified">
                            <td>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkDefault">
                              </div>
                            </td>
                            <td>National Bookstore</td>
                            <td>Office Supplies</td>
                            <td>Quezon City, Philippines</td>
                            <td>
                              <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                              <div class="d-inline">
                                8/10 <i data-feather="star" fill="currentColor" class="icon-lg text-warning"></i>
                              </div>
                            </td>
                          </tr>
                          
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-requests.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- End custom js for this page -->
  <!-- Flat Picker -->
  <script>
    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      enableTime: true,
      dateFormat: "d M Y",
      defaultDate: new Date(),
      minDate: "today",
      allowInput: true
    });
  </script>
  <script>
    $(document).ready(function() {
      var table = $('#request_tbl').DataTable({
        lengthChange: false, // Disable length menu
        bInfo: false, // Disable "Showing X of Y entries" label

      });

      $('#search').on('keyup', function(event) {
        if (event.keyCode === 13) { // Check if "Enter" key is pressed
          var query = $('#search').val();
          table.search(query).draw();
        }
      });

      $('#customSearchBtn').on('click', function() {
        var query = $('#search').val();
        table.search(query).draw();
      });

      var rows = $('table tbody tr');

      // listen for changes to the radio buttons
      $('input[name="btnradio"]').on('change', function() {
        // get the value of the selected radio button
        var value = $(this).val();

        // hide all rows by default
        rows.hide();

        // show the rows that match the selected status
        if (value === 'all') {
          rows.show();
        } else {
          rows.filter('[data-status="' + value + '"]').show();
        }
      });

      var statusCounts = {
        'all': rows.length,
        'pending': 0,
        'approved': 0,
        'declined': 0
      };

      rows.each(function() {
        var status = $(this).data('status');
        statusCounts[status]++;
      });

      $('input[type=radio][name=btnradio]').each(function() {
        var status = $(this).val();
        if (status !== 'all') {
          var count = statusCounts[status];
          $(this).next('label').text(capitalize(status) + ' (' + count + ')');
        }
      });

      function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
      }



    });
  </script>
</body>

</html>