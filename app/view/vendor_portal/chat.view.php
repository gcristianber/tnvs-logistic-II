<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Chat</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
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
              <i class="link-icon" data-feather="message-circle"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Invites</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Contracts</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="link-icon" data-feather="shopping-cart"></i>
              <span class="link-title">Purchase Orders</span>
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
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Team</span>
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
        <div class="row chat-wrapper">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row position-relative">
                  <div class="col-lg-4 chat-aside border-end-lg">
                    <div class="aside-content">
                      <div class="aside-header">
                        <div class="d-flex justify-content-between align-items-center pb-2 mb-2">
                          <div class="d-flex align-items-center">
                            <figure class="me-2 mb-0">
                              <img src="https://via.placeholder.com/43x43" class="img-sm rounded-circle" alt="profile">
                              <div class="status online"></div>
                            </figure>
                            <div>
                              <h6>Amiah Burton</h6>
                              <p class="text-muted tx-13">Vendor Staff</p>
                            </div>
                          </div>
                          <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="icon-lg text-muted pb-3px" data-feather="settings" data-bs-toggle="tooltip" title="Settings"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View Profile</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit Profile</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="aperture" class="icon-sm me-2"></i> <span class="">Add status</span></a>
                              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="settings" class="icon-sm me-2"></i> <span class="">Settings</span></a>
                            </div>
                          </div>
                        </div>
                        <form class="search-form">
                          <div class="input-group">
                            <span class="input-group-text">
                              <i data-feather="search" class="cursor-pointer"></i>
                            </span>
                            <input type="text" class="form-control" id="searchForm" placeholder="Search here...">
                          </div>
                        </form>
                      </div>
                      <div class="aside-body">
                        <ul class="nav nav-tabs nav-fill mt-3" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="chats-tab" data-bs-toggle="tab" data-bs-target="#chats" role="tab" aria-controls="chats" aria-selected="true">
                              <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                <i data-feather="message-circle" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                <p class="d-none d-sm-block">All</p>
                              </div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="calls-tab" data-bs-toggle="tab" data-bs-target="#calls" role="tab" aria-controls="calls" aria-selected="false">
                              <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                <i data-feather="phone-call" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                <p class="d-none d-sm-block">Calls</p>
                              </div>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts" role="tab" aria-controls="contacts" aria-selected="false">
                              <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                <i data-feather="users" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                <p class="d-none d-sm-block">Contacts</p>
                              </div>
                            </a>
                          </li>
                        </ul>
                        <div class="tab-content mt-3">
                          <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                            <div>
                              <p class="text-muted mb-1">Recent chats</p>
                              <ul class="list-unstyled chat-list px-1">
                                <li class="chat-item pe-1">
                                  <a href="javascript:;" class="d-flex align-items-center">
                                    <figure class="mb-0 me-3">
                                      <div class="position-relative">
                                        <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">

                                        <span class="rounded-circle position-absolute bottom-0 start-100 translate-middle-x fs-4 material-symbols-outlined ms-fill" style="background-color: #FFFFFF;">verified</span>
                                      </div>
                                    </figure>
                                    <div class="d-flex justify-content-between flex-grow-1 border-bottom">
                                      <div>
                                        <p class="text-body fw-bolder">SM Supermalls</p>
                                        <p class="text-muted tx-13">Greetings!</p>
                                      </div>
                                      <div class="d-flex flex-column align-items-end">
                                        <p class="text-muted tx-13 mb-1">4:32 PM</p>
                                        <div class="badge rounded-pill bg-danger ms-auto">3</div>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <li class="chat-item pe-1">
                                  <a href="javascript:;" class="d-flex align-items-center">
                                    <figure class="mb-0 me-2">
                                      <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                      <div class="status offline"></div>
                                    </figure>
                                    <div class="d-flex justify-content-between flex-grow-1 border-bottom">
                                      <div>
                                        <p class="text-body fw-bolder">Carl Henson</p>
                                        <div class="d-flex align-items-center">
                                          <i data-feather="image" class="text-muted icon-md mb-2px"></i>
                                          <p class="text-muted ms-1">Photo</p>
                                        </div>
                                      </div>
                                      <div class="d-flex flex-column align-items-end">
                                        <p class="text-muted tx-13 mb-1">05:24 PM</p>
                                        <div class="badge rounded-pill bg-danger ms-auto">3</div>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="calls" role="tabpanel" aria-labelledby="calls-tab">
                            <p class="text-muted mb-1">Recent calls</p>
                            <ul class="list-unstyled chat-list px-1">
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status online"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">Jensen Combs</p>
                                      <div class="d-flex align-items-center">
                                        <i data-feather="arrow-up-right" class="icon-sm text-success me-1"></i>
                                        <p class="text-muted tx-13">Today, 03:11 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <i data-feather="phone-call" class="text-primary icon-md"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">Leonardo Payne</p>
                                      <div class="d-flex align-items-center">
                                        <i data-feather="arrow-down-left" class="icon-sm text-success me-1"></i>
                                        <p class="text-muted tx-13">Today, 11:41 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <i data-feather="video" class="text-primary icon-md"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">Carl Henson</p>
                                      <div class="d-flex align-items-center">
                                        <i data-feather="arrow-down-left" class="icon-sm text-danger me-1"></i>
                                        <p class="text-muted tx-13">Today, 04:24 PM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <i data-feather="phone-call" class="text-primary icon-md"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status online"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">Jensen Combs</p>
                                      <div class="d-flex align-items-center">
                                        <i data-feather="arrow-down-left" class="icon-sm text-danger me-1"></i>
                                        <p class="text-muted tx-13">Today, 12:53 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <i data-feather="video" class="text-primary icon-md"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status online"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <i data-feather="arrow-down-left" class="icon-sm text-success me-1"></i>
                                        <p class="text-muted tx-13">Today, 01:42 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <i data-feather="video" class="text-primary icon-md"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <i data-feather="arrow-up-right" class="icon-sm text-success me-1"></i>
                                        <p class="text-muted tx-13">Today, 12:01 AM</p>
                                      </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-end">
                                      <i data-feather="phone-call" class="text-primary icon-md"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-muted mb-1">Contacts</p>
                            <ul class="list-unstyled chat-list px-1">
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">Amiah Burton</p>
                                      <div class="d-flex align-items-center">
                                        <p class="text-muted tx-13">Front-end Developer</p>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-end text-body">
                                      <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                                      <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                                      <i data-feather="video" class="icon-md text-primary"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status online"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <p class="text-muted tx-13">Back-end Developer</p>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-end text-body">
                                      <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                                      <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                                      <i data-feather="video" class="icon-md text-primary"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">Yaretzi Mayo</p>
                                      <div class="d-flex align-items-center">
                                        <p class="text-muted tx-13">Fullstack Developer</p>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-end text-body">
                                      <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                                      <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                                      <i data-feather="video" class="icon-md text-primary"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <li class="chat-item pe-1">
                                <a href="javascript:;" class="d-flex align-items-center">
                                  <figure class="mb-0 me-2">
                                    <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                    <div class="status offline"></div>
                                  </figure>
                                  <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                    <div>
                                      <p class="text-body">John Doe</p>
                                      <div class="d-flex align-items-center">
                                        <p class="text-muted tx-13">Front-end Developer</p>
                                      </div>
                                    </div>
                                    <div class="d-flex align-items-end text-body">
                                      <i data-feather="message-square" class="icon-md text-primary me-2"></i>
                                      <i data-feather="phone-call" class="icon-md text-primary me-2"></i>
                                      <i data-feather="video" class="icon-md text-primary"></i>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8 chat-content">
                    <div class="chat-header border-bottom pb-2">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                          <i data-feather="corner-up-left" id="backToChatList" class="icon-lg me-2 ms-n2 text-muted d-lg-none"></i>
                          <figure class="mb-0 me-2">
                            <img src="https://via.placeholder.com/43x43" class="img-sm rounded-circle" alt="image">
                            <div class="status online"></div>
                            <div class="status online"></div>
                          </figure>
                          <div>
                            <p>SM Supermalls</p>
                            <p class="text-muted tx-13">smvendor@smsupermalls.com</p>
                          </div>
                        </div>
                        <div class="d-flex align-items-center me-n1">
                          <a href="#">
                            <i data-feather="video" class="icon-lg text-muted me-3" data-bs-toggle="tooltip" title="Start video call"></i>
                          </a>
                          <a href="#">
                            <i data-feather="phone-call" class="icon-lg text-muted me-0 me-sm-3" data-bs-toggle="tooltip" title="Start voice call"></i>
                          </a>
                          <a href="#" class="d-none d-sm-block">
                            <i data-feather="star" class="icon-lg text-muted" data-bs-toggle="tooltip" title="Mark as Top"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="chat-body">
                      <ul class="messages">
                        <li class="message-item friend">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                              <span>8:12 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item me">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                              </div>
                            </div>
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum.</p>
                              </div>
                              <span>8:13 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item friend">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                              <span>8:15 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item me">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                              </div>
                              <span>8:15 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item friend">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                              <span>8:17 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item me">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                              </div>
                            </div>
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum.</p>
                              </div>
                              <span>8:18 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item friend">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                              <span>8:22 PM</span>
                            </div>
                          </div>
                        </li>
                        <li class="message-item me">
                          <img src="https://via.placeholder.com/36x36" class="img-xs rounded-circle" alt="avatar">
                          <div class="content">
                            <div class="message">
                              <div class="bubble">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.</p>
                              </div>
                              <span>8:30 PM</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="chat-footer d-flex">
                      <div>
                        <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Emoji">
                          <i data-feather="smile" class="text-muted"></i>
                        </button>
                      </div>
                      <div class="d-none d-md-block">
                        <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Attatch files">
                          <i data-feather="paperclip" class="text-muted"></i>
                        </button>
                      </div>
                      <div class="d-none d-md-block">
                        <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Record you voice">
                          <i data-feather="mic" class="text-muted"></i>
                        </button>
                      </div>
                      <form class="search-form flex-grow-1 me-2">
                        <div class="input-group">
                          <input type="text" class="form-control rounded-pill" id="chatForm" placeholder="Type a message">
                        </div>
                      </form>
                      <div>
                        <button type="button" class="btn btn-primary btn-icon rounded-circle">
                          <i data-feather="send"></i>
                        </button>
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
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= ROOT ?>assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="<?= ROOT ?>assets/js/chat.js"></script>
    <!-- End custom js for this page -->
</body>

</html>