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
        width: 100%;
        height: 100%;
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
                        <div class="row h-100">
                            <div class="col-md-8 grid-margin">
                                <div id="map" class="rounded-2"></div>
                            </div>
                            <div class="col-md-4 grid-margin">
                                <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Delivery Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Message</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="lineTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <i data-feather="archive" class="icon-lg"></i>
                                                <div>
                                                    <p class="d-inline align-middle me-2"><?= $delivery->tracking_id ?></p><span class="badge bg-primary">In Transit</span>
                                                    <small class="d-block text-muted">Foods and Beverages</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                                                    <i data-feather="map-pin" class="icon-xl text-danger"></i>
                                                    <div>
                                                        <p><?= $delivery->pickup_location ?></p>
                                                        <small class="text-muted"><?= $delivery->pickup_city ?>, <?= $delivery->pickup_country ?></small>
                                                    </div>
                                                </div>
                                                <div class="ht-5 w-100 flex-grow-1 bg-gray-200 rounded-2"></div>
                                                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                                                    <i data-feather="map-pin" class="icon-xl text-success"></i>
                                                    <div>
                                                        <p><?= $delivery->dropoff_location ?></p>
                                                        <small class="text-muted"><?= $delivery->dropoff_city ?>, <?= $delivery->dropoff_country ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex gap-2 mb-3">
                                                <img src="<?= ROOT ?>uploads/images/thumbnails/<?= $delivery->thumbnail_path ?>" style="height: 125px; width: 200px; object-fit: contain;" class="rounded-2" alt="">
                                                <div class="d-flex flex-column justify-content-between w-100">
                                                    <div>
                                                        <h5 class="text-uppercase"><?= $delivery->make ?></h5>
                                                        <small class="text-muted"><?= $delivery->plate ?></small>
                                                    </div>
                                                    <div class="d-flex justify-content-between ">
                                                        <div class="flex-shrink-0">
                                                            <small class="text-muted">Transmission</small>
                                                            <p>Automatic</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <small class="text-muted">Dimensions</small>
                                                            <p>1.58ht, 2.81mm</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <small class="text-muted">Odometer</small>
                                                            <p>5000 KMP/H</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-center gap-2 mb-3">
                                                <img src="<?= ROOT . $delivery->avatar_thumbnail ?>" class="ht-40 wd-40 rounded-2 object-fit-cover" alt="">
                                                <div>
                                                    <p><?= $delivery->display_name ?></p>
                                                    <small class="text-muted"><?= $delivery->email_address ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Contact:</label>
                                            <p><?= $delivery->contact_person ?> / <?= $delivery->phone_number ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Notes for the driver:</label>
                                            <p><?= $delivery->notes_for_driver ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>product id</th>
                                                            <th>product name</th>
                                                            <th>quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>001</td>
                                                            <td>Banana</td>
                                                            <td>56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>002</td>
                                                            <td>Grapes</td>
                                                            <td>50</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Attachment/s:</label>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div>
                                                            <p>Test File.docx</p>
                                                            <small class="text-muted">200 KB</small>
                                                        </div>
                                                        <a href="" class="link-primary">Download</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <img src="https://via.placeholder.com/40x40" class="rounded-2" alt="">
                                            <div>
                                                <p>Cristianber Gordora</p>
                                                <small class="text-muted">gcristianber@gmail.com</small>
                                            </div>
                                        </div>
                                        <div class="h-100">
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
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">...</div>
                                    <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-line-tab">...</div>
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
    <!-- End custom js for this page -->

    <script src="<?= ROOT ?>assets/custom/js/fleet_management/navigate-delivery.js" type="module"></script>
    <script>
        // javascript
        var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
    </script>
</body>

</html>