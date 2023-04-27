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
            <div class="row h-100">
              <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Summary</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Bids</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="disabled-tab" data-bs-toggle="tab" href="#disabled" role="tab" aria-controls="disabled" aria-selected="false">Award</a>
                  </li>
                </ul>
                <div class="tab-content border border-top-0 p-3 h-100" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <table class="table border-white mb-3">
                      <tbody>
                        <tr>
                          <td>
                            <strong>Tender ID:</strong>
                          </td>
                          <td>TND-488AFH1</td>
                          <td>
                            <strong>Date published:</strong>
                          </td>
                          <td>20/04/2023</td>
                        </tr>
                        <tr>
                          <td>
                            <strong>Subject:</strong>
                          </td>
                          <td>Intel I5 Computer Supplies</td>
                          <td>
                            <strong>Status:</strong>
                          </td>
                          <td>
                            <span class="badge bg-success">Active</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <strong>Description:</strong>
                          </td>
                          <td>
                            <p class="text-wrap">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque odit tenetur eaque quis a aliquid, dolor fugit ipsa error minus.</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <strong>Category:</strong>
                          </td>
                          <td>
                            <p>Office Supplies</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <strong>Budget for contract:</strong>
                          </td>
                          <td>
                            <p>PHP 20,000.00</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table table-bordered dataTable">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>item / services</th>
                          <th>quantity</th>
                          <th>budget</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1</td>
                          <td>Bond Paper</td>
                          <td>200</td>
                          <td>PHP 10,000.00</td>
                          <td>
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="edit" class="btn-icon-prepend"></i>
                              Edit Details
                            </button>
                            <button class="btn btn-danger btn-icon">
                              <i data-feather="trash-2"></i>
                            </button>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>2</td>
                          <td>Mongol Pencil 2</td>
                          <td>200</td>
                          <td>PHP 10,000.00</td>
                          <td>
                            <button class="btn btn-primary btn-icon-text">
                              <i data-feather="edit" class="btn-icon-prepend"></i>
                              Edit Details
                            </button>
                            <button class="btn btn-danger btn-icon">
                              <i data-feather="trash-2"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="d-flex align-items-center gap-2">
                      <div class="input-group">
                        <div class="input-group-text" id="btnGroupAddon2">@</div>
                        <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      </div>
                      <div class="d-flex gap-2 flex-shrink-0">
                        <button class="btn btn-primary btn-icon-text" disabled>
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
                          <th>date submitted</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="checkDefault">
                            </div>
                          </td>
                          <td>1</td>
                          <td>
                            <p>SM Supermalls</p>
                          </td>
                          <td>PHP 190,000.00</td>
                          <td>20/04/2023</td>
                        </tr>
                        <tr class="align-middle">
                          <td>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="checkDefault">
                            </div>
                          </td>
                          <td>2</td>
                          <td>
                            <p>National Bookstore</p>
                          </td>
                          <td>PHP 200,000.00</td>
                          <td>20/04/2023</td>
                        </tr>

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
                  <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-tab">...</div>
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
  <script src="<?= ROOT ?>assets/custom/js/audit_management/manage-requests.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- End custom js for this page -->
  <!-- Flat Picker -->
  <script>
    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      enableTime: true,
      dateFormat: "d M Y",
      defaultDate: new Date(),
      minDate: "today",
      allowInput: true
    });
  </script>
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

      var rows = $('table tbody tr');

      // listen for changes to the radio buttons
      $('input[name="btnradio"]').on('change', function() {
        // get the value of the selected radio button
        var value = $(this).val();

        // hide all rows by default
        rows.hide();

        // show the rows that match the selected status
        if (value === 'all') {
          rows.show();
        } else {
          rows.filter('[data-status="' + value + '"]').show();
        }
      });

      var statusCounts = {
        'all': rows.length,
        'pending': 0,
        'approved': 0,
        'declined': 0
      };

      rows.each(function() {
        var status = $(this).data('status');
        statusCounts[status]++;
      });

      $('input[type=radio][name=btnradio]').each(function() {
        var status = $(this).val();
        if (status !== 'all') {
          var count = statusCounts[status];
          $(this).next('label').text(capitalize(status) + ' (' + count + ')');
        }
      });

      function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
      }



    });
  </script>
</body>

</html>