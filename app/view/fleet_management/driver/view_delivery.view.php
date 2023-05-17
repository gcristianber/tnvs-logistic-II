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
        max-height: 100vh;
    }
</style>

<body>
    <div class="main-wrapper">

        <div class="page-wrapper">
            <div class="page-content">


                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <i data-feather="package"></i>
                                <div>
                                    <p>FM-2305132E8A3</p>
                                    <small>Foods and Beverages</small>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-icon-text" id="startDelivery">
                                <i data-feather="play" class="btn-icon-prepend"></i>
                                Start Delivery
                            </button>
                            
                            <!-- <button class="btn btn-primary">
                                <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                    <i data-feather="play" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                    <p class="d-none d-sm-block">Start Delivery</p>
                                </div>
                            </button> -->
                        </div>
                        <ul class="nav nav-tabs nav-fill mt-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="chats-tab" data-bs-toggle="tab" data-bs-target="#chats" role="tab" aria-controls="chats" aria-selected="true">
                                    <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                        <i data-feather="truck" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                        <p class="d-none d-sm-block">Delivery</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="calls-tab" data-bs-toggle="tab" data-bs-target="#calls" role="tab" aria-controls="calls" aria-selected="false">
                                    <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                        <i data-feather="archive" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                        <p class="d-none d-sm-block">Line Items</p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#contacts" role="tab" aria-controls="contacts" aria-selected="false">
                                    <div class="d-flex flex-row flex-lg-column flex-xl-row align-items-center justify-content-center">
                                        <i data-feather="message-circle" class="icon-sm me-sm-2 me-lg-0 me-xl-2 mb-md-1 mb-xl-0"></i>
                                        <p class="d-none d-sm-block">Chat</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="chats" role="tabpanel" aria-labelledby="chats-tab">
                                <div id="map" class="rounded-2 mb-3" style="height: 100vh;"></div>
                            </div>
                            <div class="tab-pane fade" id="calls" role="tabpanel" aria-labelledby="calls-tab">
                                <p class="text-muted mb-1">Recent calls</p>
                                <ul class="list-unstyled chat-list px-1">
                                    <li class="chat-item pe-1">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <figure class="mb-0 me-2">
                                                <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                                <div class="status online"></div>
                                            </figure>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                                <div>
                                                    <p class="text-body">Jensen Combs</p>
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="arrow-up-right" class="icon-sm text-success me-1"></i>
                                                        <p class="text-muted tx-13">Today, 03:11 AM</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <i data-feather="phone-call" class="text-primary icon-md"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-item pe-1">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <figure class="mb-0 me-2">
                                                <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                                <div class="status offline"></div>
                                            </figure>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                                <div>
                                                    <p class="text-body">Leonardo Payne</p>
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="arrow-down-left" class="icon-sm text-success me-1"></i>
                                                        <p class="text-muted tx-13">Today, 11:41 AM</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <i data-feather="video" class="text-primary icon-md"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-item pe-1">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <figure class="mb-0 me-2">
                                                <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                                <div class="status offline"></div>
                                            </figure>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                                <div>
                                                    <p class="text-body">Carl Henson</p>
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="arrow-down-left" class="icon-sm text-danger me-1"></i>
                                                        <p class="text-muted tx-13">Today, 04:24 PM</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <i data-feather="phone-call" class="text-primary icon-md"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-item pe-1">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <figure class="mb-0 me-2">
                                                <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                                <div class="status online"></div>
                                            </figure>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                                <div>
                                                    <p class="text-body">Jensen Combs</p>
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="arrow-down-left" class="icon-sm text-danger me-1"></i>
                                                        <p class="text-muted tx-13">Today, 12:53 AM</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <i data-feather="video" class="text-primary icon-md"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-item pe-1">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <figure class="mb-0 me-2">
                                                <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                                <div class="status online"></div>
                                            </figure>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                                <div>
                                                    <p class="text-body">John Doe</p>
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="arrow-down-left" class="icon-sm text-success me-1"></i>
                                                        <p class="text-muted tx-13">Today, 01:42 AM</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <i data-feather="video" class="text-primary icon-md"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="chat-item pe-1">
                                        <a href="javascript:;" class="d-flex align-items-center">
                                            <figure class="mb-0 me-2">
                                                <img src="https://via.placeholder.com/37x37" class="img-xs rounded-circle" alt="user">
                                                <div class="status offline"></div>
                                            </figure>
                                            <div class="d-flex align-items-center justify-content-between flex-grow-1 border-bottom">
                                                <div>
                                                    <p class="text-body">John Doe</p>
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="arrow-up-right" class="icon-sm text-success me-1"></i>
                                                        <p class="text-muted tx-13">Today, 12:01 AM</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <i data-feather="phone-call" class="text-primary icon-md"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                <p class="text-muted mb-1">Contacts</p>

                                <div id="messages" class="flex-column gap-2 my-3 px-3 perfect-scrollbar-example">
                                    <div class="d-flex justify-content-end align-items-center mb-3" data-chat="me">
                                        <small class="text-muted">03:13 PM</small>
                                        <div class="bg-primary d-inline-flex p-3 rounded-2 bg-opacity-10 ms-2">
                                            <!-- Append chat here -->
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
    <!-- <script src="<?= ROOT ?>assets/js/chat.js"></script> -->
    <!-- End custom js for this page -->

    <!-- <script src="<?= ROOT ?>assets/custom/js/fleet_management/navigate-delivery.js" type="module"></script> -->
    <script src="<?= ROOT ?>assets/custom/js/fleet_management/delivery-geo.js" type="module"></script>
    <script>
        var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
    </script>
</body>

</html>