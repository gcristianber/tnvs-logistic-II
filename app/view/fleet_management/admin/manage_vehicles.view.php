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
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />
</head>

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



        <div class="card grid-margin">
          <div class="card-body">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h6>MANAGE VEHICLES</h6>
                  <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                </div>
                <div>
                  <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#addNewVehicle">
                    <i data-feather="plus" class="btn-icon-prepend"></i>
                    Add new vehicle
                  </button>
                  <div class="modal fade" id="addNewVehicle" tabindex="-1" aria-labelledby="addNewVehicle" aria-hidden="true">
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
                  <button class="btn btn-outline-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#maintenanceVehicle">
                    <i data-feather="settings" class="btn-icon-prepend"></i>
                    Maintenance
                  </button>
                  <div class="modal fade" id="maintenanceVehicle" tabindex="-1" aria-labelledby="maintenanceVehicle" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="mb-3">
                            <div>
                              <label for="" class="form-label">Select Type <span class="text-danger">*</span> </label>
                              <select name="" id="" class="form-select">
                                <option selected disabled>...</option>
                                <option value="">Sedan</option>
                                <option value="">Vans</option>
                                <option value="">Trucks</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div>
                              <label for="" class="form-label">Select Vehicle <span class="text-danger">*</span> </label>
                              <select name="" id="" class="form-select">
                                <option selected disabled>...</option>
                                <option value="">TYT-023</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div>
                              <label for="" class="form-label">Select Maintenance <span class="text-danger">*</span> </label>
                              <select name="" id="" class="form-select">
                                <option selected disabled>...</option>
                                <option value="">Oil change</option>
                                <option value="">Tire rotation</option>
                                <option value="">Brake inspection/replacement</option>
                                <option value="">Air filter replacement</option>
                                <option value="">Fuel filter replacement</option>
                                <option value="">Transmission fluid change</option>
                                <option value="">Coolant system flush</option>
                                <option value="">Battery inspection/replacement</option>
                                <option value="">Spark plug replacement</option>
                                <option value="">Timing belt replacement</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3">
                          <label for="" class="form-label">Cost <span class="text-danger">*</span> </label>
                            <div class="input-group">
                              <div class="px-3 py-2 fs-5 border rounded-start bg-gray-100">
                                ₱
                              </div>
                              <input type="text" placeholder="Price" class="form-control">
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Notes <span class="text-danger">*</span> </label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Type something..."></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label">Attach a photo (Optional)</label>
                            <input type="file" name="" id="" class="form-control">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Continue</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input type="text" name="" id="" class="form-control" placeholder="Search vehicle...">
            <div class="d-flex align-items-center gap-2 mt-4">
              <div>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">All</label>
              </div>
              <div>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Sedan</label>
              </div>
              <div>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">Vans</label>
              </div>
              <div>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">Trucks</label>
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
                          switch($data->status_name){
                            case 'available':
                              echo '<span class="badge border border-success text-success">Available</span>';
                            break;
                            case 'unavailable':
                              echo '<span class="badge border border-danger text-danger">Unavailable</span>';
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
                        <button class="btn btn-primary">
                          Set Maintenance
                        </button>
                        <button class="btn btn-outline-primary btn-icon">
                          <i data-feather="edit"></i>
                        </button>
                      </div>
                    </div>
                    <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $data->thumbnail_path ?>" class="img-fluid rounded-2 mt-3" style="height: 500px; width: 100%; object-fit: contain;" alt="">

                    <p class="bg-gray-100 p-3 my-3 rounded-2">
                      <?= $data->description ?>
                    </p>

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
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/manage-vehicle.js"></script>
  <!-- End custom js for this page -->


</body>



</html>