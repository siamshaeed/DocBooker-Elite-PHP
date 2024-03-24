<?php
 require '../../classes/service_class.php';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $serviceobj = new Service();
    $service = $serviceobj->serviceById($id);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id           = htmlspecialchars($_POST['id']);
    $title        = htmlspecialchars($_POST['title']);
    $description  = htmlspecialchars($_POST['description']);

    $serviceobj = new  Service();
    $serviceobj->update($id, $title, $description);

    header('Location:service.php');
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
                                        <h5 class="">Service Edit</h5>
                                    </div>
                                </div>

                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-4">
                                          <input type="hidden" name="id" value="<?php  echo $service['id']?>">
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Title</label>
                                                    <input type="text" value="<?php  echo $service['title']?>" name="title"  class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Description</label>
                                                    <input type="text" value="<?php  echo $service['description']?>" name="description" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                      <div class="col-md-3">
                                        <div class="form-group row mb-2">
                                          <div class="col-sm-12">
                                            <label class="col-form-label">Image</label>
                                            <input type="file" name="image" class="form-control" >
                                            <img src="<?php  echo $service['image']?>" class="mt-2" alt="service_image" height="50" width="80">
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
