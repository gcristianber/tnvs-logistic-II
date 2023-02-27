<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Compose Document</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <!-- v4 -->
  <script src='https://unpkg.com/tesseract.js@4.0.2/dist/tesseract.min.js'></script>
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

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Create Document</a></li>
            <li class="breadcrumb-item active" aria-current="page">Compose</li>
          </ol>
        </nav>



        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
              <a href="<?= ROOT ?>document_tracking/send_document">
                <i data-feather="chevron-left" class="icon-lg"></i>
                Back
              </a>
              <div class="text-center">
                <h3 id="documentTitle" contenteditable="true">Untitled</h3>
                <small class="text-muted">Created by You</small>
              </div>
              <div>
                <button class="btn btn-outline-secondary btn-icon-text" id="useOcr" data-bs-toggle="modal" data-bs-target="#ocrModal">
                  <i class="btn-icon-prepend" data-feather="code"></i>
                  OCR
                </button>
                <div class="modal fade" id="ocrModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                          <i data-feather="code" class="text-primary icon-md me-2"></i>
                          Use OCR
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                      </div>
                      <div class="modal-body">
                        <h6 class="card-title">OPTICAL CHARACTER RECOGNITION</h6>
                        <p class="text-muted mb-3">Read the <a href="https://github.com/JeremyFagis/dropify" target="_blank"> Official Dropify Documentation </a>for a full list of instructions and other options.</p>
                        <input type="file" id="myDropify" />
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-icon-text" id="btnConvertOCR">
                          <i data-feather="refresh-ccw" class="btn-icon-prepend"></i>
                          Convert
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <button class="btn btn-primary btn-icon-text" id="sendDocument">
                  <i class="btn-icon-prepend" data-feather="send"></i>
                  Send Document
                </button>
              </div>
            </div>
          </div>
          <div></div>
          <div class="card-body">

            <div class="row">
              <div class="col-md-6 grid-margin">
                <label for="category" class="form-label">
                  <div>
                    <p class="fw-bold">Category</p>
                    <small class="text-muted">Select a category based on your document.</small>
                  </div>
                </label>
                <select class="js-example-basic-single form-select" id="category" data-width="100%">
                  <option value="TX">Contract</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="category" class="form-label">
                  <div>
                    <p class="fw-bold">Recipient</p>
                    <small class="text-muted">Choose a department to send through. </small>
                  </div>
                </label>
                <select class="js-example-basic-single form-select" data-width="100%">
                  <option value="TX">Administrative</option>
                  <option value="TX">Administrative</option>
                </select>
              </div>

            </div>
            <textarea class="form-control" name="tinymce" id="tinymceExample" rows="10" placeholder="Type something...">

          </textarea>
          </div>
        </div>


      </div>

    </div>
  </div>

  <!-- v4 -->
  <script src='https://unpkg.com/tesseract.js@4.0.2/dist/tesseract.min.js'></script>

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/select2/select2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/select2.js"></script>


  <script src="<?= ROOT ?>assets/custom/js/custom.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>

  <!-- End custom js for this page -->

  <script>
    tinymce.init({
      selector: '#tinymceExample',
      menubar: true,
      height: 600,
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak table uploadimage print',
      toolbar1: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link image | table | print | importword',
      menu: {title: 'Import Word Document', cmd: 'mceImportWord'},
      image_title: true,
      automatic_uploads: true,
      file_picker_types: 'image',
      file_picker_callback: function(cb, value, meta) {
        
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.onchange = function() {
          var file = this.files[0];
          var reader = new FileReader();

          reader.onload = function() {
            var id = 'blobid' + (new Date()).getTime();
            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
            var base64 = reader.result.split(',')[1];
            var blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            // Blob info
            console.log(blobInfo.blobUri())

            // call the callback and populate the Title field with the file name
            cb(blobInfo.blobUri(), {
              title: file.name
            });
          };


          reader.readAsDataURL(file);
        };

        input.click();

      }
    })
  </script>


</body>

</html>