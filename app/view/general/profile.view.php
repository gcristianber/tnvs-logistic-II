<!DOCTYPE html>

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

    <div class="page-wrapper">
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
                    <a href="<?= ROOT ?>authentication/logout" class="text-body ms-0">
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
      <div class="page-content">
        <div class="card h-100">
          <div class="card-body">
            <div class="row h-100">
              <div class="col-md-4 border-end">
                <div class="text-center">
                  <div class="position-relative">
                    <img src="https://via.placeholder.com/100x100" class="ht-100 wd-100 rounded-circle" alt="">
                    <div class=" d-inline-block p-2 rounded-circle bg-light bg-opacity-50 position-absolute top-50 start-50 translate-middle cursor-pointer">
                      <div class="d-flex align-items-center justify-content-center">
                        <i data-feather="camera" class="icon-md text-dark"></i>
                      </div>
                    </div>
                  </div>
                  <div class="mt-3">
                    <h3 class="text-uppercase">Cristianber Gordora</h3>
                    <p class="text-muted">Super Admin</p>
                  </div>
                </div>
                <div class="list-group mt-4">
                  <a href="#" class="list-group-item list-group-item-action active">
                    <div class="d-flex align-items-center gap-3">
                      <i data-feather="user" class="icon-lg link-icon"></i>
                      <div>
                        <p>Account</p>
                        <small>Manage your public profile and private information</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center gap-3">
                      <i data-feather="lock" class="icon-lg link-icon"></i>
                      <div>
                        <p>Security</p>
                        <small>Manage your password</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center gap-3">
                      <i data-feather="briefcase" class="icon-lg link-icon"></i>
                      <div>
                        <p>ESS Account</p>
                        <small>Manage your ESS Account</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex align-items-center gap-3">
                      <i data-feather="list" class="icon-lg link-icon"></i>
                      <div>
                        <p>Activity Log</p>
                        <small>Manage your logs</small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-8 mt-4 mt-md-0">
                <div class="row perfect-scrollbar-example position-relative">
                  <div class="col-md-12 grid-margin">
                    <p class="fs-3">Profile</p>
                    <small class="text-muted">Following information is publicly displayed.</small>
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" name="" id="" class="form-control" value="Cristianber">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Middle Name</label>
                    <input type="text" name="" id="" class="form-control" value="">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" name="" id="" class="form-control" value="Gordora">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Suffix</label>
                    <input type="text" name="" id="" class="form-control" value="">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="" id="" class="form-control" value="super_admin@logistic">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Role</label>
                    <select name="" class="form-select" id="">
                      <option value="1" selected>Super Admin</option>
                    </select>
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Employee ID</label>
                    <input type="text" name="" id="" class="form-control" value="">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Department</label>
                    <select name="" class="form-select" id="">
                      <option value="1" selected>Logistic</option>
                    </select>
                  </div>
                  <div class="col-md-12 grid-margin">
                    <p class="fs-3">Personal Information</p>
                    <small class="text-muted">Communication details in case we want to connect with you.</small>
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Email</label>
                    <input type="text" name="" id="" class="form-control" value="gcristianber@gmail.com">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Secondary Email</label>
                    <input type="text" name="" id="" class="form-control" value="">
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">Contact Number</label>
                    <input type="text" name="" id="" class="form-control" value="">
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
  <!-- End custom js for this page -->
  <script>
    // javascript
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
  </script>

</body>

</html>