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

        <div class="card wd-md-500">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <div class="text-center">
                    <img src="<?= ROOT ?>assets/images/favicon.png" class="ht-50 wd-50 mb-3" alt="">
                    <h4>Welcome Back!</h4>
                    <p class="text-muted">Sign in to get started.</p>
                  </div>
                </div>
                <form method="POST">
                  <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                    <input type="text" name="username" id="" class="form-control" placeholder="Username" autofocus>
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                      <button type="button" class="btn btn-light btn-icon">
                        <i data-feather="eye"></i>
                      </button>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="checkDefault">
                      <label class="form-check-label" for="checkDefault">
                        Keep me signed in
                      </label>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary w-100 mb-2">
                      Sign in
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