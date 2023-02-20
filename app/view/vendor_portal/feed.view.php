<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Feed</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">
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

<style>
  .feed-scrollbar {
    position: relative;
    height: 100vh;
  }
</style>



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



        <div class="row">
          <div class="col-sm col-xl-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
              <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
              </div>
              <div class="d-flex align-items-center flex-wrap text-nowrap">
                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0" data-bs-toggle="modal" data-bs-target="#createPost">
                  <i class="btn-icon-prepend" data-feather="feather"></i>
                  Create Post
                </button>
                <div class="modal fade" id="createPost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                      </div>
                      <form id="vendorPost" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div>
                            <input type="text" name="title" id="postTitle" class="form-control mb-3" placeholder="Title">
                            <textarea class="form-control" name="body" id="tinymceExample" cols="30" rows="5" placeholder="What you're looking for?"></textarea>

                            <div class="d-flex align-items-center gap-2 mt-3">
                              <input type="radio" class="btn-check" name="category" id="btnradio1" autocomplete="off" value="1">
                              <label class="btn btn-outline-primary rounded-pill" for="btnradio1">Vehicle</label>

                              <input type="radio" class="btn-check" name="category" id="btnradio2" autocomplete="off" value="2">
                              <label class="btn btn-outline-primary rounded-pill" for="btnradio2">Office Supplies</label>

                              <input type="radio" class="btn-check" name="category" id="btnradio3" autocomplete="off" value="3">
                              <label class="btn btn-outline-primary rounded-pill" for="btnradio3">Electronics</label>
                            </div>
                            <input type="file" name="attachment" id="postAttachment" class="form-control mt-3">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-icon-text">
                            Publish Post
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="feed-scrollbar">
              <?php
              if(!empty($posts)):
                foreach($posts as $post):
              ?>
              <div class="card mb-3">
                <div class="card-body">
                  <div id="postHeader">
                    <div class="d-flex align-items-center justify-content-between mb-2 pb-2 border-bottom">
                      <div class="d-flex align-items-center">
                        <i class="icon-md me-2 text-primary" data-feather="hash"></i>
                        <h6 class="text-uppercase"><?= $post->title ?></h6>
                      </div>

                      <button class="btn btn-outline-secondary btn-icon">
                        <i class="icon-md" data-feather="sliders"></i>
                      </button>
                    </div>
                    <div class="d-block d-md-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center mb-3 mb-md-0">
                        <img class="ht-30 wd-30 rounded-circle me-2" src="https://via.placeholder.com/30x30" alt="">
                        <div class="me-3">
                          <p><?=ucwords($post->fullname)?></p>
                          <small class="text-muted"><?= date("d M h:i A", strtotime($post->date_created)) ?></small>
                        </div>
                        <div class="d-inline-flex align-items-center text-primary border border-primary py-1 px-2 rounded-pill">
                          <span class="material-symbols-outlined ms-fill me-2 fs-4">
                            verified
                          </span>
                          <small class="">Admin</small>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <button class="btn btn-primary btn-icon-text me-md-2 w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          <i class="btn-icon-prepend" data-feather="plus"></i>
                          Invite Vendors
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Invite Vendors</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="alert alert-primary" role="alert">
                                  <i data-feather="alert-circle"></i>
                                  Only verified vendors can be invited.
                                </div>
                                <div class="mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text">
                                      <i data-feather="search"></i>
                                    </div>
                                    <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                                  </div>
                                </div>

                                <div id="vendorList">
                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                      <input type="checkbox" name="skill_check" class="form-check-input me-3" id="checkInline1">
                                      <img class="ht-40 wd-40 rounded-circle me-2" src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p>SM Supermalls</p>
                                        <small class="text-muted">smvendor@smsupermalls.com</small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                      <input type="checkbox" name="skill_check" class="form-check-input me-3" id="checkInline1">
                                      <img class="ht-40 wd-40 rounded-circle me-2" src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p>SM Supermalls</p>
                                        <small class="text-muted">smvendor@smsupermalls.com</small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                      <input type="checkbox" name="skill_check" class="form-check-input me-3" id="checkInline1">
                                      <img class="ht-40 wd-40 rounded-circle me-2" src="https://via.placeholder.com/40x40" alt="">
                                      <div>
                                        <p>SM Supermalls</p>
                                        <small class="text-muted">smvendor@smsupermalls.com</small>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-icon-text">
                                  <i class="btn-icon-prepend" data-feather="send"></i>
                                  Send Invite
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="link-secondary d-none d-md-block" href="javascript:;"><i class="icon-md" data-feather="more-vertical"></i></a>
                      </div>
                    </div>
                  </div>
                  <div id="postContent">
                    <div class="py-3">
                      <?= $post->body?>
                    </div>
                  </div>
                  <div>
                    <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                          Details
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                          Bid Tracker
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                          Settings
                        </a>
                      </li>
                    </ul>
                    <div class="tab-content mt-3" id="lineTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Status</p>
                            <small class="text-muted">Current status of this post</small>
                          </div>

                          <?php if($post->post_status_name == "pending"):?>
                          <div class="border border-warning py-1 px-3 text-warning bg-warning bg-opacity-10 rounded-pill">
                            <small>
                              Pending
                            </small>
                          </div>
                          <?php endif; ?>
                          <?php if($post->post_status_name == "ongoing"):?>
                          <div class="border border-warning py-1 px-3 text-warning bg-warning bg-opacity-10 rounded-pill">
                            <small>
                              Ongoing
                            </small>
                          </div>
                          <?php endif; ?>
                          <?php if($post->post_status_name == "dismissed"):?>
                          <div class="border border-warning py-1 px-3 text-warning bg-warning bg-opacity-10 rounded-pill">
                            <small>
                              Dismissed
                            </small>
                          </div>
                          <?php endif; ?>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Date End</p>
                            <small class="text-muted">Expected to end of bid.</small>
                          </div>
                          <div class="text-end">
                            <h6><?= date("d M" , strtotime($post->date_end)) ?></h6>
                            <small class="text-muted"><?= date("h:i A" , strtotime($post->date_end)) ?></small>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                          <div>
                            <p>Category</p>
                            <small class="text-muted">Category of this post.</small>
                          </div>
                          <div>
                            <span class="badge bg-primary"><?=ucwords($post->post_category_name)?></span>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                        <div class="alert alert-primary" role="alert">
                          <i data-feather="alert-circle"></i>
                          Only current top bidders will display.
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                          <div class="d-flex align-items-center">
                            <img class="ht-30 wd-30 rounded-circle me-2" src="https://upload.wikimedia.org/wikipedia/en/thumb/6/63/SM_Supermalls_logo_2022.svg/1200px-SM_Supermalls_logo_2022.svg.png" alt="">
                            <div>
                              <p>SM Supermalls</p>
                              <small class="text-muted">smsupermalls@email.com</small>
                            </div>
                          </div>
                          </td>

                          <i class="icon-lg text-warning" data-feather="star" fill="currentColor"></i>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              endforeach;
              endif;
              ?>
            </div>
          </div>

        </div>


      </div>
    </div>

    <!-- core:js -->
    <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
    <script src="<?= ROOT ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?= ROOT ?>assets/vendors/select2/select2.min.js"></script>
    <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= ROOT ?>assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="<?= ROOT ?>assets/custom/js/tinymce.js"></script>
    <script src="<?= ROOT ?>assets/custom/js/apexcharts-light.js"></script>
    <script src="<?= ROOT ?>assets/js/select2.js"></script>
    <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
    <!-- End custom js for this page -->

    <script>
      $(document).ready(() => {
        var scrollbarExample = new PerfectScrollbar('.feed-scrollbar');

        $('#vendorPost').submit((e) => {
          e.preventDefault();

          var form = document.querySelector('#vendorPost')
          var formData = new FormData(form)

          $.ajax({
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response){
              console.log(response)
            }
          })

        })


      })
    </script>
</body>

</html>