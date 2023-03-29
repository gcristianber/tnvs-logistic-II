<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Create Report</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/custom/css/style.css">
  <!-- End layout styles -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>


<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Audit Requests</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Report</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="container-fluid d-flex justify-content-between mt-4">
                  <div>
                    <small class="text-muted">
                      Reference Number
                    </small>
                    <div class="d-flex gap-2">
                      <h5><?= $request->reference_number ?></h5>
                    </div>
                  </div>
                  <div class="text-end">
                    <small class="text-muted">
                      Request Date
                    </small>
                    <h5><?= date("d M Y", strtotime($request->request_date)) ?></h5>
                  </div>

                </div>
                <div class="container-fluid d-flex justify-content-between mt-4">
                  <div>
                    <small class="text-muted">
                      Department Name
                    </small>
                    <div class="d-flex gap-2">
                      <p><?= ucwords($request->department_name) ?></p>
                    </div>
                  </div>
                  <div class="text-end">
                    <small class="text-muted">
                      Product Category
                    </small>
                    <p><?= ucwords($request->category_name) ?></p>
                  </div>

                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label">Overview</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Describe the purpose of the report"></textarea>
                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label">Category</label>
                  <select name="" class="form-select" id="selectCategory">
                    <option selected disabled>...</option>
                    <option value="all">All</option>
                    <option value="1">Office Supplies</option>
                    <option value="2">Electronics</option>
                    <option value="3">Foods & Beverages</option>
                  </select>
                </div>
                <div class="container-fluid mt-4 d-flex justify-content-center w-100">
                  <div class="table-responsive w-100">
                    <table class="table table-bordered" id="auditTable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th class="text-end">Quantity</th>
                          <th class="text-end">Unit cost</th>
                          <th class="text-end">Total</th>
                          <th class="text-end">Actual Count</th>
                          <th class="text-end">Variance</th>
                          <th class="text-end">Accuracy</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="container-fluid mt-4">
                  <table class="table">
                    <tr>
                      <td class="text-center">
                        <small class="text-muted">Overall Accuracy (%) :</small>
                        <!-- <h4 class="text-success">100%</h4> -->
                        <h4 class="text-dark" id="overallAccuracy">--</h4>
                      </td>
                    </tr>
                  </table>
                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label">Recommendations</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Write your recommendations"></textarea>
                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label">Conclusions</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5" placeholder="Summarize your key findings"></textarea>
                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label d-flex flex-column">
                    Appendices
                    <small class="text-muted">This section may include additional information and supporting documentation, such as inventory counts, inventory records, and other relevant data used during the audit.</small>
                  </label>
                  <input type="file" name="" class="form-control" id="">
                </div>
                <div class="container-fluid w-100">
                  <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send me-3 icon-md">
                      <line x1="22" y1="2" x2="11" y2="13"></line>
                      <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>Create Report</a>
                  <a href="javascript:;" class="btn btn-outline-primary float-end mt-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer me-2 icon-md">
                      <polyline points="6 9 6 2 18 2 18 9"></polyline>
                      <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                      <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>Print</a>
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
      <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
      <script src="<?= ROOT ?>assets/vendors/select2/select2.min.js"></script>
      <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
      <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
      <script src="<?= ROOT ?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
      <!-- End plugin js for this page -->

      <!-- inject:js -->
      <script src="<?= ROOT ?>assets/js/select2.js"></script>
      <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
      <script src="<?= ROOT ?>assets/js/template.js"></script>

      <!-- endinject -->

      <!-- Custom js for this page -->
      <script src="<?= ROOT ?>assets/js/sweet-alert.js"></script>
      <script src="<?= ROOT ?>assets/custom/js/audit_management/fetch-data.js"></script>
      <!-- <script src="<?= ROOT ?>assets/js/data-table.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
      <!-- End custom js for this page -->

</body>

</html>