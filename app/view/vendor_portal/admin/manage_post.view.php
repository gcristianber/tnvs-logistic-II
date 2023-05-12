<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Vendor Portal | Create Post</title>

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
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->

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
                                    <p class="tx-16 fw-bolder"><?= $_SESSION["user"]->display_name ?></p>
                                    <p class="tx-12 text-muted"><?= $_SESSION["user"]->username ?></p>
                                </div>
                            </div>
                            <ul class="list-unstyled p-1">
                                <li class="dropdown-item py-2">
                                    <a href="<?= ROOT ?>general/profile" class="text-body ms-0">
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
        <div class="page-wrapper">
            <div class="page-content">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <i data-feather="mail" class="icon-lg"></i>
                                            <div>
                                                <p class="d-inline align-middle me-2">T123004124781</p><span class="badge bg-warning">Pending</span>
                                                <small class="d-block">11/05/2023 - 08:35 PM | Goods and Services | Purchase Request</small>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <button class="btn btn-primary btn-icon-text">
                                                <i data-feather="user-plus" class="btn-icon-prepend"></i>
                                                Invite Vendor
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="text-center mb-3">
                                        <h6 class="mb-3"><i>Purchase Request</i></h6>
                                        <h5>Procurement of Manpower Services for General Support and Janitorial Services for BCDA under a Three (3)-Year Service Contract</h5>
                                    </div>
                                    <div class="mb-3 ">
                                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero qui nam molestias non, ut, iusto cum nisi facilis amet dolor voluptatibus nihil odit eveniet quo. Cupiditate, nihil. Nostrum dolorum voluptatum maxime explicabo harum esse, dignissimos excepturi id deserunt, cupiditate porro iusto quis quod dicta. Perspiciatis voluptatibus eligendi sint repellat iure voluptas provident molestiae culpa laboriosam illum.</p>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>goods/service</th>
                                                    <th>amount (php)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Janitorial Service</td>
                                                    <td class="text-end">26,002,677.84</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td class="text-end">
                                                        <p class="fw-bold">TOTAL</p>
                                                    </td>
                                                    <td class="text-end">
                                                        <p class="fw-bold">PHP 26,002,677.84</p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="" class="form-label">Attachment/s</label>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p>Purchase Request.docx</p>
                                                    <small class="text-muted">200 KB</small>
                                                </div>
                                                <a href="" class="link-primary">Download</a>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p>Purchase Request.docx</p>
                                                    <small class="text-muted">200 KB</small>
                                                </div>
                                                <a href="" class="link-primary">Download</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div>


                            <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Bids</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Awarded</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="lineTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="input-group">
                                            <div class="input-group-text" id="btnGroupAddon2">@</div>
                                            <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2" id="search">
                                        </div>
                                        <div class="d-flex gap-2 flex-shrink-0">
                                            <button class="btn btn-primary">
                                                Search
                                            </button>
                                            <button class="btn btn-outline-primary btn-icon-text" id="compare_selected" disabled>
                                                <i data-feather="repeat" class="btn-icon-prepend"></i>
                                                Compare Selected
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mt-4 dataTable" id="">
                                            <thead>
                                                <tr>
                                                    <th data-orderable="false"></th>
                                                    <th>#</th>
                                                    <th>Vendor</th>
                                                    <th>bid offer</th>
                                                    <th>quality</th>
                                                    <th>discount</th>
                                                    <th>delivery time</th>
                                                    <th>date submitted</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!empty($bids)) :
                                                    $row = 1;
                                                    foreach ($bids as $data) :
                                                ?>
                                                        <tr class="align-middle" data-id="<?= $data->bid_id ?>">
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="checkboxes form-check-input" id="checkDefault" value="<?= $data->bid_id ?>">
                                                                </div>
                                                            </td>
                                                            <td><?= $row++ ?></td>
                                                            <td>
                                                                <p><?= $data->company_name ?></p>
                                                                <small class="text-muted"><?= $data->company_name ?></small>
                                                            </td>
                                                            <td>PHP <?= number_format($data->bid) ?></td>
                                                            <td><?= $data->quality ?></td>
                                                            <td><?= $data->discount ?></td>
                                                            <td><?= $data->delivery_time ?></td>
                                                            <td><?= date("d/m/Y", strtotime($data->date_submitted)) ?></td>
                                                            <td>
                                                                <button class="btn btn-primary btn-icon-text rowAwardBtn">
                                                                    <i data-feather="plus" class="btn-icon-prepend"></i>
                                                                    Award Bidder
                                                                </button>
                                                                <button class="btn btn-danger btn-icon">
                                                                    <i data-feather="trash-2"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table mt-4 table-bordered" id="compareTable">

                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">...</div>
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

    <!-- core:js -->
    <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= ROOT ?>assets/vendors/inputmask/jquery.inputmask.min.js"></script>
    <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
    <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= ROOT ?>assets/js/template.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="<?= ROOT ?>assets/js/inputmask.js"></script>
    <script src="<?= ROOT ?>assets/js/dropify.js"></script>
    <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
    <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
    <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
    <script src="<?= ROOT ?>assets/custom/js/vendor_portal/manage-tender.js"></script>
    <!-- End custom js for this page -->

</body>

</html>