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
                <div class="mb-4">
                  <h3 class="mb-1">Listing</h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate temporibus, fugiat fuga magni nisi.</p>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <div class="input-group flatpickr" id="flatpickr-date">
                      <span class="input-group-text input-group-addon" data-toggle="">
                        <i data-feather="calendar"></i>
                      </span>
                      <input type="text" name="return_date" id="" class="form-control date-input">
                    </div>
                  </div>
                  <div class="col">
                    <select name="" id="" class="form-select">
                      <option selected disabled>List Type</option>
                      <option value="">Purchase</option>
                      <option value="">Auction</option>
                    </select>
                  </div>
                  <div class="col">
                    <div class="btn-group w-100" role="group" aria-label="Basic example">
                      <input type="text" tabindex="1" autofocus name="" id="search" class="form-control" placeholder="Search id">
                      <button type="button" class="btn btn-outline-primary" id="customSearchBtn">Search</button>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="mb-3 col">
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="all" name="btnradio" id="btnradio1" autocomplete="off" checked>
                      <label class="btn btn-outline-primary" for="btnradio1">All</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="pending" name="btnradio" id="btnradio2" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio2">Pending</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="approved" name="btnradio" id="btnradio3" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio3">Approved</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="declined" name="btnradio" id="btnradio6" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio6">Declined</label>
                    </div>
                  </div>
                  <div class="col text-end">
                    <button class="btn btn-outline-primary btn-icon-text" disabled>
                      <i data-feather="upload" class="btn-icon-prepend"></i>
                      Import Data
                    </button>
                    <button class="btn btn-outline-primary btn-icon-text" disabled>
                      <i data-feather="trash-2" class="btn-icon-prepend"></i>
                      Decline
                    </button>
                    <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>vendor_portal_admin/post/create_list">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add New
                    </a>
                  </div>
                </div>

                <div class="table-responsive">
                  <table id="request_tbl" class="table display">
                    <thead>
                      <tr>
                        <th data-orderable="false"></th>
                        <th>request id</th>
                        <th>subject</th>
                        <th>list type</th>
                        <th>start bid</th>
                        <th>requested by</th>
                        <th>date published</th>
                        <th>participants</th>
                        <th>status</th>
                        <th class="text-center" data-orderable="false">action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle" data-status="pending">
                        <td>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkDefault">
                          </div>
                        </td>
                        <td>VREQ-244ACDFK</td>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <img src="https://via.placeholder.com/100x100" class="ht-100 wd-100 rounded-2" alt="">
                            <div class="wd-250 text-truncate">
                              <p class="text-uppercase">Intel i5 4th Gen Computers</p>
                              <small class="text-muted">Hello, We are requesting a Lorem, ipsum dolor sit amet consectetur adipisicing elit.</small>
                            </div>
                          </div>
                        </td>
                        <td>Purchase</td>
                        <td>
                          <p>P 50, 000</p>
                        </td>
                        <td>Cristianber Gordora</td>
                        <td>
                          <p>06 Apr 2023</p>
                          <small class="text-muted">12:26 AM</small>
                        </td>
                        <td>
                          26
                        </td>
                        <td>
                          <span class="badge bg-primary">In Progress</span>
                        </td>
                        <td>
                          <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>vendor_portal_admin/listing/manage_bid">
                            <i data-feather="plus" class="btn-icon-prepend"></i>
                            Invite Vendors
                          </a>
                          <button class="btn btn-light btn-icon-text">
                            <i data-feather="external-link" class="btn-icon-prepend"></i>
                            Preview
                          </button>
                          <button class="btn btn-danger btn-icon">
                            <i data-feather="stop-circle"></i>
                          </button>
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