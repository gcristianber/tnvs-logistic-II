<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Maintenance</title>

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
                        <div class="mb-3 text-center">
                            <h3>Request for Quotation (RFQ)</h3>
                        </div>
                        <div class="row">
                            <div class="col-3 mb-2">
                                <strong>Reference Number:</strong>
                            </div>
                            <div class="col-9 mb-2">
                                RFQ-9663583
                            </div>
                            <div class="col-3 mb-2">
                                <strong>Department: </strong>
                            </div>
                            <div class="col-9 mb-2">
                                Human Resource 1
                            </div>
                            <div class="col-3 mb-2">
                                <strong>Title: </strong>
                            </div>
                            <div class="col-9 mb-2">
                                Intel i5 Computers : Need a supply for our office supplies
                            </div>
                            <div class="col-3 mb-2">
                                <strong>Area of Delivery: </strong>
                            </div>
                            <div class="col-9 mb-2">
                                Quezon City, Philippines
                            </div>
                        </div>
                        <div class="mt-4">
                            <table class="table table-bordered border-dark">
                                <tr>
                                    <td rowspan="3">
                                        <div class="row">
                                            <div class="col-12 grid-margin">
                                                <strong class="d-inline">Trade Agreement:</strong>
                                                <p class="d-inline">Implementing Rules and Regulations</p>
                                            </div>
                                            <div class="col-12 grid-margin">
                                                <strong class="d-inline">Category:</strong>
                                                <p class="d-inline">Office Supplies</p>
                                            </div>
                                            <div class="col-12 grid-margin">
                                                <strong class="d-inline">Approved Budget:</strong>
                                                <p class="d-inline">PHP 4,736,810.00</p>
                                            </div>
                                            <div class="col-12 grid-margin">
                                                <strong class="d-inline">Delivery Period:</strong>
                                                <p class="d-inline">0 Day/s</p>
                                            </div>
                                            <div class="col-12 grid-margin">
                                                <strong class="d-inline">Contact Person: </strong>
                                                <p class="d-inline">John Doe</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <strong class="d-inline">Status:</strong>
                                        <p class="d-inline">Active</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong class="d-inline">Date Published:</strong>
                                        <p class="d-inline">16 April 2023 - 10:07 AM</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong class="d-inline">Closing Date:</strong>
                                        <p class="d-inline">17 April 2023 - 10:07 AM</p>
                                    </td>
                                </tr>
                            </table>

                        </div>
                        <div class="mt-4">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe culpa sit aut iure tenetur fuga quae sint vero inventore molestias!</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ipsa voluptate quisquam dicta ab vitae voluptas nesciunt deleniti laborum sunt quidem quam praesentium sit voluptatem, quis ut quos ea aperiam mollitia esse. Sunt, omnis tempora.</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nemo repellat eius veritatis aperiam consequuntur quaerat! At qui enim, hic perspiciatis impedit fugit corporis odio dignissimos eveniet tenetur unde aliquid nostrum, perferendis excepturi recusandae ea assumenda laborum fuga consectetur libero voluptate natus? Tempore earum id aliquam aut deleniti aspernatur iusto.</p>
                        </div>
                        <div class="mt-4">
                            <div class="text-end">
                                <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="send" class="btn-icon-prepend"></i>
                                    Send Quotation
                                </button>
                                <button class="btn btn-light btn-icon-text">
                                    <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                                    Download
                                </button>
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
    <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-requests.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- End custom js for this page -->
    <!-- Flat Picker -->

</body>

</html>