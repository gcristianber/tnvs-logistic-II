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
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
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
                  <a href="<?= ROOT ?>audit_management/cycle_count" class="link-primary">
                    <i data-feather="arrow-left" class="icon-md"></i>
                    Back to Cycle Count
                  </a>
                </div>
                <div class="row mb-3">
                  <div class="col-md-4 grid-margin">
                    <div class="text-center">
                      <small>Product ID</small>
                      <p class="fs-4"><?= $product->product_id ?></p>
                    </div>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <div class="text-center">
                      <small>Product Name</small>
                      <p class="fs-4"><?= $product->product_name ?></p>
                    </div>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <div class="text-center">
                      <small>Manufacturer</small>
                      <p class="fs-4"><?= $product->supplier_id ?></p>
                    </div>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <div class="text-center">
                      <small>Purchase Date</small>
                      <p class="fs-4"><?= date("d M Y", strtotime($product->purchase_date)) ?></p>
                    </div>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <div class="text-center">
                      <small>Inbound Date</small>
                      <p class="fs-4"><?= date("d M Y", strtotime($product->inbound_date)) ?></p>
                    </div>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <div class="text-center">
                      <small>Frequency Count</small>
                      <p class="fs-4"><?= ucwords($product->frequency_count) ?></p>
                    </div>
                  </div>
                </div>

                <form id="cycleForm">
                  <div class="row mb-3">
                    <div class="col-6 grid-margin">
                      <label for="" class="form-label">Actual Count</label>
                      <input type="number" name="actual_count" id="" class="form-control">
                    </div>
                    <div class="col-6 grid-margin">
                      <label for="" class="form-label">Current Quantity</label>
                      <div class="border py-2 px-3 rounded-2 bg-gray-100" id="currentQty">
                        <?= $product->quantity ?>
                      </div>
                    </div>
                    <div class="col-6 grid-margin">
                      <label for="" class="form-label">Variance</label>
                      <div class="border py-2 px-3 rounded-2 bg-gray-100" id="variance">
                        --
                      </div>
                    </div>
                    <div class="col-6 grid-margin">
                      <label for="" class="form-label">Accuracy</label>
                      <div class="border py-2 px-3 rounded-2 bg-gray-100" id="accuracy">
                        --%
                      </div>
                    </div>
                    <div class="col-12 grid-margin">
                      <label for="" class="form-label">Remarks</label>
                      <textarea name="remarks" class="form-control" id="" cols="30" rows="5" placeholder="Type something..."></textarea>
                    </div>
                    <div class="col">
                      <div class="float-end">
                        <button class="btn btn-light">
                          Clear Field
                        </button>
                        <button type="submit" class="btn btn-primary btn-icon-text">
                          <i data-feather="plus" class="btn-icon-prepend"></i>
                          Add Entry
                        </button>
                      </div>
                    </div>
                </form>

              </div>
              <div class="table-responsive">
                <table id="request_tbl" class="table display">
                  <thead>
                    <tr>
                      <th data-orderable="false"></th>
                      <th>actual count</th>
                      <th>variance</th>
                      <th>accuracy</th>
                      <th>last count</th>
                      <th>next count</th>
                      <th>remarks</th>
                      <th>status</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (!empty($cycle_count)) :
                      foreach ($cycle_count as $data) :
                    ?>
                        <tr class="align-middle">
                          <td>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="checkDefault">
                            </div>
                          </td>
                          <td><?= $data->actual_count ?></td>
                          <td><?= $data->variance ?></td>
                          <td><?= $data->accuracy ?></td>
                          <td>
                            <p><?= date("d M Y", strtotime($data->last_count_date)) ?></p>
                            <small class="text-muted"><?= date("h:i A", strtotime($data->last_count_date)) ?></small>
                          </td>
                          <td>
                            <p><?= date("d M Y", strtotime($data->next_count_date)) ?></p>
                            <small class="text-muted"><?= date("h:i A", strtotime($data->next_count_date)) ?></small>
                          </td>
                          <td>
                            <?= $data->remarks ?>
                          </td>
                          <td>
                            <?php
                            switch ($data->status_name) {
                              case 'completed':
                                echo '<span class="badge bg-success">Completed</span>';
                                break;
                              case 'missed':
                                echo '<span class="badge bg-danger">Missed</span>';
                                break;
                              case 'delayed':
                                echo '<span class="badge bg-secondary">Delayed</span>';
                                break;
                            }
                            ?>
                          </td>
                          <td>
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="edit" class="btn-icon-prepend"></i>
                              Edit Details
                            </button>
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
  <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-cycle-count.js"></script>
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
        paging: false
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