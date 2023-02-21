<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Browse Vehicles</title>

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
  <link rel="stylesheet" href="../../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/custom/css/style.css">
  <!-- End layout styles -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>


<body>
  <div class="main-wrapper">

    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>general/dashboard" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">document tracking</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/compose_document" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Compose</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/sent" class="nav-link">
              <i class="link-icon" data-feather="send"></i>
              <span class="link-title">Sent</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/pending" class="nav-link">
              <i class="link-icon" data-feather="more-horizontal"></i>
              <span class="link-title">Pending</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/received" class="nav-link">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Received</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/onhold" class="nav-link">
              <i class="link-icon" data-feather="search"></i>
              <span class="link-title">On Hold</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/archived" class="nav-link">
              <i class="link-icon" data-feather="archive"></i>
              <span class="link-title">Archived</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/declined" class="nav-link">
              <i class="link-icon" data-feather="slash"></i>
              <span class="link-title">Declined</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/shared_with_me" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Shared with me</span>
            </a>
          </li>
          <li class="nav-item nav-category">VEHICLE RESERVATION</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vehicle_reservation/" class="nav-link">
              <i class="link-icon" data-feather="table"></i>
              <span class="link-title">Reservations</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vehicle_reservation/" class="nav-link">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vehicle_reservation/" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Schedules</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vehicle_reservation/" class="nav-link">
              <i class="link-icon" data-feather="flag"></i>
              <span class="link-title">Reports</span>
            </a>
          </li>
          <li class="nav-item nav-category">VENDOR PORTAL</li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Feed</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="shopping-cart"></i>
              <span class="link-title">Buying</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="tag"></i>
              <span class="link-title">Selling</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Proposals</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Vendors</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="package"></i>
              <span class="link-title">My Orders</span>
            </a>
          </li>

          <li class="nav-item nav-category">AUDIT MANAGEMENT</li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="plus"></i>
              <span class="link-title">Create Report</span>
            </a>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="bar-chart"></i>
              <span class="link-title">Analytics</span>
            </a>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Warehouse</span>
            </a>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Audit Reports</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="paperclip"></i>
              <span class="link-title">Templates</span>
            </a>
          </li>


        </ul>
      </div>
    </nav>
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:../../partials/_navbar.html -->
      <nav class="sidebar">
        <div class="sidebar-header">
          <a href="#" class="sidebar-brand">
            Noble<span>UI</span>
          </a>
          <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="sidebar-body">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a href="<?= ROOT ?>general/dashboard" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">document tracking</li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/compose_document" class="nav-link">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Compose</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/sent" class="nav-link">
                <i class="link-icon" data-feather="send"></i>
                <span class="link-title">Sent</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/pending" class="nav-link">
                <i class="link-icon" data-feather="more-horizontal"></i>
                <span class="link-title">Pending</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/received" class="nav-link">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Received</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/onhold" class="nav-link">
                <i class="link-icon" data-feather="search"></i>
                <span class="link-title">On Hold</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/archived" class="nav-link">
                <i class="link-icon" data-feather="archive"></i>
                <span class="link-title">Archived</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>document_tracking/declined" class="nav-link">
                <i class="link-icon" data-feather="slash"></i>
                <span class="link-title">Declined</span>
              </a>
            </li>
            <li class="nav-item nav-category">VEHICLE RESERVATION</li>
            <li class="nav-item">
              <a href="<?= ROOT ?>vehicle_reservation/reservations" class="nav-link">
                <i class="link-icon" data-feather="grid"></i>
                <span class="link-title">Browse Vehicles</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>vehicle_reservation/reservations" class="nav-link">
                <i class="link-icon" data-feather="table"></i>
                <span class="link-title">Reservations</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>vehicle_reservation/reports" class="nav-link">
                <i class="link-icon" data-feather="flag"></i>
                <span class="link-title">Reports</span>
              </a>
            </li>
            <li class="nav-item nav-category">VENDOR PORTAL</li>
            <li class="nav-item">
              <a href="<?= ROOT ?>vendor_portal_admin/feed" class="nav-link">
                <i class="link-icon" data-feather="hash"></i>
                <span class="link-title">Feed</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?= ROOT ?>vendor_portal_admin/contracts" class="nav-link">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Contracts</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT ?>vendor_portal_admin/vendors" class="nav-link">
                <i class="link-icon" data-feather="users"></i>
                <span class="link-title">Vendors</span>
              </a>
            </li>

            <li class="nav-item nav-category">AUDIT MANAGEMENT</li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="link-icon" data-feather="plus"></i>
                <span class="link-title">Create Report</span>
              </a>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="link-icon" data-feather="bar-chart"></i>
                <span class="link-title">Analytics</span>
              </a>
            <li class="nav-item">
              <a href="<?= ROOT ?>audit_management/warehouse" class="nav-link">
                <i class="link-icon" data-feather="home"></i>
                <span class="link-title">Warehouse</span>
              </a>
            <li class="nav-item">
              <a href="<?= ROOT ?>audit_management/audit_reports" class="nav-link">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Audit Reports</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:;" class="nav-link">
                <i class="link-icon" data-feather="paperclip"></i>
                <span class="link-title">Templates</span>
              </a>
            </li>


          </ul>
        </div>
      </nav>
      <!-- partial -->

      <div class="page-content">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <h6 class="card-title">Browse Vehicles</h6>
                    <p class="text-muted mb-3">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
                  </div>
                </div>
                <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cars</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Trucks</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Vans</a>
                  </li>
                </ul>
                <div class="tab-content mt-3" id="lineTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">

                    <div class="table-responsive">
                      <table id="dataTableExample" class="table">
                        <thead>
                          <tr>
                            <th>Fleet Id</th>
                            <th>Type</th>
                            <th>Plate Number</th>
                            <th>Color</th>
                            <th>Location</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Health</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          if (!empty($all_vehicles)) :
                            foreach ($all_vehicles as $vehicle) :
                          ?>
                              <tr class="align-middle">
                                <td><?= $vehicle->fleet_id ?></td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img class="ht-50 wd-50 me-2 rounded-1 me-2" src="https://via.placeholder.com/40x40" alt="">
                                    <div>
                                      <p><?= ucwords($vehicle->fleet_vehicle_name) ?></p>
                                      <small class="text-muted"><?= ucwords($vehicle->vehicle_category_name) ?></small>
                                    </div>
                                  </div>
                                </td>
                                <td><?= $vehicle->fleet_plate_number ?></td>
                                <td><?= ucwords($vehicle->fleet_vehicle_color_name) ?></td>
                                <td><?= ucwords($vehicle->warehouse_name) ?></td>
                                <td>
                                  <div class=" text-warning">
                                    <i class="icon-lg" fill="currentColor" data-feather="star"></i>
                                    x<?= $vehicle->rating ?>
                                  </div>
                                </td>
                                <td>
                                  <?php if ($vehicle->vehicle_status_name == "pending") : ?>
                                    <span class="badge bg-warning">Pending</span>
                                  <?php endif; ?>
                                  <?php if ($vehicle->vehicle_status_name == "available") : ?>
                                    <span class="badge bg-success">Available</span>
                                  <?php endif; ?>
                                  <?php if ($vehicle->vehicle_status_name == "reserved") : ?>
                                    <span class="badge bg-secondary">Reserved</span>
                                  <?php endif; ?>
                                  <?php if ($vehicle->vehicle_status_name == "dispatched") : ?>
                                    <span class="badge bg-danger">Dispatched</span>
                                  <?php endif; ?>
                                </td>
                                <td>
                                  <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $vehicle->fleet_vehicle_health ?>%" aria-valuenow="<?= $vehicle->fleet_vehicle_health ?>" aria-valuemin="0" aria-valuemax="100"><?= $vehicle->fleet_vehicle_health ?>%</div>
                                  </div>
                                </td>
                                <td>
                                  <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#fl<?= $vehicle->fleet_id ?>">
                                    <i class="btn-icon-prepend" data-feather="send"></i>
                                    Send Request
                                  </button>
                                  <button class="btn btn-outline-primary btn-icon">
                                    <i data-feather="bell"></i>
                                  </button>
                                </td>

                                <div class="modal fade" id="fl<?= $vehicle->fleet_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                      </div>

                                      <div class="modal-body">
                                        <div class="mb-3">
                                          <h5>BODY</h5>
                                          <small class="text-muted">Lorem ipsum dolor sit amet.</small>
                                        </div>

                                        <input type="hidden" id="target_id" data-id="<?= $vehicle->fleet_id ?>" value="<?= $vehicle->fleet_id ?>">

                                        <textarea name="reservation_purpose" class="form-control" id="reservation_purpose" cols="30" rows="5" placeholder=""></textarea>

                                        <div class="mb-3 mt-3">
                                          <h5>RETURN DATE</h5>
                                          <small class="text-muted">Lorem ipsum dolor sit amet.</small>
                                        </div>
                                        <div class="input-group date datepicker" id="datePickerExample">
                                          <input type="text" name="return_date" id="return_date" class="form-control">
                                          <span class="input-group-text input-group-addon"><i data-feather="calendar"></i></span>
                                        </div>
                                      </div>

                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">...</div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">...</div>
                  <div class="tab-pane fade" id="change" role="tabpanel" aria-labelledby="change-line-tab">...</div>
                  <div class="tab-pane fade" id="dismiss" role="tabpanel" aria-labelledby="dismiss-line-tab">...</div>
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
    <script src="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= ROOT ?>assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
    <script src="<?= ROOT ?>assets/js/data-table.js"></script>
    <script src="<?= ROOT ?>assets/js/datepicker.js"></script>

    <!-- End custom js for this page -->

</body>

</html>