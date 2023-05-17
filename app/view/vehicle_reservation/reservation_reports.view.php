<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Vehicle Reservation | Reports</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- endinject -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <h3>
                      <i data-feather="flag" class="d-inline text-danger"></i>
                      Reports
                    </h3>
                    <small class="text-secondary">Manage your received vehicle reservation requests.</small>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="flex-shrink-0">
                      <button class="btn btn-primary btn-icon-text">
                        <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                        Download as CSV
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="flex-grow-1">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search report id, date and vehicle" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                    </div>
                  </div>
                  <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        Issued
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">In Progress
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                        Solved
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content mt-3" id="lineTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable">
                          <thead>
                            <tr>
                              <th data-orderable="false"></th>
                              <th>report id</th>
                              <th>vehicle</th>
                              <th>report date</th>
                              <th>last user</th>
                              <th>status</th>
                              <th>action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (!empty($reports)) :
                              foreach ($reports as $data) :
                                if ($data->report_status_name == "issued") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->report_id  ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="">
                                    </td>
                                    <td>
                                      <?= $data->report_id  ?>
                                    </td>
                                    <td>
                                      <div>
                                        <p><?= $data->make  ?></p>
                                        <small class="text-muted"><?= $data->plate  ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div>
                                        <p><?= date("d M Y", strtotime($data->report_date))  ?></p>
                                        <small class="text-muted"><?= date("h:i A", strtotime($data->report_date))  ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/40x40" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->requestor_name  ?></p>
                                          <small class="text-muted"><?= $data->requestor_name  ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="badge bg-danger">Issued</span>
                                    </td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text">
                                        <i data-feather="external-link" class="btn-icon-prepend"></i>
                                        View Details
                                      </button>
                                      <button class="btn btn-success btn-icon-text progressBtn">
                                        <i data-feather="plus" class="btn-icon-prepend"></i>
                                        Mark as In Progress
                                      </button>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable">
                          <thead>
                            <tr>
                              <th data-orderable="false"></th>
                              <th>report id</th>
                              <th>vehicle</th>
                              <th>report date</th>
                              <th>last user</th>
                              <th>status</th>
                              <th>action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (!empty($reports)) :
                              foreach ($reports as $data) :
                                if ($data->report_status_name == "in progress") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->report_id  ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="">
                                    </td>
                                    <td>
                                      <?= $data->report_id  ?>
                                    </td>
                                    <td>
                                      <div>
                                        <p><?= $data->make  ?></p>
                                        <small class="text-muted"><?= $data->plate  ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div>
                                        <p><?= date("d M Y", strtotime($data->report_date))  ?></p>
                                        <small class="text-muted"><?= date("h:i A", strtotime($data->report_date))  ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/40x40" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->requestor_name  ?></p>
                                          <small class="text-muted"><?= $data->requestor_name  ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="badge bg-secondary">In Progress</span>
                                    </td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text">
                                        <i data-feather="external-link" class="btn-icon-prepend"></i>
                                        View Details
                                      </button>
                                      <button class="btn btn-success btn-icon-text solveBtn">
                                        <i data-feather="plus" class="btn-icon-prepend"></i>
                                        Mark as solved
                                      </button>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable">
                          <thead>
                            <tr>
                              <th data-orderable="false"></th>
                              <th>report id</th>
                              <th>vehicle</th>
                              <th>report date</th>
                              <th>last user</th>
                              <th>status</th>
                              <th>action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (!empty($reports)) :
                              foreach ($reports as $data) :
                                if ($data->report_status_name == "solved") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->report_id  ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="">
                                    </td>
                                    <td>
                                      <?= $data->report_id  ?>
                                    </td>
                                    <td>
                                      <div>
                                        <p><?= $data->make  ?></p>
                                        <small class="text-muted"><?= $data->plate  ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div>
                                        <p><?= date("d M Y", strtotime($data->report_date))  ?></p>
                                        <small class="text-muted"><?= date("h:i A", strtotime($data->report_date))  ?></small>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/40x40" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->requestor_name  ?></p>
                                          <small class="text-muted"><?= $data->requestor_name  ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="badge bg-danger">Issued</span>
                                    </td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text">
                                        <i data-feather="external-link" class="btn-icon-prepend"></i>
                                        View Details
                                      </button>
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
  <script src="<?= ROOT ?>assets/custom/js/vehicle_reservation/manage-reports.js"></script>
</body>

</html>