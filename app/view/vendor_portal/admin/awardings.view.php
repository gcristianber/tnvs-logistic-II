<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Awardings</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />
</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
      <div class="page-content">

        <div class="card h-100">
          <div class="card-body">
            <div class="row h-100">
              <div class="col-3 d-none d-md-block border-end">
                <div class="mb-3 border-bottom pb-3">
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="fs-4">Filters</p>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group">
                    <div class="input-group-text" id="btnGroupAddon2">
                      <i data-feather="search"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Search vehicle" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                  </div>
                </div>
                <div class="mb-3">
                  <div class="mb-2">
                    <p class="fs-5">Categories</p>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Sedan</label>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Van</label>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Trucks</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="mb-2">
                    <p class="fs-5">Status Types</p>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Available</label>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Reserved</label>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Maintenance</label>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="mb-2">
                    <p class="fs-5">Transmission</p>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Automatic</label>
                    </div>
                  </div>
                  <div class="mb-2">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label for="checkDefault" class="form-label">Manual</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="mb-3">
                  <div class="d-flex gap-2">
                    <div class="input-group">
                      <div class="input-group-text" id="btnGroupAddon2">
                        <i data-feather="search"></i>
                      </div>
                      <input type="text" class="form-control" placeholder="Search Contract" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                    </div>

                    <button class="btn btn-primary btn-icon-text  flex-shrink-0" disabled>
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Create Message
                    </button>

                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-bordered dataTable">
                    <thead>
                      <tr>
                        <th>contract name</th>
                        <th>vendor name</th>
                        <th>date awarded</th>
                        <th>status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <p>Intel I5 Computer Supplies</p>
                          <small class="text-muted">Office Supplies</small>
                        </td>
                        <td>
                          <div class="d-flex align-items-center gap-2">
                            <img src="https://via.placeholder.com/50x50" class="wd-50 wd-50 rounded-2" alt="">
                            <div>
                              <p>ABC Company</p>
                              <small class="text-muted">cristiangordora27@gmail.com</small>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p>01 May 2023</p>
                          <small class="text-muted">09:50 PM</small>
                        </td>
                        <td>
                          <span class="badge bg-warning">Pending</span>
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
  <!-- End custom js for this page -->

</body>



</html>