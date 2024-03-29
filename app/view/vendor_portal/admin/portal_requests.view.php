<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Vendor Portal | Requests</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
</style>

<body>
    <div class="main-wrapper">

        <div class="page-wrapper">

            <div class="page-content">
                <div class="row h-100">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3>
                                            <i data-feather="mail" class="d-inline text-primary"></i>
                                            Requests
                                        </h3>
                                        <small class="text-secondary">Manage your received vehicle reservation requests.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center gap-2 mb-3">
                                        <div class="flex-grow-1">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Id, Name, Date or Requestor" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                            </div>
                                        </div>
                                    </div>


                                    <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                                Pending
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Published
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Awarded
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="lineTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th data-orderable="false"></th>
                                                            <th>subject</th>
                                                            <th>request type</th>
                                                            <th>request date</th>
                                                            <th>category</th>
                                                            <th>status</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($tenders)) :
                                                            foreach ($tenders as $data) :
                                                                if ($data->tender_status_name == "pending") :
                                                        ?>
                                                                    <tr class="align-middle" data-id="<?= $data->tender_id ?>">
                                                                        <td>
                                                                            <p>
                                                                                <input type="checkbox" name="" id="" class="form-check-input">
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-wrap"><?= $data->subject ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <p>Purchase Request</p>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= date("Y/m/d - h:i A", strtotime($data->date_created)) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= ucwords($data->supply_category_name) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <span class="badge bg-warning">Pending</span>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#<?= $data->tender_id ?>">
                                                                                <i data-feather="external-link" class="btn-icon-prepend"></i>
                                                                                View Details
                                                                            </button>

                                                                            <div class="modal fade" id="<?= $data->tender_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                <div class="modal-dialog modal-xl">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-12">
                                                                                                    <div class="mb-3">
                                                                                                        <div class="d-flex align-items-center justify-content-between">
                                                                                                            <div class="d-flex align-items-center gap-2">
                                                                                                                <i data-feather="mail" class="icon-lg"></i>
                                                                                                                <div>
                                                                                                                    <p class="d-inline align-middle me-2"><?= $data->tender_id ?></p><span class="badge bg-warning">Pending</span>
                                                                                                                    <small class="d-block"><?= date("Y/m/d - h:i A", strtotime($data->date_created)) ?> | <?= ucwords($data->supply_category_name) ?> | Purchase Request</small>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="mb-3">
                                                                                                        <div class="text-center mb-3">
                                                                                                            <h6 class="mb-3"><i>Purchase Request</i></h6>
                                                                                                            <h5 class="text-wrap"><?= $data->subject ?></h5>
                                                                                                        </div>
                                                                                                        <div class="mb-3 ">
                                                                                                            <p class="text-wrap"><?= $data->description ?></p>
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
                                                                                                <div class="col-md-12">
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
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Publish Post</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <button class="btn btn-success btn-icon-text publishBtn">
                                                                                <i data-feather="plus" class="btn-icon-prepend"></i>
                                                                                Publish
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        endif;
                                                        ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th data-orderable="false"></th>
                                                            <th>subject</th>
                                                            <th>request type</th>
                                                            <th>request date</th>
                                                            <th>category</th>
                                                            <th>status</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($tenders)) :
                                                            foreach ($tenders as $data) :
                                                                if ($data->tender_status_name == "published") :
                                                        ?>
                                                                    <tr class="align-middle" data-id="<?= $data->tender_id ?>">
                                                                        <td>
                                                                            <p>
                                                                                <input type="checkbox" name="" id="" class="form-check-input">
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-wrap"><?= $data->subject ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <p>Purchase Request</p>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= date("Y/m/d - h:i A", strtotime($data->date_created)) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= ucwords($data->supply_category_name) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <span class="badge bg-primary">Published</span>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-primary btn-icon-text"  href="<?= ROOT ?>vendor_portal_admin/portal_requests/manage_post?tender_id=<?= $data->tender_id ?>">
                                                                                <i data-feather="settings" class="btn-icon-prepend"></i>
                                                                                Manage Bid
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                        <?php
                                                                endif;
                                                            endforeach;
                                                        endif;
                                                        ?>
                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th data-orderable="false"></th>
                                                            <th>subject</th>
                                                            <th>request type</th>
                                                            <th>request date</th>
                                                            <th>category</th>
                                                            <th>status</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($tenders)) :
                                                            foreach ($tenders as $data) :
                                                                if ($data->tender_status_name == "awarded") :
                                                        ?>
                                                                    <tr class="align-middle" data-id="<?= $data->tender_id ?>">
                                                                        <td>
                                                                            <p>
                                                                                <input type="checkbox" name="" id="" class="form-check-input">
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-wrap"><?= $data->subject ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <p>Purchase Request</p>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= date("Y/m/d - h:i A", strtotime($data->date_created)) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <p><?= ucwords($data->supply_category_name) ?></p>
                                                                        </td>
                                                                        <td>
                                                                            <span class="badge bg-success">Awarded</span>
                                                                        </td>
                                                                        <td>
                                                                            <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>vendor_portal_admin/portal_requests/manage_post?tender_id=<?= $data->tender_id ?>">
                                                                                <i data-feather="external-link" class="btn-icon-prepend"></i>
                                                                                View Details
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                        <?php
                                                                endif;
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
    <script src="<?= ROOT ?>assets/custom/js/vendor_portal/manage-requests.js"></script>
    <!-- End custom js for this page -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        const myInput = document.querySelectorAll(".date-input");
        const flatpickrInstance = flatpickr(myInput, {
            enableTime: true,
            dateFormat: "Y-m-d",
            defaultDate: new Date(),
            minDate: "today",
            allowInput: true
        });
    </script>
</body>

</html>