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
          <img class="ht-30 wd-30" src="<?= ROOT ?>assets/images/favicon.png" alt="">
          Lulan
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
            <a href="<?= ROOT ?>document_tracking/request_document" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Request Document</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/send_document" class="nav-link">
              <i class="link-icon" data-feather="send"></i>
              <span class="link-title">Send Document</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/file_manager" class="nav-link">
              <i class="link-icon" data-feather="folder"></i>
              <span class="link-title">File Manager</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/grant_documents" class="nav-link">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Grant Documents</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/incoming_documents" class="nav-link">
              <i class="link-icon" data-feather="file-text"></i>
              <span class="link-title">Incoming Documents</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>document_tracking/document_requests" class="nav-link">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Document Requests</span>
            </a>
          </li>


          <li class="nav-item nav-category">VEHICLE RESERVATION</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vehicle_reservation/browse_vehicles" class="nav-link">
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
            <a href="<?= ROOT ?>vehicle_reservation/vehicle_reservation_reports" class="nav-link">
              <i class="link-icon" data-feather="flag"></i>
              <span class="link-title">Vehicle Reports</span>
            </a>
          </li>
          <li class="nav-item nav-category">VENDOR PORTAL</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vendor_portal_admin/newsfeed" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Newsfeed</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= ROOT ?>vendor_portal_admin/manage_contracts" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Manage Contracts</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vendor_portal_admin/manage_vendors" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Manage Vendors</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>vendor_portal_admin/purchase_requests" class="nav-link">
              <i class="link-icon" data-feather="shopping-cart"></i>
              <span class="link-title">Purchase Requests</span>
            </a>
          </li>

          <li class="nav-item nav-category">AUDIT MANAGEMENT</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>audit_management/create_report" class="nav-link">
              <i class="link-icon" data-feather="plus"></i>
              <span class="link-title">Create Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>audit_management/audit_logs" class="nav-link">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Audit Logs</span>
            </a>
          </li>
          <li class="nav-item nav-category">FLEET MANAGEMENT</li>
          <li class="nav-item">
            <a href="<?= ROOT ?>fleet_management/navigate_vehicle" class="nav-link">
              <i class="link-icon" data-feather="navigation"></i>
              <span class="link-title">Navigate Vehicle</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>fleet_management/track_delivers" class="nav-link">
              <i class="link-icon" data-feather="package"></i>
              <span class="link-title">Track Delivers</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>fleet_management/delivery_logs" class="nav-link">
              <i class="link-icon" data-feather="table"></i>
              <span class="link-title">Delivery Logs</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>fleet_management/delivery_requests" class="nav-link">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Delivery Requests</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>fleet_management/manage_vehicles" class="nav-link">
              <i class="link-icon" data-feather="truck"></i>
              <span class="link-title">Manage Vehicles</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= ROOT ?>fleet_management/manage_drivers" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Manage Drivers</span>
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

        <div class="card">
          <div class="card-body">

            <div class="mb-3 d-flex align-items-center justify-content-between">
              <div>
                <h6>INCOMING DOCUMENTS</h6>
                <small class="text-muted">Manage your sent documents.</small>
              </div>
            </div>

            <div class="alert alert-primary" role="alert">
              <i data-feather="alert-circle"></i>
              A simple primary alert—check it out!
            </div>

            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Received</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="completed-line-tab" data-bs-toggle="tab" href="#completed" role="tab" aria-controls="completed" aria-selected="false">On Hold</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="declined-line-tab" data-bs-toggle="tab" href="#declined" role="tab" aria-controls="declined" aria-selected="false">Declined</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="declined-line-tab" data-bs-toggle="tab" href="#declined" role="tab" aria-controls="declined" aria-selected="false">Followed Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="declined-line-tab" data-bs-toggle="tab" href="#declined" role="tab" aria-controls="declined" aria-selected="false">Returned</a>
              </li>
            </ul>
            <div class="tab-content mt-3" id="lineTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                <div class="mb-3">
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                  <label class="btn btn-outline-primary" for="btnradio1">All</label>
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio2">Employment Certificate</label>
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3">Time-Off Request</label>
                  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3">Report</label>
                </div>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Document Id</th>
                        <th>Document Name</th>
                        <th>Category</th>
                        <th>Date Created</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th data-orderable="false" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>doc63fb2261b7e24</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <i data-feather="file" class="icon-lg me-2"></i>
                            <div>
                              <p class="fw-bold">Test File.docx</p>
                              <small class="text-muted">200 KB</small>
                            </div>
                          </div>
                          
                        </td>
                        <td>Contract</td>
                        <td>
                          <p class="fw-bold">06 Jan 2023</p>
                          <small class="text-muted">05:13 PM</small>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <img class="ht-40 wd-40 rounded-circle me-2" src="https://via.placeholder.com/40x40" alt="">
                            <div>
                              <p>John Doe</p>
                              <small class="text-muted">Super Admin</small>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-warning">Pending</span>
                        </td>
                        <td class="text-center">
                          <button class="btn btn-primary btn-icon-text">
                            <i data-feather="eye" class="btn-icon-prepend"></i>
                            View Request
                          </button>
                          <a href="" class="link-secondary">
                            <i data-feather="more-vertical" class="icon-md"></i>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="contact-line-tab">...</div>
              <div class="tab-pane fade" id="declined" role="tabpanel" aria-labelledby="success-line-tab">decline</div>
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
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/data-table.js"></script>
  <!-- End custom js for this page -->
</body>

</html>