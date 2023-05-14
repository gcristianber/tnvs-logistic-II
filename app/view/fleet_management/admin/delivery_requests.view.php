<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Delivery Requests</title>

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

  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- endinject -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <script src='https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css' rel='stylesheet' />
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>
<style>
  .dataTables_filter {
    display: none;
  }

  .perfect-scrollbar-example {
    position: relative;
    max-height: 100vh;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">

        <div class="card h-100">
          <div class="card-body">
            <div class="row h-100">
              <div class="col-md-4 grid-margin">
                <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                  <div class="flex-grow-1">
                    <input type="text" name="" id="" class="form-control">
                  </div>
                  <div class="flex-shrink-0">
                    <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>fleet_management_admin/delivery_requests/create_new">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add Delivery
                    </a>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                  <div class="flex-grow-1">
                    <label for="" class="form-label">
                      <small>Service Type</small>
                    </label>
                    <select name="" class="form-select" id="">
                      <option value="1" selected>All</option>
                      <option value="2">Delivery</option>
                      <option value="3">Pickup</option>
                    </select>
                  </div>
                  <div class="flex-grow-1">
                    <label for="" class="form-label">
                      <small>Status Type</small>
                    </label>
                    <select name="" class="form-select" id="">
                      <option value="1" selected>All</option>
                      <option value="2">Preparing</option>
                      <option value="3">In Transit</option>
                      <option value="4">Delivered</option>
                    </select>
                  </div>
                </div>

                <div class="list-group ">
                  <div class="perfect-scrollbar-example">
                    <?php
                    if (!empty($deliveries)) :
                      foreach ($deliveries as $data) :
                    ?>
                        <a href="<?= ROOT ?>fleet_management_admin/delivery_requests/navigate?tracking_id=<?= $data->tracking_id ?>" class="list-group-item list-group-item-action">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                              <i data-feather="package" class="icon-md"></i>
                              <p class="d-inline align-middle"><?= $data->tracking_id ?></p>
                            </div>
                            <div>
                              <span class="badge bg-primary">In Transit</span>
                            </div>
                          </div>
                          <div class="d-flex gap-2 border-bottom pb-2">
                            <div class="d-flex flex-column align-items-center gap-2">
                              <div>
                                <i data-feather="map-pin" class="icon-lg text-danger"></i>
                              </div>
                              <div class="flex-grow-1 wd-5 ht-50 bg-light rounded-pill"></div>
                              <div>
                                <i data-feather="map-pin" class="icon-lg text-success"></i>
                              </div>
                            </div>
                            <div class="d-flex flex-column justify-content-between">
                              <div>
                                <p><?= $data->pickup_location ?></p>
                                <small class="text-muted"><?= $data->pickup_city ?>, <?= $data->pickup_country ?></small>
                              </div>
                              <div>
                                <p><?= $data->dropoff_location ?></p>
                                <small class="text-muted"><?= $data->dropoff_city ?>, <?= $data->dropoff_country ?></small>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex align-items-center gap-2 mt-3">
                            <img src="<?= ROOT . $data->avatar_thumbnail ?>" class="ht-40 wd-40 rounded-2" alt="">
                            <div>
                              <p><?= $data->display_name ?></p>
                              <small class="text-muted"><?= $data->email_address ?></small>
                            </div>
                          </div>
                        </a>
                    <?php
                      endforeach;
                    endif;
                    ?>
                  </div>
                </div>



              </div>
              <div class="col-md-8 grid-margin">
                <div id='map' class="rounded-2 mb-3" style='width: 100%; height: 100%;'></div>
              </div>
            </div>



          </div>
        </div>
      </div>
    </div>

  </div>
  </div>

  <script>
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
  </script>
  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-delivery.js"></script>
  <!-- End custom js for this page -->

  <script src="<?= ROOT ?>assets/custom/js/map.js" type="module"></script>
  <script>var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');</script>
</body>

</html>