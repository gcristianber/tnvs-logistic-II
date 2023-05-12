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

  .perfect-scrollbar-example {
    position: relative;
    height: 425px;
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
                      <i data-feather="archive" class="d-inline text-primary"></i>
                      Inventory
                    </h3>
                    <small class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum.</small>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="flex-shrink-0">

                      <button class="btn btn-light btn-icon-text">
                        <i data-feather="download-cloud" class="btn-icon-prepend"></i>
                        Download as CSV
                      </button>
                    </div>
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
                  <div class="table-responsive">
                    <table class="table table-bordered dataTable">
                      <thead>
                        <tr>
                          <th data-orderable="false"></th>
                          <th>location</th>
                          <th>ABC</th>
                          <th>frequency count</th>
                          <th>product category</th>
                          <th>last audited</th>
                          <th>next count</th>
                          <th>status</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if (!empty($locations)) :
                          foreach ($locations as $data) :
                        ?>
                            <tr class="align-middle" data-location_id="<?= $data->location_id ?>">
                              <td>
                                <input type="checkbox" class="form-check-input" name="" id="">
                              </td>
                              <td>
                                <?= $data->location_name ?>
                              </td>
                              <td>
                                <?php
                                switch ($data->abc) {
                                  case 'a':
                                    echo '<span class="badge bg-danger">A</span>';
                                    break;
                                  case 'b':
                                    echo '<span class="badge bg-warning">B</span>';
                                    break;
                                  case 'c':
                                    echo '<span class="badge bg-success">C</span>';
                                    break;
                                  default:
                                    echo '<span class="badge bg-secondary">-</span>';
                                    break;
                                }
                                ?>
                              </td>
                              <td><?= ucwords($data->frequency_count) ?></td>
                              <td>
                                <?= ucwords($data->category_name) ?>
                              </td>
                              <td>
                                <p><?= date("d/m/Y - h:i A", strtotime($data->last_audit_date)) ?></p>
                              </td>
                              <td><?= isset($data->next_count_date) ? date("d/m/Y", strtotime($data->next_count_date)) : '--' ?></td>
                              <td>
                                <?php
                                switch ($data->location_status_name) {
                                  case 'up to date':
                                    echo '<span class="badge bg-success">Up to date</span>';
                                    break;
                                  case 'need an update':
                                    echo '<span class="badge bg-danger">Need an update</span>';
                                    break;
                                  default:
                                    echo '<span class="badge bg-secondary">Undefined</span>';
                                    break;
                                }
                                ?>
                              </td>
                              <td>
                                <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#location_<?= $data->location_id ?>">
                                  <i data-feather="feather" class="btn-icon-prepend"></i>
                                  Create Report
                                </button>
                                <div class="modal fade" id="location_<?= $data->location_id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                      </div>
                                      <form class="auditForm" enctype="multipart/form-data">
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col">
                                              <div class="table-responsive perfect-scrollbar-example">
                                                <table class="table table-bordered" data-location_id="<?= $data->location_id ?>">
                                                  <thead>
                                                    <tr>
                                                      <th>product id</th>
                                                      <th>product name</th>
                                                      <th>quantity</th>
                                                      <th>actual count</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php
                                                    if (!empty($products)) :
                                                      foreach ($products as $product) :
                                                        if ($product->location_name == $data->location_name) :
                                                    ?>
                                                          <tr class="align-middle" data-product_id="<?= $product->product_id ?>">
                                                            <td><?= $product->product_id ?></td>
                                                            <td data-product_name="<?= $product->product_name ?>"><?= $product->product_name ?></td>
                                                            <td data-quantity="<?= $product->quantity ?>"><?= $product->quantity ?></td>
                                                            <td><input type="number" name="" id="" class="actualCount form-control"></td>
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
                                            <div class="col">
                                              <div class="mb-3">
                                                <label for="" class="form-label">Subject</label>
                                                <input type="text" name="subject" id="" class="form-control ">
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Remarks</label>
                                                <textarea name="remarks" class="form-control " id="remarks" cols="30" rows="10"></textarea>
                                              </div>
                                              <div class="mb-3">
                                                <label for="" class="form-label">Attachment/s</label>
                                                <input type="file" name="attachments[]" id="attachments" class="form-control" multiple>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                        <?php
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
    var scrollbarExample = new PerfectScrollbar('.perfect-scrollbar-example');
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