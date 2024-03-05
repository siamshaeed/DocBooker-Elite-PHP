<?php
require_once '../class/categoryClass.php';
require_once '../class/postClass.php';

// show category list
$categoryObj = new Category();
$categories = $categoryObj->getAllCategories();

// store post
if (!empty($_POST['title'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    $image = $_POST['image_url'];

    $postObj = new Post();
    $postObj->addPost($title, $content, $category_id, $image);

    header("Location: post.php");
    exit();
}

// show post list
$postObj = new Post();
$posts = $postObj->getAllPosts();

// Delete post
if (isset($_POST['delete_post'])) {
    $postId = $_POST['delete_post'];

    $postObj = new Post();
    $postObj->deletePost($postId);

    header('Location:post.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogging Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Blogging Platform</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                <h3 class="text-center">Post</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div><a href="../category/category.php" class="btn btn-secondary ">Category -></a></div>
        </div>
        <div class="col-md-4">
            <?php
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success text-center" role="alert">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']);
            } elseif (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger text-center" role="alert">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card mt-3">
                <div class="card-header">
                    Post create
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-2">
                            <label for="title" class="form-label"><b>Title</b></label>
                            <input type="text" class="form-control" name="title" id="title"
                                   placeholder="Enter Post title">
                        </div>
                        <div class="mb-2">
                            <label for="content" class="form-label"><b>Content</b></label> <br>
                            <textarea name="content" id="content" cols="28" rows="2"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="image_url" class="form-label"><b>Category</b></label>
                            <select class="form-select" aria-label="Default select example" name="category_id"
                                    id="category_id">
                                <option value="0" selected>Select Cetegory</option>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="image_url" class="form-label"><b>Image</b></label>
                            <input type="text" class="form-control" name="image_url" id="image_url"
                                   placeholder="Enter Post image">
                        </div>
                        <button type="submit" class="btn btn-outline-secondary">Save</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-9">
            <div class="card mt-3">
                <div class="card-header">
                    Post List
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <!-- Table header -->
                            <thead>
                            <tr>
                                <th scope="col">S/L</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody class="table-group-divider">
                            <?php $serial = 1; ?>
                            <?php foreach ($posts as $post): ?>
                                <tr>
                                    <td scope="row"><?php echo $serial ?></td>
                                    <td><?php echo mb_strimwidth($post['title'], 0, 18, '..' ) ?></td>
                                    <td><?php echo mb_strimwidth($post['content'], 0 , 20, '..') ?></td>
                                    <td><?php echo $post['category_name'] ?></td>
                                    <td><?php echo $post['image_url'] ?></td>
                                    <td>
                                        <a href="edit_post.php?id=<?php echo $post['post_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="" method="post" style="display: inline;">
                                            <input type="hidden" name="delete_post" value="<?php echo $post['post_id'] ?>">
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