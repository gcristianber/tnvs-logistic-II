<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Audit Logs</title>

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

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>

</head>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="container-fluid">
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="" class="link-primary">
                      <i data-feather="chevron-left" class="icon-md"></i>
                      Back to Audit Requests
                    </a>

                    <div>
                      <a class="btn btn-primary btn-icon-text" href="<?= ROOT ?>audit_management/audit_requests/download_as_file?reference_number=<?= $report->reference_number ?>">
                        <i data-feather="printer" class="btn-icon-prepend"></i>
                        Print Report
                      </a>
                      <button class="btn btn-outline-primary btn-icon-text">
                        <i data-feather="edit" class="btn-icon-prepend"></i>
                        Edit Report
                      </button>
                    </div>
                  </div>
                </div>
                <div class="container-fluid mt-4">
                  <div class="d-flex gap-3 justify-content-center align-items-center">
                    <img src="<?= ROOT ?>assets/images/favicon.png" class="ht-50 mb-2" alt="">
                    <div class="text-start">
                      <h5>LULAN INCORPORATION</h5>
                      <p>Quezon City, Philippines</p>
                      <small>202-555-0163</small>
                    </div>
                  </div>
                </div>
                <div class="container-fluid mt-4">
                  <div class="text-center">
                    <h4>INVENTORY AUDIT FOR</h4>
                    <p><?= $report->reference_number ?></p>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="text-center">
                    <small><?= date("d M Y", strtotime($report->date_created)) ?></small>
                  </div>
                </div>
                <div class="container-fluid mt-4">
                  <div class="text-wrap p-3 bg-gray-100">
                    <?= $report->report ?>
                  </div>
                </div>

                <div class="container-fluid mt-5">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>product name</th>
                        <th>quantity</th>
                        <th>unit cost</th>
                        <th>total</th>
                        <th>actual count</th>
                        <th>variance</th>
                        <th>accuracy</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      if (!empty($table_report)) :
                        foreach ($table_report as $data) :

                      ?>
                          <tr>
                            <td><?= $data->product_id ?></td>
                            <td><?= $data->product_name ?></td>
                            <td class="text-end"><?= $data->quantity ?></td>
                            <td class="text-end"><?= $data->unit_cost ?></td>
                            <td class="text-end"><?= $data->total ?></td>
                            <td class="text-end"><?= $data->actual_count ?></td>
                            <td class="text-end"><?= $data->variance ?></td>
                            <td class="text-end"><?= $data->accuracy ?></td>
                          </tr>
                      <?php

                        endforeach;
                      endif;

                      ?>
                    </tbody>
                  </table>
                </div>
                <div class="container-fluid mt-4">
                  <div class="text-center">
                    <small class="text-muted">Overall Accuracy (%) :</small>
                    <h4 class="text-dark" id="overallAccuracy"><?= $report->overall_accuracy ?></h4>
                  </div>
                </div>
                <div class="container-fluid mt-5">
                  <label for="" class="form-label d-flex flex-column">
                    Additional File(s)
                    <small class="text-muted">This may include additional information and supporting documentation, such as inventory counts, inventory records, and other relevant data used during the audit.</small>
                  </label>
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                      <p>Invoice Sample.docx</p>
                      <small class="text-muted">1.2 MB</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <p>Purchase Order.docx</p>
                      <small class="text-muted">200 KB</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <p>Inventory Stock January to March.pdf</p>
                      <small class="text-muted">1.5 MB</small>
                    </a>
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
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/audit_management/fetch-requests.js"></script>
  <!-- End custom js for this page -->

</body>

</html>