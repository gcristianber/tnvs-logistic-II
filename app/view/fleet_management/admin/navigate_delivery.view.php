<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Vehicle Reservation | Manage Reservations</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.css">

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

    <!-- Layout styles -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css' rel='stylesheet' />

    <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />
</head>
<style>
    .dataTables_filter {
        display: none;
    }

    .perfect-scrollbar-example {
        /* position: relative; */
        max-height: 100vh;
        /* height: 100vh; */
    }
</style>

<body>
    <div class="main-wrapper">

        <div class="page-wrapper">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 border-end">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <div id='map' class="rounded-2" style='width: 100%; height: 250px;'></div>
                                    </div>

                                    <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Line Items</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="lineTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Tracking id:</label>
                                                <p>1239905678124481</p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Recipient:</label>
                                                <p>Richelyn Villasor</p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Contact Number:</label>
                                                <p>09123456789</p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Category:</label>
                                                <p>Foods and Beverages</p>
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Message:</label>
                                                <p class="">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci autem laudantium molestiae enim iste nisi reprehenderit eius cumque fugiat delectus?
                                                </p>
                                            </div>


                                            <div class="mb-3">
                                                <label for="" class="form-label">Location:</label>
                                                <div class="d-flex gap-2">
                                                    <div class="d-flex flex-column align-items-center gap-2">
                                                        <div id="pickup_pin">
                                                            <i data-feather="map-pin" class="text-danger"></i>
                                                        </div>
                                                        <div id="line" class="ht-50 bg-light rounded-2" style="width: 3px;"></div>
                                                        <div id="dropoff_pin">
                                                            <i data-feather="map-pin" class="text-success"></i>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-column justify-content-between">
                                                        <div>
                                                            <small class="text-muted">Pickup Location</small>
                                                            <p>416 Sta. Catalina St. Brgy. Holy Spirit Quezon City</p>
                                                        </div>
                                                        <div>
                                                            <small class="text-muted">Dropoff Location</small>
                                                            <p>416 Sta. Catalina St. Brgy. Holy Spirit Quezon City</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>product id</th>
                                                            <th>product name</th>
                                                            <th>quantity</th>
                                                            <th>unit</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="align-middle">
                                                            <td>PID-001</td>
                                                            <td>Banana</td>
                                                            <td>100</td>
                                                            <td>Box</td>
                                                            <td>
                                                                <button class="btn btn-primary btn-icon">
                                                                    <i data-feather="edit"></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-icon">
                                                                    <i data-feather="trash-2"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">...</div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://via.placeholder.com/40x40" class="ht-40 wd-40 rounded-circle" alt="">
                                    <div>
                                        <p>Cristianber Gordora</p>
                                        <small class="text-muted">gcristianber@gmail.com</small>
                                    </div>
                                </div>
                                <div id="messages" class=" flex-column gap-2 my-3 px-3 perfect-scrollbar-example">
                                    <div class="d-flex justify-content-end align-items-center mb-3" data-chat="me">
                                        <small class="text-muted">03:13 PM</small>
                                        <div class="bg-primary d-inline-flex p-3 rounded-2 bg-opacity-10 ms-2">
                                            <!-- Append chat here -->
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="chatForm" placeholder="Type a message">
                                    </div>
                                    <button type="button" id="sendMessage" class="btn btn-primary btn-icon-text flex-shrink-0">
                                        <i data-feather="send" class="btn-icon-prepend"></i>
                                        Send Message
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
    <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
    <script src="<?= ROOT ?>assets/custom/js/map.js" type="module"></script>
    <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>

    <script>
        var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
    </script>
    <!-- End custom js for this page -->
</body>

</html>