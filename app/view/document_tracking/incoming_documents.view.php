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

        <div class="accordion grid-margin" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i data-feather="mail" class="icon-lg me-2"></i>
                <span class="me-2">Received</span>
                <small class="text-muted">(2)</small>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                          if ($data->current_status_name == "received") :
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
                                    <span class="text-muted"><?= ucwords($data->requestor_role) ?></span>
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
                                switch ($data->current_status_name) {
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
                                  <i data-feather="search" class="btn-icon-prepend"></i>
                                  Review Request
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
                                        <button type="button" class="btn btn-primary reviewBtn">Continue</button>
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i data-feather="search" class="icon-lg me-2"></i>
                <span class="me-2">On Review</span>
                <small class="text-muted">(2)</small>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                          if ($data->current_status_name == "review") :
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
                                    <span class="text-muted"><?= ucwords($data->requestor_role) ?></span>
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
                                switch ($data->current_status_name) {
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
                                  <i data-feather="search" class="btn-icon-prepend"></i>
                                  Review Request
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <i data-feather="activity" class="icon-lg me-2"></i>
                <span class="me-2">Working in progress</span>
                <small class="text-muted">(4)</small>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                          if ($data->current_status_name == "work in progress") :
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
                                    <span class="text-muted"><?= ucwords($data->requestor_role) ?></span>
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
                                switch ($data->current_status_name) {
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
                                  <i data-feather="feather" class="btn-icon-prepend"></i>
                                  Create Document
                                </button>

                                <div class="modal fade" id="req-<?= $data->tracking_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create Document</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="mb-3">
                                          <h6 class="fw-bold">SELECT TEMPLATE</h6>
                                          <small class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing.</small>
                                        </div>

                                        <div class="mb-3">
                                          <select name="" class="form-select" id="">
                                            <option disabled selected>...</option>
                                            <option value="">Contract</option>
                                          </select>
                                        </div>

                                        <div class="mb-3">
                                          <div class="form-check form-switch mb-2">
                                            <input type="checkbox" class="form-check-input" id="formSwitch1">
                                            <label class="form-check-label" for="formSwitch1">Use OCR</label>
                                          </div>
                                        </div>

                                        <div class="mb-3">

                                          <div class="alert alert-primary" role="alert">
                                            <i data-feather="alert-circle"></i>
                                            A simple primary alert—check it out!
                                          </div>

                                          <input class="form-control file-upload" type="file" id="formFile">
                                        </div>

                                        <div class="mb-3">
                                          <textarea class="form-control" name="tinymce" id="tinymceExample" rows="10" placeholder="Type something..."></textarea>

                                        </div>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary releaseBtn">Continue</button>
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
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <i data-feather="send" class="icon-lg me-2"></i>
                <span class="me-2">Released</span>
                <small class="text-muted">(10)</small>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
                          if ($data->current_status_name == "released") :
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
                                    <span class="text-muted"><?= ucwords($data->requestor_role) ?></span>
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
                                switch ($data->current_status_name) {
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
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="search" class="btn-icon-prepend"></i>
                                  Review Request
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
        </div>

        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <h6 class="fw-bold">FILE MANAGER</h6>
              <small class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing.</small>
            </div>
            <div>
              <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Files</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Activity</a>
                </li>
              </ul>
              <div class="tab-content mt-3" id="lineTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                  <div class="table-responsive">
                    <table id="PendingTable" class="table display">
                      <thead>
                        <tr>
                          <th>Document Id</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>Date Created</th>
                          <th>Status</th>
                          <th data-orderable="false">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>12303105382704989</td>
                          <td>
                            <p>Invoice</p>
                          </td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <img src="https://via.placeholder.com/40x40" alt="">
                              <div>
                                <p>Aldion Belo</p>
                                <small class="text-muted">HR Staff</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>21 Jan 2023</p>
                            <small class="text-muted">4:22 AM</small>
                          </td>
                          <td>
                            <span class="badge bg-secondary">Pending</span>
                          </td>
                          <td>
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="send" class="btn-icon-prepend"></i>
                              Forward Document
                            </button>
                            <button class="btn btn-outline-primary btn-icon">
                              <i data-feather="download"></i>
                            </button>
                            <button class="btn btn-outline-primary btn-icon">
                              <i data-feather="archive"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                  <div class="table-responsive">
                    <table id="PendingTable" class="table display">
                      <thead>
                        <tr>
                          <th>Activity Id</th>
                          <th>Type</th>
                          <th>Executor</th>
                          <th>Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>12303105382704989</td>
                          <td>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          </td>
                          <td>
                            <div class="d-flex align-items-center gap-2">
                              <img src="https://via.placeholder.com/40x40" alt="">
                              <div>
                                <p>Aldion Belo</p>
                                <small class="text-muted">HR Staff</small>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p>21 Jan 2023</p>
                            <small class="text-muted">4:22 AM</small>
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
  </div>

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src='https://unpkg.com/tesseract.js@4.0.2/dist/tesseract.min.js'></script>
  <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/document_tracking/manage-requests.js"></script>
  <script src="<?= ROOT ?>assets/js/tinymce.js"></script>
  <!-- End custom js for this page -->


  <script>
    $(document).ready(function() {
      $('#formFile').on('change', function() {
        const editor = tinymce.get('tinymceExample');
        const content = editor.getContent()
        const file = this.files[0]
        const reader = new FileReader()

        reader.readAsDataURL(file)

        reader.onload = async function() {
          const image = new Image()

          image.src = reader.result
          image.onload = async function() {
            const result = await Tesseract.recognize(image, 'eng', {
              logger: m => console.log(`OCR progress: ${Math.round(m.progress * 100)}%`)
            })

            console.log(result)
            console.log(result.data.text)

            editor.setContent(result.data.text)
          }


        }



      });
    });
  </script>


</body>

</html>