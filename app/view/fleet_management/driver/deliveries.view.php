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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/select2/select2.min.css">
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
      <div class="page-content">
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <h4>Deliveries</h4>
              <small class="text-muted">Manage your deliveries</small>
            </div>
            <ul class="nav nav-tabs nav-tabs-line mb-3" id="lineTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Immediate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Scheduled</a>
              </li>
            </ul>

            <div class="mb-3">
              <div class="d-flex align-items-center gap-2">
                <select class="js-example-basic-single form-select" data-width="100%">
                  <option disabled selected>Delivery Type</option>
                  <option value="TX">Pickup</option>
                  <option value="NY">Delivery</option>
                </select>
                <select class="js-example-basic-single form-select" data-width="100%">
                  <option disabled selected>Distance</option>
                  <option value="TX">1 KM</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 grid-margin">
                <div class="d-flex justify-content-between border-bottom py-2">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="package" class="icon-xl text-secondary"></i>
                    <div>
                      <h6>09 May 2023</h6>
                      <small class="text-muted">01:00 AM</small>
                    </div>
                  </div>
                  <p id="trackingId">
                    FM-1230043782181143
                  </p>
                </div>
                <div class="d-flex border-bottom py-2 gap-2">
                  <div class="d-flex flex-column align-items-center gap-2">
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-success"></i>
                    </div>
                    <div class="wd-5 ht-30 bg-light rounded-2"></div>
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-danger"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-between">
                    <div>
                      <p>5 Mt Pleasant, Marikina, Metro Manila, Philippines</p>
                    </div>
                    <div>
                      <p>Petunia Extension, Marikina, Metro Manila, Philippines</p>
                    </div>
                  </div>
                </div>
                <div class=" py-2">
                  <div class="text-end">
                    <button class="btn btn-danger btn-icon-text">
                      <i data-feather="trash-2" class="btn-icon-prepend"></i>
                      Cancel
                    </button>
                    <button class="btn btn-primary btn-icon-text">
                      <i data-feather="external-link" class="btn-icon-prepend"></i>
                      View Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin">
                <div class="d-flex justify-content-between border-bottom py-2">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="package" class="icon-xl text-secondary"></i>
                    <div>
                      <h6>09 May 2023</h6>
                      <small class="text-muted">01:00 AM</small>
                    </div>
                  </div>
                  <p id="trackingId">
                    FM-1230043782181143
                  </p>
                </div>
                <div class="d-flex border-bottom py-2 gap-2">
                  <div class="d-flex flex-column align-items-center gap-2">
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-success"></i>
                    </div>
                    <div class="wd-5 ht-30 bg-light rounded-2"></div>
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-danger"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-between">
                    <div>
                      <p>5 Mt Pleasant, Marikina, Metro Manila, Philippines</p>
                    </div>
                    <div>
                      <p>Petunia Extension, Marikina, Metro Manila, Philippines</p>
                    </div>
                  </div>
                </div>
                <div class="text-end py-2">
                  <button class="btn btn-danger btn-icon-text">
                    <i data-feather="trash-2" class="btn-icon-prepend"></i>
                    Cancel
                  </button>
                  <button class="btn btn-primary btn-icon-text">
                    <i data-feather="external-link" class="btn-icon-prepend"></i>
                    View Details
                  </button>
                </div>
              </div>
              <div class="col-md-6 grid-margin">
                <div class="d-flex justify-content-between border-bottom py-2">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="package" class="icon-xl text-secondary"></i>
                    <div>
                      <h6>09 May 2023</h6>
                      <small class="text-muted">01:00 AM</small>
                    </div>
                  </div>
                  <p id="trackingId">
                    FM-1230043782181143
                  </p>
                </div>
                <div class="d-flex border-bottom py-2 gap-2">
                  <div class="d-flex flex-column align-items-center gap-2">
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-success"></i>
                    </div>
                    <div class="wd-5 ht-30 bg-light rounded-2"></div>
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-danger"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-between">
                    <div>
                      <p>5 Mt Pleasant, Marikina, Metro Manila, Philippines</p>
                    </div>
                    <div>
                      <p>Petunia Extension, Marikina, Metro Manila, Philippines</p>
                    </div>
                  </div>
                </div>
                <div class="text-end py-2">
                  <button class="btn btn-danger btn-icon-text">
                    <i data-feather="trash-2" class="btn-icon-prepend"></i>
                    Cancel
                  </button>
                  <button class="btn btn-primary btn-icon-text">
                    <i data-feather="external-link" class="btn-icon-prepend"></i>
                    View Details
                  </button>
                </div>
              </div>
              <div class="col-md-6 grid-margin">
                <div class="d-flex justify-content-between border-bottom py-2">
                  <div class="d-flex align-items-center gap-2">
                    <i data-feather="package" class="icon-xl text-secondary"></i>
                    <div>
                      <h6>09 May 2023</h6>
                      <small class="text-muted">01:00 AM</small>
                    </div>
                  </div>
                  <p id="trackingId">
                    FM-1230043782181143
                  </p>
                </div>
                <div class="d-flex border-bottom py-2 gap-2">
                  <div class="d-flex flex-column align-items-center gap-2">
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-success"></i>
                    </div>
                    <div class="wd-5 ht-30 bg-light rounded-2"></div>
                    <div>
                      <i data-feather="map-pin" class="icon-lg text-danger"></i>
                    </div>
                  </div>
                  <div class="d-flex flex-column justify-content-between">
                    <div>
                      <p>5 Mt Pleasant, Marikina, Metro Manila, Philippines</p>
                    </div>
                    <div>
                      <p>Petunia Extension, Marikina, Metro Manila, Philippines</p>
                    </div>
                  </div>
                </div>
                <div class="text-end py-2">
                  <button class="btn btn-danger btn-icon-text">
                    <i data-feather="trash-2" class="btn-icon-prepend"></i>
                    Cancel
                  </button>
                  <button class="btn btn-primary btn-icon-text">
                    <i data-feather="external-link" class="btn-icon-prepend"></i>
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/select2.js"></script>
  <!-- End custom js for this page -->

</body>

</html>