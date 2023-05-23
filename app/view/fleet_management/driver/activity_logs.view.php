<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Document Tracking | Manage Documents</title>

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
</style>

<body>
    <div class="main-wrapper">

        <div class="page-wrapper">

            <div class="page-content">

                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <h3 class="mb-1">Activity Logs</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus voluptate temporibus, fugiat fuga magni nisi.</p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <input type="text" name="" id="" class="form-control searchInput" placeholder="Search activity">
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
                                    Filter by date
                                </label>
                                <div class="input-group flatpickr" id="flatpickr-date">
                                    <span class="input-group-text input-group-addon" data-toggle="">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input type="text" name="" id="" class="form-control filter-date">
                                </div>
                            </div>
                            <div class="col-md-6 grid-margin">
                                <label for="" class="form-label">
                                    Sort by Activity
                                </label>
                                <select name="" id="" class="form-select filter-select">
                                    <option value="">All</option>
                                    <option value="Missed">Missed</option>
                                    <option value="Delivery">Delivery</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered dataTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>activity</th>
                                        <th>ip address</th>
                                        <th>user agent</th>
                                        <th>date & time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($logs)) :
                                        $row = 1;
                                        foreach ($logs as $data) :
                                    ?>
                                    <tr>
                                        <td><?= $row++ ?></td>
                                        <td><?= $data->activity ?></td>
                                        <td><?= $data->ip_address ?></td>
                                        <td><?= $data->user_agent ?></td>
                                        <td><?= date("d/m/Y h:i A",strtotime($data->date_time)) ?></td>
                                    </tr>
                                    <?php

                                        endforeach;
                                    endif;
                                    ?>
                                </tbody>
                            </table>
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

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="<?= ROOT ?>assets/custom/js/flatpickr.js"></script>
    <!-- End custom js for this page -->
    <!-- Flat Picker -->
</body>

</html>