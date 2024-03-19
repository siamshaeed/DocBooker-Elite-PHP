<!doctype html>
<html lang="en">

<?php require '../../views/partial/head_dashboard.php'?>
<body data-sidebar="dark">

<div id="layout-wrapper">
    <?php require '../../views/partial/top_dashboard.php'?>
    <?php require '../../views/partial/sidebar_dashboard.php'?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
          <?php
          require_once '../../classes/settings_class.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['logo']))  {
              $app_name = $_POST['app_name'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $phone = $_POST['phone'];
              $logo = $_FILES['logo'];
              $favicon = $_FILES['favicon'];

              $storeobj = new Setting();
              $storeobj->store($app_name, $email, $address, $phone, $logo, $favicon);

              exit();
            }
          ?>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                <div class="row">
                  <div class="col-md-12">
                    <h5 class="">Generel Settings</h5>
                  </div>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-firstname-input" class="col-form-label">App Name</label>
                          <input type="text" name="app_name" class="form-control" placeholder="Enter App Name" id="horizontal-firstname-input">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-email-input" class="col-form-label">Email Address</label>
                          <input type="email" name="email" class="form-control" placeholder="Enter Your Email" id="horizontal-email-input">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-address-input" class="col-form-label">Address</label>
                          <input type="text" name="address" class="form-control" placeholder="Enter Your Address" id="horizontal-address-input">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-phone-input" class="col-form-label">Phone</label>
                          <input type="text" name="phone" class="form-control" placeholder="Enter Your Phone" id="horizontal-phone-input">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-logo-input" class="col-form-label">Logo</label>
                          <input type="file" name="logo" class="form-control" id="horizontal-logo-input">
                          <img src="" class="mt-2" alt="Logo" width="100" height="80">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-favicon-input" class="col-form-label">Favicon</label>
                          <input type="file" name="favicon" class="form-control" id="horizontal-favicon-input">
                          <img src="" class="mt-2" alt="Favicon" width="100" height="80">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                      <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input" id="horizontal-customCheck">
                      </div>
                    </div>
                  </div>

                  <div class="custom-control custom-switch custom-switch-md mb-4" dir="ltr">
                    <input type="checkbox" name="status" class="custom-control-input" id="customSwitchsizesm" checked>
                    <label class="custom-control-label" for="customSwitchsizesm">Status</label>
                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary w-md">Save</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Page-content -->

    <?php require '../../views/partial/footer_dashboard.php'?>
</div>

<?php require '../../views/partial/script_dashboard.php' ?>
</body>

</html>
