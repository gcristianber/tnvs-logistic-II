<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Cycle Count</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/fullcalendar/main.min.css">
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

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">

      <div class="page-content">

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div id='fullcalendar'></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="fullCalModal" class="modal fade">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="modalTitle1" class="modal-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
              </div>
              <div id="modalBody1" class="modal-body"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Event Page</button>
              </div>
            </div>
          </div>
        </div>

        <div id="createEventModal" class="modal fade">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h4 id="modalTitle2" class="modal-title">Add Schedule</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
              </div>
              <form id="addSchedule">
                <div id="modalBody2" class="modal-body">
                  <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Example input">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Type something..."></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
          </div>
        </div>


        <div class="card mt-4">
          <div class="card-body">
            <div class="container-fluid">
              <div class="table-responsive">
                <table id="declinedTable" class="table display">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>location</th>
                      <th>frequency of count</th>
                      <th>last report accuracy</th>
                      <th>last count date</th>
                      <th>next count date</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="align-middle">
                      <td>1</td>
                      <td>
                        <p>A Inventory</p>
                      </td>
                      <td>
                        <select name="" class="form-select" id="">
                          <option value="1">Weekly</option>
                          <option value="2">Monthly</option>
                          <option value="3" selected>Quarterly</option>
                          <option value="4">Annually</option>
                        </select>
                      </td>
                      <td>
                        <p class="text-success">100%</p>
                      </td>
                      <td>23 Jan 2023</td>
                      <td>23 Mar 2023</td>
                      <td>
                        <button class="btn btn-primary btn-icon-text">
                          <i data-feather="plus" class="btn-icon-prepend"></i>
                          Create Report
                        </button>
                        <a class="btn btn-outline-primary btn-icon-text" href="<?= ROOT ?>audit_management/cycle_count/view_report">
                          <i data-feather="list" class="btn-icon-prepend"></i>
                          View Report
                        </a>
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="<?= ROOT ?>assets/vendors/moment/moment.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/fullcalendar/main.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <script src="<?= ROOT ?>assets/custom/js/audit_management/fetch-calendar.js"></script>
  <!-- End custom js for this page -->

</body>

</html>