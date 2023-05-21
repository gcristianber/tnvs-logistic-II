<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Logistic 2 | Dashboard</title>

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

  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
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

  thead.header-none>* {
    display: none;
  }

  .perfect-scrollbar-example {
    position: relative;
    max-height: 300px;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
      <div class="page-content">
        <div class="row">
          <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Monthly Deliveries</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <p class="text-muted">Track your monthly deliveries of goods.</p>
                <div id="monthlySalesChart"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                  <h6 class="card-title mb-0">Cloud storage</h6>
                  <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                  </div>
                </div>
                <div id="storageChart"></div>
                <div class="row mb-3">
                  <div class="col-6 d-flex justify-content-end">
                    <div>
                      <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                      <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                    </div>
                  </div>
                  <div class="col-6">
                    <div>
                      <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                      <h5 class="fw-bolder mb-0">~5TB</h5>
                    </div>
                  </div>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary">Upgrade storage</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">New Deliveries</h6>
                      <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">3,897</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">New Orders</h6>
                      <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">35,084</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-danger">
                            <span>-2.8%</span>
                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Growth</h6>
                      <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                          <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2">89.87%</h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+2.8%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 border-end">
                <div class="d-flex align-items-center gap-2">
                  <input type="text" name="" id="" class="form-control searchInput" placeholder="Search delivery">
                  <div class="flex-shrink-0">
                    <button class="btn btn-primary search">
                      <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                      <p class="d-none d-sm-inline">Search</p>
                    </button>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">
                      Sort by Category
                    </label>
                    <select name="" id="" class="form-select filter-select">
                      <option value="">All</option>
                      <option value="Foods and Beverages">Foods and Beverages</option>
                    </select>
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">
                      Sort by Status
                    </label>
                    <select name="" id="" class="form-select filter-select">
                      <option value="">All</option>
                      <option value="In Transit">In Transit</option>
                      <option value="Delivered">Delivered</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive perfect-scrollbar-example">
                  <table class="table table-borderless dataTable">
                    <thead class="header-none">
                      <tr>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-bottom align-middle">
                        <td>
                          <div class="d-flex justify-content-between">
                            <div>
                              <div class="mb-2">
                                <i data-feather="archive" class="icon-md text-primary"></i>
                                <small>D123004571</small>
                                <span class="badge bg-primary ms-2 d-inline">In Transit</span>
                              </div>
                              <div class="mb-3">
                                <p> Quezon City → Caloocan City</p>
                                <small class="text-muted">Foods and Beverages</small>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <div class="position-relative">
                                  <img src="https://via.placeholder.com/40x40" class="rounded-2" alt="">
                                  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white border-2 rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                                </div>
                                <div>
                                  <p>Cristianber Gordora</p>
                                  <small class="text-muted">gcristianber@logistic_driver</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="navigation-2" class="btn-icon-prepend"></i>
                              Navigate Delivery
                            </button>
                            <button class="btn btn-outline-primary btn-icon-text">
                              <i data-feather="message-square" class="btn-icon-prepend"></i>
                              Message Driver
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom align-middle">
                        <td>
                          <div class="d-flex justify-content-between">
                            <div>
                              <div class="mb-2">
                                <i data-feather="archive" class="icon-md text-primary"></i>
                                <small>D123004571</small>
                                <span class="badge bg-success ms-2 d-inline">Delivered</span>
                              </div>
                              <div class="mb-3">
                                <p> Quezon City → Caloocan City</p>
                                <small class="text-muted">Office Supplies</small>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <div class="position-relative">
                                  <img src="https://via.placeholder.com/40x40" class="rounded-2" alt="">
                                  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white border-2 rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                                </div>
                                <div>
                                  <p>Cristianber Gordora</p>
                                  <small class="text-muted">gcristianber@logistic_driver</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="navigation-2" class="btn-icon-prepend"></i>
                              Navigate Delivery
                            </button>
                            <button class="btn btn-outline-primary btn-icon-text">
                              <i data-feather="message-square" class="btn-icon-prepend"></i>
                              Message Driver
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom align-middle">
                        <td>
                          <div class="d-flex justify-content-between">
                            <div>
                              <div class="mb-2">
                                <i data-feather="archive" class="icon-md text-primary"></i>
                                <small>D123004571</small>
                                <span class="badge bg-warning ms-2">Preparing</span>
                              </div>
                              <div class="mb-3">
                                <p> Quezon City → Manila</p>
                                <small class="text-muted">Office Supplies</small>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <div class="position-relative">
                                  <img src="https://via.placeholder.com/40x40" class="rounded-2" alt="">
                                  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white border-2 rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                                </div>
                                <div>
                                  <p>Cristianber Gordora</p>
                                  <small class="text-muted">gcristianber@logistic_driver</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="navigation-2" class="btn-icon-prepend"></i>
                              Navigate Delivery
                            </button>
                            <button class="btn btn-outline-primary btn-icon-text">
                              <i data-feather="message-square" class="btn-icon-prepend"></i>
                              Message Driver
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom align-middle">
                        <td>
                          <div class="d-flex justify-content-between">
                            <div>
                              <div class="mb-2">
                                <i data-feather="archive" class="icon-md text-primary"></i>
                                <small>D123004571</small>
                                <span class="badge bg-warning ms-2">Preparing</span>
                              </div>
                              <div class="mb-3">
                                <p> Quezon City → Manila</p>
                                <small class="text-muted">Office Supplies</small>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <div class="position-relative">
                                  <img src="https://via.placeholder.com/40x40" class="rounded-2" alt="">
                                  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white border-2 rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                                </div>
                                <div>
                                  <p>Cristianber Gordora</p>
                                  <small class="text-muted">gcristianber@logistic_driver</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="navigation-2" class="btn-icon-prepend"></i>
                              Navigate Delivery
                            </button>
                            <button class="btn btn-outline-primary btn-icon-text">
                              <i data-feather="message-square" class="btn-icon-prepend"></i>
                              Message Driver
                            </button>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom align-middle">
                        <td>
                          <div class="d-flex justify-content-between">
                            <div>
                              <div class="mb-2">
                                <i data-feather="archive" class="icon-md text-primary"></i>
                                <small>D123004571</small>
                                <span class="badge bg-warning ms-2">Preparing</span>
                              </div>
                              <div class="mb-3">
                                <p> Quezon City → Manila</p>
                                <small class="text-muted">Office Supplies</small>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <div class="position-relative">
                                  <img src="https://via.placeholder.com/40x40" class="rounded-2" alt="">
                                  <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white border-2 rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                  </span>
                                </div>
                                <div>
                                  <p>Cristianber Gordora</p>
                                  <small class="text-muted">gcristianber@logistic_driver</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex flex-column gap-2">
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="navigation-2" class="btn-icon-prepend"></i>
                              Navigate Delivery
                            </button>
                            <button class="btn btn-outline-primary btn-icon-text">
                              <i data-feather="message-square" class="btn-icon-prepend"></i>
                              Message Driver
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-7">
                <div id='map' class="rounded-2 mb-3" style='width: 100%; height: 100%;'></div>
              </div>
            </div>

          </div>
        </div>



        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">

              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                  </div>
                </div>
              </div>
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center gap-2">
                      <input type="text" name="" id="" class="form-control searchInput" placeholder="Search delivery">
                      <div class="flex-shrink-0">
                        <button class="btn btn-primary search">
                          <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                          <p class="d-none d-sm-inline">Search</p>
                        </button>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-6 grid-margin">
                        <label for="" class="form-label">
                          Sort by Department
                        </label>
                        <select name="" id="" class="form-select filter-select">
                          <option value="">All</option>
                          <option value="Administrative">Administrative</option>
                        </select>
                      </div>
                      <div class="col-md-6 grid-margin">
                        <label for="" class="form-label">
                          Sort by Status
                        </label>
                        <select name="" id="" class="form-select filter-select">
                          <option value="">All</option>
                          <option value="Outgoing">Outgoing</option>
                        </select>
                      </div>
                    </div>
                    <div class="table-responsive mt-3">
                      <table class="table table-bordered dataTable">
                        <thead>
                          <tr>
                            <th>tracking id</th>
                            <th>subject</th>
                            <th>sent by</th>
                            <th>status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>D012367123456</td>
                            <td>Purchase Order</td>
                            <td>Administrative</td>
                            <td><span class="badge bg-danger">Outgoing</span></td>
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
  </div>

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/chartjs/Chart.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="<?= ROOT ?>assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/apexcharts/apexcharts.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <!-- <script src="<?= ROOT ?>assets/js/dashboard-light.js"></script> -->
  <script src="<?= ROOT ?>assets/js/datepicker.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/main.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/bar-chart.js"></script>

  <script src="<?= ROOT ?>assets/custom/js/map.js" type="module"></script>
  
  <!-- End custom js for this page -->

  <script>
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
  </script>

</body>

</html>