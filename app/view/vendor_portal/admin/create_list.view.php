<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Add New Delivery</title>

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
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />
</head>
<style>
  .dropify-wrapper {
    height: 300px;
  }
</style>

<body>
  <div class="main-wrapper">
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
                  <p class="tx-16 fw-bolder"><?= $_SESSION["user"]->display_name ?></p>
                  <p class="tx-12 text-muted"><?= $_SESSION["user"]->username ?></p>
                </div>
              </div>
              <ul class="list-unstyled p-1">
                <li class="dropdown-item py-2">
                  <a href="<?= ROOT ?>general/profile" class="text-body ms-0">
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
    <div class="page-wrapper">
      <div class="page-content">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center gap-2 mb-3">
              <i data-feather="hash"></i>
              <div>
                <p class="fs-4">Create List</p>
                <p class="text-muted mb-3">Read the <a href="" target="_blank"> Procurement Listing Guideline </a>for a full list of instructions and other options.</p>
              </div>
            </div>
            <div class="table-responsive bg-gray-100 p-2 rounded-2">
              <table id="request_tbl" class="table display">
                <thead>
                  <tr>
                    <th>request id</th>
                    <th>subject</th>
                    <th>list type</th>
                    <th>start bid</th>
                    <th>requested by</th>
                    <th>request date</th>
                    <th>due date</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="align-middle" data-status="pending">
                    <td>VREQ-244ACDFK</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="wd-250 text-truncate">
                          <p class="text-uppercase">Intel i5 4th Gen Computers</p>
                          <small class="text-muted">Hello, We are requesting a Lorem, ipsum dolor sit amet consectetur adipisicing elit.</small>
                        </div>
                      </div>
                    </td>
                    <td>Purchase</td>
                    <td>
                      <p>P 50, 000</p>
                    </td>
                    <td>Cristianber Gordora</td>
                    <td>
                      <p>06 Apr 2023</p>
                      <small class="text-muted">12:26 AM</small>
                    </td>
                    <td>
                      <p>06 Apr 2023</p>
                      <small class="text-muted">12:26 AM</small>
                    </td>
                    <td>
                      <button class="btn btn-light btn-icon-text">
                        <i data-feather="external-link" class="btn-icon-prepend"></i>
                        Preview
                      </button>
                    </td>
                  </tr>
                </tbody>

              </table>
            </div>
            <div class="row mt-4">
              <div class="col-md-5 grid-margin">
                <input type="file" id="myDropify" />
                <div class="mt-4">
                  <div>
                    <label for="" class="form-label">
                      <p class="fs-5">Title</p>
                      <small class="text-muted">Create your awesome title.</small>
                    </label>
                    <input type="text" name="" id="" class="form-control mb-3" placeholder="Add title">
                  </div>
                </div>
                <div class="mt-4">
                  <label for="" class="form-label">
                    <p class="fs-5">Product List Type</p>
                    <small class="text-muted">Select a product list type.</small>
                  </label>
                  <select name="" class="form-select mb-3" id="">
                    <option selected disabled>Select List Type</option>
                    <option value="">Purchase</option>
                    <option value="">Auction</option>
                  </select>
                </div>

                <div class="mt-4">
                  <label for="" class="form-label">
                    <p class="fs-5">Due Date</p>
                    <small class="text-muted">Set a due date of this post. (Post will be automatically close after the due date)</small>
                  </label>
                  <div class="input-group flatpickr" id="flatpickr-date">
                    <span class="input-group-text input-group-addon" data-toggle="">
                      <i data-feather="calendar"></i>
                    </span>
                    <input type="text" name="return_date" id="" class="form-control date-input">
                  </div>
                </div>
                <div class="mt-4">
                  <div class="text-end">
                    <button class="btn btn-light">
                      Cancel
                    </button>
                    <button class="btn btn-primary">
                      Publish
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-7 grid-margin">

                <div>
                  <label for="" class="form-label">
                    <p class="fs-5">List Details</p>
                    <small class="text-muted">Add more details to your product listing to gain more bidders.</small>
                  </label>
                  <textarea class="form-control tinymceExample" name="tinymce" id="reportTinyMCE" rows="10" placeholder="Type something..."></textarea>
                </div>
                <div class="mt-4">
                  <label for="" class="form-label">
                    <p class="fs-5">Starting Bid</p>
                    <small class="text-muted">Set a starting bid for this list.</small>
                  </label>
                  <input class="form-control mb-4 mb-md-0" data-inputmask="'alias': 'currency', 'prefix':'₱'" />
                </div>
                <div class="mt-4">
                  <label for="" class="form-label">
                    <p class="fs-5">Additional File(s)</p>
                    <small class="text-muted">Attach additional files for vendor's reference.</small>
                  </label>
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

  <!-- core:js -->
  <script src="<?= ROOT ?>assets/vendors/core/core.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page -->
  <script src="<?= ROOT ?>assets/vendors/tinymce/tinymce.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/inputmask/jquery.inputmask.min.js"></script>
  <script src="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.js"></script>
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <script src="<?= ROOT ?>assets/js/inputmask.js"></script>
  <!-- <script src="<?= ROOT ?>assets/js/dropify.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <!-- End custom js for this page -->

  <script>
    // Get the input element

    const myInput = document.querySelectorAll(".date-input");
    const flatpickrInstance = flatpickr(myInput, {
      enableTime: true,
      dateFormat: "Y-m-d H:i",
      defaultDate: new Date(),
      minDate: "today",
      allowInput: true
    });

    $('#myDropify').dropify();

    tinymce.init({
      selector: '.tinymceExample',
      menubar: false,
      height: 425,
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