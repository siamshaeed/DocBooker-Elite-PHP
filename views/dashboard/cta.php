<?php
require_once '../../classes/cta_class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['title'] && $_POST['value']) {
    $title = htmlspecialchars($_POST['title']);
    $value = htmlspecialchars($_POST['value']);

    $ctaObj = new Cta();
    $ctaObj->store($title, $value);

    header('Location:cta.php');
    exit();
}

?>
<!doctype html>
<html lang="en">

<?php require '../../views/partial/head_dashboard.php' ?>

<body data-sidebar="dark">

<div id="layout-wrapper">
    <?php require '../../views/partial/top_dashboard.php' ?>
    <?php require '../../views/partial/sidebar_dashboard.php' ?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

                <div class="row">
                  <div class="col-md-12">
                    <h5 class="">CTA Create</h5>
                  </div>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-firstname-input" class="col-form-label">Title</label>
                          <input type="text" name="title" value="" class="form-control" id="horizontal-firstname-input" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-email-input" class="col-form-label">Value</label>
                          <input type="number" name="value" value="" class="form-control" id="horizontal-email-input" required>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-md">Save</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">CTA List</h4>
                <div class="table-responsive">
                  <table class="table mb-0">

                    <thead class="thead-light">
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Value</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>10</td>
                      <td>
                        <div class="custom-control custom-switch mb-3" dir="ltr">
                          <input type="checkbox" class="custom-control-input" id="customSwitchsizesm" checked>
                          <label class="custom-control-label" for="customSwitchsizesm"></label>
                        </div>
                      </td>
                    </tr>

                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End Page-content -->
    <?php require '../../views/partial/footer_dashboard.php' ?>
</div>

<?php require '../../views/partial/script_dashboard.php' ?>
</body>

</html>
