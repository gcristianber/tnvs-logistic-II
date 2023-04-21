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
                          <td>Tracking Number:</td>
                          <td><?= $document->tracking_id ?></td>
                          <td>Date:</td>
                          <td><?= date("d/m/Y - h:i A", strtotime($document->sent_date)) ?></td>
                        </tr>
                        <tr>
                          <td>Subject:</td>
                          <td><?= $document->subject ?></td>
                          <td>Last Activity:</td>
                          <td>
                            <?php
                            $date = new DateTime($document->sent_date);
                            $now = new DateTime();

                            $interval = $now->diff($date);

                            if ($interval->days > 0) {
                              echo $interval->format('%d day(s) ago');
                            } else if ($interval->h > 0) {
                              echo $interval->format('%h hour(s) ago');
                            } else if ($interval->i > 0) {
                              echo $interval->format('%i minute(s) ago');
                            } else {
                              echo 'Just now';
                            }
                            ?>

                          </td>
                        </tr>
                        <tr>
                          <td>Published by:</td>
                          <td><?= ucwords($document->sender_dept) ?></td>
                        </tr>
                        <tr>
                          <td>Issued to:</td>
                          <td><?= ucwords($document->receiver_dept) ?></td>
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
                          <td class="text-wrap"><?= $document->remarks ?></td>
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
                        <th>ip address</th>
                        <th>user agent</th>
                        <th>status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($tracks)) :
                        $row = 1;
                        foreach ($tracks as $data) :
                      ?>
                          <tr class="align-middle">
                            <td>
                              <?= $row++ ?>
                            </td>
                            <td>
                              <p><?= date("d/m/Y", strtotime($data->action_date)) ?></p>
                              <small class="text-muted"><?= date("h:i A", strtotime($data->action_date)) ?></small>
                            </td>
                            <td>
                              <p><?= $data->display_name ?></p>
                              <small class="text-muted"><?= $data->role_name ?></small>
                            </td>
                            <td><?= $data->remarks ?></td>
                            <td><?= $data->ip_address ?></td>
                            <td><?= $data->user_agent ?></td>
                            <td>
                              <?php
                              switch ($data->status_name) {
                                case 'sent':
                                  echo '<span class="badge bg-warning">Sent</span>';
                                  break;
                                case 'received':
                                  echo '<span class="badge bg-primary">Received</span>';
                                  break;
                                case 'approved':
                                  echo '<span class="badge bg-success">Approved</span>';
                                  break;
                                case 'archived':
                                  echo '<span class="badge bg-danger">Archived</span>';
                                  break;
                              }
                              ?>
                            </td>
                          </tr>
                      <?php
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