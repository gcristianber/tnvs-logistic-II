<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Audit Management | Inventory</title>

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
                    <a href="">
                      <i data-feather="chevron-left" class="icon-md d-inline"></i>
                      Back
                    </a>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="flex-shrink-0">
                      <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#createReport">
                        <i data-feather="feather" class="btn-icon-prepend"></i>
                        Create Report
                      </button>
                      <div class="modal fade" id="createReport" tabindex="-1" aria-labelledby="createReportLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <div class="col">
                                  <div class="table-responsive">
                                    <table class="table table-bordered dataTable">
                                      <thead>
                                        <tr>
                                          <th>product id</th>
                                          <th>product name</th>
                                          <th>category</th>
                                          <th>quantity</th>
                                          <th>actual count</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr class="align-middle" data-id="123">
                                          <td>PID-233A</td>
                                          <td>Banana</td>
                                          <td>Food and Beverages</td>
                                          <td>10</td>
                                          <td>
                                            <input type="number" name="actual_count" class="form-control actualCount" id="">
                                          </td>
                                        </tr>
                                        <tr class="align-middle" data-id="456">
                                          <td>PID-233A</td>
                                          <td>Banana</td>
                                          <td>Food and Beverages</td>
                                          <td>10</td>
                                          <td>
                                            <input type="number" name="actual_count" class="form-control actualCount" id="">
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="mb-3">
                                    <label for="" class="form-label">Subject:</label>
                                    <input type="text" name="subject" id="" class="form-control">
                                  </div>
                                  <div class="mb-3">
                                    <label for="" class="form-label">Message:</label>
                                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                                  </div>
                                  <div>
                                    <label for="" class="form-label">Attachment/s:</label>
                                    <input type="file" name="attachment" id="" class="form-control">
                                  </div>
                                </div>
                              </div>
                              <div class="mt-3">
                                <input type="checkbox" name="" id="" class="form-check-input">
                                <label for="" class="form-label">By ticking this box, I read the <a href="">Terms and Condition</a> and <a href="">Privacy Policy</a>.</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" id="submitReport">Submit Report</button>
                            </div>

                          </div>
                        </div>
                      </div>
                      <button class="btn btn-light btn-icon-text">
                        <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                        Download as CSV
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-7">
                  <div class="table-responsive">
                    <table class="table table-bordered dataTable">
                      <thead>
                        <tr>
                          <th data-orderable="false"></th>
                          <th>product id</th>
                          <th>product name</th>
                          <th>quantity</th>
                          <th>actual count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>
                            <input type="checkbox" class="form-check-input" name="" id="">
                          </td>
                          <td>
                            PID-233A
                          </td>
                          <td>
                            Banana
                          </td>
                          <td>69</td>
                          <td>
                            <input type="number" name="" class="form-control" id="">
                          </td>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="mb-3">
                    <label for="" class="form-label">Subject</label>
                    <input type="text" name="" id="" class="form-control">
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Message</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Attachment/s</label>
                    <input type="file" name="" id="" class="form-control">
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
  <script src="<?= ROOT ?>assets/custom/js/audit_management/inventory.js"></script>
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