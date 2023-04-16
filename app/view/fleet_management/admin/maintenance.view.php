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



  .perfect-scrollbar-example {
    position: relative;
    max-height: 250px;
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
                  <h3 class="mb-1">Maintenance (3)</h3>
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
                      <option selected disabled>Maintenance Type</option>
                      <option value="">Change Oil</option>
                      <option value="">Cleaning</option>
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
                      <input type="radio" class="btn-check" value="in progress" name="btnradio" id="btnradio3" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio3">In Progress</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="scheduled" name="btnradio" id="btnradio4" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio4">Scheduled</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="completed" name="btnradio" id="btnradio5" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio5">Completed</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="cancelled" name="btnradio" id="btnradio6" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio6">Cancelled</label>
                    </div>
                    <div class="d-inline">
                      <input type="radio" class="btn-check" value="delayed" name="btnradio" id="btnradio7" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btnradio7">Delayed</label>
                    </div>
                  </div>
                  <div class="col text-end">
                    <button class="btn btn-outline-primary btn-icon-text" disabled>
                      <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                      Export as CSV
                    </button>
                    <button class="btn btn-outline-primary btn-icon-text" disabled>
                      <i data-feather="trash-2" class="btn-icon-prepend"></i>
                      Cancel
                    </button>
                    <button class="btn btn-outline-primary btn-icon-text" disabled>
                      <i data-feather="edit-2" class="btn-icon-prepend"></i>
                      Modify
                    </button>
                    <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#add_new">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add New
                    </button>

                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="add_new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <form id="add_new_maintenance">
                          <div class="modal-body">
                            <div class="mb-3">
                          
                              <div class="input-group mb-3">
                                <div class="input-group-text">
                                  <i data-feather="search"></i>
                                </div>
                                <input type="text" id="search_input" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                                <button class="btn btn-primary" id="search_vehicle">
                                  Search
                                </button>
                              </div>
                              <div id="vehicle_list" class="perfect-scrollbar-example">
                                <?php
                                if (!empty($vehicles)) :
                                  foreach ($vehicles as $data) :
                                ?>
                                    <div class="d-flex justify-content-between mb-3" data-id="<?= $data->vehicle_id ?>" data-name="<?= $data->make ?>">
                                      <div class="d-flex gap-2">
                                        <img src="<?= ROOT . '/uploads/images/thumbnails/' . $data->thumbnail_path ?>" class="ht-75 wd-75" alt="">
                                        <div>
                                          <p class="fw-bold text-uppercase"><?= $data->make ?></p>
                                          <small><?= $data->plate ?> - <?= ucwords($data->vehicle_type) ?></small>
                                        </div>
                                      </div>
                                      <div class="form-check mb-2">
                                        <input type="radio" class="form-check-input" name="vehicle_id" value="<?= $data->vehicle_id ?>" id="radioDefault">
                                      </div>
                                    </div>
                                <?php
                                  endforeach;
                                endif;
                          
                                ?>
                              </div>
                            </div>
                            <div class="mb-3">
                              <select name="type_id" class="form-select" id="">
                                <option selected disabled>Select Maintenance Type</option>
                                <option value="1">Cleaning</option>
                                <option value="2">Change Oil</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <textarea name="remarks" class="form-control" id="" cols="30" rows="5" placeholder="Type something..."></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">
                                Mechanic Name
                              </label>
                              <input type="text" name="mechanic_name" id="" class="form-control" placeholder="Input name">
                            </div>
                            <div class="mb-3">
                              <div class="input-group flatpickr" id="flatpickr-date">
                                <span class="input-group-text input-group-addon" data-toggle="">
                                  <i data-feather="calendar"></i>
                                </span>
                                <input type="text" name="date_schedule" id="" class="form-control date-input">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Entry</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="table-responsive">
                  <table id="request_tbl" class="table display">
                    <thead>
                      <tr>
                        <th data-orderable="false"></th>
                        <th>maintenance id</th>
                        <th>vehicle</th>
                        <th>maintenance type</th>
                        <th>mechanic name</th>
                        <th>date schedule</th>
                        <th>remarks</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($maintenance)) :
                        foreach ($maintenance as $data) :

                      ?>
                          <tr class="align-middle" data-status="<?= $data->maintenance_status ?>">
                            <td>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkDefault">
                              </div>
                            </td>
                            <td><?= $data->maintenance_id ?></td>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <div>
                                  <p><?= $data->make ?></p>
                                  <small class="text-muted"><?= $data->plate ?></small>
                                </div>
                              </div>
                            </td>
                            <td><?= $data->maintenance_type ?></td>
                            <td><?= $data->mechanic_name ?></td>
                            <td>
                              <p><?= $data->date_schedule ?></p>
                            </td>
                            <td><?= $data->remarks ?></td>
                            <td>
                              <?php
                              switch ($data->maintenance_status) {
                                case 'pending':
                                  echo '<span class="badge bg-warning">Pending</span>';
                                  break;
                                case 'in progress':
                                  echo '<span class="badge bg-warning">In Progress</span>';
                                  break;
                                case 'scheduled':
                                  echo '<span class="badge bg-info">Scheduled</span>';
                                  break;
                                case 'delayed':
                                  echo '<span class="badge bg-secondary">Delayed</span>';
                                  break;
                                case 'completed':
                                  echo '<span class="badge bg-success">Completed</span>';
                                  break;
                                case 'cancelled':
                                  echo '<span class="badge bg-danger">Cancelled</span>';
                                  break;
                              }
                              ?>
                            </td>
                            <td>
                              <button class="btn btn-light btn-icon-text">
                                <i data-feather="external-link" class="btn-icon-prepend"></i>
                                Preview
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
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/manage-maintenance.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- End custom js for this page -->
  <script>
    $(document).ready(function() {
      $('#search_input').on('keyup', function() {
        var input = $('#search_input').val().toLowerCase();
        $('#vehicle_list > div').each(function() {
          var name = $(this).find('div:nth-child(1) > div:nth-child(2) > p').text().toLowerCase();
          if (name.includes(input)) {
            $(this).addClass("d-block");
          } else {
            $(this).removeClass("d-block");
            $(this).addClass("d-none");
          }
        });
      });

      $('input[name="selected_vehicle"]').on('change', function() {
        console.log(this.value)
      })

      $('#search_input').on('keyup', function() {
        if ($(this).val() === '') {
          $('#vehicle_list > div').removeClass("d-none");
          $('#vehicle_list > div').addClass("d-block");
        }
      });

    });
  </script>
  <!-- Flat Picker -->
  <script>
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      enableTime: true,
      dateFormat: "Y-m-d",
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