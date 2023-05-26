<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Fleet Management | Manage Drivers</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropzone/dropzone.min.css">
  <!-- endinject -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>
<style>
  .dataTables_filter {
    display: none;
  }

  .dropify-wrapper {
    height: 150px;
    width: 150px;
    border-radius: 8px;
  }

  .dropify-wrapper .dropify-preview .dropify-render img {
    width: 100%;
    height: auto;
    object-fit: contain;
  }

  .dropify-wrapper .dropify-message span:before {
    font-size: 8px;
  }

  .dropify-wrapper .dropify-message span p {
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
        <div class="row h-100">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <input type="text" name="" id="" class="form-control searchInput" placeholder="Search Driver">
                  <div class="flex-shrink-0">
                    <button class="btn btn-primary search">
                      <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                      <p class="d-none d-sm-inline">Search Driver</p>
                    </button>
                    <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add Entry
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Driver</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                          </div>
                          <form id="addDriverForm">
                            <div class="modal-body">
                              <div class="d-flex gap-2 mb-3">
                                <div class="">
                                  <input type="file" name="avatar_thumbnail" id="myDropify" />
                                </div>
                                <div class="w-100">
                                  <div class="mb-3">
                                    <label for="" class="form-label">Driver Name:</label>
                                    <input type="text" name="display_name" id="" class="form-control">
                                  </div>
                                  <div class="">
                                    <label for="" class="form-label">Email Address:</label>
                                    <input type="email" name="email_address" id="" class="form-control">
                                  </div>
                                </div>
                              </div>

                              <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Account</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contact</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Attachments</a>
                                </li>
                              </ul>
                              <div class="tab-content mt-3" id="lineTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                                  <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text" name="username" id="" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="" class="form-control">
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                                  <div class="mb-3">
                                    <label for="" class="form-label">Phone Number</label>
                                    <input type="text" name="phone_number" id="" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Emergency Number</label>
                                    <input type="text" name="emergency_number" id="" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Address</label>
                                    <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">
                                  <div class="mb-3">
                                    <input type="file" name="attachments[]" class="form-control" multiple>
                                  </div>
                                </div>
                              </div>

                              <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="userAgreement">
                                <label class="form-check-label" for="checkDefault">
                                  By creating the account, you understand and agree to the Fleet Management System Services <a href="" class="link-primary">Terms of Conditions</a> and <a href="" class="link-primary">Policy Statement</a>.
                                </label>
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
                <div class="row mt-2">
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">
                      Sort by Department
                    </label>
                    <select name="" id="" class="form-select filter-select">
                      <option value="">All</option>
                      <option value="Logistic">Logistic</option>
                      <option value="Human Resource">Human Resource</option>
                      <option value="Administrative">Administrative</option>
                      <option value="Finance">Finance</option>
                    </select>
                  </div>
                  <div class="col-md-6 grid-margin">
                    <label for="" class="form-label">
                      Sort by Response
                    </label>
                    <select name="" id="" class="form-select filter-select">
                      <option value="">Select Status</option>
                    </select>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table table-bordered dataTable">
                    <thead>
                      <tr>
                        <th data-orderable="false"></th>
                        <th>#</th>
                        <th>driver id</th>
                        <th>driver name</th>
                        <th>last active</th>
                        <th>account age</th>
                        <th class="text-center">status</th>
                        <th class="text-center">action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (!empty($drivers)) :
                        $row = 1;
                        foreach ($drivers as $data) :

                      ?>
                          <tr class="align-middle">
                            <td>
                              <input type="checkbox" class="form-check-input" id="checkDefault">
                            </td>
                            <td><?= $row++ ?></td>
                            <td>
                              <?= $data->driver_id ?>
                            </td>
                            <td>
                              <div class="d-flex gap-2">
                                <img src="<?= ROOT . $data->avatar_thumbnail ?>" class="ht-100 wd-100 rounded-2 object-fit-cover" alt="">
                                <div>
                                  <p><?= $data->display_name ?></p>
                                  <small class="text-muted"><?= $data->email_address ?></small>
                                </div>
                              </div>
                            </td>
                            <td>--</td>
                            <td>
                              <?php
                              $createdDate = $data->date_created;
                              $currentDate = date('Y-m-d H:i:s');
                              $createdDateTime = new DateTime($createdDate);
                              $currentDateTime = new DateTime($currentDate);

                              $diff = $currentDateTime->diff($createdDateTime);
                              $days = $diff->days;
                              echo "$days days";
                              ?>
                            </td>
                            <td class="text-center">
                              <?php

                              switch ($data->status_name) {
                                case 'active':
                                  echo '<span class="badge bg-success">Active</span>';
                                  break;
                                case 'inactive':
                                  echo '<span class="badge bg-danger">Inactive</span>';
                                  break;
                                case 'idle':
                                  echo '<span class="badge bg-warning">Idle</span>';
                                  break;
                                case 'on road':
                                  echo '<span class="badge bg-primary">On Road</span>';
                                  break;
                              }

                              ?>
                            </td>
                            <td class="text-center">
                              <div>
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="external-link" class="btn-icon-prepend"></i>
                                  Preview
                                </button>
                                <button class="btn btn-light btn-icon-text popupButton" data-driver-id="<?= $data->driver_id ?>">
                                  <i data-feather="message-square" class="btn-icon-prepend"></i>
                                  Message
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
                            <div class="d-flex justify-content-end align-items-center mb-3" data-chat="me">
                              <small class="text-muted">03:13 PM</small>
                              <div class="bg-primary d-inline-flex p-3 rounded-2 bg-opacity-10 ms-2">
                                <!-- Append chat here -->
                              </div>
                            </div>
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
  <script src="<?= ROOT ?>assets/vendors/dropzone/dropzone.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/dropzone.js"></script>
  <script src="<?= ROOT ?>assets/js/dropify.js"></script>
  <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/chat-driver.js" type="module"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/manage-drivers.js"></script>
  <script>

  </script>
</body>

</html>