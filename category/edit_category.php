<?php
include_once '../class/categoryClass.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $categoryObj = new Category();
    $category    = $categoryObj->getCategoryById($categoryId);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoryId = $_POST['category_id'];
    $categoryName = $_POST['category_name'];

    $categoryObj    = new Category();
    $categoryObj->updateCategory($categoryId, $categoryName);

    header('Location: category.php');
    exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
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
            <div><a href="../category/category.php" class="btn btn-secondary ">Category -></a></div>
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    Edit Category
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="hidden" name="category_id" value="<?php echo $category['category_id'] ?>">
                            <label for="category_name" class="form-label"><b>Category Name</b></label>
                            <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $category['category_name'] ?>">
                        </div>
                        <button type="submit" class="btn btn-outline-secondary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>
</html>