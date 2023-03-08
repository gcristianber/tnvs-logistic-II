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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
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

<style>
  .dropify-wrapper {
    width: 400px;
    height: 300px;
  }

  .dropify-wrapper {
    position: relative;
  }

  .dropify-infos {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
  }

  .dropify-button {
    position: absolute;
    left: 0;
    right: 0;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
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
                    <p class="tx-16 fw-bolder">Amiah Burton</p>
                    <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="../../pages/general/profile.html" class="text-body ms-0">
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
      <div class="page-content">

        <div class="card">
          <div class="card-body">

            <div class="mb-3 d-flex justify-content-between align-items-center">
              <div>
                <h6>MANAGE VEHICLES</h6>
                <small class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</small>
              </div>
              <div>
                <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#addVehicleModal">
                  <i data-feather="plus" class="btn-icon-prepend"></i>
                  Add Vehicle
                </button>
                <div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Vehicle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                      </div>
                      <form id="addVehicleForm" enctype="multipart/form-data">
                        <div class="modal-body">
                          <div class="d-flex gap-2">
                            <input type="file" id="myDropify" />
                            <div class="w-100 d-flex flex-column justify-content-between">
                              <div class="mb-3 d-flex align-items-center gap-2">
                                <input type="text" name="make" id="" class="form-control" placeholder="Vehicle Name">
                                <input type="text" name="plate" id="" class="form-control" placeholder="Plate Number">
                              </div>
                              <div class="mb-3">
                                <input type="text" name="model_year" id="" class="form-control" placeholder="Model Year">
                              </div>
                              <div class="mb-3 d-flex align-items-center gap-2">
                                <select name="vehicle_model_type_id" id="" class="form-select">
                                  <option selected disabled>Select Type</option>
                                  <option value="1">Sedan</option>
                                  <option value="2">Van</option>
                                  <option value="3">Trucks</option>
                                </select>

                                <select name="gearbox_type_id" id="" class="form-select">
                                  <option selected disabled>Select Gearbox Type</option>
                                  <option value="1">Automatic</option>
                                  <option value="2">Manual</option>
                                </select>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <div id="cp1" class="input-group mb-2" title="Using input value">
                                  <input type="text" name="color" class="form-control" value="#DD0F20FF" />
                                  <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                </div>
                                <div>
                                  <input type="number" name="no_seaters" id="" class="form-control">
                                </div>
                              </div>
                              <div class="d-flex align-items-center gap-2">
                                <input type="text" name="odometer" id="" class="form-control" placeholder="Odometer">
                                <input type="text" name="dimensions" id="" class="form-control" placeholder="Dimensions">
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
              </div>
            </div>

            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="sedan-line-tab" data-bs-toggle="tab" href="#sedan" role="tab" aria-controls="sedan" aria-selected="true">Sedan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="vans-line-tab" data-bs-toggle="tab" href="#vans" role="tab" aria-controls="vans" aria-selected="false">Vans</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="trucks-line-tab" data-bs-toggle="tab" href="#trucks" role="tab" aria-controls="trucks" aria-selected="false">Trucks</a>
              </li>
            </ul>


            <div class="tab-content mt-3" id="lineTabContent">
              <div class="tab-pane fade show active" id="sedan" role="tabpanel" aria-labelledby="sedan-line-tab">
                <div class="mb-3 d-flex align-items-center gap-3">
                  <input type="text" name="" id="searchSedan" class="form-control search-box" placeholder="Search vehicle">
                  <button class="btn btn-outline-primary">
                    Search
                  </button>
                </div>

                <div class="row" class="vehicle-list">
                  <?php
                  foreach ($vehicles as $data) :
                    if (!empty($vehicles) && $data->model_type_name == "sedan") :

                  ?>
                      <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex gap-2">
                          <img class="rounded-2" src="<?= ROOT ?>uploads/images/vehicles/<?= $data->img_name ?>" alt="" style="height: 150px; width: 250px;" >
                            <div class="d-flex flex-column justify-content-between">
                              <div>
                                <div class="d-flex align-items-center gap-2">
                                  <h3><?= ucwords($data->make) ?></h3>
                                </div>
                                <p class="text-muted"><?= $data->plate ?></p>

                              </div>
                              <div class="d-flex align-items-center gap-4">
                                <div>
                                  <i data-feather="sliders" class="icon-md text-primary"></i>
                                  <?= ucwords($data->gearbox_type_name) ?>
                                </div>
                                <div>
                                  <i data-feather="users" class="icon-md text-primary"></i>
                                  <?= $data->no_seaters ?> Seaters
                                </div>
                                <div>
                                  <i data-feather="battery" class="icon-md text-primary"></i>
                                  <?= $data->odometer ?> KMP/H
                                </div>
                                <div>
                                  <i data-feather="anchor" class="icon-md text-primary"></i>
                                  <?= $data->dimensions ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div>
                              <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#<?= $data->vehicle_id ?>" data-id="<?= $data->vehicle_id ?>">
                                <i data-feather="settings" class="btn-icon-prepend"></i>
                                Edit Vehicle
                              </button>
                              <div class="modal fade" id="<?= $data->vehicle_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <label for="updatePhoto" class="form-label">Change Photo</label>
                                      <input type="file" name="" id="updatePhoto" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php

                    endif;
                  endforeach;
                  ?>
                </div>
              </div>
              <div class="tab-pane fade" id="vans" role="tabpanel" aria-labelledby="vans-line-tab">
                <div class="mb-3">
                  <input type="text" name="" id="searchVan" class="form-control search-box" placeholder="Search vehicle">
                </div>
                <div class="row" class="vehicle-list">
                  <?php
                  foreach ($vehicles as $data) :
                    if (!empty($vehicles) && $data->model_type_name == "vans") :
                  ?>
                      <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex gap-2">
                            <img class="img-lg" src="<?= ROOT ?>uploads/images/vehicles/<?= $data->img_name ?>" alt="">
                            <div class="d-flex flex-column justify-content-between">
                              <div>
                                <div class="d-flex align-items-center gap-2">
                                  <h3><?= ucwords($data->make) ?></h3>
                                </div>
                                <p class="text-muted"><?= ucwords($data->model_type_name) ?></p>
                              </div>
                              <div class="d-flex align-items-center gap-4">
                                <div>
                                  <i data-feather="sliders" class="icon-md text-primary"></i>
                                  <?= ucwords($data->gearbox_type_name) ?>
                                </div>
                                <div>
                                  <i data-feather="users" class="icon-md text-primary"></i>
                                  <?= $data->no_seaters ?> Seaters
                                </div>
                                <div>
                                  <i data-feather="battery" class="icon-md text-primary"></i>
                                  <?= $data->odometer ?> KMP/H
                                </div>
                                <div>
                                  <i data-feather="anchor" class="icon-md text-primary"></i>
                                  <?= $data->dimensions ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div>
                              <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#<?= $data->vehicle_id ?>" data-id="<?= $data->vehicle_id ?>">
                                <i data-feather="settings" class="btn-icon-prepend"></i>
                                Edit Vehicle
                              </button>
                              <div class="modal fade" id="<?= $data->vehicle_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php

                    endif;
                  endforeach;
                  ?>
                </div>
              </div>
              <div class="tab-pane fade" id="trucks" role="tabpanel" aria-labelledby="trucks-line-tab">
                <div class="mb-3">
                  <input type="text" name="" id="searchVan" class="form-control search-box" placeholder="Search vehicle">
                </div>
                <div class="row" class="vehicle-list">
                  <?php
                  foreach ($vehicles as $data) :
                    if (!empty($vehicles) && $data->model_type_name == "trucks") :
                  ?>
                      <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex gap-2">
                            <img class="img-lg" src="<?= ROOT ?>uploads/images/vehicles/<?= $data->img_name ?>" alt="">
                            <div class="d-flex flex-column justify-content-between">
                              <div>
                                <div class="d-flex align-items-center gap-2">
                                  <h3><?= ucwords($data->make) ?></h3>
                                </div>
                                <p class="text-muted"><?= ucwords($data->model_type_name) ?></p>
                              </div>
                              <div class="d-flex align-items-center gap-4">
                                <div>
                                  <i data-feather="sliders" class="icon-md text-primary"></i>
                                  <?= ucwords($data->gearbox_type_name) ?>
                                </div>
                                <div>
                                  <i data-feather="users" class="icon-md text-primary"></i>
                                  <?= $data->no_seaters ?> Seaters
                                </div>
                                <div>
                                  <i data-feather="battery" class="icon-md text-primary"></i>
                                  <?= $data->odometer ?> KMP/H
                                </div>
                                <div>
                                  <i data-feather="anchor" class="icon-md text-primary"></i>
                                  <?= $data->dimensions ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div>
                              <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#<?= $data->vehicle_id ?>" data-id="<?= $data->vehicle_id ?>">
                                <i data-feather="settings" class="btn-icon-prepend"></i>
                                Edit Vehicle
                              </button>
                              <div class="modal fade" id="<?= $data->vehicle_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                    </div>
                                    <div class="modal-body">
                                      ...
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php

                    endif;
                  endforeach;
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/add-vehicle.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/js/bootstrap-colorpicker.js"></script>


  <!-- End custom js for this page -->


</body>

</html>