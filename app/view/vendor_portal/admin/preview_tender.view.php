<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Preview RFQ</title>

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

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tender</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preview</li>
          </ol>
        </nav>

        <div class="card grid-margin h-100">
          <div class="card-body">
            <div class="mb-3">
              <div class="mb-3">
                <p>Reference Number:</p>
                <p><?= $tender->tender_id ?></p>
              </div>
              <div class="mb-3">
                <p>Subject:</p>
                <p class="text-uppercase"><?= $tender->subject ?></p>
              </div>
              <div class="mb-3">
                <p>Description:</p>
                <p><?= $tender->description ?></p>
              </div>
              <div class="mb-3">
                <p>Budget for Contract:</p>
                <p>PHP <?= number_format($tender->contract_budget) ?></p>
              </div>
            </div>
            <div class="row h-100">
              <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Bids</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="disabled-tab" data-bs-toggle="tab" href="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Award</a>
                  </li>
                </ul>
                <div class="tab-content border border-top-0 p-3 h-100" id="myTabContent">
                  <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
                            <tr class="align-middle">
                              <td>
                                <div class="form-check">
                                  <input type="checkbox" class="checkboxes form-check-input" id="checkDefault" value="<?= $data->vendor_id ?>">
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
                                <button class="btn btn-primary btn-icon-text">
                                  <i data-feather="plus" class="btn-icon-prepend"></i>
                                  Award Bidder
                                </button>
                                <button class="btn btn-light btn-icon-text">
                                  <i data-feather="send" class="btn-icon-prepend"></i>
                                  Modify request
                                </button>
                              </td>
                            </tr>
                        <?php
                          endforeach;
                        endif;
                        ?>

                      </tbody>
                    </table>
                    <div class="table-responsive">
                      <table class="table mt-4 table-bordered">
                        <tbody>
                          <tr class="bg-gray-100">
                            <td></td>
                            <td>
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                  <p>ABC Company</p>
                                  <small class="text-muted">abc@company.com</small>
                                </div>
                                <div>
                                  <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="plus" class="btn-icon-prepend"></i>
                                    Award
                                  </button>
                                  <button class="btn btn-danger btn-icon">
                                    <i data-feather="trash-2"></i>
                                  </button>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center justify-content-between">
                                <div>
                                  <p>EFG Company</p>
                                  <small class="text-muted">efg@company.com</small>
                                </div>
                                <div>
                                  <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="plus" class="btn-icon-prepend"></i>
                                    Award
                                  </button>
                                  <button class="btn btn-danger btn-icon">
                                    <i data-feather="trash-2"></i>
                                  </button>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>Bid</td>
                            <td>PHP 250,000</td>
                            <td>PHP 225,000</td>
                          </tr>
                          <tr>
                            <td>Quality</td>
                            <td>Excellent</td>
                            <td>Excellent</td>
                          </tr>
                          <tr>
                            <td>Discount</td>
                            <td>20%</td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>Location</td>
                            <td>Quezon City, Philippines</td>
                            <td>Cavite City, Philippines</td>
                          </tr>
                          <tr>
                            <td>Delivery Time</td>
                            <td>1-2 Days</td>
                            <td>1-3 Days</td>
                          </tr>
                          <tr>
                            <td>Overall</td>
                            <td class="text-center"><strong>4.00/5.00</strong></td>
                            <td class="text-center"><strong>2.00/5.00</strong></td>
                          </tr>
                          <tr>
                            <td colspan="3" class="text-center">
                              <strong>
                                <i>ABC Company</i>
                              </strong>
                              has more cheaper than EFG Company
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-tab">
                    <div class="d-flex align-items-center gap-2 mb-3">
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon2">@</div>
                        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                      <div class="d-flex gap-2 flex-shrink-0">
                        <button class="btn btn-primary btn-icon-text">
                          <i data-feather="search" class="btn-icon-prepend"></i>
                          Search
                        </button>
                        <button class="btn btn-outline-primary btn-icon-text">
                          <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                          Export as CSV
                        </button>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>vendor name</th>
                            <th>date awarded</th>
                            <th>sent date</th>
                            <th>sent to</th>
                            <th>contract status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="align-middle">
                            <td>1</td>
                            <td>ABC Company</td>
                            <td>
                              <p>27 Apr 2023</p>
                              <small class="text-muted">05:22 AM</small>
                            </td>
                            <td>
                              <p>27 Apr 2023</p>
                              <small class="text-muted">05:22 AM</small>
                            </td>
                            <td>Legal Management</td>
                            <td>
                              <span class="badge bg-success">Completed</span>
                            </td>
                          </tr>
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
  <!-- End custom js for this page -->
  <!-- Flat Picker -->
  <script>
    $(document).ready(function() {
      var table = $('.dataTable').DataTable({
        lengthChange: false, // Disable length menu
        bInfo: false, // Disable "Showing X of Y entries" label
        paging: false,
      });

      $('#search').on('keyup', function(event) {
        if (event.keyCode === 13) { // Check if "Enter" key is pressed
          var query = $('#search').val();
          table.search(query).draw();
        }
      });

      $('#customSearchBtn').on('click', function() {
        var query = $('#search').val();
        table.search(query).draw();
      });

      const checkboxes = document.querySelectorAll('.checkboxes')
      const compareSelectedBtn = document.getElementById("compare_selected")

      const comparedSelection = [];

      checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function(event) {
          let checkedCount = document.querySelectorAll('.checkboxes:checked').length;
          compareSelectedBtn.disabled = (checkedCount === 0);
          
          let selected = event.target.value;
          comparedSelection.push(selected)

          console.log(comparedSelection)
        });
      });



    });
  </script>
</body>

</html>