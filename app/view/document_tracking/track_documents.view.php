<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Document Tracking | Track Documents</title>

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
                  <h3 class="mb-1">Track Document</h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate temporibus, fugiat fuga magni nisi.</p>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <div class="btn-group w-100" role="group" aria-label="Basic example">
                      <input type="text" tabindex="1" autofocus name="" id="search" class="form-control" placeholder="Search tracking id">
                      <button type="button" class="btn btn-outline-primary" id="customSearchBtn">Search</button>
                    </div>
                  </div>
                </div>

                <div class="table-responsive">
                  <table id="request_tbl" class="table display">
                    <thead>
                      <tr>
                        <th data-orderable="false"></th>
                        <th>tracking id</th>
                        <th>to</th>
                        <th>from</th>
                        <th>date/time</th>
                        <th>status</th>
                        <th>created by</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($documents)) :
                        foreach ($documents as $data) :
                          if($data->status_name != 'incoming'):
                      ?>
                          <tr class="align-middle" data-status="scheduled">
                            <td>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkDefault">
                              </div>
                            </td>
                            <td><?= $data->tracking_id ?></td>
                            <td><?= ucwords($data->sender_dept) ?></td>
                            <td><?= ucwords($data->receiver_dept) ?></td>
                            <td>
                              <p><?= date("d M Y", strtotime($data->sent_date)) ?></p>
                              <small class="text-muted"><?= date("h:i A", strtotime($data->sent_date)) ?></small>
                            </td>
                            <td>
                              <?php
                              switch ($data->status_name) {
                                case 'outgoing':
                                  echo '<span class="badge bg-danger">Outgoing</span>';
                                  break;
                                case 'pending':
                                  echo '<span class="badge bg-warning">Pending</span>';
                                  break;
                                case 'received':
                                  echo '<span class="badge bg-success">Received</span>';
                                  break;
                                case 'reviewed':
                                  echo '<span class="badge bg-success">Reviewed</span>';
                                  break;
                                case 'declined':
                                  echo '<span class="badge bg-success">Declined</span>';
                                  break;
                              }
                              ?>
                            </td>
                            <td>
                              <p><?= $data->author_name ?></p>
                              <small class="text-muted"><?= $data->author_username ?></small>
                            </td>
                            <td>
                              <a class="btn btn-light btn-icon-text" href="<?= ROOT ?>document_tracking/track_documents/track/<?= $data->tracking_id ?>">
                                <i data-feather="external-link" class="btn-icon-prepend"></i>
                                Preview
                              </a>
                            </td>
                          </tr>
                      <?php
                          endif;
                        endforeach;
                      endif;
                      ?>
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