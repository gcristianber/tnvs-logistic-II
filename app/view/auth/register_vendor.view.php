<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Vendor Login</title>

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

                <div class="card wd-500">
                    <div class="card-body">


                        <ul class="nav nav-tabs nav-tabs-line" id="lineTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Company Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Attachments</a>
                            </li>
                        </ul>
                        <div class="tab-content mt-3" id="lineTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-line-tab">
                                <div class="row">
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Company Name
                                        </label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Email Address
                                        </label>
                                        <input type="email" name="" id="" class="form-control">
                                    </div>
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Address
                                        </label>
                                        <textarea name="" class="form-control" id="" cols="15" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6 grid-margin">
                                        <label for="" class="form-label">
                                            Country
                                        </label>
                                        <select name="" class="form-select" id="">
                                            <option value="1">...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 grid-margin">
                                        <label for="" class="form-label">
                                            City
                                        </label>
                                        <select name="" class="form-select" id="">
                                            <option value="1">...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 grid-margin">
                                        <label for="" class="form-label">
                                            Company Type
                                        </label>
                                        <select name="" class="form-select" id="">
                                            <option value="1">Public Company</option>
                                            <option value="2">Private Company (LTD)</option>
                                            <option value="3">Government Company</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 grid-margin">
                                        <label for="" class="form-label">
                                            Service Category Type
                                        </label>
                                        <select name="" class="form-select" id="">
                                            <option value="1">...</option>
                                        </select>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-line-tab">
                                <div class="row">
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Username
                                        </label>
                                        <input type="text" name="" id="" class="form-control">
                                    </div>
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Password
                                        </label>
                                        <input type="password" name="" id="passwordInput" class="form-control">
                                        <div class="progress ht-10 mt-2">
                                            <div id="progressBar" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <small id="passwordStrength" class="form-text"></small>
                                    </div>
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Confirm Password
                                        </label>
                                        <input type="password" name="" id="" class="form-control">
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-line-tab">
                                <div class="row">
                                    <div class="col-md-12 grid-margin">
                                        <label for="" class="form-label">
                                            Attach File/s
                                        </label>
                                        <input type="file" name="" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 grid-margin text-center">
                                <button class="btn btn-outline-primary" disabled id="backBtn">Back</button>
                                <button class="btn btn-primary" id="nextBtn">Next</button>
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
    <script>
        // Get the next and back button elements
        var nextButton = document.querySelector('#nextBtn');
        var backButton = document.querySelector('#backBtn');

        // Add click event listener to the next button
        nextButton.addEventListener('click', function() {
            // Get the current active tab
            var activeTab = document.querySelector('.nav-link.active');

            // Get the parent <li> element of the active tab
            var activeTabParent = activeTab.parentNode;

            // Get the next sibling <li> element
            var nextTabParent = activeTabParent.nextElementSibling;

            // If there is a next sibling, switch to it
            if (nextTabParent !== null) {
                // Remove the 'active' class from the current active tab
                activeTab.classList.remove('active');

                // Remove the 'show active' classes from the current tab content
                var activeTabContentId = activeTab.getAttribute('href');
                var activeTabContent = document.querySelector(activeTabContentId);
                activeTabContent.classList.remove('show', 'active');

                // Add the 'active' class to the next tab
                var nextTab = nextTabParent.querySelector('.nav-link');
                nextTab.classList.add('active');

                // Get the target tab content and switch to it
                var targetTabContentId = nextTab.getAttribute('href');
                var targetTabContent = document.querySelector(targetTabContentId);
                targetTabContent.classList.add('show', 'active');

                // Enable the back button
                backButton.disabled = false;
            }
        });

        // Add click event listener to the back button
        backButton.addEventListener('click', function() {
            // Get the current active tab
            var activeTab = document.querySelector('.nav-link.active');

            // Get the parent <li> element of the active tab
            var activeTabParent = activeTab.parentNode;

            // Get the previous sibling <li> element
            var prevTabParent = activeTabParent.previousElementSibling;

            // If there is a previous sibling, switch to it
            if (prevTabParent !== null) {
                // Remove the 'active' class from the current active tab
                activeTab.classList.remove('active');

                // Remove the 'show active' classes from the current tab content
                var activeTabContentId = activeTab.getAttribute('href');
                var activeTabContent = document.querySelector(activeTabContentId);
                activeTabContent.classList.remove('show', 'active');

                // Add the 'active' class to the previous tab
                var prevTab = prevTabParent.querySelector('.nav-link');
                prevTab.classList.add('active');

                // Get the target tab content and switch to it
                var targetTabContentId = prevTab.getAttribute('href');
                var targetTabContent = document.querySelector(targetTabContentId);
                targetTabContent.classList.add('show', 'active');
            }

            // Disable the back button if it is in the first tab
            if (prevTabParent === null) {
                backButton.disabled = true;
            }
        });

        // Get the password input element, progress bar element, and password strength text element
        var passwordInput = document.getElementById('passwordInput');
        var progressBar = document.getElementById('progressBar');
        var passwordStrengthText = document.getElementById('passwordStrength');

        // Add input event listener to the password input
        passwordInput.addEventListener('input', function() {
            var password = passwordInput.value;
            var strength = calculatePasswordStrength(password);

            // Update the width of the progress bar based on the password strength
            progressBar.style.width = strength + '%';
            progressBar.setAttribute('aria-valuenow', strength);

            // Update the password strength text based on the password strength
            if (strength < 50) {
                passwordStrengthText.textContent = 'Weak';
            } else if (strength >= 50 && strength < 75) {
                passwordStrengthText.textContent = 'Good';
            } else {
                passwordStrengthText.textContent = 'Strong';
            }
        });

        // Function to calculate the password strength (you can customize this based on your requirements)
        function calculatePasswordStrength(password) {
            var strength = 0;

            // Calculate the password strength logic here
            // You can implement your own rules and algorithms to determine the strength

            // Example: Checking if the password has a combination of numbers and letters
            var hasNumbers = /[0-9]/.test(password);
            var hasLetters = /[a-zA-Z]/.test(password);

            if (hasNumbers && hasLetters) {
                strength = 100;
            } else {
                strength = 0;
            }

            return strength;
        }
    </script>
</body>

</html>