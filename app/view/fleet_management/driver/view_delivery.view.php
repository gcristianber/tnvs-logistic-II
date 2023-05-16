<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Fleet Management | Navigate</title>

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
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>

    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    #map {
        height: 100%;
        width: 100%;
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
                <div class="row chat-wrapper">
                    <div class="col-md-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row position-relative h-100">
                                    <div class="col-12 col-lg-8 chat-aside border-end-lg">
                                        <div id="map" class="rounded-2 mb-3 position-relative"></div>
                                    </div>
                                    <div class="col-12 col-lg-4 chat-content">
                                        <div class="chat-header border-bottom pb-2">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <i data-feather="corner-up-left" id="backToChatList" class="icon-lg me-2 ms-n2 text-muted d-lg-none"></i>
                                                    <figure class="mb-0 me-2">
                                                        <img src="https://via.placeholder.com/43x43" class="img-sm rounded-circle" alt="image">
                                                        <div class="status online"></div>
                                                        <div class="status online"></div>
                                                    </figure>
                                                    <div>
                                                        <p>Mariana Zenha</p>
                                                        <p class="text-muted tx-13">Front-end Developer</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center me-n1">
                                                    <a href="#">
                                                        <i data-feather="video" class="icon-lg text-muted me-3" data-bs-toggle="tooltip" title="Start video call"></i>
                                                    </a>
                                                    <a href="#">
                                                        <i data-feather="phone-call" class="icon-lg text-muted me-0 me-sm-3" data-bs-toggle="tooltip" title="Start voice call"></i>
                                                    </a>
                                                    <a href="#" class="d-none d-sm-block">
                                                        <i data-feather="user-plus" class="icon-lg text-muted" data-bs-toggle="tooltip" title="Add to contacts"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-body">
                                            <div id="messages" class=" flex-column gap-2 my-3 px-3 perfect-scrollbar-example">
                                                <div class="d-flex justify-content-end align-items-center mb-3" data-chat="me">
                                                    <small class="text-muted">03:13 PM</small>
                                                    <div class="bg-primary d-inline-flex p-3 rounded-2 bg-opacity-10 ms-2">
                                                        <!-- Append chat here -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-footer d-flex">
                                            <div>
                                                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Emoji">
                                                    <i data-feather="smile" class="text-muted"></i>
                                                </button>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Attatch files">
                                                    <i data-feather="paperclip" class="text-muted"></i>
                                                </button>
                                            </div>
                                            <div class="d-none d-md-block">
                                                <button type="button" class="btn border btn-icon rounded-circle me-2" data-bs-toggle="tooltip" title="Record you voice">
                                                    <i data-feather="mic" class="text-muted"></i>
                                                </button>
                                            </div>
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

    <!-- core:js -->
    <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= ROOT ?>assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
    <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
    <script src="<?= ROOT ?>assets/js/chat.js"></script>
    <!-- End custom js for this page -->

    <!-- <script src="<?= ROOT ?>assets/custom/js/fleet_management/navigate-delivery.js" type="module"></script> -->
    <script src="<?= ROOT ?>assets/custom/js/fleet_management/delivery-geo.js" type="module"></script>
    <script>
        // javascript
        var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
    </script>
</body>

</html>