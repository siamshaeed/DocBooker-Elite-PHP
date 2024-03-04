<?php
include_once '../class/categoryClass.php';
// Display categories
$category = new  Category();
$categories = $category->getAllCategories();

// Add categories
if (!empty($_POST['category_name'])) {
    $categoryName = $_POST['category_name'];

    $categoryObj = new Category();
    $categoryObj->addCategory($categoryName);

    header("Location: category.php");
    exit();
}

// Delete Category
if (!empty($_POST['category_id']))  {
    $categoryId = $_POST['category_id'];

    $categoryObj    = new Category();
    $categoryObj->deleteCategory($categoryId);

    header("Location: category.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogging Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blogging Platform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../post/post.php">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../category/category.php">Category</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-primary" role="alert">
              <h3 class="text-center">Category</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <a href="../post/post.php" class="btn btn-secondary ">Post -></a>
        </div>
        <div class="col-md-4">
            <?php
            if (isset($_SESSION['success_message'])) {
               echo '<div class="alert alert-success text-center" role="alert">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']);
            } elseif (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-dangertext-center" role="alert">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Category Create
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
                        </div>
                        <button type="submit" class="btn btn-outline-secondary">Save</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Category List
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr class="text-center">
                            <th scope="col">S/L</th>
                            <th scope="col">Category</th>
                            <th scope="col" title="Total Post this category">Num Of Post</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">
                        <?php $serial = '1'; ?>
                        <?php foreach ($categories as $category): ?>
                            <tr class="text-center">
                                <td scope="row"><?php echo $serial ?></td>
                                <td><?php echo $category['category_name'] ?></td>
                                <td>5</td>
                                <td>Active</td>
                                <td>
                                    <a href="edit_category.php?id=<?php echo $category['category_id']?>" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="" method="post" style="display: inline;">
                                        <input type="hidden" name="category_id" value="<?php echo $category['category_id']?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>