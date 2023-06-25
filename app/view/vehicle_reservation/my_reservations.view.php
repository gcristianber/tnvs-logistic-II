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
              <div class="mb-4">
                <h3 class="mb-1">My Reservations</h3>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate temporibus, fugiat fuga magni nisi.</p>
              </div>

              <div>
                <div class="d-flex align-items-center gap-2">
                  <input type="text" name="" id="" class="form-control searchInput" placeholder="Search id">
                  <div class="flex-shrink-0">
                    <button class="btn btn-primary search">
                      <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                      <p class="d-none d-sm-inline">Search Reservation</p>
                    </button>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4 grid-margin">
                    <label for="" class="form-label">
                      Filter by date
                    </label>
                    <div class="input-group flatpickr" id="flatpickr-date">
                      <span class="input-group-text input-group-addon" data-toggle="">
                        <i data-feather="calendar"></i>
                      </span>
                      <input type="text" name="" id="" class="form-control filter-date">
                    </div>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <label for="" class="form-label">
                      Sort by Tags
                    </label>
                    <select name="" id="" class="form-select filter-select">
                      <option value="">All</option>
                      <option value="Important">Important</option>
                      <option value="Convinient">Convinient</option>
                      <option value="Convinient">Not Important</option>
                    </select>
                  </div>
                  <div class="col-md-4 grid-margin">
                    <label for="" class="form-label">
                      Sort by Response
                    </label>
                    <select name="" id="" class="form-select filter-select">
                      <option value="" selected>All</option>
                      <option value="Pending">Pending</option>
                      <option value="Approved">Approved</option>
                      <option value="Dispatched">Dispatched</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table dataTable">
                    <thead>
                      <tr>
                        <th>vehicle</th>
                        <th>tags</th>
                        <th>reserved date</th>
                        <th>date submitted</th>
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
                            <td class="wd-200">
                              <div class=" text-truncate">
                                <div class="d-flex align-items-center gap-2 wd-lg-50">
                                  <div class="d-none d-lg-block">
                                    <img src="<?= WEB_UPLOADS . 'images/thumbnails/'  . $data->thumbnail_path ?>" class="rounded-2" style="height: 50px; width: 75px;" alt="">
                                  </div>
                                  <div>
                                    <h5 class="text-uppercase"><?= $data->make ?></h5>
                                    <small class="text-muted"><?= ucwords($data->vehicle_type) ?></small>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="wd-50">
                              <div>
                                <span class="badge rounded-pill bg-danger">Important</span>
                              </div>
                            </td>
                            <td class="wd-50">
                              <div class="d-flex align-items-center gap-3">
                                <div>
                                  <p><?= date("d M Y", strtotime($data->date_requested)) ?></p>
                                  <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                </div>
                                →
                                <div>
                                  <p><?= date("d M Y", strtotime($data->date_requested)) ?></p>
                                  <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                </div>
                              </div>
                            </td>
                            <td class="wd-25">
                              <div>
                                <p><?= date("d M Y", strtotime($data->date_requested)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                              </div>
                            </td>
                            <td class="wd-25">
                              <?php
                              switch ($data->reservation_status) {
                                case 'pending':
                                  echo '<span class="badge bg-warning">Pending</span>';
                                  break;
                                case 'approved':
                                  echo '<span class="badge bg-success">Approved</span>';
                                  break;
                                case 'returned':
                                  echo '<span class="badge bg-primary">Returned</span>';
                                  break;
                                case 'dispatched':
                                  echo '<span class="badge bg-danger">Dispatched</span>';
                                  break;
                                case 'cancelled':
                                  echo '<span class="badge bg-secondary">Cancelled</span>';
                                  break;
                              }
                              ?>
                            </td>
                            <td class="wd-50">
                              <button class="btn p-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;" data-bs-toggle="modal" data-bs-target="#<?= $data->reservation_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="arrow-down-left" class="icon-sm me-2"></i> <span class="">Withdraw</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                              </div>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade" id="<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?= strtoupper($data->make) ?> - Submitted Reservation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <h6>Requested <?= (new DateTime($data->date_requested))->diff(new DateTime(date('Y-m-d H:i:s')))->days . " days ago"; ?></h6>
                                    <div class="mt-4">
                                      <label class="form-label fw-bold">Legal Name</label>
                                      <p><?= $data->full_name ?></p>
                                    </div>
                                    <div class="mt-2">
                                      <label class="form-label fw-bold">Email Address</label>
                                      <p><?= $data->email_address ?></p>
                                    </div>
                                    <div class="mt-2">
                                      <label class="form-label fw-bold">Reserved Date</label>
                                      <div class="d-flex align-items-center gap-3">
                                        <div>
                                          <p><?= date("d M Y", strtotime($data->date_requested)) ?></p>
                                          <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                        </div>
                                        →
                                        <div>
                                          <p><?= date("d M Y", strtotime($data->date_requested)) ?></p>
                                          <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="mt-2">
                                      <label class="form-label fw-bold">Reason</label>
                                      <p><?= $data->reason ?></p>
                                    </div>
                                    <div class="mt-2">
                                      <label class="form-label fw-bold">Attachment</label>
                                      <p>
                                        <a href="<?= WEB_UPLOADS . "documents/vehicle_reservation/" . $data->file_path ?>" class="link-primary">
                                          <i data-feather="file-text" class="icon-md me-1"></i>
                                          <small><?= $data->file_path ?></small>
                                        </a>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="<?= ROOT ?>assets/custom/js/flatpickr.js"></script>
</body>

</html>