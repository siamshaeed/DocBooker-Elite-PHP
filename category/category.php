<?php
require_once 'class/categoryClass.php';
// Display categories
$category = new  Category();
$categories = $category->getAllCategories();

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
                    <a class="nav-link" href="#">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../category/category.php">Category</a>
                </li>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        Dropdown link-->
<!--                    </a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a class="dropdown-item" href="#">Action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Another action</a></li>-->
<!--                        <li><a class="dropdown-item" href="#">Something else here</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="category_name" class="form-label"><b>Category Name</b></label>
                <input type="text" class="form-control" id="category_name" placeholder="Enter Category Name">
            </div>
            <button type="submit" class="btn btn-outline-secondary">Save</button>
        </div>
        <div class="col-md-6"><b>Category List :</b>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">S/L</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>News</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>News</td>
                    <td>Active</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>