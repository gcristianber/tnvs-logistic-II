<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Manage Reservaitons</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- endinject -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>

</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">

        <div class="row">
          <div class="col-md-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="more-horizontal" class="icon-lg text-warning"></i>
                    <div>
                      <h5>PENDING</h5>
                      <small class="text-muted">Lorem ipsum dolor sit.</small>
                    </div>
                  </div>
                  <h3>9</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="plus" class="icon-lg text-success"></i>
                    <div>
                      <h5>APPROVED</h5>
                      <small class="text-muted">Lorem ipsum dolor sit.</small>
                    </div>
                  </div>
                  <h3>102</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="trash-2" class="icon-lg text-danger"></i>
                    <div>
                      <h5>DECLINED</h5>
                      <small class="text-muted">Lorem ipsum dolor sit.</small>
                    </div>
                  </div>
                  <h3>76</h3>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">PENDING</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table display">
                    <thead>
                      <tr>
                        <th>request number</th>
                        <th>vehicle</th>
                        <th>pickup date</th>
                        <th>drop-off date</th>
                        <th>requestor</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (!empty($userReservations)) :
                        foreach ($userReservations as $data) :

                      ?>
                          <tr class="align-middle">
                            <td><?= $data->reservation_id ?></td>
                            <td>
                              <div>
                                <p class="fw-bold text-uppercase"><?= $data->make ?></p>
                                <small class="text-muted"><?= $data->plate ?> - <?= ucwords($data->vehicle_type) ?></small>
                              </div>
                            </td>
                            <td>
                              <p><?= date("d M Y", strtotime($data->pickup_date)) ?></p>
                              <small class="text-muted"><?= date("h:i A", strtotime($data->pickup_date)) ?></small>
                            </td>
                            <td>
                              <p><?= date("d M Y", strtotime($data->return_date)) ?></p>
                              <small class="text-muted"><?= date("h:i A", strtotime($data->return_date)) ?></small>
                            </td>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <img src="https://via.placeholder.com/40x40" alt="">
                                <div>
                                  <p><?= $data->requestor_name ?></p>
                                  <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
                                </div>
                              </div>
                            </td>
                            <td>
                              <?php
                              switch ($data->reservation_status) {
                                case 'pending':
                                  echo '<span class="badge bg-warning">Pending</span>';
                                  break;
                                case 'approved':
                                  echo '<span class="badge bg-success">Approved</span>';
                                  break;
                                case 'declined':
                                  echo '<span class="badge bg-danger">Declined</span>';
                                  break;
                              }
                              ?>
                            </td>
                            <td>
                              <button class="btn btn-primary btn-icon-text">
                                <i data-feather="plus" class="btn-icon-prepend"></i>
                                Approve Request
                              </button>
                              <button class="btn btn-outline-primary btn-icon">
                                <i data-feather="external-link"></i>
                              </button>
                              <button class="btn btn-outline-primary btn-icon">
                                <i data-feather="trash-2"></i>
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">APPROVED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table display">
                    <thead>
                      <tr>
                        <th>request number</th>
                        <th>vehicle</th>
                        <th>pickup date</th>
                        <th>drop-off date</th>
                        <th>requestor</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (!empty($userReservations)) :
                        foreach ($userReservations as $data) :
                          if ($data->reservation_status == "approved") :

                      ?>
                            <tr class="align-middle">
                              <td><?= $data->reservation_id ?></td>
                              <td>
                                <div>
                                  <p class="fw-bold text-uppercase"><?= $data->make ?></p>
                                  <small class="text-muted"><?= $data->plate ?> - <?= ucwords($data->vehicle_type) ?></small>
                                </div>
                              </td>
                              <td>
                                <p><?= date("d M Y", strtotime($data->pickup_date)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->pickup_date)) ?></small>
                              </td>
                              <td>
                                <p><?= date("d M Y", strtotime($data->return_date)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->return_date)) ?></small>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <img src="https://via.placeholder.com/40x40" alt="">
                                  <div>
                                    <p><?= $data->requestor_name ?></p>
                                    <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <?php
                                switch ($data->reservation_status) {
                                  case 'pending':
                                    echo '<span class="badge bg-warning">Pending</span>';
                                    break;
                                  case 'approved':
                                    echo '<span class="badge bg-success">Approved</span>';
                                    break;
                                  case 'declined':
                                    echo '<span class="badge bg-danger">Declined</span>';
                                    break;
                                }
                                ?>
                              </td>
                              <td>
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="plus" class="btn-icon-prepend"></i>
                                  Approve Request
                                </button>
                                <button class="btn btn-outline-primary btn-icon">
                                  <i data-feather="external-link"></i>
                                </button>
                                <button class="btn btn-outline-primary btn-icon">
                                  <i data-feather="trash-2"></i>
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">DISPATCHED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table display">
                    <thead>
                      <tr>
                        <th>request number</th>
                        <th>vehicle</th>
                        <th>pickup date</th>
                        <th>drop-off date</th>
                        <th>requestor</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (!empty($userReservations)) :
                        foreach ($userReservations as $data) :
                          if ($data->reservation_status == "declined") :

                      ?>
                            <tr class="align-middle">
                              <td><?= $data->reservation_id ?></td>
                              <td>
                                <div>
                                  <p class="fw-bold text-uppercase"><?= $data->make ?></p>
                                  <small class="text-muted"><?= $data->plate ?> - <?= ucwords($data->vehicle_type) ?></small>
                                </div>
                              </td>
                              <td>
                                <p><?= date("d M Y", strtotime($data->pickup_date)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->pickup_date)) ?></small>
                              </td>
                              <td>
                                <p><?= date("d M Y", strtotime($data->return_date)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->return_date)) ?></small>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <img src="https://via.placeholder.com/40x40" alt="">
                                  <div>
                                    <p><?= $data->requestor_name ?></p>
                                    <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <?php
                                switch ($data->reservation_status) {
                                  case 'pending':
                                    echo '<span class="badge bg-warning">Pending</span>';
                                    break;
                                  case 'approved':
                                    echo '<span class="badge bg-success">Approved</span>';
                                    break;
                                  case 'declined':
                                    echo '<span class="badge bg-danger">Declined</span>';
                                    break;
                                }
                                ?>
                              </td>
                              <td>
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="plus" class="btn-icon-prepend"></i>
                                  Approve Request
                                </button>
                                <button class="btn btn-outline-primary btn-icon">
                                  <i data-feather="external-link"></i>
                                </button>
                                <button class="btn btn-outline-primary btn-icon">
                                  <i data-feather="trash-2"></i>
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">RETURNED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table display">
                    <thead>
                      <tr>
                        <th>request number</th>
                        <th>vehicle</th>
                        <th>pickup date</th>
                        <th>drop-off date</th>
                        <th>requestor</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>VR2303210EDCF</td>
                        <td>
                          <div>
                            <p class="fw-bold text-uppercase">Honda Civic Blue</p>
                            <small class="text-muted">TFT-001 - Sedan</small>
                          </div>
                        </td>
                        <td>
                          <p>23 Jan 2023</p>
                          <small class="text-muted">05:15 AM</small>
                        </td>
                        <td>
                          <p>23 Jan 2023</p>
                          <small class="text-muted">05:15 AM</small>
                        </td>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <img src="https://via.placeholder.com/40x40" alt="">
                            <div>
                              <p>Cristianber Gordora</p>
                              <small class="text-muted">Super Admin</small>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-success">Returned</span>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-text">
                            <i data-feather="list" class="btn-icon-prepend"></i>
                            View Remarks
                          </button>
                          <button class="btn btn-outline-primary btn-icon-text">
                            <i data-feather="settings" class="btn-icon-prepend"></i>
                            Maintenance
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">DECLINED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table display">
                    <thead>
                      <tr>
                        <th>request number</th>
                        <th>vehicle</th>
                        <th>pickup date</th>
                        <th>drop-off date</th>
                        <th>requestor</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>VR2303210EDCF</td>
                        <td>
                          <div>
                            <p class="fw-bold text-uppercase">Honda Civic Blue</p>
                            <small class="text-muted">TFT-001 - Sedan</small>
                          </div>
                        </td>
                        <td>
                          <p>23 Jan 2023</p>
                          <small class="text-muted">05:15 AM</small>
                        </td>
                        <td>
                          <p>23 Jan 2023</p>
                          <small class="text-muted">05:15 AM</small>
                        </td>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <img src="https://via.placeholder.com/40x40" alt="">
                            <div>
                              <p>Cristianber Gordora</p>
                              <small class="text-muted">Super Admin</small>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-danger">Declined</span>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-text">
                            <i data-feather="list" class="btn-icon-prepend"></i>
                            View Remarks
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
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <!-- End custom js for this page -->

</body>

</html>