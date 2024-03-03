<?php
require_once '../class/postClass.php';
require_once '../class/categoryClass.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $postId = $_GET['id'];

    $postObj = new Post();
    $post = $postObj->getPostById($postId);

    $categoryObj = new Category();
    $categories = $categoryObj->getAllCategories();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postId = $_POST['post_id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category_id'];
    $image = $_POST['image_url'];

    $postObj = new Post();
    $postObj->updatePost($postId, $title, $content, $category_id, $image);

    header('Location:post.php');
    exit();
} else {
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
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>Post Edit</h4>
            <form action="" method="post">
                <div class="mb-3">
                    <input type="hidden" name="post_id" value="<?php echo $post['post_id'] ?>">

                    <label for="title" class="form-label"><b>Title</b></label>
                    <input type="text" class="form-control" name="title"  id="title" value="<?= $post['title'] ?>">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label"><b>Content</b></label> <br>
                    <textarea name="content" id="content" cols="37" rows="2"><?= $post['content'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label"><b>Category</b></label>
                    <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
                        <option value="0" selected>Select Cetegory</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['category_id']?>" <?php echo $category['category_id'] == $post['category_id'] ? 'selected' : ''; ?>>
                                <?php echo $category['category_name']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-5">
                    <label for="image_url" class="form-label"><b>Image</b></label>
                    <input type="text" class="form-control" name="image_url" id="image_url" value="<?= $post['image_url'] ?>">
                </div>
                <button type="submit" class="btn btn-outline-secondary">Save</button>
            </form>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>