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
                            
                                <div class="w-100">
                                    <div id="messages" data-id="<?= $_SESSION["user"]->driver_id ?>" class=" flex-column gap-2 my-3 px-3 perfect-scrollbar-example">
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
    <script src="<?= ROOT ?>assets/custom/js/fleet_management/chat-manager.js" type="module"></script>
    <script>

    </script>
</body>

</html>