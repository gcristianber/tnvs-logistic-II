<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Vendor Portal | Create Post</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
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
<style>
  .dataTables_filter {
    display: none;
  }
</style>

<body>
  <div class="main-wrapper">
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
                  <p class="tx-16 fw-bolder"><?= $_SESSION["user"]->display_name ?></p>
                  <p class="tx-12 text-muted"><?= $_SESSION["user"]->username ?></p>
                </div>
              </div>
              <ul class="list-unstyled p-1">
                <li class="dropdown-item py-2">
                  <a href="<?= ROOT ?>general/profile" class="text-body ms-0">
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
    <div class="page-wrapper">
      <div class="page-content">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center gap-2">
                      <i data-feather="mail" class="icon-lg"></i>
                      <div>
                        <p class="d-inline align-middle me-2"><?= $tender->tender_id ?></p><span class="badge bg-warning">Pending</span>
                        <small class="d-block">11/05/2023 - 08:35 PM | Goods and Services | Purchase Request</small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="text-center mb-3">
                    <h5><?= $tender->subject ?></h5>
                  </div>
                  <div class="mb-3 ">
                    <p class="text-justify"><?= $tender->description ?></p>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>goods/service</th>
                          <th>amount (php)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        if (!empty($line_items)) :
                          foreach ($line_items as $data) :
                        ?>
                            <tr>
                              <td>1</td>
                              <td><?= $data->goods_services_name ?></td>
                              <td class="text-end"><?= $data->amount ?></td>
                            </tr>
                        <?php
                          endforeach;
                        endif;
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td></td>
                          <td class="text-end">
                            <p class="fw-bold">TOTAL</p>
                          </td>
                          <td class="text-end">
                            <p class="fw-bold">PHP 26,002,677.84</p>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Attachment/s</label>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <p>Purchase Request.docx</p>
                          <small class="text-muted">200 KB</small>
                        </div>
                        <a href="" class="link-primary">Download</a>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <p>Purchase Request.docx</p>
                          <small class="text-muted">200 KB</small>
                        </div>
                        <a href="" class="link-primary">Download</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <form id="bidForm">
                  <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                    <div class="flex-grow-1">
                      <label for="" class="form-label">Amount Bid</label>
                      <input class="form-control mb-4 mb-md-0" name="bid" data-inputmask="'alias': 'currency', 'prefix':'PHP '" />
                    </div>
                    <div class="flex-grow-1">
                      <label for="" class="form-label">Discount (%)</label>
                      <input type="number" name="discount" class="form-control" id="">
                    </div>
                    <div class="flex-grow-1">
                      <label for="" class="form-label">Delivery Time</label>
                      <select name="delivery_time" class="form-select" id="">
                        <option disabled selected>...</option>
                        <option value="Below 1 day">Below 1 day</option>
                        <option value="1-2 days">1-2 days</option>
                        <option value="3+ days">3+ days</option>
                      </select>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Attachment/s</label>
                    <input type="file" name="attachments[]" class="form-control" id="" multiple>
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="checkInline">
                      <label class="form-check-label" for="checkInline">
                        I read and agree to the <a href="" class="link-primary">Term's and Condition</a> and <a href="" class="link-primary">Privacy Policy</a>
                      </label>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="checkInline">
                      <label class="form-check-label" for="checkInline">
                        I acknowledge that, to the best of my knowledge, the information I have provided as a vendor is accurate and comprehensive. I also understand that any errors in the information I have provided are my responsibility.
                      </label>
                    </div>
                  </div>
                  <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary btn-icon-text">
                      <i data-feather="send" class="btn-icon-prepend"></i>
                      Submit Bid
                    </button>
                  </div>
                </form>

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
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/inputmask/jquery.inputmask.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/inputmask.js"></script>
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/vendor_portal/manage-bid.js"></script>
  <!-- End custom js for this page -->

</body>

</html>