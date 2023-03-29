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
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div>
                    <h6 class="text-uppercase">Shipment Management</h6>
                    <small class="text-muted">Lorem ipsum dolor sit amet consectetur.</small>
                  </div>
                  <div>
                    <button class="btn btn-primary btn-icon-text">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add New Delivery
                    </button>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="text" name="" id="" class="form-control" placeholder="Search delivery...">
                  <button type="button" class="btn btn-outline-primary">Search</button>
                </div>

                <div class="mb-5">
                  <div class="d-flex align-items-center gap-2">
                    <div>
                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" checked>
                      <label class="btn btn-outline-primary" for="btncheck1">All</label>
                    </div>
                    <div>
                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btncheck1">Preparing (10)</label>
                    </div>
                    <div>
                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btncheck1">Out for delivery (2)</label>
                    </div>
                    <div>
                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                      <label class="btn btn-outline-primary" for="btncheck1">Delivered (0)</label>
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-between mb-4 pb-2 border-bottom">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <div class="mb-3">
                        <small class="text-muted">Tracking Number</small>
                        <div class="d-flex align-items-center gap-2">
                          <h5>TK-0914600DAJ</h5>
                          <span class="badge border border-primary text-primary">Out for Delivery</span>
                        </div>
                      </div>
                      <div class="d-flex flex-column justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-2">
                          <div class="rounded-circle text-success bg-success bg-opacity-10 ht-50 wd-50 d-flex align-items-center justify-content-center">
                            <i data-feather="arrow-up-right" class="icon-lg"></i>
                          </div>
                          <div>
                            <h6>Quezon City, Philippines</h6>
                            <p class="small text-muted">416 Sta. Catalina St. Holy Spirit</p>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <div class="rounded-circle text-primary bg-primary bg-opacity-10 ht-50 wd-50 d-flex align-items-center justify-content-center">
                            <i data-feather="arrow-down-right" class="icon-lg"></i>
                          </div>
                          <div>
                            <h6>Quezon City, Philippines</h6>
                            <p class="small text-muted">416 Sta. Catalina St. Holy Spirit</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex gap-2 mb-3">
                      <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                      <div>
                        <p>Cristianber Gordora</p>
                        <small class="text-muted">Company Truck Driver</small>
                      </div>
                    </div>
                    <div class="mb-1">
                      <button class="btn btn-primary btn-icon-text">
                        <i data-feather="navigation" class="btn-icon-prepend"></i>
                        Track Delivery
                      </button>
                      <button class="btn btn-outline-primary btn-icon-text">
                        <i data-feather="message-circle" class="btn-icon-prepend"></i>
                        Message Driver
                      </button>
                    </div>
                    <button class="btn btn-outline-primary btn-icon-text w-100">
                      <i data-feather="search" class="btn-icon-prepend"></i>
                      View Details
                    </button>
                  </div>
                </div>

                <div class="d-flex justify-content-between mb-4 pb-2 border-bottom">
                  <div class="d-flex align-items-center gap-3">
                    <div>
                      <div class="mb-3">
                        <small class="text-muted">Tracking Number</small>
                        <div class="d-flex align-items-center gap-2">
                          <h5>JT-224AJX72L1</h5>
                          <span class="badge border border-warning text-warning">Preparing</span>
                        </div>
                      </div>
                      <div class="d-flex flex-column justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-2">
                          <div class="rounded-circle text-success bg-success bg-opacity-10 ht-50 wd-50 d-flex align-items-center justify-content-center">
                            <i data-feather="arrow-up-right" class="icon-lg"></i>
                          </div>
                          <div>
                            <h6>Quezon City, Philippines</h6>
                            <p class="small text-muted">416 Sta. Catalina St. Holy Spirit</p>
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <div class="rounded-circle text-primary bg-primary bg-opacity-10 ht-50 wd-50 d-flex align-items-center justify-content-center">
                            <i data-feather="arrow-down-right" class="icon-lg"></i>
                          </div>
                          <div>
                            <h6>Quezon City, Philippines</h6>
                            <p class="small text-muted">416 Sta. Catalina St. Holy Spirit</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="d-flex gap-2 mb-3">
                      <img src="https://via.placeholder.com/50x50" class="ht-50 wd-50 rounded-2" alt="">
                      <div>
                        <p>Leandro Quisado</p>
                        <small class="text-muted">Company Truck Driver</small>
                      </div>
                    </div>
                    <div class="mb-1">
                      <button class="btn btn-primary btn-icon-text">
                        <i data-feather="navigation" class="btn-icon-prepend"></i>
                        Track Delivery
                      </button>
                      <button class="btn btn-outline-primary btn-icon-text">
                        <i data-feather="message-circle" class="btn-icon-prepend"></i>
                        Message Driver
                      </button>
                    </div>
                    <button class="btn btn-outline-primary btn-icon-text w-100">
                      <i data-feather="search" class="btn-icon-prepend"></i>
                      View Details
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
  <!-- End custom js for this page -->
</body>

</html>