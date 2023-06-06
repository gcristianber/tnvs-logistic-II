<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Document Tracking | Track Documents</title>

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
                <div class="row h-100">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3 d-flex align-items-center justify-content-between">
                                    <div>
                                        <a href="<?= ROOT ?>document_tracking/track_documents" class="link-primary align-middle">
                                            <i data-feather="chevron-left" class="icon-md"></i>
                                            Back
                                        </a>
                                    </div>
                                    <div>
                                        <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>document_tracking/track_documents/download_sheet?tracking_id=<?= $document->tracking_id ?>">
                                            <i data-feather="download" class="btn-icon-prepend"></i>
                                            Download Sheet
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="" class="form-label"><small class="text-muted">Tracking ID</small></label>
                                                    <p><?= $document->tracking_id ?></p>
                                                </td>

                                                <td>
                                                    <label for="" class="form-label"><small class="text-muted">Path</small></label>
                                                    <p><?= ucwords($document->sender_dept) ?> → <?= ucwords($document->receiver_dept) ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="" class="form-label"><small class="text-muted">Subject</small></label>
                                                    <p><?= $document->subject ?></p>
                                                </td>
                                                <td>
                                                    <label for="" class="form-label"><small class="text-muted">Date Created</small></label>
                                                    <p><?= date("d M Y — h:i A", strtotime($document->sent_date)) ?></p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="3">
                                                    <label for="" class="form-label"><small class="text-muted">Remarks</small></label>
                                                    <p class="text-wrap"><?= $document->remarks ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <label for="" class="form-label"><small class="text-muted">Attachment(s)</small></label>


                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <a href="" class="link-primary">
                                                                <i data-feather="download" class="icon-md me-2"></i>
                                                                <small>Purchase-order.pdf (128 KB)</small>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered dataTable">
                                        <thead>
                                            <tr>
                                                <th>date & time</th>
                                                <th>remarks</th>
                                                <th>ip address</th>
                                                <th>status</th>
                                                <th>department</th>
                                                <th>action by</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($tracks as $data) :
                                            ?>
                                                <tr class="align-middle">
                                                    <td>
                                                        <p><?= date("d M Y", strtotime($data->action_date)) ?></p>
                                                        <small class="text-muted"><?= date("h:i A", strtotime($data->action_date)) ?></small>
                                                    </td>
                                                    <td>
                                                        <?= $data->remarks ?>
                                                    </td>
                                                    <td><?= $data->ip_address ?></td>
                                                    <td>
                                                        <?php
                                                        switch ($data->status_name) {
                                                            case 'incoming':
                                                                echo '<span class="badge bg-warning">Incoming</span>';
                                                                break;
                                                            case 'outgoing':
                                                                echo '<span class="badge bg-info">Outgoing</span>';
                                                                break;
                                                            case 'received':
                                                                echo '<span class="badge bg-success">Received</span>';
                                                                break;
                                                            case 'reviewed':
                                                                echo '<span class="badge bg-secondary">Reviewed</span>';
                                                                break;
                                                            case 'declined':
                                                                echo '<span class="badge bg-danger">Declined</span>';
                                                                break;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td><?= ucwords($data->department_name) ?></td>
                                                    <td class="d-flex align-items-center gap-2">
                                                        <img src="https://via.placeholder.com/40x40" class="rounded-circle" alt="">
                                                        <div>
                                                            <p><?= $data->display_name ?></p>
                                                            <small class="text-muted"><?= $data->username ?></small>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php
                                            endforeach;
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
    <!-- End custom js for this page -->
    <!-- Flat Picker -->
    <script>
        const filter_date = document.querySelectorAll(".filter-date");
        const flatpickrInstance = flatpickr(filter_date, {
            enableTime: true,
            dateFormat: "d M Y",
            defaultDate: new Date(),
            allowInput: true
        });
    </script>
</body>

</html>