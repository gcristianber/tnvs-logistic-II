<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Vehicle Reservation | Manage Reservations</title>

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
              <div class="row">
                <div class="col-3 d-none d-md-block border-end">
                  <div class="mb-3 border-bottom pb-3">
                    <div class="d-md-flex align-items-center justify-content-between">
                      <p class="fs-4">Filters</p>
                      <div class="">
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
                      <p class="fs-5">Category</p>
                    </div>
                    <div class="mb-2">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault" checked>
                        <label for="checkDefault" class="form-label">All</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                        <label for="checkDefault" class="form-label">Sedan</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                        <label for="checkDefault" class="form-label">Van</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                        <label for="checkDefault" class="form-label">Truck</label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="mb-2">
                      <p class="fs-5">Status Types</p>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault" checked>
                      <label for="checkDefault" class="form-label">All</label>
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
                        <label for="checkDefault" class="form-label">Approved</label>
                      </div>
                    </div>
                    <div class="mb-2">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                        <label for="checkDefault" class="form-label">Dispatched</label>
                      </div>
                    </div>
                    <div class="mb-2">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                        <label for="checkDefault" class="form-label">Returned</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="flex-grow-1">
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon2">@</div>
                        <input type="text" class="form-control" placeholder="Search Id, Name, Date or Requestor" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                    </div>
                    <div class="flex-shrink-0">
                      <button class="btn btn-primary btn-icon-text">
                        <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                        Download as CSV
                      </button>
                      <button class="btn btn-danger btn-icon-text" disabled>
                        <i data-feather="trash-2" class="btn-icon-prepend"></i>
                        Cancel selected
                      </button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered dataTable">
                      <thead>
                        <tr>
                          <th data-orderable="false"></th>
                          <th>vehicle</th>
                          <th class="text-center">vehicle type</th>
                          <th>request date</th>
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
                            <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                              <td>
                                <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                  <div>
                                    <p><?= $data->make ?></p>
                                    <small class="text-muted"><?= $data->plate ?></small>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center">
                                <span class="badge rounded-pill border border-primary text-primary">Sedan</span>
                              </td>
                              <td>
                                <p><?= date("d/m/Y", strtotime($data->date_requested)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                  <div>
                                    <p>Cristianber Gordora</p>
                                    <small class="text-muted">gcristianber@gmail.com</small>
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
                                    echo '<span class="badge bg-primary">Approved</span>';
                                    break;
                                  case 'declined':
                                    echo '<span class="badge bg-danger">Declined</span>';
                                    break;
                                  case 'returned':
                                    echo '<span class="badge bg-success">Success</span>';
                                    break;

                                  default:
                                    # code...
                                    break;
                                }
                                ?>
                              </td>
                              <td>
                                <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#<?= $data->reservation_id ?>">
                                  <i data-feather="edit" class="btn-icon-prepend"></i>
                                  Edit Details
                                </button>
                                <button class="btn btn-danger btn-icon-text declineBtn">
                                  <i data-feather="trash-2" class="btn-icon-prepend"></i>
                                  Cancel
                                </button>
                              </td>
                              <div class="modal fade" id="<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">
                                        <i data-feather="mail" class="icon-md d-inline"></i>
                                        Vehicle Request
                                      </h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col">
                                          <div class="mb-3">
                                            <label for="" class="form-label">Full Name:</label>
                                            <p><?= $data->full_name ?></p>
                                          </div>
                                          <div class="mb-3">
                                            <label for="" class="form-label">Email Address:</label>
                                            <p><?= $data->email_address ?></p>
                                          </div>
                                          <div class="mb-3">
                                            <label for="" class="form-label">Pickup & Drop-off Date:</label>
                                            <p><?= date("d/m/Y", strtotime($data->pickup_date)) ?> - <?= date("d/m/Y", strtotime($data->return_date)) ?></p>
                                          </div>

                                          <div class="mb-3">
                                            <label for="" class="form-label">Message:</label>
                                            <div class="bg-gray-100 p-3 rounded-2">
                                              <small><?= $data->reason ?></small>
                                            </div>
                                          </div>
                                          <div class="mb-3">
                                            <label for="" class="form-label">Attachment/s:</label>
                                            <ul class="list-group">
                                              <li class="list-group-item">
                                                <div class="d-flex align-items-center justify-content-between">
                                                  <div>
                                                    <p>Sample PDF.pdf</p>
                                                    <small class="text-muted">1 MB</small>
                                                  </div>
                                                  <a href="" class="link-primary">Download</a>
                                                </div>
                                              </li>
                                            </ul>
                                          </div>

                                        </div>
                                        <div class="col">
                                          <div class="mb-3">
                                            <label for="" class="form-label">Your Response:</label>
                                            <div class="text-center p-2 rounded-2 bg-gray-100">
                                              <small>There's no response yet.</small>
                                            </div>
                                          </div>
                                          <div class="mb-3">
                                            <label for="" class="form-label">Add Response:</label>
                                            <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary saveChangesBtn">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
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
  <script src="<?= ROOT ?>assets/custom/js/vehicle_reservation/manage-reservations.js"></script>
  <!-- End custom js for this page -->
</body>

</html>