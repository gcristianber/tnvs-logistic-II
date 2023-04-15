<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Audit Requests</title>

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

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>

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
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="mb-4">
                  <h3 class="mb-1">Requests (3)</h3>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate temporibus, fugiat fuga magni nisi.</p>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <select name="" id="" class="form-select">
                      <option selected disabled>Category</option>
                      <option value="">Office Supplies</option>
                    </select>
                  </div>
                  <div class="col">
                    <select name="" id="" class="form-select">
                      <option selected disabled>Department</option>
                      <option value="">Administrative</option>
                    </select>
                  </div>
                  <div class="col">
                    <div class="btn-group w-100" role="group" aria-label="Basic example">
                      <input type="text" tabindex="1" autofocus name="" id="search" class="form-control" placeholder="Search request">
                      <button type="button" class="btn btn-outline-primary" id="customSearchBtn">Search</button>
                    </div>

                  </div>
                </div>

                <div class="d-flex align-items-center gap-2 mb-3">
                  <div>
                    <input type="radio" class="btn-check" value="all" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">All</label>
                  </div>
                  <div>
                    <input type="radio" class="btn-check" value="pending" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Pending (1)</label>
                  </div>
                  <div>
                    <input type="radio" class="btn-check" value="received" name="btnradio" id="btnradio3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio3">Received (1)</label>
                  </div>
                  <div>
                    <input type="radio" class="btn-check" value="completed" name="btnradio" id="btnradio4" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio4">Completed (1)</label>
                  </div>
                  <div>
                    <input type="radio" class="btn-check" value="declined" name="btnradio" id="btnradio5" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio5">Declined</label>
                  </div>
                </div>

                <div class="table-responsive">
                  <table id="request_tbl" class="table display">
                    <thead>
                      <tr>
                        <th data-orderable="false"></th>
                        <th>reference number</th>
                        <th>product category</th>
                        <th>department</th>
                        <th>request date</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($requests)) :
                        foreach ($requests as $data) :
                      ?>
                          <tr class="align-middle" data-status="<?= $data->status_name ?>" data-id="<?= $data->reference_number ?>">
                            <td>
                              <input type="checkbox" name="" class="form-check-input" id="">
                            </td>
                            <td>
                              <?= $data->reference_number ?>
                            </td>
                            <td><?= ucwords($data->category_name) ?></td>
                            <td>
                              <p><?= ucwords($data->department_name) ?></p>
                              <small class="text-muted">super.admin@lulan.com</small>
                            </td>
                            <td>
                              <p><?= date("d M Y", strtotime($data->request_date)) ?></p>
                              <small class="text-muted"><?= date("h:i A", strtotime($data->request_date)) ?></small>
                            </td>
                            <td>
                              <?php
                              switch ($data->status_name) {
                                case 'pending':
                                  echo '<span class="badge bg-warning">Pending</span>';
                                  break;
                                case 'received':
                                  echo '<span class="badge bg-primary">Received</span>';
                                  break;
                                case 'completed':
                                  echo '<span class="badge bg-success">Completed</span>';
                                  break;
                                case 'declined':
                                  echo '<span class="badge bg-danger">Declined</span>';
                                  break;
                              }
                              ?>
                            </td>
                            <td>
                              <?php
                              switch ($data->status_name) {
                                case 'pending':
                                  echo '
                                  <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="search" class="btn-icon-prepend"></i>
                                    Review Request
                                  </button>
                                  <button class="btn btn-outline-primary btn-icon receive-request">
                                    <i data-feather="plus"></i>
                                  </button>
                                  <button class="btn btn-outline-primary btn-icon" data-bs-toggle="modal" data-bs-target="#DECLINE-' . $data->reference_number . '">
                                    <i data-feather="trash-2"></i>
                                  </button>';
                                  break;
                                case 'received':
                                  echo '
                                  <a class="btn btn-primary btn-icon-text" href="audit_requests/create?reference_number=' . $data->reference_number . '">
                                    <i data-feather="plus" class="btn-icon-prepend"></i>
                                    Create Report
                                  </a>
                                  <button class="btn btn-light btn-icon-text">
                                    <i data-feather="external-link" class="btn-icon-prepend"></i>
                                    Preview
                                  </button>
                                  ';
                                  break;
                                case 'completed':
                                  echo '
                                  <a class="btn btn-primary btn-icon-text" href="'. ROOT .'audit_management/audit_requests/view_report?reference_number=' . $data->reference_number . '">
                                    <i data-feather="external-link" class="btn-icon-prepend"></i>
                                    View Report
                                  </a>
                                  <button class="btn btn-light btn-icon-text">
                                    <i data-feather="external-link" class="btn-icon-prepend"></i>
                                    Preview
                                  </button>
                                  <button class="btn btn-danger btn-icon">
                                    <i data-feather="trash-2"></i>
                                  </button>'
                                  ;
                                  break;
                                case 'declined':
                                  echo '
                                  <a class="btn btn-danger btn-icon-text" href="audit_requests/create/' . $data->reference_number . '">
                                      <i data-feather="external-link" class="btn-icon-prepend"></i>
                                      View Remarks
                                  </a>';
                                  break;
                              }
                              ?>

                            </td>
                          </tr>
                          <div class="modal fade" id="DECLINE-<?= $data->reference_number ?>" data-id="<?= $data->reference_number ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">
                                    <div class="d-flex align-items-center gap-2">
                                      <i data-feather="alert-triangle" class="icon-lg text-danger"></i>
                                      Declining the request
                                    </div>
                                  </h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="mb-3">
                                    <p>You are declining <strong><?= $data->reference_number ?></strong></p>
                                  </div>
                                  <select value="" class="form-select mb-3">
                                    <option selected disabled>Select reason</option>
                                    <option value="">Lack of Provided Information</option>
                                    <option value="">Uncleared Instructions</option>
                                    <option value="">No Content</option>
                                    <option value="">Others</option>
                                  </select>
                                  <label for="" class="form-label">Specified why you decline:</label>
                                  <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Type something..."></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                  <button type="button" class="btn btn-danger decline-request">Decline Request</button>
                                </div>
                              </div>
                            </div>
                          </div>
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

  <!-- End custom js for this page -->
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
        'received': 0,
        'completed': 0,
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