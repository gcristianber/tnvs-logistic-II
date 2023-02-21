<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

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

        <div class="row">
          <div class="col-sm-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <div class="d-flex align-items-center">
                    <i class="me-2 icon-lg text-success" data-feather="archive"></i>
                    <h5>ARCHIVED DOCUMENTS</h5>
                  </div>
                  <small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small>
                </div>

                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Control Number</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Author</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (!empty($received)) :
                        foreach ($received as $item) :
                      ?>
                          <tr class="align-middle">
                            <td><?= $item->tracking_id ?></td>
                            <td><?= $item->title ?></td>
                            <td><?= $item->category_name ?></td>
                            <td>
                              <p><?= date("d M Y", strtotime($item->date_created)) ?></p>
                              <small class="text-muted"><?= date("h:i A", strtotime($item->date_created)) ?></small>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <img class="ht-20 wd-20 rounded-circle me-2" src="https://via.placeholder.com/40x40" alt="">
                                <div>
                                  <p><?= $item->author_name ?></p>
                                  <small class="text-muted"><?= $item->author_dept_name ?></small>
                                </div>
                              </div>
                            </td>
                            <td>
                              <?php if ($item->priority_name == 'high') : ?>
                                <div class="text-danger d-flex align-items-center">
                                  <i class="icon-md me-2" fill="currentColor" style="transform: rotate(0deg);" data-feather="triangle"></i>
                                  High
                                </div>
                              <?php endif; ?>
                              <?php if ($item->priority_name == 'medium') : ?>
                                <div class="text-secondary d-flex align-items-center">
                                  <i class="icon-md me-2" fill="currentColor" style="transform: rotate(0deg);" data-feather="minus"></i>
                                  Medium
                                </div>
                              <?php endif; ?>
                              <?php if ($item->priority_name == 'low') : ?>
                                <div class="text-success d-flex align-items-center">
                                  <i class="icon-md me-2" fill="currentColor" style="transform: rotate(180deg);" data-feather="triangle"></i>
                                  Low
                                </div>
                              <?php endif; ?>
                            </td>
                            <td>
                              <?php if ($item->status_name == 'pending') : ?>
                                <span class="badge bg-warning">Pending</span>
                              <?php endif; ?>
                              <?php if ($item->status_name == 'received') : ?>
                                <span class="badge bg-primary">Received</span>
                              <?php endif; ?>
                              <?php if ($item->status_name == 'working') : ?>
                                <span class="badge bg-info">Working</span>
                              <?php endif; ?>
                              <?php if ($item->status_name == 'onhold') : ?>
                                <span class="badge bg-secondary">On Hold</span>
                              <?php endif; ?>
                              <?php if ($item->status_name == 'archived') : ?>
                                <span class="badge bg-success">Archived</span>
                              <?php endif; ?>
                              <?php if ($item->status_name == 'declined') : ?>
                                <span class="badge bg-danger">Declined</span>
                              <?php endif; ?>
                            </td>
                            <form method="POST" id="actionBtns">
                              <td>
                                <input type="hidden" id="rowId" value="<?= $item->tracking_id ?>">
                                <?php if ($item->status_name == 'pending') : ?>
                                  <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;" data-bs-toggle="modal" data-bs-target="#<?= $item->tracking_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Open</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnReceive" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="mail" class="icon-sm me-2"></i> <span class="">Receive</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnDecline" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="slash" class="icon-sm me-2"></i> <span class="">Decline</span></a>
                                  </div>
                                <?php endif; ?>
                                <?php if ($item->status_name == 'received') : ?>
                                  <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;" data-bs-toggle="modal" data-bs-target="#<?= $item->tracking_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Open</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnWorking" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="activity" class="icon-sm me-2"></i> <span class="">Working</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnArchive" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="archive" class="icon-sm me-2"></i> <span class="">Archive</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnOnHold" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="search" class="icon-sm me-2"></i> <span class="">Hold</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnDecline" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="slash" class="icon-sm me-2"></i> <span class="">Decline</span></a>
                                  </div>
                                <?php endif; ?>
                                <?php if ($item->status_name == 'working') : ?>
                                  <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;" data-bs-toggle="modal" data-bs-target="#<?= $item->tracking_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Open</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnArchive" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="archive" class="icon-sm me-2"></i> <span class="">Archive</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnEdit" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnDecline" data-id="<?= $item->tracking_id ?>" href="javascript:;"><i data-feather="slash" class="icon-sm me-2"></i> <span class="">Decline</span></a>
                                  </div>
                                <?php endif; ?>
                                <?php if ($item->status_name == 'declined') : ?>
                                  <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:;" data-bs-toggle="modal" data-bs-target="#<?= $item->tracking_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Open</span></a>
                                  </div>
                                <?php endif; ?>
                                <?php if ($item->status_name == 'onhold') : ?>
                                  <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:; data-id=" <?= $item->tracking_id ?>" data-bs-toggle="modal" data-bs-target="#<?= $item->tracking_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Open</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnArchive" href="javascript:;" data-id="<?= $item->tracking_id ?>"><i data-feather="archive" class="icon-sm me-2"></i> <span class="">Archive</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnEdit" href="javascript:;" data-id="<?= $item->tracking_id ?>"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center btnDecline" href="javascript:;" data-id="<?= $item->tracking_id ?>"><i data-feather="slash" class="icon-sm me-2"></i> <span class="">Decline</span></a>
                                  </div>
                                <?php endif; ?>
                                <?php if ($item->status_name == 'archived') : ?>
                                  <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="javascript:; data-id=" <?= $item->tracking_id ?>" data-bs-toggle="modal" data-bs-target="#<?= $item->tracking_id ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">Open</span></a>
                                  </div>
                                <?php endif; ?>

                                <div class="modal fade" id="<?= $item->tracking_id ?>" tabindex="-1" aria-labelledby="<?= $item->tracking_id ?>" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title me-2" id="exampleModalLabel"><?= $item->title ?></h5>
                                        <?php if ($item->priority_name == 'high') : ?>
                                          <div class="text-danger d-flex align-items-center">
                                            <i class="icon-md me-2" fill="currentColor" style="transform: rotate(0deg);" data-feather="triangle"></i>
                                          </div>
                                        <?php endif; ?>
                                        <?php if ($item->priority_name == 'medium') : ?>
                                          <div class="text-secondary d-flex align-items-center">
                                            <i class="icon-md me-2" fill="currentColor" style="transform: rotate(0deg);" data-feather="minus"></i>
                                          </div>
                                        <?php endif; ?>
                                        <?php if ($item->priority_name == 'low') : ?>
                                          <div class="text-success d-flex align-items-center">
                                            <i class="icon-md me-2" fill="currentColor" style="transform: rotate(180deg);" data-feather="triangle"></i>
                                          </div>
                                        <?php endif; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="p-3 bg-gray-100 text-wrap mb-4">
                                          <?= $item->body ?>
                                        </div>

                                        <div>
                                          <div>
                                            <div class="px-3 pb-4">
                                              <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                  Tracking Number
                                                </div>
                                                <div>
                                                  <div class="d-flex align-items-center">
                                                    <p class="text-muted me-2"><?= $item->tracking_id ?></p>

                                                    <a href="javascript:;" id="copyClipboard" data-id="<?= $item->tracking_id ?>">
                                                      <i class="text-primary icon-md" data-feather="copy"></i>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="perfect-scrollbar-example">
                                              <ul class="list-group list-group-flush ">



                                                <?php
                                                foreach ($tracker_status as $status) :
                                                  if ($status->tracking_id == $item->tracking_id) :
                                                    if ($status->status_name == 'declined') :
                                                ?>
                                                      <li class="list-group-item bg-danger bg-opacity-10 rounded-2">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                          <div class="d-flex align-items-center">
                                                            <i class="text-danger icon-md me-3" data-feather="alert-triangle"></i>
                                                            <div>
                                                              <p class="text-danger">Declined</p>
                                                              <small class="text-danger">Your document has been declined.</small>
                                                            </div>
                                                          </div>
                                                          <div class="text-end">
                                                            <h6 class="text-dark tx-14"><?= date("d M", strtotime($status->action_date)) ?></h6>
                                                            <p class="text-muted tx-12"><?= date("h:i A", strtotime($status->action_date)) ?></p>
                                                          </div>
                                                        </div>
                                                      </li>
                                                <?php
                                                    endif;
                                                  endif;
                                                endforeach;
                                                ?>

                                                <?php
                                                foreach ($tracker_status as $status) :
                                                  if ($status->tracking_id == $item->tracking_id) :
                                                    if ($status->status_name == 'archived') :
                                                ?>
                                                      <li class="list-group-item bg-success bg-opacity-10 rounded-2">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                          <div class="d-flex align-items-center">
                                                            <i class="text-success icon-md me-3" data-feather="check-circle"></i>
                                                            <div>
                                                              <p class="text-success">Archived</p>
                                                              <small class="text-success">Your document has been successfuly archived.</small>
                                                            </div>
                                                          </div>
                                                          <div class="text-end">
                                                            <h6 class="text-dark tx-14"><?= date("d M", strtotime($status->action_date)) ?></h6>
                                                            <p class="text-muted tx-12"><?= date("h:i A", strtotime($status->action_date)) ?></p>
                                                          </div>
                                                        </div>
                                                      </li>
                                                <?php
                                                    endif;
                                                  endif;
                                                endforeach;
                                                ?>

                                                <?php
                                                foreach ($tracker_status as $status) :
                                                  if ($status->tracking_id == $item->tracking_id) :
                                                    if ($status->status_name == 'onhold') :
                                                ?>
                                                      <li class="list-group-item">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                          <div class="d-flex align-items-center">
                                                            <i class="text-secondary icon-md me-3" data-feather="search"></i>
                                                            <div>
                                                              <p>On Hold</p>
                                                              <small class="text-muted">Document has been hold</small>
                                                            </div>
                                                          </div>
                                                          <div class="text-end">
                                                            <h6 class="text-dark tx-14"><?= date("d M", strtotime($status->action_date)) ?></h6>
                                                            <p class="text-muted tx-12"><?= date("h:i A", strtotime($status->action_date)) ?></p>
                                                          </div>
                                                        </div>
                                                      </li>
                                                <?php
                                                    endif;
                                                  endif;
                                                endforeach;
                                                ?>
                                                <?php
                                                foreach ($tracker_status as $status) :
                                                  if ($status->tracking_id == $item->tracking_id) :
                                                    if ($status->status_name == 'received') :
                                                ?>
                                                      <li class="list-group-item">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                          <div class="d-flex align-items-center">
                                                            <i class="text-secondary icon-md me-3" data-feather="mail"></i>
                                                            <div>
                                                              <p>Received</p>
                                                              <small class="text-muted">Document has been received</small>
                                                            </div>
                                                          </div>
                                                          <div class="text-end">
                                                            <h6 class="text-dark tx-14"><?= date("d M", strtotime($status->action_date)) ?></h6>
                                                            <p class="text-muted tx-12"><?= date("h:i A", strtotime($status->action_date)) ?></p>
                                                          </div>
                                                        </div>
                                                      </li>
                                                <?php
                                                    endif;
                                                  endif;
                                                endforeach;
                                                ?>
                                                <?php
                                                foreach ($tracker_status as $status) :
                                                  if ($status->tracking_id == $item->tracking_id) :
                                                    if ($status->status_name == 'pending') :
                                                ?>
                                                      <li class="list-group-item">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                          <div class="d-flex align-items-center">
                                                            <i class="text-secondary icon-md me-3" data-feather="more-horizontal"></i>
                                                            <div>
                                                              <p>Pending</p>
                                                              <small class="text-muted">Document has been set to pending.</small>
                                                            </div>
                                                          </div>
                                                          <div class="text-end">
                                                            <h6 class="text-dark tx-14"><?= date("d M", strtotime($status->action_date)) ?></h6>
                                                            <p class="text-muted tx-12"><?= date("h:i A", strtotime($status->action_date)) ?></p>
                                                          </div>
                                                        </div>
                                                      </li>
                                                <?php
                                                    endif;
                                                  endif;
                                                endforeach;
                                                ?>

                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </td>
                            </form>
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
    <script src="<?= ROOT ?>assets/js/dashboard-light.js"></script>
    <script src="<?= ROOT ?>assets/js/data-table.js"></script>
    <script src="<?= ROOT ?>assets/js/datepicker.js"></script>
    <!-- End custom js for this page -->

    <script>
      $(document).ready(() => {

        var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');

        $(document).on("click", "#copyClipboard", function() {
          var id = $(this).data("id");
          navigator.clipboard.writeText(id)
        });


        $(document).on("click", ".btnReceive", function() {
          var id = $(this).data("id");
          $.ajax({
            method: "POST",
            data: {
              is_received: true,
              target_id: id
            },
            success: (response) => {
              console.log(response)
            }
          })
        });

        $(document).on("click", ".btnWorking", function() {
          var id = $(this).data("id");
          $.ajax({
            method: "POST",
            data: {
              is_working: true,
              target_id: id
            },
            success: (response) => {
              console.log(response)
            }
          })
        });

        $(document).on("click", ".btnOnHold", function() {
          var id = $(this).data("id");
          $.ajax({
            method: "POST",
            data: {
              is_hold: true,
              target_id: id
            },
            success: (response) => {
              console.log(response)
            }
          })
        });

        $(document).on("click", ".btnArchive", function() {
          var id = $(this).data("id");
          $.ajax({
            method: "POST",
            data: {
              is_archived: true,
              target_id: id
            },
            success: (response) => {
              console.log(response)
            }
          })
        });

        $(document).on("click", ".btnDecline", function() {
          var id = $(this).data("id");
          $.ajax({
            method: "POST",
            data: {
              is_declined: true,
              target_id: id
            },
            success: (response) => {
              console.log(response)
            }
          })
        });

      })
    </script>
</body>

</html>