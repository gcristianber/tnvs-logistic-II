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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
      <div class="page-content">
        <div class="card">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <div class="input-group flatpickr" id="flatpickr-date">
                  <span class="input-group-text input-group-addon" data-toggle="">
                    <i data-feather="calendar"></i>
                  </span>
                  <input type="text" name="return_date" id="" class="form-control date-input">
                </div>
              </div>
              <div class="col">
                <select name="" id="" class="form-select">
                  <option selected disabled>Maintenance Type</option>
                  <option value="">Change Oil</option>
                  <option value="">Cleaning</option>
                </select>
              </div>
              <div class="col">
                <div class="btn-group w-100" role="group" aria-label="Basic example">
                  <input type="text" tabindex="1" autofocus name="" id="search" class="form-control" placeholder="Search id">
                  <button type="button" class="btn btn-outline-primary" id="customSearchBtn">Search</button>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="mb-3 col">
                <div class="d-inline">
                  <input type="radio" class="btn-check" value="all" name="btnradio" id="btnradio1" autocomplete="off" checked>
                  <label class="btn btn-outline-primary" for="btnradio1">All</label>
                </div>
                <div class="d-inline">
                  <input type="radio" class="btn-check" value="pending" name="btnradio" id="btnradio2" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio2">Sedan</label>
                </div>
                <div class="d-inline">
                  <input type="radio" class="btn-check" value="in progress" name="btnradio" id="btnradio3" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio3">Van</label>
                </div>
                <div class="d-inline">
                  <input type="radio" class="btn-check" value="scheduled" name="btnradio" id="btnradio4" autocomplete="off">
                  <label class="btn btn-outline-primary" for="btnradio4">Truck</label>
                </div>
              </div>
              <div class="col text-end">
                <button class="btn btn-outline-primary btn-icon-text" disabled>
                  <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                  Export as CSV
                </button>
                <button class="btn btn-outline-primary btn-icon-text" disabled>
                  <i data-feather="trash-2" class="btn-icon-prepend"></i>
                  Cancel
                </button>
                <button class="btn btn-outline-primary btn-icon-text" disabled>
                  <i data-feather="edit-2" class="btn-icon-prepend"></i>
                  Modify
                </button>
                <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#add_new">
                  <i data-feather="plus" class="btn-icon-prepend"></i>
                  Add New
                </button>

              </div>
              <!-- Modal -->
              <div class="modal fade" id="add_new" tabindex="-1" aria-labelledby="addNewVehicle" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <form id="addVehicle" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="mb-3">
                          <div class="d-flex align-items-center gap-2">
                            <div class="w-100">
                              <label for="" class="form-label">Make <span class="text-danger">*</span> </label>
                              <input type="text" name="make" id="" class="form-control">
                            </div>
                            <div class="w-100">
                              <label for="" class="form-label">Plate <span class="text-danger">*</span> </label>
                              <input type="text" name="plate" id="" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div>
                            <label for="" class="form-label">Type <span class="text-danger">*</span> </label>
                            <select name="vehicle_type_id" id="" class="form-select">
                              <option selected disabled>...</option>
                              <option value="1">Sedan</option>
                              <option value="2">Vans</option>
                              <option value="3">Trucks</option>
                            </select>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Description <span class="text-danger">*</span> </label>
                          <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Type something..."></textarea>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex align-items-center gap-2">
                            <div class="w-100">
                              <label for="" class="form-label">Transmission <span class="text-danger">*</span> </label>
                              <select name="trans_type_id" id="" class="form-select">
                                <option selected disabled>...</option>
                                <option value="1">Automatic</option>
                                <option value="2">Manual</option>
                              </select>
                            </div>
                            <div class="w-100">
                              <label for="" class="form-label">Number of seats <span class="text-danger">*</span> </label>
                              <input type="number" name="number_of_seats" id="" class="form-control">
                            </div>
                            <div class="w-100">
                              <label for="" class="form-label">Odometer <span class="text-danger">*</span> </label>
                              <input type="text" name="odometer" id="" class="form-control" placeholder="KMP/H">
                            </div>
                            <div class="w-100">
                              <label for="" class="form-label">Dimensions <span class="text-danger">*</span> </label>
                              <input type="text" name="dimensions" id="" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="" class="form-label">Thumbnail <span class="text-danger">*</span> </label>
                          <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" id="vehicleList">
              <?php
              if (!empty($vehicles)) :
                foreach ($vehicles as $data) :
              ?>
                  <div class="col-md-6 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
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
                            <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#edit_<?= $data->vehicle_id ?>">
                              <i data-feather="edit" class="btn-icon-prepend"></i>
                              Edit Details
                            </button>
                            <div class="modal fade" id="edit_<?= $data->vehicle_id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                  </div>
                                  <form class="updateForm" data-id="<?= $data->vehicle_id?>">
                                    <div class="modal-body">
                                      <div class="mb-3">
                                        <input type="file" name="thumbnail_path" class="myDropify" data-default-file="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" />
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Vehicle Name</label>
                                        <input type="text" name="make" id="" class="form-control" value="<?= $data->make ?>">
                                      </div>
                                      <div class="mb-3">
                                        <label for="" class="form-label">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"><?= $data->description ?></textarea>
                                      </div>
                                      <div class="mb-3">
                                        <div class="row">
                                          <div class="col-md-3">
                                            <label for="" class="form-label">Transmission</label>
                                            <select name="trans_type_id" class="form-select" id="">
                                              <option selected disabled>Select Type</option>
                                              <option value="1">Automatic</option>
                                              <option value="2">Manual</option>
                                            </select>
                                          </div>
                                          <div class="col-md-3">
                                            <label for="" class="form-label">Number of seats</label>
                                            <input type="number" class="form-control" name="number_of_seats" value="<?= $data->number_of_seats ?>">
                                          </div>
                                          <div class="col-md-3">
                                            <label for="" class="form-label">Odometer</label>
                                            <input type="text" name="odometer" class="form-control" value="<?= $data->odometer ?>">
                                          </div>
                                          <div class="col-md-3">
                                            <label for="" class="form-label">Dimensions</label>
                                            <input type="text" name="dimensions" class="form-control" value="<?= $data->dimensions ?>">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-light btn-icon-text">
                              <i data-feather="tool" class="btn-icon-prepend"></i>
                              Maintenance
                            </button>
                          </div>
                        </div>
                        <div class="d-flex gap-3 my-3">
                          <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="rounded-2" style="height: 100px; object-fit: contain;" alt="">
                          <div>
                            <p><?= $data->description ?></p>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                            <div class="text-start">
                              <p class="d-flex align-items-center gap-1">
                                <i data-feather="sliders" class="icon-sm text-primary"></i>
                                Transmission
                              </p>
                              <p class="text-muted"> <?= ucwords($data->trans_type) ?></p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="text-start">
                              <p class="d-flex align-items-center gap-1">
                                <i data-feather="users" class="icon-sm text-info"></i>
                                Number of seats
                              </p>
                              <p class="text-muted"><?= $data->number_of_seats ?> Seaters</p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="text-start">
                              <p class="d-flex align-items-center gap-1">
                                <i data-feather="battery" class="icon-sm text-danger"></i>
                                Odometer
                              </p>
                              <p class="text-muted"><?= $data->odometer ?> KMP/H</p>
                            </div>
                          </div>
                          <div class="col-md-3">
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
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/manage-vehicle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- End custom js for this page -->
  <script>
    $('.myDropify').dropify();
    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      enableTime: true,
      dateFormat: "Y-m-d",
      defaultDate: new Date(),
      minDate: "today",
      allowInput: true
    });
  </script>

</body>



</html>