<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Browse Vehicles</title>

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
<style>
  .perfect-scrollbar-example {
    position: relative;
    max-height: 100vh;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
      <div class="page-content">


        <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
          <strong>Success!</strong> We've already email you, Please check your inbox.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-3 d-none d-md-block border-end">
                <div class="mb-3 border-bottom pb-3">
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="fs-4">Filters</p>
                    <p>Vehicles: <strong>60</strong></p>
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
              </div>
              <div class="col-md-9">

                <div class="row" id="vehicleList">
                  <div class="perfect-scrollbar-example">
                    <?php
                    if (!empty($vehicles)) :
                      foreach ($vehicles as $data) :
                    ?>
                        <div class="col-md-12 grid-margin" data-id="<?= $data->vehicle_id ?>">
                          <div class="d-flex justify-content-between">
                            <div>
                              <div class="d-flex align-items-center gap-2">
                                <h3><?= strtoupper($data->make) ?></h3>
                                <?php
                                switch ($data->status_name) {
                                  case 'available':
                                    echo '<span class="badge bg-success">Available</span>';
                                    break;
                                  case 'unavailable':
                                    echo '<span class="badge bg-danger">Unavailable</span>';
                                    break;
                                  case 'maintenance':
                                    echo '<span class="badge border border-secondary text-secondary">Maintenance</span>';
                                    break;
                                }
                                ?>
                              </div>
                              <p class="text-muted"><?= strtoupper($data->plate) ?> - <?= ucwords($data->vehicle_type) ?></p>
                            </div>
                            <div>
                              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $data->vehicle_id ?>">
                                Reserve Vehicle
                              </button>
                              <div class="modal fade" id="<?= $data->vehicle_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                    </div>
                                    <form class="reserveVehicle">
                                      <div class="modal-body">
                                        <div class="mb-3 text-center">
                                          <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="ht-100 wd-250" style="object-fit: contain;" alt="">
                                          <div class="mt-3 mb-5">
                                            <h5><?= strtoupper($data->make) ?></h5>
                                            <small class="text-muted"><?= strtoupper($data->plate) ?> - <?= ucwords($data->vehicle_type) ?></small>
                                          </div>

                                          <div class="row">
                                            <div class="col-md-3">
                                              <div class="text-center">
                                                <i data-feather="sliders" class="icon-md text-primary"></i>
                                                <p class="text-muted"> <?= ucwords($data->trans_type) ?></p>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="text-center">
                                                <i data-feather="users" class="icon-md text-info"></i>
                                                <p class="text-muted"><?= $data->number_of_seats ?> Seaters</p>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="text-center">
                                                <i data-feather="battery" class="icon-md text-danger"></i>
                                                <p class="text-muted"><?= $data->odometer ?> KMP/H</p>
                                              </div>
                                            </div>
                                            <div class="col-md-3">
                                              <div class="text-center">
                                                <i data-feather="box" class="icon-md text-primary"></i>
                                                <p class="text-muted"><?= $data->dimensions ?></p>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="" class="form-label">Full Name</label>
                                          <input type="text" name="full_name" id="" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                          <label for="" class="form-label">Email Address</label>
                                          <input type="email" name="email_address" id="" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                          <div class="d-flex align-items-center gap-3">

                                            <div class="w-100">
                                              <label for="" class="form-label">Pick-up date</label>
                                              <div class="input-group flatpickr" id="flatpickr-date">
                                                <span class="input-group-text input-group-addon" data-toggle="">
                                                  <i data-feather="calendar"></i>
                                                </span>
                                                <input type="text" name="pickup_date" id="" class="form-control date-input">
                                              </div>
                                            </div>
                                            <div class="w-100">
                                              <label for="" class="form-label">Return date</label>
                                              <div class="input-group flatpickr" id="flatpickr-date">
                                                <span class="input-group-text input-group-addon" data-toggle="">
                                                  <i data-feather="calendar"></i>
                                                </span>
                                                <input type="text" name="return_date" id="" class="form-control date-input">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="" class="form-label">Reason for reservation</label>
                                          <textarea name="reason" class="form-control" id="" cols="30" rows="5" placeholder="Type something..."></textarea>
                                        </div>
                                        <div class="mb-3">
                                          <label for="" class="form-label">Attach file</label>
                                          <input type="file" class="form-control" name="attach_file" id="">
                                        </div>
                                        <div class="mb-3">
                                          <div class="form-check form-check-inline">
                                            <input type="checkbox" name="" class="form-check-input" id="agree_check">
                                            <label class="form-check-label" for="checkInline1">
                                              Agree with the <a href="" class="link-primary">Terms and Conditions</a> and <a href="" class="link-primary">Privacy Policy</a>.
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex gap-3 my-3">
                            <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="rounded-2" style="height: 100px; object-fit: contain;" alt="">
                            <div>
                              <p><?= $data->description ?></p>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-3">
                              <div class="text-start">
                                <p class="d-flex align-items-center gap-1">
                                  <i data-feather="sliders" class="icon-sm text-primary"></i>
                                  Transmission
                                </p>
                                <p class="text-muted"> <?= ucwords($data->trans_type) ?></p>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="text-start">
                                <p class="d-flex align-items-center gap-1">
                                  <i data-feather="users" class="icon-sm text-info"></i>
                                  Number of seats
                                </p>
                                <p class="text-muted"><?= $data->number_of_seats ?> Seaters</p>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="text-start">
                                <p class="d-flex align-items-center gap-1">
                                  <i data-feather="battery" class="icon-sm text-danger"></i>
                                  Odometer
                                </p>
                                <p class="text-muted"><?= $data->odometer ?> KMP/H</p>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="text-start">
                                <p class="d-flex align-items-center gap-1">
                                  <i data-feather="box" class="icon-sm text-primary"></i>
                                  Dimensions
                                </p>
                                <p class="text-muted"><?= $data->dimensions ?></p>
                              </div>
                            </div>
                          </div>


                        </div>
                    <?php
                      endforeach;
                    endif;
                    ?>
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
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/reserve-vehicle.js"></script>
  <!-- End custom js for this page -->

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    // Get the input element

    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      defaultDate: new Date(),
      minDate: "today",
      allowInput: true
    });

    // javascript
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
  </script>

</body>



</html>