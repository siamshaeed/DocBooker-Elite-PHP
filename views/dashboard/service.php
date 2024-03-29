<?php
 require '../../classes/service_class.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['delete_service'])) {
      $id = $_POST['id'];

      $serviceobj = new Service();
      $serviceobj->drop($id);
    }
    elseif ($_POST['title'] && $_POST['description']) {
        $title       = htmlspecialchars($_POST['title']);
        $description = htmlspecialchars($_POST['description']);
        $image       = $_FILES['image'];

        $serviceobj = new Service();
        $serviceobj->store($title, $description, $image);

        header('Location:service.php');
        exit();
    }

  }

  $serviceobj = new Service();
  $services = $serviceobj->show();
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
                                        <h5 class="">Service Create</h5>
                                    </div>
                                </div>

                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Title</label>
                                                    <input type="text" name="title"  class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group row mb-2">
                                                <div class="col-sm-12">
                                                    <label class="col-form-label">Description</label>
                                                    <input type="text" name="description" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                      <div class="col-md-3">
                                        <div class="form-group row mb-2">
                                          <div class="col-sm-12">
                                            <label class="col-form-label">Image</label>
                                            <input type="file" name="image" class="form-control" >
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
                                <h4 class="card-title">Service List</h4>
                                <div class="table-responsive">
                                    <table class="table mb-0 text-center">

                                        <thead class="thead-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <?php $serial = 1 ?>
                                        <tbody>
                                            <?php foreach ($services as $service) : ?>
                                            <tr>
                                                <td scope="row"><?php echo $serial ?></td>
                                                <td><?php echo $service['title']?></td>
                                                <td><?php echo $service['description']?></td>
                                                <td>
                                                  <img src="<?php echo $service['image']?>" alt="service image" height="50" width="80">
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch mb-3" dir="ltr">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitchsizesm" checked>
                                                        <label class="custom-control-label" for="customSwitchsizesm"></label>
                                                    </div>
                                                </td>
                                                <td style="font-size: 18px">
                                                    <div style="display: inline-block;">
                                                        <!-- Edit button -->
                                                        <a href="service_edit.php?id=<?php echo $service['id']?> " style="color: #556ee6;"><i title="Edit CTA" class="far fa-edit"></i></a>

                                                        <!-- Delete button -->
                                                        <form action="" method="post" style="display: inline;">
                                                            <!-- Use hidden input field to pass id -->
                                                            <input type="hidden" name="id" value="<?php echo $service['id']?>">
                                                            <!-- Submit button for deleting -->
                                                            <button type="submit" name="delete_service" style="border: none; background: none; cursor: pointer; color: #556ee6;"><i title="Delete CTA" class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                                <?php $serial++ ?>
                                            <?php endforeach; ?>
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
