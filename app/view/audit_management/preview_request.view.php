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
        <div class="card">
          <div class="card-body">

            <div class="mb-3">
              <div class="mb-3">
                <p>Reference Number:</p>
                <p>RFID-0001</p>
              </div>
              <div class="mb-3">
                <p>Subject:</p>
                <p>AUDIT INVENTORY : REQUESTING AN AUDIT REQUEST FOR SECTION A</p>
              </div>
              <div class="mb-3">
                <p>Description:</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, veritatis doloremque consequuntur sint nostrum eaque enim nihil! Aspernatur, itaque repellat.</p>
              </div>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Procedures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Attachments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Analysis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="disabled-tab" data-bs-toggle="tab" href="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Activity</a>
              </li>
            </ul>
            <div class="tab-content border border-top-0 p-3" id="myTabContent">

              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="mb-3">
                  <p class="fs-5">Audit Evidence Collection Procedure</p>
                  <p class="text-muted">Evidence collection for performing inventory audit.</p>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Inventory Audit Progress:</label>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                  </div>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr class="bg-gray-100">
                      <th>Procedure</th>
                      <th>Method</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Inspection of Records</td>
                      <td>Put samples of records and trace/verify/match</td>
                      <td class="text-center">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                      </td>
                    </tr>
                    <tr>
                      <td>Inspection of Tangible Assets</td>
                      <td>Physical Inventory, walk through, open boxes</td>
                      <td class="text-center">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                      </td>
                    </tr>
                    <tr>
                      <td>Recalculation</td>
                      <td>Extract and recalculate figures to verify</td>
                      <td class="text-center">
                        <input type="checkbox" class="form-check-input" id="checkDefault">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-tab">
                <div class="mb-3">
                  <p class="fs-5">Activity Logs</p>
                  <p class="text-muted">Keep tracking the audit activities.</p>
                </div>

                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <div class="ms-2 d-flex align-items-center gap-3">
                      <i data-feather="arrow-right" class="icon-md text-success"></i>
                      <div>
                        <p>Request has been received by the auditor.</p>
                        <small class="text-muted">22/04/2023 - 12:15 PM</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="ms-2 d-flex align-items-center gap-3">
                      <i data-feather="arrow-right" class="icon-md text-success"></i>
                      <div>
                        <p>Auditor added an attachment.</p>
                        <small class="text-muted">22/04/2023 - 12:15 PM</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="ms-2 d-flex align-items-center gap-3">
                      <i data-feather="arrow-right" class="icon-md text-success"></i>
                      <div>
                        <p>Auditor performed physical counting.</p>
                        <small class="text-muted">22/04/2023 - 12:15 PM</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="ms-2 d-flex align-items-center gap-3">
                      <i data-feather="arrow-right" class="icon-md text-success"></i>
                      <div>
                        <p>Auditor adjusted the inventory product counts.</p>
                        <small class="text-muted">22/04/2023 - 12:15 PM</small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="ms-2 d-flex align-items-center gap-3">
                      <i data-feather="arrow-right" class="icon-md text-success"></i>
                      <div>
                        <p>Inventory audit has been completed</p>
                        <small class="text-muted">22/04/2023 - 12:15 PM</small>
                      </div>
                    </div>
                  </li>
                </ul>


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