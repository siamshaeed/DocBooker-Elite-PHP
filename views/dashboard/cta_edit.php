<?php
require_once '../../classes/cta_class.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $ctaobj = new Cta();
  $cta = $ctaobj->getById($id);


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
                    <h5 class="">CTA Edit</h5>
                  </div>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-firstname-input" class="col-form-label">Title</label>
                          <input type="text" name="title" value="<?php echo $cta['title']?>" class="form-control" id="horizontal-firstname-input" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row mb-2">
                        <div class="col-sm-12">
                          <label for="horizontal-email-input" class="col-form-label">Value</label>
                          <input type="number" name="value" value="<?php echo $cta['value']?>" class="form-control" id="horizontal-email-input" required>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mt-4">
                    <button type="submit" class="btn btn-primary w-md">Update</button>
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
    <?php require '../../views/partial/footer_dashboard.php' ?>
</div>

<?php require '../../views/partial/script_dashboard.php' ?>
</body>

</html>
