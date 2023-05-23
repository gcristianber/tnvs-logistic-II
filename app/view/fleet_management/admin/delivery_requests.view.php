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
    max-height: 100%;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">

        <div class="card h-100">
          <div class="card-body">
            <div class="row h-100">
              <div class="col-md-5 border-end">
                <div class="d-flex align-items-center gap-2">
                  <input type="text" name="" id="" class="form-control searchInput" placeholder="Search delivery">
                  <div class="flex-shrink-0">
                    <button class="btn btn-primary search">
                      <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                      <p class="d-none d-sm-inline">Search</p>
                    </button>
                    <a class="btn btn-primary search" href="<?= ROOT ?>fleet_management_admin/delivery_requests/create_new">
                      <i data-feather="plus" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                      <p class="d-none d-sm-inline">Create Delivery</p>
                    </a>
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
                      <option value="Pending">Pending</option>
                      <option value="Preparing">Preparing</option>
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
                      <?php
                      if (!empty($deliveries)) :
                        foreach ($deliveries as $data) :
                      ?>
                          <tr class="border-bottom align-middle">
                            <td>
                              <div class="d-flex justify-content-between">
                                <div>
                                  <div class="mb-2">
                                    <i data-feather="archive" class="icon-md text-primary"></i>
                                    <small><?= $data->tracking_id ?></small>
                                    <?php
                                    switch ($data->delivery_status_name) {
                                      case "pending":
                                        echo '<span class="badge bg-warning ms-2 d-inline">Pending</span>';
                                        break;
                                      case "preparing":
                                        echo '<span class="badge bg-info ms-2 d-inline">Preparing</span>';
                                        break;
                                      case "in transit":
                                        echo '<span class="badge bg-primary ms-2 d-inline">In Transit</span>';
                                        break;
                                      case "delivered":
                                        echo '<span class="badge bg-success ms-2 d-inline">Delivered</span>';
                                        break;
                                    }
                                    ?>
                                  </div>
                                  <div class="mb-3">
                                    <p> <?= $data->pickup_city ?> → <?= $data->dropoff_city ?></p>
                                    <small class="text-muted">Foods and Beverages</small>
                                  </div>
                                  <div class="d-flex align-items-center gap-2">
                                    <div class="position-relative">
                                      <img src="<?= ROOT . $data->avatar_thumbnail ?>" class="rounded-2" alt="">
                                      <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-white border-2 rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                      </span>
                                    </div>
                                    <div>
                                      <p><?= $data->display_name ?></p>
                                      <small class="text-muted"><?= $data->email_address ?></small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex flex-column gap-2">
                                <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>fleet_management_admin/delivery_requests/navigate?tracking_id=<?= $data->tracking_id ?>">
                                  <i data-feather="navigation-2" class="btn-icon-prepend"></i>
                                  Navigate Delivery
                                </a>
                                <button class="btn btn-outline-primary btn-icon-text popupButton" data-driver-id="<?= $data->driver_id ?>">
                                  <i data-feather="message-square" class="btn-icon-prepend"></i>
                                  Message Driver
                                </button>
                              </div>
                            </td>
                          </tr>
                      <?php
                        endforeach;
                      endif;
                      ?>
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

        <div id="popupCard" class="card wd-500" style="position: fixed; bottom: 20px; right: 20px; display: none;">
          <div class="card-header">
            Driver ID: <span id="driverId"></span>
            <a href="javascript:;" class="link-primary float-end" id="closeButton">
              <i data-feather="x" class="icon-md"></i>
            </a>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center gap-2">

              <div class="w-100">
                <div id="messages" class=" flex-column gap-2 my-3 px-3 perfect-scrollbar-example">
                </div>
                <div class="chat-footer d-flex">
                  <form class="search-form flex-grow-1 me-2">
                    <div class="input-group">
                      <input type="text" class="form-control" id="chatForm" placeholder="Type a message">
                    </div>
                  </form>
                  <div>
                    <button type="button" id="sendMessage" class="btn btn-primary btn-icon">
                      <i data-feather="send"></i>
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
  
  <script src="<?= ROOT ?>assets/custom/js/map.js" type="module"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/chat-driver.js" type="module"></script>
  <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-delivery.js"></script>
  <!-- End custom js for this page -->

  

  <script>
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
  </script>
</body>

</html>