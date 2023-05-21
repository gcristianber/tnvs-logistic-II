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
                        <form id="reportForm">
                            <div class="mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <a href="" class="link-primary">
                                            <i data-feather="chevron-left" class="icon-md"></i>
                                            Back to Audit Requests
                                        </a>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-icon-text">
                                            <i data-feather="save" class="btn-icon-prepend"></i>
                                            Save Report
                                        </button>
                                        <button class="btn btn-outline-primary btn-icon-text">
                                            <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                                            Download Sheet
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 grid-margin">
                                    <label for="" class="form-label">Subject</label>
                                    <div class="form-control bg-gray-100">Restocking</div>
                                </div>
                                <div class="col-md-4 grid-margin">
                                    <label for="" class="form-label">Type</label>
                                    <div class="form-control bg-gray-100">Inbound</div>
                                </div>
                                <div class="col-md-4 grid-margin">
                                    <label for="" class="form-label">Date Created</label>
                                    <div class="input-group">
                                        <div class="input-group-text" id="btnGroupAddon2"><i data-feather="calendar"></i></div>
                                        <div class="form-control">19/05/2023</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 grid-margin">
                                    <label for="" class="form-label">Comment</label>
                                    <textarea name="comment" class="form-control" id="" cols="30" rows="6"></textarea>
                                    <div class="mt-3">
                                        <label for="" class="form-label">Attachment/s</label>
                                        <input type="file" name="attachment" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5 grid-margin">
                                    <label for="" class="form-label">Inventory Counters</label>
                                    <div class="row">
                                        <div class="col-md-4 grid-margin">
                                            <input type="text" name="" id="employee-id" class="form-control" placeholder="Employee ID" autocomplete="off">
                                        </div>
                                        <div class="col-md-4 grid-margin">
                                            <input type="text" name="" id="full-name" class="form-control" placeholder="Full Name" autocomplete="off">
                                        </div>
                                        <div class="col-md-4 grid-margin">
                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon-text w-100" id="add-counter">
                                                    <i data-feather="plus" class="btn-icon-prepend"></i>
                                                    Add Counter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="counter_table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>employee id</th>
                                                    <th>full name</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 grid-margin">
                                    <label for="" class="form-label">
                                        Sort by Category
                                    </label>
                                    <select name="" id="" class="form-select filter-select">
                                        <option value="">All</option>
                                        <option value="Foods and Beverages">Foods and Beverages</option>
                                        <option value="Office Supplies">Office Supplies</option>
                                    </select>
                                </div>
                                <div class="col-md-10 d-flex align-items-center gap-2">
                                    <input type="text" name="" id="" class="form-control searchInput" placeholder="Search Product">
                                    <div class="flex-shrink-0">
                                        <button type="button" class="btn btn-primary search">
                                            <i data-feather="search" class="icon-lg me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                            <p class="d-none d-sm-inline">Search Product</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                            </div>
                            <table class="table-responsive">
                                <table class="table table-bordered dataTable" id="productsTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>product id</th>
                                            <th>product name</th>
                                            <th>variance</th>
                                            <th>system count</th>
                                            <th>actual count</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($transfer_items)) :
                                            foreach ($transfer_items as $data) :
                                        ?>
                                                <tr class="align-middle" data-id="<?= $data->transfer_item_id ?>">
                                                    <td>1</td>
                                                    <td><?= $data->product_id ?></td>
                                                    <td><?= $data->product_name ?></td>
                                                    <td><?= $data->variance ?></td>
                                                    <td data-qty="5000"><?= $data->quantity ?></td>
                                                    <td>
                                                        <input type="number" name="" id="" class="actualCount wd-100 form-control">
                                                    </td>
                                                </tr>
                                        <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </table>
                        </form>
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
    <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-requests.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="<?= ROOT ?>assets/custom/js/flatpickr.js"></script>
    <!-- End custom js for this page -->
    <!-- Flat Picker -->
</body>

</html>