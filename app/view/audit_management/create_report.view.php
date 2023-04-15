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

  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
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
                  <div class="text-wrap p-3 bg-gray-100">
                    <?= $request->description ?>
                  </div>
                </div>
                <div class="container-fluid mt-5">
                  <label for="" class="form-label d-flex flex-column">
                    Appendices
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
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
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
                        <?php
                        if (!empty($products)) :
                          foreach ($products as $data) :
                        ?>
                            <tr>
                              <td><?= $data->product_id ?></td>
                              <td><?= $data->product_name ?></td>
                              <td class="text-end"><?= $data->quantity ?></td>
                              <td class="text-end">P <?= number_format($data->unit_cost) ?></td>
                              <td class="text-end">P <?= number_format($data->total) ?></td>
                              <td><input type="number" name="" class="form-control" id=""></td>
                              <td class="text-end">--</td>
                              <td class="text-end">--</td>
                            </tr>
                        <?php
                          endforeach;
                        endif;
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="container-fluid mt-4">
                  <div class="text-center">
                    <small class="text-muted">Overall Accuracy (%) :</small>
                    <h4 class="text-dark" id="overallAccuracy">--</h4>
                  </div>
                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label d-flex flex-column">
                    Report
                    <small class="text-muted">This section describes the procedure have done with this report.</small>
                  </label>
                  <textarea class="form-control tinymceExample" name="tinymce" id="reportTinyMCE" rows="10" placeholder="Type something..."></textarea>
                </div>
                <div class="container-fluid mt-4">
                  <label for="" class="form-label">Additional</label>
                  <input type="file" name="" class="form-control" id="">
                </div>
                <div class="container-fluid w-100">
                  <button id="generate_report" class="btn btn-primary float-end mt-4 ms-2">
                    <i data-feather="send" class="icon-md me-2"></i>
                    Generate Report
                  </button>
                  <button id="download_as_file" class="btn btn-outline-primary float-end mt-4">
                    <i data-feather="download-cloud" class="icon-md me-2"></i>
                    Download
                  </button>
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
      <script src="<?= ROOT ?>assets/custom/js/audit_management/get-product-accuracy.js"></script>
      <script src="<?= ROOT ?>assets/custom/js/audit_management/download-as-file.js"></script>
      <script src="<?= ROOT ?>assets/custom/js/audit_management/generate-report.js"></script>
      <!-- <script src="<?= ROOT ?>assets/js/tinymce.js"></script> -->
      <!-- End custom js for this page -->
      <script>
        tinymce.init({
          selector: '.tinymceExample',
          menubar: false,
          height: 400,
          plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'template' // add the template plugin
          ],
          toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | template', // add the template button to the toolbar
          templates: [{
              title: 'Template 1',
              description: 'Description of template 1',
              content: '<h1>Heading</h1><p>Paragraph</p>'
            },
            {
              title: 'Template 2',
              description: 'Description of template 2',
              content: '<ul><li>Item 1</li><li>Item 2</li></ul>'
            }
          ]
        });
      </script>

</body>

</html>