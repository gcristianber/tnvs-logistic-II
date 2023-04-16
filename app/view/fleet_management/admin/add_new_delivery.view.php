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
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/fonts/feather-font/css/iconfont.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>assets/vendors/dropify/dist/dropify.min.css">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= ROOT ?>assets/css/demo1/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?= ROOT ?>assets/images/favicon.png" />

  <link href="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.13.0/mapbox-gl.js"></script>

  <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="<?= ROOT ?>assets/custom/js/const.js"></script>
</head>
<style>
  body {
    margin: 0;
    padding: 0;
  }

  #map-container {
    position: relative;
  }

  #map {
    width: 100%;
    height: 100%;
  }
</style>

<body>
  <div class="main-wrapper">

    <div class="page-wrapper">
      <div class="page-content">
        <div class="card">
          <div class="card-body" id="map-container">
            <div class="row">
              <div class="col-md-5 grid-margin">
                <div id="map" class="rounded-2"></div>
              </div>
              <div class="col-md-7 grid-margin">
                <form id="delivery_form">
                  <div class="">
                    <select name="delivery_type" class="form-select" id="">
                      <option selected disabled>Delivery Type</option>
                      <option value="1">Delivery</option>
                      <option value="2">Pickup</option>
                    </select>
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label">Contact</label>
                    <input type="text" name="contact_person" id="" class="form-control mb-3" placeholder="Full Name">
                    <input type="text" name="phone_number" id="" class="form-control" placeholder="Phone number">
                  </div>
                  <div class="mt-4">

                    <div class="alert alert-primary" role="alert">
                      Please provide the specific address for delivery.
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">
                        <p>Pickup Address</p>
                      </label>
                      <textarea name="pickup_address" class="form-control" id="" cols="30" rows="3" placeholder="Address"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">
                        <p>Drop-off Address</p>
                      </label>
                      <textarea name="dropoff_address" class="form-control" id="" cols="30" rows="3" placeholder="Address"></textarea>
                    </div>
                  </div>
                  <div class="mt-4">
                    <label for="notes" class="form-label">Products to deliver</label>
                    <div class="mb-3">
                      <div class="row">
                        <div class="col-md-3">
                          <input type="text" name="" id="" class="form-control" placeholder="Product ID">
                        </div>
                        <div class="col-md-3">
                          <input type="text" name="" id="" class="form-control" placeholder="Product Name">
                        </div>
                        <div class="col-md-3">
                          <input type="number" name="" id="" class="form-control" placeholder="Quantity">
                        </div>
                        <div class="col-md-3">
                          <button class="btn btn-primary btn-icon-text w-100">
                            <i data-feather="plus" class="btn-icon-prepend"></i>
                            Add Data
                          </button>
                        </div>
                      </div>
                    </div>
                    <table class="table table-bordered" id="delivery_products">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>product id</th>
                          <th>product name</th>
                          <th>quantity</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1</td>
                          <td>456</td>
                          <td>Chips</td>
                          <td>56</td>
                          <td>
                            <button class="btn btn-primary btn-icon">
                              <i data-feather="edit"></i>
                            </button>
                            <button class="btn btn-danger btn-icon">
                              <i data-feather="minus-circle"></i>
                            </button>
                          </td>
                        </tr>
                        <tr class="align-middle">
                          <td>2</td>
                          <td>456</td>
                          <td>Chocolates</td>
                          <td>100</td>
                          <td>
                            <button class="btn btn-primary btn-icon">
                              <i data-feather="edit"></i>
                            </button>
                            <button class="btn btn-danger btn-icon">
                              <i data-feather="minus-circle"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="mt-4">
                    <label for="notes" class="form-label">Notes for the driver</label>
                    <textarea name="notes_for_driver" class="form-control" id="notes" cols="30" rows="5" placeholder="Type something..."></textarea>
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label">
                      <p>Delivery Date</p>
                    </label>
                    <div class="input-group flatpickr" id="flatpickr-date">
                      <span class="input-group-text input-group-addon" data-toggle="">
                        <i data-feather="calendar"></i>
                      </span>
                      <input type="text" name="delivery_date" id="" class="form-control date-input">
                    </div>
                  </div>
                  <div class="mt-4">
                    <label for="" class="form-label">Additional File(s)</label>
                    <input type="file" name="shipping_document" id="" class="form-control">
                  </div>
                  <div class="text-end mt-4">
                    <button class="btn btn-light btn-icon-text">
                      <i data-feather="clock" class="btn-icon-prepend"></i>
                      Schedule Delivery
                    </button>
                    <button type="submit" class="btn btn-primary btn-icon-text">
                      <i data-feather="plus" class="btn-icon-prepend"></i>
                      Add Delivery
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
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="<?= ROOT ?>assets/custom/js/fleet_management/manage-delivery-request.js"></script>
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
  </script>

  <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoibWVsb24tZGV2IiwiYSI6ImNsYTRrMnYwMjA0NnM0MHJ2a3R4ZjU5aHgifQ.EGko1-iUxIzdjVqKzp8ZmA';
    const map = new mapboxgl.Map({
      container: 'map',
      // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
      style: 'mapbox://styles/mapbox/streets-v12',
      center: [-79.4512, 43.6568],
      zoom: 13
    });

    map.addControl(
      new MapboxDirections({
        accessToken: mapboxgl.accessToken
      }),
      'top-left'
    );
  </script>
</body>

</html>