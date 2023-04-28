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
        <div class="card h-100">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table border border-white">
                <tbody>
                  <tr>
                    <td>
                      <table class="table border border-white">
                        <tr>
                          <td>Reference Number:</td>
                          <td>RFID-0441A</td>
                        </tr>
                        <tr>
                          <td>Subject:</td>
                          <td>INVENTORY AUDIT REQUEST FOR SECTION A APRIL 2023</td>
                        </tr>
                        <tr>
                          <td>Description:</td>
                          <td class="text-wrap">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quas incidunt neque aperiam, voluptatibus accusantium dolore odio quaerat doloribus voluptas?</td>
                        </tr>
                      </table>
                    </td>
                    <td>
                      <table class="table border border-white">
                        <tr>
                          <td>Date Requested:</td>
                          <td>27/04/2023 - 09:38 PM</td>
                        </tr>
                        <tr>
                          <td>Status:</td>
                          <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

           <div class="container">
             <div class="table-responsive">
               <table class="table table-bordered dataTable">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>product no.</th>
                     <th>product name</th>
                     <th>category</th>
                     <th>system count</th>
                     <th>actual count</th>
                     <th>status</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr class="align-middle">
                     <td>1</td>
                     <td>PID-04A</td>
                     <td>Coke Zero</td>
                     <td>Foods & Beverages</td>
                     <td>
                       25
                     </td>
                     <td>
                       <input type="number" name="" id="" class="form-control">
                     </td>
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
      <!-- End custom js for this page -->

      <script>
        $(document).ready(function() {
          var table = $('.dataTable').DataTable({
            lengthChange: false, // Disable length menu
            bInfo: false, // Disable "Showing X of Y entries" label
            paging: false,
          });
        });
      </script>

</body>

</html>