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
                <div class="d-flex gap-2 mb-3">
                  <img src="https://via.placeholder.com/100x100" class="rounded-2" alt="">
                  <div>
                    <p class="fs-3"><?= ucwords($product->product_name) ?></p>
                    <p class="text-muted">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime suscipit quis deserunt dolores recusandae facere saepe unde reiciendis voluptate! Aperiam.
                    </p>
                  </div>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cycle Count</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Settings</a>
                  </li>
                </ul>
                <div class="tab-content border border-top-0 p-3" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="row">
                      <div class="col col-lg-6">
                        <div class="row">
                          <div class="col-6 grid-margin">Product ID:</div>
                          <div class="col-6 grid-margin"><?= ucwords($product->product_id) ?></div>
                          <div class="col-6 grid-margin">Category:</div>
                          <div class="col-6 grid-margin"><?= ucwords($product->category_name) ?></div>
                          <div class="col-6 grid-margin">Supplier Name</div>
                          <div class="col-6 grid-margin"><?= $product->supplier_name ?></div>
                          <div class="col-6 grid-margin">Location:</div>
                          <div class="col-6 grid-margin"><?= ucwords($product->location_name) ?></div>
                          <div class="col-6 grid-margin">Frequency Count:</div>
                          <div class="col-6 grid-margin"><?= ucwords($product->frequency_count) ?></div>
                        </div>
                      </div>
                    </div>



                    <p class="mb-3">Attachment/s:</p>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <div>
                          <div class="d-flex align-items-center justify-content-between">
                            <div>
                              <p>PID-001-Invoice-Slip-2023.pdf</p>
                              <small class="text-muted">200 KB</small>
                            </div>
                            <a href="" class="link-primary">
                              Download
                            </a>
                          </div>
                        </div>
                      </li>
                    </ul>


                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex gap-2 align-items-center mb-3">
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon2">@</div>
                        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                      <div class="flex-shrink-0">
                        <button class="btn btn-primary btn-icon">
                          <i data-feather="plus"></i>
                        </button>
                        <button class="btn btn-light btn-icon-text">
                          <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                          Download
                        </button>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="d-flex align-items-center gap-2">
                        <div>
                          <input type="number" name="" id="" class="form-control" placeholder="0">
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-grow-1">
                          <input type="text" name="" id="" class="form-control" placeholder="Summary (required)">
                          <a class="link-danger" href="">
                            <i data-feather="info" class="icon-md"></i>
                          </a>
                        </div>
                      </div>
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
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="mb-3">
                      <label for="" class="form-label">Product Name:</label>
                      <input type="text" name="" id="" class="form-control" value="Hard Copy Bond Paper">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Description:</label>
                      <textarea name="" class="form-control" id="" cols="30" rows="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime suscipit quis deserunt dolores recusandae facere saepe unde reiciendis voluptate! Aperiam.</textarea>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Location:</label>
                      <select name="" class="form-select" id="">
                        <option value="1">Section A</option>
                        <option value="1">Section B</option>
                        <option value="1">Section C</option>
                        <option value="1">Section D</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <div class="form-check form-switch mb-2">
                        <input type="checkbox" class="form-check-input" id="formSwitch1">
                        <label class="form-check-label" for="formSwitch1">Notify me for the next count</label>
                      </div>
                    </div>
                    <div class="mb-3">

                      <ul class="list-group mb-3">
                        <li class="list-group-item">
                          <div>
                            <div class="d-flex align-items-center justify-content-between">
                              <div>
                                <p>PID-001-Invoice-Slip-2023.pdf</p>
                                <small class="text-muted">200 KB</small>
                              </div>
                              <button class="btn btn-danger btn-icon">
                                <i data-feather="trash-2" class="icon-lg"></i>
                              </button>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <button class="btn btn-outline-primary btn-icon-text w-100">
                        <i data-feather="plus" class="btn-icon-prepend"></i>
                        Add attachment
                      </button>
                    </div>
                    <div class="text-end">
                      <button class="btn btn-primary">
                        Save changes
                      </button>
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