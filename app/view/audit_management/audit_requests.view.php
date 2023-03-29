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

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">RECEIVED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="receivedTable" class="table display">
                    <thead>
                      <tr>
                        <th>reference number</th>
                        <th>product category</th>
                        <th>selection</th>
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
                          if ($data->status_name == "received") :
                      ?>
                            <tr class="align-middle">
                              <td><?= $data->reference_number ?></td>
                              <td><?= ucwords($data->category_name) ?></td>
                              <td>All</td>
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
                                <a class="btn btn-primary btn-icon-text" href="audit_requests/create/<?= $data->reference_number ?>">
                                  <i data-feather="plus" class="btn-icon-prepend"></i>
                                  Create Report
                                </a>
                                <button class="btn btn-outline-primary btn-icon-text">
                                  <i data-feather="external-link" class="btn-icon-prepend"></i>
                                  View Details
                                </button>
                                <button class="btn btn-outline-primary btn-icon" data-bs-toggle="modal" data-bs-target="#declineRequest">
                                  <i data-feather="trash-2"></i>
                                </button>
                                <div class="modal fade" id="declineRequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="alert alert-danger" role="alert">
                                          <i data-feather="alert-triangle"></i>
                                          Leave a remarks to the request.
                                        </div>
                                        <label for="" class="form-label">Decline remarks:</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Type something..."></textarea>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Continue</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
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
                <h6 class="card-title">DECLINED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="declinedTable" class="table display">
                    <thead>
                      <tr>
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
                          if ($data->status_name == "declined") :
                      ?>
                            <tr class="align-middle">
                              <td><?= $data->reference_number ?></td>
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
                                <a class="btn btn-primary btn-icon-text" href="audit_requests/create/<?= $data->reference_number ?>">
                                  <i data-feather="list" class="btn-icon-prepend"></i>
                                  View Remarks
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">COMPLETED</h6>
                <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                <div class="table-responsive">
                  <table id="completedTable" class="table display">
                    <thead>
                      <tr>
                        <th>reference number</th>
                        <th>product category</th>
                        <th>department</th>
                        <th>request date</th>
                        <th>status</th>
                        <th>Accuracy</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($requests)) :
                        foreach ($requests as $data) :
                          if ($data->status_name == "completed") :
                      ?>
                            <tr class="align-middle">
                              <td><?= $data->reference_number ?></td>
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
                                <p class="text-success">100%</p>
                              </td>
                              <td>
                                <a class="btn btn-primary btn-icon-text">
                                  <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                                  Download Report
                                </a>
                                <button class="btn btn-outline-primary btn-icon-text">
                                  <i data-feather="external-link" class="btn-icon-prepend"></i>
                                  View Report
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
  <script src="<?= ROOT ?>assets/custom/js/audit_management/fetch-requests.js"></script>
  <!-- End custom js for this page -->

</body>

</html>