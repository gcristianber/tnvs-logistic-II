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


        <div class="card">
          <div class="card-body">

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <div>
                <h6>INCOMING DOCUMENTS</h6>
                <small class="text-muted">Manage your incoming documents.</small>
              </div>
            </div>
            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pending-line-tab" data-bs-toggle="tab" href="#pending" role="tab" aria-controls="pending" aria-selected="true">Pending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="received-line-tab" data-bs-toggle="tab" href="#received" role="tab" aria-controls="received" aria-selected="false">Received</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="onhold-line-tab" data-bs-toggle="tab" href="#onhold" role="tab" aria-controls="onhold" aria-selected="false">On Hold</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="declined-line-tab" data-bs-toggle="tab" href="#declined" role="tab" aria-controls="declined" aria-selected="false">Declined</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="followedup-line-tab" data-bs-toggle="tab" href="#followedup" role="tab" aria-controls="followedup" aria-selected="false">Followed Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="returned-line-tab" data-bs-toggle="tab" href="#returned" role="tab" aria-controls="returned" aria-selected="false">Returned</a>
              </li>
            </ul>
            <div class="tab-content mt-3" id="lineTabContent">
              <div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-line-tab">
                <div class="table-responsive">
                  <table id="PendingTable" class="table display">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Date Created</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($view_table)) :
                        foreach ($view_table as $data) :
                          if ($data->document_status == "pending" && $_SESSION["department_name"] == $data->department_name) :
                      ?>
                            <tr class="align-middle" data-id="<?= $data->document_id ?>">
                              <td><?= $data->document_id ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <i data-feather="file" class="icon-lg me-2"></i>
                                  <div>
                                    <p class="fw-bold"><?= $data->document_name ?></p>
                                    <small class="text-muted">
                                      <?= round($data->document_size / 1024) . ' KB' ?>
                                    </small>
                                  </div>
                                </div>
                              </td>
                              <td><?= ucwords($data->document_category_name) ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <img src="https://via.placeholder.com/40x40" class="me-2" alt="">
                                  
                                  <div>
                                    <p><?= $data->display_name ?></p>
                                    <small class="text-muted"><?= $data->account_type_name ?></small>
                                  </div>
                                </div>
                               
                              </td>
                              <td>
                                <p class="fw-bold"><?= date("d M Y", strtotime($data->date_created)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                              </td>
                             
                              <td class="text-center">
                                <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#<?= $data->document_id ?>">
                                  <i data-feather="eye" class="btn-icon-prepend"></i>
                                  View Request
                                </button>


                                <a href="javascript:;" class="link-secondary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                  <i data-feather="more-vertical" class="icon-md"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 25.3px, 0px);" data-popper-placement="bottom-start">
                                  <a href="<?= ROOT ?>document_tracking/send_document/edit_document/<?= $data->document_id ?>" class="dropdown-item d-flex align-items-center" id="editDocument" href="javascript:;">
                                    <i data-feather="edit-2" class="icon-md me-2"></i>
                                    <span class="">Edit Document</span>
                                  </a>
                                  <a href="<?= ROOT ?>document_tracking/" class="dropdown-item d-flex align-items-center" id="followUp" href="javascript:;">
                                    <i data-feather="git-pull-request" class="icon-md me-2"></i>
                                    <span class="">Follow Up</span>
                                  </a>
                                </div>
                              </td>
                              <div class="modal fade" id="<?= $data->document_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <?php if (!empty($data->document_purpose)) : ?>
                                        <div class="p-3 bg-gray-100 rounded-2 mb-3">
                                          <?= $data->document_purpose ?>
                                        </div>
                                      <?php endif; ?>
                                      <ul class="list-group">
                                        <li class="list-group-item">
                                          <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                              <i data-feather="file" class="icon-lg me-2"></i>
                                              <div>
                                                <p class="fw-bold"><?= $data->document_name ?></p>
                                                <small class="text-muted">
                                                  <?= round($data->document_size / 1024) . ' KB' ?>
                                                </small>
                                              </div>
                                            </div>

                                            <a href="<?= ROOT . "uploads/" . $data->document_id . "/" . $data->document_name ?>">
                                              <i data-feather="download" class="icon-md"></i>
                                            </a>
                                          </div>
                                        </li>
                                      </ul>



                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-outline-danger">Decline</button>
                                      <button type="button" class="btn btn-primary">Receive Document</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
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
              <div class="tab-pane fade" id="received" role="tabpanel" aria-labelledby="received-line-tab">
                <div class="table-responsive">
                  <table id="ReceivedTable" class="table display">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Recipient</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($view_table)) :
                        foreach ($view_table as $data) :
                          if ($data->document_status == "received" && $_SESSION["department_name"] == $data->department_name) :
                      ?>
                            <tr class="align-middle" data-id="<?= $data->document_id ?>">
                              <td><?= $data->document_id ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <i data-feather="file" class="icon-lg me-2"></i>
                                  <div>
                                    <p class="fw-bold"><?= $data->document_name ?></p>
                                    <small class="text-muted">
                                      <?= round($data->document_size / 1024) . ' KB' ?>
                                    </small>
                                  </div>
                                </div>
                              </td>
                              <td><?= ucwords($data->document_category_name) ?></td>
                              <td>
                                <p class="fw-bold"><?= date("d M Y", strtotime($data->date_created)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                              </td>
                              <td>
                                <?= ucwords($data->department_name) ?>
                              </td>
                              <td class="text-center">
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="eye" class="btn-icon-prepend"></i>
                                  View Request
                                </button>

                                <a href="javascript:;" class="link-secondary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                  <i data-feather="more-vertical" class="icon-md"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 25.3px, 0px);" data-popper-placement="bottom-start">
                                  <a href="<?= ROOT ?>document_tracking/send_document/edit_document/<?= $data->document_id ?>" class="dropdown-item d-flex align-items-center" id="editDocument" href="javascript:;">
                                    <i data-feather="edit-2" class="icon-md me-2"></i>
                                    <span class="">Edit Document</span>
                                  </a>
                                  <a href="<?= ROOT ?>document_tracking/" class="dropdown-item d-flex align-items-center" id="followUp" href="javascript:;">
                                    <i data-feather="git-pull-request" class="icon-md me-2"></i>
                                    <span class="">Follow Up</span>
                                  </a>
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
              <div class="tab-pane fade" id="onhold" role="tabpanel" aria-labelledby="onhold-line-tab">
                <div class="table-responsive">
                  <table id="OnholdTable" class="table display">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Recipient</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($view_table)) :
                        foreach ($view_table as $data) :
                          if ($data->document_status == "on hold" && $_SESSION["department_name"] == $data->department_name) :
                      ?>
                            <tr class="align-middle" data-id="<?= $data->document_id ?>">
                              <td><?= $data->document_id ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <i data-feather="file" class="icon-lg me-2"></i>
                                  <div>
                                    <p class="fw-bold"><?= $data->document_name ?></p>
                                    <small class="text-muted">
                                      <?= round($data->document_size / 1024) . ' KB' ?>
                                    </small>
                                  </div>
                                </div>
                              </td>
                              <td><?= ucwords($data->document_category_name) ?></td>
                              <td>
                                <p class="fw-bold"><?= date("d M Y", strtotime($data->date_created)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                              </td>
                              <td>
                                <?= ucwords($data->department_name) ?>
                              </td>
                              <td class="text-center">
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="eye" class="btn-icon-prepend"></i>
                                  View Request
                                </button>

                                <a href="javascript:;" class="link-secondary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                  <i data-feather="more-vertical" class="icon-md"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 25.3px, 0px);" data-popper-placement="bottom-start">
                                  <a href="<?= ROOT ?>document_tracking/send_document/edit_document/<?= $data->document_id ?>" class="dropdown-item d-flex align-items-center" id="editDocument" href="javascript:;">
                                    <i data-feather="edit-2" class="icon-md me-2"></i>
                                    <span class="">Edit Document</span>
                                  </a>
                                  <a href="<?= ROOT ?>document_tracking/" class="dropdown-item d-flex align-items-center" id="followUp" href="javascript:;">
                                    <i data-feather="git-pull-request" class="icon-md me-2"></i>
                                    <span class="">Follow Up</span>
                                  </a>
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
              <div class="tab-pane fade" id="declined" role="tabpanel" aria-labelledby="declined-line-tab">
                <div class="table-responsive">
                  <table id="DeclinedTable" class="table display">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Recipient</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($view_table)) :
                        foreach ($view_table as $data) :
                          if ($data->document_status == "declined" && $_SESSION["department_name"] == $data->department_name) :
                      ?>
                            <tr class="align-middle" data-id="<?= $data->document_id ?>">
                              <td><?= $data->document_id ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <i data-feather="file" class="icon-lg me-2"></i>
                                  <div>
                                    <p class="fw-bold"><?= $data->document_name ?></p>
                                    <small class="text-muted">
                                      <?= round($data->document_size / 1024) . ' KB' ?>
                                    </small>
                                  </div>
                                </div>
                              </td>
                              <td><?= ucwords($data->document_category_name) ?></td>
                              <td>
                                <p class="fw-bold"><?= date("d M Y", strtotime($data->date_created)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                              </td>
                              <td>
                                <?= ucwords($data->department_name) ?>
                              </td>
                              <td class="text-center">
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="eye" class="btn-icon-prepend"></i>
                                  View Request
                                </button>

                                <a href="javascript:;" class="link-secondary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                  <i data-feather="more-vertical" class="icon-md"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 25.3px, 0px);" data-popper-placement="bottom-start">
                                  <a href="<?= ROOT ?>document_tracking/send_document/edit_document/<?= $data->document_id ?>" class="dropdown-item d-flex align-items-center" id="editDocument" href="javascript:;">
                                    <i data-feather="edit-2" class="icon-md me-2"></i>
                                    <span class="">Edit Document</span>
                                  </a>
                                  <a href="<?= ROOT ?>document_tracking/" class="dropdown-item d-flex align-items-center" id="followUp" href="javascript:;">
                                    <i data-feather="git-pull-request" class="icon-md me-2"></i>
                                    <span class="">Follow Up</span>
                                  </a>
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
              <div class="tab-pane fade" id="followedup" role="tabpanel" aria-labelledby="followedup-line-tab">
                <div class="table-responsive">
                  <table id="FollowedUpTable" class="table display">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Recipient</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($view_table)) :
                        foreach ($view_table as $data) :
                          if ($data->document_status == "followed up" && $_SESSION["department_name"] == $data->department_name) :
                      ?>
                            <tr class="align-middle" data-id="<?= $data->document_id ?>">
                              <td><?= $data->document_id ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <i data-feather="file" class="icon-lg me-2"></i>
                                  <div>
                                    <p class="fw-bold"><?= $data->document_name ?></p>
                                    <small class="text-muted">
                                      <?= round($data->document_size / 1024) . ' KB' ?>
                                    </small>
                                  </div>
                                </div>
                              </td>
                              <td><?= ucwords($data->document_category_name) ?></td>
                              <td>
                                <p class="fw-bold"><?= date("d M Y", strtotime($data->date_created)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                              </td>
                              <td>
                                <?= ucwords($data->department_name) ?>
                              </td>
                              <td class="text-center">
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="eye" class="btn-icon-prepend"></i>
                                  View Request
                                </button>

                                <a href="javascript:;" class="link-secondary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                  <i data-feather="more-vertical" class="icon-md"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 25.3px, 0px);" data-popper-placement="bottom-start">
                                  <a href="<?= ROOT ?>document_tracking/send_document/edit_document/<?= $data->document_id ?>" class="dropdown-item d-flex align-items-center" id="editDocument" href="javascript:;">
                                    <i data-feather="edit-2" class="icon-md me-2"></i>
                                    <span class="">Edit Document</span>
                                  </a>
                                  <a href="<?= ROOT ?>document_tracking/" class="dropdown-item d-flex align-items-center" id="followUp" href="javascript:;">
                                    <i data-feather="git-pull-request" class="icon-md me-2"></i>
                                    <span class="">Follow Up</span>
                                  </a>
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
              <div class="tab-pane fade" id="returned" role="tabpanel" aria-labelledby="returned-line-tab">
                <div class="table-responsive">
                  <table id="ReturnedTable" class="table display">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Recipient</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($view_table)) :
                        foreach ($view_table as $data) :
                          if ($data->document_status == "returned" && $_SESSION["department_name"] == $data->department_name) :
                      ?>
                            <tr class="align-middle" data-id="<?= $data->document_id ?>">
                              <td><?= $data->document_id ?></td>
                              <td>
                                <div class="d-flex align-items-center">
                                  <i data-feather="file" class="icon-lg me-2"></i>
                                  <div>
                                    <p class="fw-bold"><?= $data->document_name ?></p>
                                    <small class="text-muted">
                                      <?= round($data->document_size / 1024) . ' KB' ?>
                                    </small>
                                  </div>
                                </div>
                              </td>
                              <td><?= ucwords($data->document_category_name) ?></td>
                              <td>
                                <p class="fw-bold"><?= date("d M Y", strtotime($data->date_created)) ?></p>
                                <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                              </td>
                              <td>
                                <?= ucwords($data->department_name) ?>
                              </td>
                              <td class="text-center">
                                <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <i data-feather="eye" class="btn-icon-prepend"></i>
                                  View Request
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                      </div>
                                      <div class="modal-body">
                                        ...
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <a href="javascript:;" class="link-secondary" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                                  <i data-feather="more-vertical" class="icon-md"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 25.3px, 0px);" data-popper-placement="bottom-start">
                                  <a href="<?= ROOT ?>document_tracking/send_document/edit_document/<?= $data->document_id ?>" class="dropdown-item d-flex align-items-center" id="editDocument" href="javascript:;">
                                    <i data-feather="edit-2" class="icon-md me-2"></i>
                                    <span class="">Edit Document</span>
                                  </a>
                                  <a href="<?= ROOT ?>document_tracking/" class="dropdown-item d-flex align-items-center" id="followUp" href="javascript:;">
                                    <i data-feather="git-pull-request" class="icon-md me-2"></i>
                                    <span class="">Follow Up</span>
                                  </a>
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/send-document.js"></script>

  <!-- End custom js for this page -->

  <script>
    $(document).ready(function() {
      // handle click event on dropdown item
      $('.dropdown-menu #followUp').click(function(e) {
        e.preventDefault();
        var id = $(this).closest('tr').data('id'); // get the ID of the row to update

        console.log(id)

      });
    });
  </script>


</body>

</html>