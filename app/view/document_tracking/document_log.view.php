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
                <div class="mb-3">
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="#" class="link-primary">
                      <i data-feather="chevron-left" class="icon-md"></i>
                      Back
                    </a>

                    <button class="btn btn-primary btn-icon-text">
                      <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                      Export as Excel
                    </button>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="table-responsive">
                    <table class="table border-white">
                      <tbody>
                        <tr>
                          <td>Reference Number:</td>
                          <td>DOC-74AFD3A</td>
                          <td>Date:</td>
                          <td>19/04/2023 - 5:02 AM</td>
                        </tr>
                        <tr>
                          <td>Title:</td>
                          <td>SM Supermalls 2023-2025 Contract : Office Supplies</td>
                          <td>Last Activity:</td>
                          <td>Just now</td>
                        </tr>
                        <tr>
                          <td>Published by:</td>
                          <td>Procurement Department</td>
                        </tr>
                        <tr>
                          <td>Issued to:</td>
                          <td>Legal Management</td>
                        </tr>
                        <tr>
                          <td>Attachments:</td>
                          <td>
                            <p class="mb-2"><a href="#" class="link-primary">File Text 1.pdf</a></p>
                            <p class="mb-2"><a href="#" class="link-primary">File Text 2.pdf</a></p>
                          </td>
                        </tr>
                        <tr>
                          <td>Remarks:</td>
                          <td class="text-wrap">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam vitae tenetur, quae fugit sed dolores. Fugit aperiam consectetur officia aliquid? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam earum expedita, eaque, quod, harum adipisci est dolorum recusandae rerum nisi ea! Exercitationem consequatur aliquid ab, aliquam labore quos officiis accusamus, asperiores reprehenderit, magnam omnis velit quod aperiam porro ratione provident hic adipisci perspiciatis qui fugit eligendi voluptates quisquam. Deleniti, praesentium.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="table-responsive">
                  <table id="request_tbl" class="table display">
                    <thead>
                      <tr>
                        <th data-orderable="false">#</th>
                        <th>action date</th>
                        <th>action by</th>
                        <th>action taken</th>
                        <th>status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle" data-status="scheduled">
                        <td>
                          1
                        </td>
                        <td>
                          <p>06 Apr 2023</p>
                          <small class="text-muted">12:26 AM</small>
                        </td>
                        <td>
                          <p>Richelyn Villasor</p>
                          <small class="text-muted">Procurement Manager</small>
                        </td>
                        <td>Document has been sent to Legal Management</td>
                        <td>
                          <span class="badge bg-primary">Sent</span>
                        </td>
                      </tr>
                      <tr class="align-middle" data-status="scheduled">
                        <td>
                          2
                        </td>
                        <td>
                          <p>06 Apr 2023</p>
                          <small class="text-muted">12:26 AM</small>
                        </td>
                        <td>
                          <p>Kent Rillo</p>
                          <small class="text-muted">Legal Manager</small>
                        </td>
                        <td>Document has been received by the department</td>
                        <td>
                          <span class="badge bg-warning">Received</span>
                        </td>
                      </tr>
                      <tr class="align-middle" data-status="scheduled">
                        <td>
                          3
                        </td>
                        <td>
                          <p>06 Apr 2023</p>
                          <small class="text-muted">12:26 AM</small>
                        </td>
                        <td>
                          <p>Kent Rillo</p>
                          <small class="text-muted">Legal Manager</small>
                        </td>
                        <td>Document has been reviewed by the department</td>
                        <td>
                          <span class="badge bg-info">Reviewed</span>
                        </td>
                      </tr>
                      <tr class="align-middle" data-status="scheduled">
                        <td>
                          4
                        </td>
                        <td>
                          <p>06 Apr 2023</p>
                          <small class="text-muted">12:26 AM</small>
                        </td>
                        <td>
                          <p>Kent Rillo</p>
                          <small class="text-muted">Legal Manager</small>
                        </td>
                        <td>Document has been approved by the department</td>
                        <td>
                          <span class="badge bg-success">Approved</span>
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
        paging: false,
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
        'in progress': 0,
        'scheduled': 0,
        'completed': 0,
        'cancelled': 0,
        'delayed': 0
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