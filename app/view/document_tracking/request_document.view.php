<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Request Document</title>

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

  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.min.js"></script>
</head>

<style>
  input[type="radio"] {
    display: none;
  }

  /* Style the label to look like a clickable element */
  label {
    cursor: pointer;
    /* Add any additional styling you want for your label */
  }

  input[type="radio"]:checked+label {
    border: 1px solid #6571ff;
    border-radius: 4px;
    user-select: none;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="grid"></i>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p class="mb-0 fw-bold">Web Apps</p>
                  <a href="javascript:;" class="text-muted">Edit</a>
                </div>
                <div class="row g-0 p-1">
                  <div class="col-3 text-center">
                    <a href="../../pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i>
                      <p class="tx-12">Chat</p>
                    </a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i>
                      <p class="tx-12">Calendar</p>
                    </a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i>
                      <p class="tx-12">Email</p>
                    </a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i>
                      <p class="tx-12">Profile</p>
                    </a>
                  </div>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="mail"></i>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p>9 New Messages</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Leonardo Payne</p>
                        <p class="tx-12 text-muted">Project status</p>
                      </div>
                      <p class="tx-12 text-muted">2 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Carl Henson</p>
                        <p class="tx-12 text-muted">Client meeting</p>
                      </div>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Jensen Combs</p>
                        <p class="tx-12 text-muted">Project updates</p>
                      </div>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Amiah Burton</p>
                        <p class="tx-12 text-muted">Project deatline</p>
                      </div>
                      <p class="tx-12 text-muted">2 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Yaretzi Mayo</p>
                        <p class="tx-12 text-muted">New record</p>
                      </div>
                      <p class="tx-12 text-muted">5 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                  <p>6 New Notifications</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>New Order Recieved</p>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Server Limit Reached!</p>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>New customer registered</p>
                      <p class="tx-12 text-muted">2 sec ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Apps are ready for update</p>
                      <p class="tx-12 text-muted">5 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
                      <p>Download completed</p>
                      <p class="tx-12 text-muted">6 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                  <div class="mb-3">
                    <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                  </div>
                  <div class="text-center">
                    <p class="tx-16 fw-bolder">Amiah Burton</p>
                    <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                  </div>
                </div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="../../pages/general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>Switch User</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="<?= ROOT ?>authentication/logout" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <div class="page-content">
        <div class="card">
          <div class="card-body">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h6 class="fw-bold">REQUEST DOCUMENT</h6>
                  <small class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing.</small>
                </div>
                <div>
                  <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i data-feather="feather" class="btn-icon-prepend"></i>
                    Create Document
                  </button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Create Document</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">


                          <div class="mb-3">
                            <label for="request_purpose" class="form-label">
                              <p>Select Department</p>
                              <small class="text-muted">Select your document type.</small>
                            </label>
                            <select name="department_id" class="form-select">
                              <option selected disabled>...</option>
                              <option value="1">Administrative</option>
                              <option value="2">Finance</option>
                              <option value="3">Human Resource</option>
                              <option value="3">Logistic</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="request_purpose" class="form-label">
                              <p>Select Document Type</p>
                              <small class="text-muted">Select your document type.</small>
                            </label>
                            <select name="category_id" class="form-select" id="documentCategory">
                              <option selected disabled>...</option>
                              <option value="1">Employment Certificate</option>
                              <option value="2">Purchase Order</option>
                              <option value="3">Invoice</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <div class="form-check form-switch mb-2">
                              <input type="checkbox" class="form-check-input" id="formSwitch1">
                              <label class="form-check-label" for="formSwitch1">If the document is not in category, Please specify below.</label>
                            </div>
                            <input type="text" name="option_category" id="inputForm" class="form-control d-none" placeholder="Type something...">
                          </div>
                          <div>
                            <label for="request_purpose" class="form-label">
                              <p>Purpose</p>
                              <small class="text-muted">Write a purpose for requesting a document.</small>
                            </label>
                            <textarea name="request_purpose" class="form-control" cols="30" rows="5" placeholder="Type something..."></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" id="sendRequest">Send Request</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="qrCodeModal" tabindex="-1" aria-labelledby="qrCodeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="d-flex flex-column align-items-center">
                            <p>Your tracking number</p>
                            <h5 id="qrcodeValue"></h5>
                          </div>
                          <div class="d-flex justify-content-center py-3">
                            <div id="qrcode"></div>
                          </div>

                          <div>
                            <button type="button" class="btn btn-primary w-100 mb-2" id="downloadQRCode">Download QR</button>
                            <button type="button" class="btn btn-outline-secondary w-100" data-bs-dismiss="modal">Close</button>
                          </div>


                        </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive mt-3">
              <table id="requestTable" class="table display">
                <thead>
                  <tr>
                    <th>Tracking Id</th>
                    <th>Category</th>
                    <th>Option Category</th>
                    <th>Purpose</th>
                    <th>Department</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th data-orderable="false">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (!empty($requests)) :
                    foreach ($requests as $data) :
                  ?>
                      <tr class="align-middle">
                        <td><?= $data->tracking_id ?></td>
                        <td>
                          <p><?= ucwords($data->category_name) ?></p>
                        </td>
                        <td>
                          <?php
                          if (!empty($data->option_category)) {
                            echo $data->option_category;
                          } else {
                            echo "--";
                          }
                          ?>
                        </td>
                        <td>
                          <?= $data->purpose ?>
                        </td>
                        <td>
                          <?= ucwords($data->receiver_department) ?>
                        </td>
                        <td>
                          <p>
                            <?= date("d M Y", strtotime($data->date_created)) ?>
                          </p>
                          <small class="text-muted"><?= date("h:i A", strtotime($data->date_created)) ?></small>
                        </td>
                        <td>

                          <?php
                          switch ($data->status_name) {
                            case "received":
                              echo '<span class="badge bg-primary">Received</span>';
                              break;
                            case "review":
                              echo '<span class="badge bg-success">Review</span>';
                              break;
                            case "work in progress":
                              echo '<span class="badge bg-warning">Work in progress</span>';
                              break;
                            case "released":
                              echo '<span class="badge bg-danger">Released</span>';
                              break;
                            case "declined":
                              echo '<span class="badge bg-secondart">Declined</span>';
                              break;
                            default:
                              echo 'Unknown status';
                          }
                          ?>
                        </td>
                        <td>
                          <button class="btn btn-primary btn-icon-text">
                            <i data-feather="search" class="btn-icon-prepend"></i>
                            Track Document
                          </button>
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="<?= ROOT ?>assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/custom/js/data-table.js"></script>
  <!-- End custom js for this page -->

  <script>
    $(document).ready(function() {

      const currentUrl = $(location).attr('href');

      $("#formSwitch1").change(function() {
        var selectCategory = $("#documentCategory")
        var defaultOption = $("#documentCategory option:selected")
        if (this.checked) {
          $("#inputForm").addClass("d-block")
          $("#inputForm").removeClass("d-none")
          $("#documentCategory").val(defaultOption.val());
          selectCategory.prop("disabled", true)
        } else {
          $("#inputForm").addClass("d-none")
          $("#inputForm").val("")
          selectCategory.prop("disabled", false)
        }
      });

      $("#sendRequest").on("click", function() {

        console.log("Hello")
        let department_id = $('select[name="department_id"]').val()
        let category_id = $('select[name="category_id"]').val()
        let option_category = $('input[name="option_category"]').val()
        let request_purpose = $('textarea[name="request_purpose"]').val()

        let formData = {
          "receiver_id": department_id,
          "category_id": category_id,
          "option_category": option_category,
          "purpose": request_purpose,
        }
        $.ajax({
          url: currentUrl + '/send_data',
          type: 'POST',
          data: formData,
          success: function(response) {

            console.log(response)
            generateQR(response)
            $('#exampleModal').modal("hide")
            $('#qrCodeModal').modal("show")
          }
        })
      })

      $("#downloadQRCode").on("click", function() {
        downloadQR()
      })

      function generateQR(qrValue) {
        var qr = qrcode(0, "L");
        qr.addData(qrValue);
        qr.make();
        var qrCodeImage = qr.createImgTag(10, 5);

        var qrCodeDiv = document.getElementById("qrcode");
        var qrCodeVal = document.getElementById("qrcodeValue")
        qrCodeDiv.innerHTML = qrCodeImage;
        qrCodeVal.innerHTML = qrValue;

        window.qrCodeImageData = qrCodeImage.replace(/^data:image\/(png|jpg);base64,/, "");

        var downloadBtn = document.getElementById("downloadQRCode");

        downloadBtn.addEventListener("click", function() {
          var canvas = document.createElement("canvas");
          var context = canvas.getContext("2d");
          var img = new Image();
          img.onload = function() {
            canvas.width = img.width * 5;
            canvas.height = img.height * 5;
            context.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas.width, canvas.height);
            canvas.toBlob(function(blob) {
              var link = document.createElement("a");
              link.download = "qrcode.png";
              link.href = URL.createObjectURL(blob);
              link.click();
            }, "image/png");
          };
          img.src = qr.createDataURL();
        });

      }

      function downloadQR() {
        var downloadLink = document.createElement("a");
        downloadLink.href = "data:image/png;base64," + window.qrCodeImageData;
        downloadLink.download = "qrcode.png";

        // Trigger download
        downloadLink.click();
      }



    });
  </script>
  </script>
</body>

</html>