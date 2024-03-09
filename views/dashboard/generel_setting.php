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

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $app_name = $_POST['app_name'];
              $email = $_POST['email'];
              $address = $_POST['address'];
              $phone = $_POST['phone'];
//              $logo = $_FILES['logo'];
//              $favicon = $_FILES['favicon'];

              $storeobj = new Setting();
              $storeobj->store($app_name, $email, $address, $phone);
            }
          ?>
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Generel Settings</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form action="" method="post">
                  <div class="form-group row mb-2">
                    <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">App Name</label>
                    <div class="col-sm-9">
                      <input type="text" name="app_name" class="form-control" id="horizontal-firstname-input">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" name="email" class="form-control" id="horizontal-email-input">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                      <input type="email" name="address" class="form-control" id="horizontal-email-input">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                      <input type="email" name="phone" class="form-control" id="horizontal-email-input">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Logo</label>
                    <div class="col-sm-9">
                      <input type="file" name="logo" class="form-control" id="horizontal-email-input">
                    </div>
                  </div>
                  <div class="form-group row mb-2">
                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Favicon</label>
                    <div class="col-sm-9">
                      <input type="file" name="favicon" class="form-control" id="horizontal-email-input">
                    </div>
                  </div>

                  <div class="form-group row justify-content-end">
                    <div class="col-sm-9">
                      <div class="custom-control custom-checkbox mb-4">
                        <input type="checkbox" class="custom-control-input" id="horizontal-customCheck">
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary w-md">Save</button>
                      </div>
                    </div>
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
