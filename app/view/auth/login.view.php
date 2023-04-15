<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Login</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/core/core.css">
  <!-- endinject -->

  <!-- Plugin css for this page -->
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
    <div class="page-wrapper full-page">
      <div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
          <div class="col-md-8 col-xl-6 mx-auto">
            <div class="card">
              <div class="card-body">
                <div class="mb-3">
                  <h4 class="">LOGIN</h4>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="d-flex align-items-center gap-5">
                  <img src="<?= ROOT ?>assets/images/thumbnails/login_thumbnail.svg" class="wd-250" alt="">
                  <form class="forms-sample w-100" method="POST">
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="email" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                      <label for="userPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" id="userPassword" name="password" autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="form-check mb-3">
                      <input type="checkbox" class="form-check-input" id="authCheck">
                      <label class="form-check-label" for="authCheck">
                        Remember me
                      </label>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                      <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                        <i class="btn-icon-prepend" data-feather="twitter"></i>
                        Login with twitter
                      </button>
                    </div>
                  </form>
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
  <!-- End plugin js for this page -->

  <!-- inject:js -->
  <script src="<?= ROOT ?>assets/vendors/feather-icons/feather.min.js"></script>
  <script src="<?= ROOT ?>assets/js/template.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page -->
  <!-- End custom js for this page -->

</body>

</html>