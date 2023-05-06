<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Location</title>

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
  <!-- endinject -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">
        <div class="row h-100">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-block d-md-flex align-items-center gap-2 mb-3">
                  <div class="flex-grow-1">
                    <div class="btn-group w-100" role="group" aria-label="Basic example">
                      <input type="text" tabindex="1" autofocus name="" id="search" class="form-control" placeholder="Search id, product, category">
                      <button type="button" class="btn btn-outline-primary" id="customSearchBtn">Search</button>
                    </div>
                  </div>
                  <div class="mt-3 mt-md-0">
                    <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add Entry
                    </button>
                    <button class="btn btn-outline-primary btn-icon-text">
                      <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                      Download Sheet
                    </button>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered dataTable">
                    <thead>
                      <tr>
                        <th data-orderable="false"></th>
                        <th>snapshot</th>
                        <th>product id</th>
                        <th>product name</th>
                        <th>category</th>
                        <th>quantity</th>
                        <th>inbound date</th>
                        <th>last updated</th>
                        <th>status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="align-middle">
                        <td>
                          <input type="checkbox" name="" class="form-check-input" id="">
                        </td>
                        <td>
                          <img src="https://via.placeholder.com/100x100" style="height: 75px; width: 75px;" class="rounded-2" alt="">
                        </td>
                        <td>PID-001</td>
                        <td>Hard Copy Short,A4,Long (70gms)</td>
                        <td>Office Supplies</td>
                        <td>
                          100
                        </td>
                        <td>29/04/2023</td>
                        <td>29/04/2023 — 11:32 PM</td>
                        <td>
                          <span class="badge bg-success">Available</span>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-text">
                            <i data-feather="edit" class="btn-icon-prepend"></i>
                            Edit Details
                          </button>
                        </td>
                      </tr>
                      <tr class="align-middle">
                        <td>
                          <input type="checkbox" name="" class="form-check-input" id="">
                        </td>
                        <td>
                          <img src="https://via.placeholder.com/100x100" style="height: 75px; width: 75px;" class="rounded-2" alt="">
                        </td>
                        <td>PID-002</td>
                        <td>Dell U2723QE</td>
                        <td>Office Supplies</td>
                        <td>
                          24
                        </td>
                        <td>29/04/2023</td>
                        <td>29/04/2023 — 11:32 PM</td>
                        <td>
                          <span class="badge bg-success">Available</span>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-text">
                            <i data-feather="edit" class="btn-icon-prepend"></i>
                            Edit Details
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

  </div>
  </div>

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
</body>

</html>