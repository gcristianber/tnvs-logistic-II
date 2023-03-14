<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Incoming Documents</title>

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

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p class="mb-0 fw-bold">Web Apps</p>
                  <a href="javascript:;" class="text-muted">Edit</a>
                </div>
                <div class="row g-0 p-1">
                  <div class="col-3 text-center">
                    <a href="../../pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i>
                      <p class="tx-12">Chat</p>
                    </a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i>
                      <p class="tx-12">Calendar</p>
                    </a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i>
                      <p class="tx-12">Email</p>
                    </a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i>
                      <p class="tx-12">Profile</p>
                    </a>
                  </div>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="mail"></i>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p>9 New Messages</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Leonardo Payne</p>
                        <p class="tx-12 text-muted">Project status</p>
                      </div>
                      <p class="tx-12 text-muted">2 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Carl Henson</p>
                        <p class="tx-12 text-muted">Client meeting</p>
                      </div>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Jensen Combs</p>
                        <p class="tx-12 text-muted">Project updates</p>
                      </div>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Amiah Burton</p>
                        <p class="tx-12 text-muted">Project deatline</p>
                      </div>
                      <p class="tx-12 text-muted">2 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Yaretzi Mayo</p>
                        <p class="tx-12 text-muted">New record</p>
                      </div>
                      <p class="tx-12 text-muted">5 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p>6 New Notifications</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>New Order Recieved</p>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Server Limit Reached!</p>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>New customer registered</p>
                      <p class="tx-12 text-muted">2 sec ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Apps are ready for update</p>
                      <p class="tx-12 text-muted">5 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Download completed</p>
                      <p class="tx-12 text-muted">6 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                  <div class="mb-3">
                    <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                  </div>
                  <div class="text-center">
                    <p class="tx-16 fw-bolder">Amiah Burton</p>
                    <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="../../pages/general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>Switch User</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->

      <div class="page-content">

        <div class="card grid-margin">
          <div class="card-body">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h6>MANAGE DELIVERIES</h6>
                  <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim.</small>
                </div>
                <div>
                  <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i data-feather="plus" class="btn-icon-prepend"></i>
                    Create Delivery
                  </button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Create Delivery</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">

                          <div class="mb-3">
                            <label for="" class="form-label">Contact</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Full Name">
                          </div>
                          <div class="mb-3">
                            <input type="text" name="" id="" class="form-control" placeholder="Phone Number">
                          </div>
                          <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pickup Location</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Drop-off Location</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="attachments-line-tab" data-bs-toggle="tab" href="#attachments" role="tab" aria-controls="attachments" aria-selected="false">Attachments</a>
                            </li>
                          </ul>
                          <div class="tab-content my-3" id="lineTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                              <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <input type="text" name="" id="" class="form-control" placeholder="Region, Province City, Barangay">
                              </div>
                              <div class="mb-3">
                                <input type="text" name="" id="" class="form-control" placeholder="Postal Code">
                              </div>
                              <div class="mb-3">
                                <input type="text" name="" id="" class="form-control" placeholder="Street Name, Building, House No.">
                              </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                              <div class="mb-3">
                                <label for="" class="form-label">Address</label>
                                <input type="text" name="" id="" class="form-control" placeholder="Region, Province City, Barangay">
                              </div>
                              <div class="mb-3">
                                <input type="text" name="" id="" class="form-control" placeholder="Postal Code">
                              </div>
                              <div class="mb-3">
                                <input type="text" name="" id="" class="form-control" placeholder="Street Name, Building, House No.">
                              </div>
                            </div>
                            <div class="tab-pane fade" id="attachments" role="tabpanel" aria-labelledby="attachments-line-tab">

                              <div class="alert alert-danger" role="alert">
                                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                              </div>
                              <div class="mb-3">
                                <input type="file" name="" id="" class="form-control">
                              </div>
                              <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Note"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Continue</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <div class="accordion grid-margin" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pendingRequest" aria-expanded="false" aria-controls="pendingRequest">
                    <i data-feather="more-horizontal" class="icon-lg me-2"></i>
                    <span class="me-2">Pending</span>
                    <small class="text-muted">(2)</small>
                  </button>
                </h2>
                <div id="pendingRequest" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="table-responsive">
                      <table id="PendingTable" class="table display">
                        <thead>
                          <tr>
                            <th>Tracking Id</th>
                            <th>Category</th>
                            <th>Option Category</th>
                            <th>Purpose</th>
                            <th>Author</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th data-orderable="false">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($requests)) :
                            foreach ($requests as $data) :
                              if ($data->status_name == "review") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->tracking_id ?>">
                                  <td><?= $data->tracking_id ?></td>
                                  <td>
                                    <p><?= ucwords($data->category_name) ?></p>
                                  </td>
                                  <td>
                                    <?php
                                    if (!empty($data->option_category)) {
                                      echo $data->option_category;
                                    } else {
                                      echo "--";
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <?= $data->purpose ?>
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <span class="text-muted"><?= ucwords($data->department_name) ?></span>
                                      </div>
                                    </div>

                                  </td>
                                  <td>
                                    <p>
                                      <?= date("d M Y", strtotime($data->date_created)) ?>
                                    </p>
                                    <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                                  </td>
                                  <td>
                                    <?php
                                    switch ($data->status_name) {
                                      case "received":
                                        echo '<span class="badge bg-primary">Received</span>';
                                        break;
                                      case "review":
                                        echo '<span class="badge bg-success">Review</span>';
                                        break;
                                      case "work in progress":
                                        echo '<span class="badge bg-warning">Work in progress</span>';
                                        break;
                                      case "released":
                                        echo '<span class="badge bg-danger">Released</span>';
                                        break;
                                      case "declined":
                                        echo '<span class="badge bg-secondart">Declined</span>';
                                        break;
                                      default:
                                        echo 'Unknown status';
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text " data-bs-toggle="modal" data-bs-target="#req-<?= $data->tracking_id ?>">
                                      <i data-feather="plus" class="btn-icon-prepend"></i>
                                      Work in progress
                                    </button>

                                    <div class="modal fade" id="req-<?= $data->tracking_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="text_area" class="form-control text-area" id="textArea-<?= $data->tracking_id ?>" cols="30" rows="5" placeholder="Type something..."></textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary workingBtn">Continue</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prepareRequest" aria-expanded="false" aria-controls="prepareRequest">
                    <i data-feather="package" class="icon-lg me-2"></i>
                    <span class="me-2">Preparing Shipment</span>
                    <small class="text-muted">(2)</small>
                  </button>
                </h2>
                <div id="prepareRequest" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="table-responsive">
                      <table id="PendingTable" class="table display">
                        <thead>
                          <tr>
                            <th>Tracking Id</th>
                            <th>Category</th>
                            <th>Option Category</th>
                            <th>Purpose</th>
                            <th>Author</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th data-orderable="false">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($requests)) :
                            foreach ($requests as $data) :
                              if ($data->status_name == "review") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->tracking_id ?>">
                                  <td><?= $data->tracking_id ?></td>
                                  <td>
                                    <p><?= ucwords($data->category_name) ?></p>
                                  </td>
                                  <td>
                                    <?php
                                    if (!empty($data->option_category)) {
                                      echo $data->option_category;
                                    } else {
                                      echo "--";
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <?= $data->purpose ?>
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <span class="text-muted"><?= ucwords($data->department_name) ?></span>
                                      </div>
                                    </div>

                                  </td>
                                  <td>
                                    <p>
                                      <?= date("d M Y", strtotime($data->date_created)) ?>
                                    </p>
                                    <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                                  </td>
                                  <td>
                                    <?php
                                    switch ($data->status_name) {
                                      case "received":
                                        echo '<span class="badge bg-primary">Received</span>';
                                        break;
                                      case "review":
                                        echo '<span class="badge bg-success">Review</span>';
                                        break;
                                      case "work in progress":
                                        echo '<span class="badge bg-warning">Work in progress</span>';
                                        break;
                                      case "released":
                                        echo '<span class="badge bg-danger">Released</span>';
                                        break;
                                      case "declined":
                                        echo '<span class="badge bg-secondart">Declined</span>';
                                        break;
                                      default:
                                        echo 'Unknown status';
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text " data-bs-toggle="modal" data-bs-target="#req-<?= $data->tracking_id ?>">
                                      <i data-feather="plus" class="btn-icon-prepend"></i>
                                      Work in progress
                                    </button>

                                    <div class="modal fade" id="req-<?= $data->tracking_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="text_area" class="form-control text-area" id="textArea-<?= $data->tracking_id ?>" cols="30" rows="5" placeholder="Type something..."></textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary workingBtn">Continue</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#outForDelivery" aria-expanded="false" aria-controls="outForDelivery">
                    <i data-feather="truck" class="icon-lg me-2"></i>
                    <span class="me-2">Out for Delivery</span>
                    <small class="text-muted">(2)</small>
                  </button>
                </h2>
                <div id="outForDelivery" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="table-responsive">
                      <table id="PendingTable" class="table display">
                        <thead>
                          <tr>
                            <th>Tracking Id</th>
                            <th>Category</th>
                            <th>Option Category</th>
                            <th>Purpose</th>
                            <th>Author</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th data-orderable="false">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($requests)) :
                            foreach ($requests as $data) :
                              if ($data->status_name == "review") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->tracking_id ?>">
                                  <td><?= $data->tracking_id ?></td>
                                  <td>
                                    <p><?= ucwords($data->category_name) ?></p>
                                  </td>
                                  <td>
                                    <?php
                                    if (!empty($data->option_category)) {
                                      echo $data->option_category;
                                    } else {
                                      echo "--";
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <?= $data->purpose ?>
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <span class="text-muted"><?= ucwords($data->department_name) ?></span>
                                      </div>
                                    </div>

                                  </td>
                                  <td>
                                    <p>
                                      <?= date("d M Y", strtotime($data->date_created)) ?>
                                    </p>
                                    <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                                  </td>
                                  <td>
                                    <?php
                                    switch ($data->status_name) {
                                      case "received":
                                        echo '<span class="badge bg-primary">Received</span>';
                                        break;
                                      case "review":
                                        echo '<span class="badge bg-success">Review</span>';
                                        break;
                                      case "work in progress":
                                        echo '<span class="badge bg-warning">Work in progress</span>';
                                        break;
                                      case "released":
                                        echo '<span class="badge bg-danger">Released</span>';
                                        break;
                                      case "declined":
                                        echo '<span class="badge bg-secondart">Declined</span>';
                                        break;
                                      default:
                                        echo 'Unknown status';
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text " data-bs-toggle="modal" data-bs-target="#req-<?= $data->tracking_id ?>">
                                      <i data-feather="plus" class="btn-icon-prepend"></i>
                                      Work in progress
                                    </button>

                                    <div class="modal fade" id="req-<?= $data->tracking_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="text_area" class="form-control text-area" id="textArea-<?= $data->tracking_id ?>" cols="30" rows="5" placeholder="Type something..."></textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary workingBtn">Continue</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#toReceived" aria-expanded="false" aria-controls="toReceived">
                    <i data-feather="coffee" class="icon-lg me-2"></i>
                    <span class="me-2">To Received</span>
                    <small class="text-muted">(2)</small>
                  </button>
                </h2>
                <div id="toReceived" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="table-responsive">
                      <table id="PendingTable" class="table display">
                        <thead>
                          <tr>
                            <th>Tracking Id</th>
                            <th>Category</th>
                            <th>Option Category</th>
                            <th>Purpose</th>
                            <th>Author</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th data-orderable="false">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($requests)) :
                            foreach ($requests as $data) :
                              if ($data->status_name == "review") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->tracking_id ?>">
                                  <td><?= $data->tracking_id ?></td>
                                  <td>
                                    <p><?= ucwords($data->category_name) ?></p>
                                  </td>
                                  <td>
                                    <?php
                                    if (!empty($data->option_category)) {
                                      echo $data->option_category;
                                    } else {
                                      echo "--";
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <?= $data->purpose ?>
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <span class="text-muted"><?= ucwords($data->department_name) ?></span>
                                      </div>
                                    </div>

                                  </td>
                                  <td>
                                    <p>
                                      <?= date("d M Y", strtotime($data->date_created)) ?>
                                    </p>
                                    <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                                  </td>
                                  <td>
                                    <?php
                                    switch ($data->status_name) {
                                      case "received":
                                        echo '<span class="badge bg-primary">Received</span>';
                                        break;
                                      case "review":
                                        echo '<span class="badge bg-success">Review</span>';
                                        break;
                                      case "work in progress":
                                        echo '<span class="badge bg-warning">Work in progress</span>';
                                        break;
                                      case "released":
                                        echo '<span class="badge bg-danger">Released</span>';
                                        break;
                                      case "declined":
                                        echo '<span class="badge bg-secondart">Declined</span>';
                                        break;
                                      default:
                                        echo 'Unknown status';
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text " data-bs-toggle="modal" data-bs-target="#req-<?= $data->tracking_id ?>">
                                      <i data-feather="plus" class="btn-icon-prepend"></i>
                                      Work in progress
                                    </button>

                                    <div class="modal fade" id="req-<?= $data->tracking_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="text_area" class="form-control text-area" id="textArea-<?= $data->tracking_id ?>" cols="30" rows="5" placeholder="Type something..."></textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary workingBtn">Continue</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delivered" aria-expanded="false" aria-controls="delivered">
                    <i data-feather="check" class="icon-lg me-2"></i>
                    <span class="me-2">Delivered</span>
                    <small class="text-muted">(2)</small>
                  </button>
                </h2>
                <div id="delivered" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <div class="table-responsive">
                      <table id="PendingTable" class="table display">
                        <thead>
                          <tr>
                            <th>Tracking Id</th>
                            <th>Category</th>
                            <th>Option Category</th>
                            <th>Purpose</th>
                            <th>Author</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th data-orderable="false">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if (!empty($requests)) :
                            foreach ($requests as $data) :
                              if ($data->status_name == "review") :
                          ?>
                                <tr class="align-middle" data-id="<?= $data->tracking_id ?>">
                                  <td><?= $data->tracking_id ?></td>
                                  <td>
                                    <p><?= ucwords($data->category_name) ?></p>
                                  </td>
                                  <td>
                                    <?php
                                    if (!empty($data->option_category)) {
                                      echo $data->option_category;
                                    } else {
                                      echo "--";
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <?= $data->purpose ?>
                                  </td>
                                  <td>
                                    <div class="d-flex align-items-center gap-2">
                                      <img src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p><?= $data->requestor_name ?></p>
                                        <span class="text-muted"><?= ucwords($data->department_name) ?></span>
                                      </div>
                                    </div>

                                  </td>
                                  <td>
                                    <p>
                                      <?= date("d M Y", strtotime($data->date_created)) ?>
                                    </p>
                                    <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                                  </td>
                                  <td>
                                    <?php
                                    switch ($data->status_name) {
                                      case "received":
                                        echo '<span class="badge bg-primary">Received</span>';
                                        break;
                                      case "review":
                                        echo '<span class="badge bg-success">Review</span>';
                                        break;
                                      case "work in progress":
                                        echo '<span class="badge bg-warning">Work in progress</span>';
                                        break;
                                      case "released":
                                        echo '<span class="badge bg-danger">Released</span>';
                                        break;
                                      case "declined":
                                        echo '<span class="badge bg-secondart">Declined</span>';
                                        break;
                                      default:
                                        echo 'Unknown status';
                                    }
                                    ?>
                                  </td>
                                  <td>
                                    <button class="btn btn-primary btn-icon-text " data-bs-toggle="modal" data-bs-target="#req-<?= $data->tracking_id ?>">
                                      <i data-feather="plus" class="btn-icon-prepend"></i>
                                      Work in progress
                                    </button>

                                    <div class="modal fade" id="req-<?= $data->tracking_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Remarks</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <textarea name="text_area" class="form-control text-area" id="textArea-<?= $data->tracking_id ?>" cols="30" rows="5" placeholder="Type something..."></textarea>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary workingBtn">Continue</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
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
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <h6 class="fw-bold">DELIVERY LOGS</h6>
              <small class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing.</small>
            </div>
            <div class="table-responsive">
              <table id="PendingTable" class="table display">
                <thead>
                  <tr>
                    <th>Tracking Id</th>
                    <th>Driver</th>
                    <th>Pickup Location</th>
                    <th>Drop-off Location</th>
                    <th>Status</th>
                    <th data-orderable="false">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="align-middle">
                    <td>
                      00000001
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img src="https://via.placeholder.com/40x40" alt="" class="rounded-circle">
                        <div>
                          <p>Cristianber Gordora</p>
                          <small class="text-muted">gcristianber@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p>416 Sta. Catalina St. Brgy. Holy Spirit Quezon City</p>
                      <small class="text-muted">Philippines</small>
                    </td>
                    <td>
                      <p>416 Sta. Catalina St. Brgy. Holy Spirit Quezon City</p>
                      <small class="text-muted">Philippines</small>
                    </td>
                    <td>
                      <span class="badge bg-success">Success</span>
                    </td>
                    <td>
                      <button class="btn btn-primary btn-icon-text">
                        <i data-feather="eye" class="btn-icon-prepend"></i>
                        View Details
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <!-- End custom js for this page -->
</body>

</html>