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
                      <i data-feather="tool" class="d-inline text-warning"></i>
                      Reservation Requests
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
                        <input type="text" class="form-control" placeholder="Search Id, Name, Date or Requestor" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                    </div>
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
                      <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Declined
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
                  </ul>
                  <div class="tab-content mt-3" id="lineTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                      <div class="table-responsive">
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
                            if (!empty($reservations)) :
                              foreach ($reservations as $data) :
                                if ($data->reservation_status == "pending") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->full_name ?></p>
                                          <small class="text-muted"><?= $data->email_address ?></small>
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
                                        <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->make ?></p>
                                          <small class="text-muted"><?= $data->plate ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#view_<?= $data->reservation_id ?>">
                                        <i data-feather="edit" class="btn-icon-prepend"></i>
                                        View Details
                                      </button>
                                      <div class="modal fade" id="view_<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="view_<?= $data->reservation_id ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="mb-3">
                                                <label for="" class="form-label">Full Name:</label>
                                                <div class="form-control">
                                                  <?= $data->full_name ?>
                                                </div>
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Email Address:</label>
                                                <div class="form-control">
                                                  <?= $data->email_address ?>
                                                </div>
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Pickup & Return Date:</label>
                                                <div class="row">
                                                  <div class="col">
                                                    <div class="input-group">
                                                      <div class="input-group-text" id="btnGroupAddon">
                                                        <i data-feather="calendar"></i>
                                                      </div>
                                                      <div class="form-control">
                                                        <?= date("d/m/Y", strtotime($data->pickup_date)) ?>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col">
                                                    <div class="input-group">
                                                      <div class="input-group-text" id="btnGroupAddon">
                                                        <i data-feather="calendar"></i>
                                                      </div>
                                                      <div class="form-control">
                                                        <?= date("d/m/Y", strtotime($data->return_date)) ?>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Message:</label>
                                                <div class="form-control">
                                                  <p class="text-wrap">
                                                    <?= $data->reason ?>
                                                  </p>
                                                </div>
                                              </div>
                                              <div>
                                                <label for="" class="form-label">Attachment/s:</label>
                                                <div class="list-group">
                                                  <div class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                      <div>
                                                        <p><?= $data->file_path ?></p>
                                                      </div>
                                                      <a href="<?= ROOT ?>uploads/documents/vehicle_reservation/<?= $data->file_path ?>" class="link-primary">Download</a>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary approveBtn">Approve Request</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <button class="btn btn-danger btn-icon-text declineBtn">
                                        <i data-feather="trash-2" class="btn-icon-prepend"></i>
                                        Decline
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
                            if (!empty($reservations)) :
                              foreach ($reservations as $data) :
                                if ($data->reservation_status == "approved") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->full_name ?></p>
                                          <small class="text-muted"><?= $data->email_address ?></small>
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
                                        <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->make ?></p>
                                          <small class="text-muted"><?= $data->plate ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-primary">Approved</span></td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text">
                                        <i data-feather="edit" class="btn-icon-prepend"></i>
                                        View Details
                                      </button>
                                      <button class="btn btn-light btn-icon-text dispatchBtn">
                                        <i data-feather="plus" class="btn-icon-prepend"></i>
                                        Dispatch
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
                            if (!empty($reservations)) :
                              foreach ($reservations as $data) :
                                if ($data->reservation_status == "declined") :
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
                                          <small class="text-muted"><?= $data->email_address ?></small>
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
                                        <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->make ?></p>
                                          <small class="text-muted"><?= $data->plate ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-danger">Declined</span></td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text">
                                        <i data-feather="edit" class="btn-icon-prepend"></i>
                                        Edit Details
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
                    <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">
                      <div class="table-responsive">
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
                            if (!empty($reservations)) :
                              foreach ($reservations as $data) :
                                if ($data->reservation_status == "dispatched") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->full_name ?></p>
                                          <small class="text-muted"><?= $data->email_address ?></small>
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
                                        <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->make ?></p>
                                          <small class="text-muted"><?= $data->plate ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-secondary">Dispatched</span></td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text">
                                        <i data-feather="edit" class="btn-icon-prepend"></i>
                                        View Details
                                      </button>
                                      <button class="btn btn-light btn-icon-text returnBtn">
                                        <i data-feather="plus" class="btn-icon-prepend"></i>
                                        Return
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
                    <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="returned-line-tab">
                      <div class="table-responsive">
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
                            if (!empty($reservations)) :
                              foreach ($reservations as $data) :
                                if ($data->reservation_status == "returned") :
                            ?>
                                  <tr class="align-middle" data-id="<?= $data->reservation_id ?>">
                                    <td>
                                      <input type="checkbox" name="" class="form-check-input" id="" value="<?= $data->reservation_id ?>">
                                    </td>
                                    <td>
                                      <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->full_name ?></p>
                                          <small class="text-muted"><?= $data->email_address ?></small>
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
                                        <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="ht-50 wd-50 rounded-2" alt="">
                                        <div>
                                          <p><?= $data->make ?></p>
                                          <small class="text-muted"><?= $data->plate ?></small>
                                        </div>
                                      </div>
                                    </td>
                                    <td><span class="badge bg-success">Returned</span></td>
                                    <td>
                                      <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#report_<?= $data->reservation_id ?>">
                                        <i data-feather="feather" class="btn-icon-prepend"></i>
                                        Make report
                                      </button>
                                      <div class="modal fade" id="report_<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="mnt_<?= $data->reservation_id ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                            </div>
                                            <form class="reportForm" data-vehicle="<?= $data->vehicle_id ?>">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Subject:</label>
                                                  <input type="text" name="subject" id="" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Remarks:</label>
                                                  <textarea name="remarks" id="" class="form-control" cols="30" rows="5"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Attachment/s:</label>
                                                  <input type="file" name="attachment" id="" class="form-control">
                                                </div>
                                                <div>
                                                  <input type="checkbox" name="" class="form-check-input" id="">
                                                  <label for="" class="form-label text-wrap">
                                                    By ticking this box, You will agree to the <a href="#">Terms and Conditions</a> and <a href="#">Legal Policy</a>.
                                                  </label>
                                                </div>

                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit Report</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                      <button class="btn btn-light btn-icon-text " data-bs-toggle="modal" data-bs-target="#mnt_<?= $data->reservation_id ?>">
                                        <i data-feather="tool" class="btn-icon-prepend"></i>
                                        Maintenance
                                      </button>
                                      <div class="modal fade" id="mnt_<?= $data->reservation_id ?>" tabindex="-1" aria-labelledby="mnt_<?= $data->reservation_id ?>Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                            </div>
                                            <form class="maintenanceForm" data-vehicle="<?= $data->vehicle_id ?>">
                                              <div class="modal-body">
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Subject:</label>
                                                  <input type="text" class="form-control" name="subject">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Maintenance Type:</label>
                                                  <select name="maintenance_type_id" class="form-select" id="">
                                                    <option value="">...</option>
                                                    <option value="1">Cleaning</option>
                                                    <option value="2">Change Oil</option>
                                                  </select>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Schedule Date:</label>
                                                  <div class="input-group flatpickr" id="flatpickr-date">
                                                    <span class="input-group-text input-group-addon" data-toggle="">
                                                      <i data-feather="calendar"></i>
                                                    </span>
                                                    <input type="text" name="date_schedule" id="" class="form-control date-input">
                                                  </div>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Remarks:</label>
                                                  <textarea name="remarks" class="form-control" id="" cols="30" rows="5" placeholder="Type something..."></textarea>
                                                </div>
                                                <div class="mb-3">
                                                  <label for="" class="form-label">Attachment/s:</label>
                                                  <input type="file" name="attachment" id="" class="form-control">
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
      enableTime: true,
      dateFormat: "Y-m-d",
      defaultDate: new Date(),
      minDate: "today",
      allowInput: true
    });
  </script>
</body>

</html>