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

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

</head>


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

        <div class="card grid-margin">

          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div>
                <p class="fw-bold">CONDUCT AUDIT</p>
                <small class="text-muted">Select a section to perform.</small>
              </div>
              <div>
                <button class="btn btn-outline-primary btn-icon-text">
                  <i data-feather="download" class="btn-icon-prepend"></i>
                  Export
                </button>
                <button class="btn btn-primary btn-icon-text" id="getTableData">
                  <i data-feather="save" class="btn-icon-prepend"></i>
                  Save Report
                </button>
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Title" id="title">
            </div>
            <div class="mb-3">
              <select name="" class="form-select" id="categoryDropdown">
                <option disabled selected>Select Category</option>
                <option value="1">Vehicles</option>
                <option value="2">Electronics</option>
                <option value="3">Office Supplies</option>
                <option value="4">Foods and Beverages</option>
              </select>
            </div>
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                    <th>Item Id</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Item Description</th>
                    <th>Manufacturer</th>
                    <th>Quantity</th>
                    <th>Actual Count</th>
                    <th>Variance</th>
                    <th>Accuracy</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="tinymce" id="tinymceExample" rows="10" placeholder="Type something...">
            </div>
          </textarea>
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
      <!-- End plugin js for this page -->

      <!-- inject:js -->
      <script src="<?= ROOT ?>assets/js/select2.js"></script>
      <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
      <script src="<?= ROOT ?>assets/js/template.js"></script>

      <!-- endinject -->

      <!-- Custom js for this page -->
      <script src="<?= ROOT ?>assets/js/data-table.js"></script>
      <!-- End custom js for this page -->


      <script>
        tinymce.init({
          selector: '#tinymceExample',
          menubar: false,
          height: 400,
          plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak table print',
          toolbar1: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | link | table | print',
          image_title: true,
          automatic_uploads: true,
          file_picker_types: 'image',
          file_picker_callback: function(cb, value, meta) {

            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function() {
              var file = this.files[0];
              var reader = new FileReader();

              reader.onload = function() {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // Blob info
                console.log(blobInfo.blobUri())

                // call the callback and populate the Title field with the file name
                cb(blobInfo.blobUri(), {
                  title: file.name
                });
              };


              reader.readAsDataURL(file);
            };

            input.click();

          }
        })

        var currentUrl = $(location).attr('href');

        const categoryDropdown = document.getElementById("categoryDropdown")

        $("#categoryDropdown").on("change", function() {
          var selectedCategory = $(this).val()


          // console.log(selectedCategory)

          $.ajax({
            url: currentUrl + '/getTable',
            type: 'POST',
            data: {
              category_id: selectedCategory
            },
            dataType: 'json',
            success: function(data) {
              var tableRows = '';
              $.each(data, function(index, item) {
                tableRows += '<tr class="align-middle">' +
                  '<td data-name="item_id">' + item.item_id + '</td>' +
                  '<td data-name="item_name">' + item.item_name + '</td>' +
                  '<td data-name="category">' + item.category_name + '</td>' +
                  '<td data-name="item_desc">' + item.item_description + '</td>' +
                  '<td data-name="manufacturer">' + item.manufacturer + '</td>' +
                  '<td data-name="system_count">' + item.quantity + '</td>' +
                  '<td data-name="actual_count" class="actual-count"><div class="border rounded-2 text-center p-2" contenteditable="true">0</div></td>' +
                  '<td data-name="variance">0</td>' +
                  '<td data-name="accuracy">0%</td>' +
                  '</tr>'
              });
              $("#dataTableExample tbody").html(tableRows)

              $(".actual-count").on("input", function() {
                var row = $(this).closest("tr"); // get the table row for the input cell
                var systemCount = parseInt(row.find("[data-name='system_count']").text()); // get the system count for the row
                var actualCount = parseInt($(this).text()); // get the actual count entered by the user
                var variance = actualCount - systemCount; // calculate the variance
                var accuracy = systemCount > 0 ? (actualCount / systemCount) * 100 : 0; // calculate the accuracy as a percentage
                row.find("[data-name='variance']").text(variance); // update the variance cell
                var accuracyCell = row.find("[data-name='accuracy']");
                accuracyCell.text(accuracy.toFixed(2) + '%'); // update the accuracy cell
                if (accuracy >= 100) {
                  accuracyCell.removeClass("text-warning text-danger").addClass("text-success"); // apply success class
                } else if (accuracy >= 50) {
                  accuracyCell.removeClass("text-success text-danger").addClass("text-warning"); // apply warning class
                } else {
                  accuracyCell.removeClass("text-success text-warning").addClass("text-danger"); // apply danger class
                }
              });
            }
          })
        })

        let data = []; // create an array to store the data
        $("#getTableData").on("click", function() {

          var title = $("#title").val()
          var content = tinymce.get("tinymceExample").getContent();
          var category_type_id = $("#categoryDropdown").val()
          $("#dataTableExample tbody tr").each(function() {
            var row = $(this);
            var itemId = parseInt(row.find("[data-name='item_id']").text());
            var actualCount = parseInt(row.find("[data-name='actual_count']").text());
            var variance = parseInt(row.find("[data-name='variance']").text());
            var accuracy = parseFloat(row.find("[data-name='accuracy']").text().replace('%', ''));
            row.data({
              itemId: itemId,
              actualCount: actualCount,
              variance: variance,
              accuracy: accuracy
            });
          });

          // example of how to retrieve the data for a specific row:
          var row = $("#dataTableExample tbody tr:eq(0)");
          var itemId = row.data("itemId");
          var actualCount = row.data("actualCount");
          var variance = row.data("variance");
          var accuracy = row.data("accuracy");
          console.log(itemId, actualCount, variance, accuracy); // log the data to the console

          let data = {
            itemId: itemId,
            actualCount: actualCount,
            variance: variance,
            accuracy: accuracy
          }

          console.log(data); // log the data to the console

          $.ajax({
            url: currentUrl + '/generate_report',
            type: "POST",
            data: {
              title: title,
              audit_items: data,
              conclusion: content,
              category_type_id: category_type_id,

            },
            success: function(response) {
              console.log(response)
            }
          })
        })
      </script>


</body>

</html>