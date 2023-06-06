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
                <div class="col-md-12">
                  <div class="mb-4">
                    <h3 class="mb-1">My Reservations</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate temporibus, fugiat fuga magni nisi.</p>
                  </div>
                  <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending

                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Approved
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="disabled-line-tab" data-bs-toggle="tab" href="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Dispatched
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="returned-line-tab" data-bs-toggle="tab" href="#returned" role="tab" aria-controls="returned" aria-selected="false">Returned
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Declined
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="cancelled-line-tab" data-bs-toggle="tab" href="#cancelled" role="tab" aria-controls="cancelled" aria-selected="false">Cancelled
                      </a>
                    </li>
                  </ul>
                  <div class="tab-content mt-3" id="lineTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                      <div class="d-flex align-items-center gap-2">
                        <input type="text" name="" id="" class="form-control searchInput" placeholder="Search document">
                        <div class="flex-shrink-0">
                          <button class="btn btn-primary search">
                            <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                            <p class="d-none d-sm-inline">Search Document</p>
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
                            Sort by Vehicle Type
                          </label>
                          <select name="" id="" class="form-select filter-select">
                            <option value="">All</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Van">Van</option>
                            <option value="Truck">Truck</option>
                          </select>
                        </div>
                        <div class="col-md-4 grid-margin">
                          <label for="" class="form-label">
                            Sort by Response
                          </label>
                          <select name="" id="" class="form-select filter-select">
                            <option value="">Select Status</option>
                          </select>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered dataTable">
                          <thead>
                            <tr>
                              <th data-orderable="false"></th>
                              <th>request date</th>
                              <th>vehicle</th>
                              <th>vehicle type</th>
                              <th>pickup date</th>
                              <th>return date</th>
                              <th>status</th>
                              <th>action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if (!empty($userReservations)) :
                              foreach ($userReservations as $data) :
                                if ($data->reservation_status == "pending") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                    </td>
                                    <td>
                                      <p><?= date("d/m/Y", strtotime($data->date_requested)) ?></p>
                                      <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="<?= ROOT . 'uploads/images/thumbnails/' . $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: contain;" alt="">
                                        <div>
                                          <p><?= $data->make ?></p>
                                          <small class="text-muted"><?= $data->plate ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <?= ($data->vehicle_type == 'sedan' ? '<span class="badge bg-primary">Sedan</span>' : ($data->vehicle_type == 'van' ? '<span class="badge bg-danger">Van</span>' : ($data->vehicle_type == 'truck' ? '<span class="badge bg-warning">Truck</span>' : null))) ?>
                                    </td>
                                    <td>
                                      <p><?= date("d/m/Y", strtotime($data->date_requested)) ?></p>
                                      <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                    </td>
                                    <td>
                                      <p><?= date("d/m/Y", strtotime($data->date_requested)) ?></p>
                                      <small class="text-muted"><?= date("h:i A", strtotime($data->date_requested)) ?></small>
                                    </td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#view_<?= $data->reservation_id ?>">
                                        <i data-feather="edit" class="btn-icon-prepend"></i>
                                        Edit Details
                                      </button>
                                      <div class="modal fade" id="view_<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="view_<?= $data->reservation_id ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                            </div>
                                            <form class="updateForm">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Full Name:</label>
                                                  <input type="text" name="full_name" id="" class="form-control" value="<?= $data->full_name ?>">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Email Address:</label>
                                                  <input type="text" name="email_address" id="" class="form-control" value="<?= $data->email_address ?>">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Pickup & Return Date:</label>
                                                  <div class="row">
                                                    <div class="col">
                                                      <div class="input-group flatpickr" id="flatpickr-date">
                                                        <span class="input-group-text input-group-addon" data-toggle="">
                                                          <i data-feather="calendar"></i>
                                                        </span>
                                                        <input type="text" name="pickup_date" id="" class="form-control date-input" value="<?= date("d M Y", strtotime($data->pickup_date)) ?>">
                                                      </div>
                                                    </div>
                                                    <div class="col">
                                                      <div class="input-group flatpickr" id="flatpickr-date">
                                                        <span class="input-group-text input-group-addon" data-toggle="">
                                                          <i data-feather="calendar"></i>
                                                        </span>
                                                        <input type="text" name="pickup_date" id="" class="form-control date-input" value="<?= date("d M Y", strtotime($data->return_date)) ?>">
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Message:</label>
                                                  <textarea class="form-control" name="reason" id="" cols="30" rows="5"><?= $data->reason ?></textarea>
                                                </div>
                                                <div>
                                                  <label for="" class="form-label">Attachment/s:</label>
                                                  <div class="list-group">
                                                    <div class="list-group-item">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                          <p>Dummy_File.pdf</p>
                                                          <small class="text-muted">1.2 MB</small>
                                                        </div>
                                                        <a href="" class="link-primary">Download</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                      <button class="btn btn-danger btn-icon-text cancelBtn">
                                        <i data-feather="trash-2" class="btn-icon-prepend"></i>
                                        Cancel Request
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
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>requestor</th>
                            <th class="text-center">vehicle type</th>
                            <th>request date</th>
                            <th>vehicle</th>
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
                                <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                  <td>
                                    <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="<?= ROOT . $data->avatar_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: cover;" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
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
                                      <img src="<?= ROOT . 'uploads/images/thumbnails/' . $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: contain;" alt="">
                                      <div>
                                        <p><?= $data->make ?></p>
                                        <small class="text-muted"><?= $data->plate ?></small>
                                      </div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-success">Approved</span></td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text">
                                      <i data-feather="external-link" class="btn-icon-prepend"></i>
                                      View Details
                                    </button>
                                    <button class="btn btn-danger btn-icon-text cancelBtn">
                                      <i data-feather="trash-2" class="btn-icon-prepend"></i>
                                      Cancel Request
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>requestor</th>
                            <th class="text-center">vehicle type</th>
                            <th>request date</th>
                            <th>vehicle</th>
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
                                <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                  <td>
                                    <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="<?= ROOT . $data->avatar_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: cover;" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
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
                                      <img src="<?= ROOT . 'uploads/images/thumbnails/' . $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: contain;" alt="">
                                      <div>
                                        <p><?= $data->make ?></p>
                                        <small class="text-muted"><?= $data->plate ?></small>
                                      </div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-danger">Declined</span></td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#view_<?= $data->reservation_id ?>">
                                      <i data-feather="edit" class="btn-icon-prepend"></i>
                                      Edit Details
                                    </button>
                                    <div class="modal fade" id="view_<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="view_<?= $data->reservation_id ?>Label" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <form class="updateForm">
                                            <div class="modal-body">
                                              <div class="mb-3">
                                                <label for="" class="form-label">Full Name:</label>
                                                <input type="text" name="full_name" id="" class="form-control" value="<?= $data->full_name ?>">
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Email Address:</label>
                                                <input type="text" name="email_address" id="" class="form-control" value="<?= $data->email_address ?>">
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Pickup & Return Date:</label>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="input-group flatpickr" id="flatpickr-date">
                                                      <span class="input-group-text input-group-addon" data-toggle="">
                                                        <i data-feather="calendar"></i>
                                                      </span>
                                                      <input type="text" name="pickup_date" id="" class="form-control date-input" value="<?= date("d M Y", strtotime($data->pickup_date)) ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col">
                                                    <div class="input-group flatpickr" id="flatpickr-date">
                                                      <span class="input-group-text input-group-addon" data-toggle="">
                                                        <i data-feather="calendar"></i>
                                                      </span>
                                                      <input type="text" name="pickup_date" id="" class="form-control date-input" value="<?= date("d M Y", strtotime($data->return_date)) ?>">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Message:</label>
                                                <textarea class="form-control" name="reason" id="" cols="30" rows="5"><?= $data->reason ?></textarea>
                                              </div>
                                              <div>
                                                <label for="" class="form-label">Attachment/s:</label>
                                                <div class="list-group">
                                                  <div class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                      <div>
                                                        <p>Dummy_File.pdf</p>
                                                        <small class="text-muted">1.2 MB</small>
                                                      </div>
                                                      <a href="" class="link-primary">Download</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </form>
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
                    <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>requestor</th>
                            <th class="text-center">vehicle type</th>
                            <th>request date</th>
                            <th>vehicle</th>
                            <th>status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($userReservations)) :
                            foreach ($userReservations as $data) :
                              if ($data->reservation_status == "dispatched") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                  <td>
                                    <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="<?= ROOT . $data->avatar_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: cover;" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
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
                                      <img src="<?= ROOT . 'uploads/images/thumbnails/' . $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: contain;" alt="">
                                      <div>
                                        <p><?= $data->make ?></p>
                                        <small class="text-muted"><?= $data->plate ?></small>
                                      </div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-info">Dispatched</span></td>

                                </tr>
                          <?php
                              endif;
                            endforeach;
                          endif;
                          ?>
                        </tbody>

                      </table>
                    </div>
                    <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="returned-line-tab">
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>requestor</th>
                            <th class="text-center">vehicle type</th>
                            <th>request date</th>
                            <th>vehicle</th>
                            <th>status</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($userReservations)) :
                            foreach ($userReservations as $data) :
                              if ($data->reservation_status == "returned") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                  <td>
                                    <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="<?= ROOT . $data->avatar_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: cover;" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
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
                                      <img src="<?= ROOT . 'uploads/images/thumbnails/' . $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" style="object-fit: contain;" alt="">
                                      <div>
                                        <p><?= $data->make ?></p>
                                        <small class="text-muted"><?= $data->plate ?></small>
                                      </div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-primary">Returned</span></td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#view_<?= $data->reservation_id ?>">
                                      <i data-feather="edit" class="btn-icon-prepend"></i>
                                      Edit Details
                                    </button>
                                    <div class="modal fade" id="view_<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="view_<?= $data->reservation_id ?>Label" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <form class="updateForm">
                                            <div class="modal-body">
                                              <div class="mb-3">
                                                <label for="" class="form-label">Full Name:</label>
                                                <input type="text" name="full_name" id="" class="form-control" value="<?= $data->full_name ?>">
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Email Address:</label>
                                                <input type="text" name="email_address" id="" class="form-control" value="<?= $data->email_address ?>">
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Pickup & Return Date:</label>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="input-group flatpickr" id="flatpickr-date">
                                                      <span class="input-group-text input-group-addon" data-toggle="">
                                                        <i data-feather="calendar"></i>
                                                      </span>
                                                      <input type="text" name="pickup_date" id="" class="form-control date-input" value="<?= date("d M Y", strtotime($data->pickup_date)) ?>">
                                                    </div>
                                                  </div>
                                                  <div class="col">
                                                    <div class="input-group flatpickr" id="flatpickr-date">
                                                      <span class="input-group-text input-group-addon" data-toggle="">
                                                        <i data-feather="calendar"></i>
                                                      </span>
                                                      <input type="text" name="pickup_date" id="" class="form-control date-input" value="<?= date("d M Y", strtotime($data->return_date)) ?>">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Message:</label>
                                                <textarea class="form-control" name="reason" id="" cols="30" rows="5"><?= $data->reason ?></textarea>
                                              </div>
                                              <div>
                                                <label for="" class="form-label">Attachment/s:</label>
                                                <div class="list-group">
                                                  <div class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                      <div>
                                                        <p>Dummy_File.pdf</p>
                                                        <small class="text-muted">1.2 MB</small>
                                                      </div>
                                                      <a href="" class="link-primary">Download</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="btn btn-danger btn-icon-text cancelBtn">
                                      <i data-feather="trash-2" class="btn-icon-prepend"></i>
                                      Cancel Request
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
                    <div class="tab-pane fade" id="cancelled" role="tabpanel" aria-labelledby="cancelled-line-tab">
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th data-orderable="false"></th>
                            <th>requestor</th>
                            <th class="text-center">vehicle type</th>
                            <th>request date</th>
                            <th>vehicle</th>
                            <th>status</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($userReservations)) :
                            foreach ($userReservations as $data) :
                              if ($data->reservation_status == "cancelled") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                  <td>
                                    <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <small class="text-muted"><?= ucwords($data->requestor_role) ?></small>
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
                                        <p>Honda Accord 2020</p>
                                        <small class="text-muted">QWE-223</small>
                                      </div>
                                    </div>
                                  </td>
                                  <td><span class="badge bg-secondary">Cancelled</span></td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text">
                                      <i data-feather="star" class="btn-icon-prepend"></i>
                                      Add Review
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
  <script>
    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      dateFormat: "d M Y",
      minDate: "today",
      allowInput: true
    });
  </script>
</body>

</html>