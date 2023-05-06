<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Delivery Requests</title>

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
                  <div class="col-3 d-none d-md-block border-end">
                    <div class="mb-3 border-bottom pb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <p class="fs-4">Filters</p>
                        <div>
                          <button class="btn btn-outline-primary">
                            Clear
                          </button>
                          <button class="btn btn-primary">
                            Apply filter
                          </button>
                        </div>
                      </div>
                    </div>

                    <div class="mb-3">
                      <div class="mb-2">
                        <p class="fs-5">Delivery Types</p>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Delivery</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Pickup</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="mb-2">
                        <p class="fs-5">Category</p>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Foods & Beverage</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Office Supplies</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="mb-2">
                        <p class="fs-5">Status Types</p>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Pending</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Preparing</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">In Transit</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Delivered</label>
                        </div>
                      </div>
                      <div class="mb-2">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="checkDefault">
                          <label for="checkDefault" class="form-label">Delivery Failed</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-9">


                    <table class="table table-bordered mb-3">
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <i data-feather="clock" class="text-warning"></i>
                            <div class="mb-2">
                              <small>Pending</small>
                            </div>
                            <h3>29</h3>
                          </td>
                          <td class="text-center">
                            <i data-feather="package" class="text-secondary"></i>
                            <div class="mb-2">
                              <small>Preparing</small>
                            </div>
                            <h3>29</h3>
                          </td>
                          <td class="text-center">
                            <i data-feather="truck" class="text-primary"></i>
                            <div class="mb-2">
                              <small>In Transit</small>
                            </div>
                            <h3>29</h3>
                          </td>
                          <td class="text-center">
                            <i data-feather="check-circle" class="text-success"></i>
                            <div class="mb-2">
                              <small>Delivered</small>
                            </div>
                            <h3>10</h3>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon2">
                          <i data-feather="search"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Search delivery" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                      <div class="d-flex align-items-center flex-shrink-0 gap-2">
                        <button class="btn btn-primary btn-icon-text">
                          <i data-feather="plus" class="btn-icon-prepend"></i>
                          Create Delivery
                        </button>
                        <button class="btn btn-outline-primary btn-icon-text">
                          <i data-feather="upload" class="btn-icon-prepend"></i>
                          Import Data
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>tracking id</th>
                            <th>driver name</th>
                            <th>category</th>
                            <th>delivery type</th>
                            <th>requestor name</th>
                            <th>date requested</th>
                            <th>delivery date</th>
                            <th>status</th>
                            <th class="text-center" data-orderable="false">action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($deliveries)) :
                            foreach ($deliveries as $data) :
                          ?>
                              <tr class="align-middle">
                                <td>
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkDefault">
                                  </div>
                                </td>
                                <td><?= $data->tracking_id ?></td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                    <div>
                                      <p><?= $data->driver_name ?></p>
                                      <small class="text-muted"><?= $data->email_address ?></small>
                                    </div>
                                  </div>
                                </td>
                                <td><?= ucwords($data->category_name) ?></td>
                                <td><?= ucwords($data->delivery_type_name) ?></td>
                                <td>
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                    <div>
                                      <p><?= $data->requestor_name ?></p>
                                      <small class="text-muted"><?= ucwords($data->requestor_dept_name) ?></small>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p><?= date("d M Y", strtotime($data->date_requested)) ?></p>
                                  <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                </td>
                                <td>
                                  <p><?= date("d M Y", strtotime($data->est_delivery_date)) ?></p>
                                  <small class="text-muted"><?= date("h:i A", strtotime($data->est_delivery_date)) ?></small>
                                </td>
                                <td>
                                  <?php
                                  switch ($data->delivery_status_name) {
                                    case 'pending':
                                      echo '<span class="badge bg-warning">Pending</span>';
                                      break;
                                    case 'preparing':
                                      echo '<span class="badge bg-secondary">Preparing</span>';
                                      break;
                                    case 'in transit':
                                      echo '<span class="badge bg-primary">In Transit</span>';
                                      break;
                                    case 'delivered':
                                      echo '<span class="badge bg-success">Delivered</span>';
                                      break;
                                  }
                                  ?>

                                </td>
                                <td>
                                  <a class="btn btn-light btn-icon-text" href="<?= ROOT ?>fleet_management_admin/delivery_requests/navigate?tracking_id=123">
                                    <i data-feather="external-link" class="btn-icon-prepend"></i>
                                    Preview
                                  </a>
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
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-delivery.js"></script>
  <!-- End custom js for this page -->
</body>

</html>