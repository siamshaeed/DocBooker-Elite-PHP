<?php
include_once '../class/categoryClass.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    $categoryObj = new Category();
    $category    = $categoryObj->getCategoryById($categoryId);
}
//var_dump($category);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
</head>
<body>
 <div class="container">
     <div class="row">
         <form action="" method="post">
             <div class="mb-3">
                 <label for="category_name" class="form-label"><b>Category Name</b></label>
                 <input type="text" class="form-control" name="category_name" id="category_name" value="<?php echo $category['category_name'] ?>">
             </div>
             <button type="submit" class="btn btn-outline-secondary">Save</button>
         </form>
     </div>
 </div>
</body>
</html>