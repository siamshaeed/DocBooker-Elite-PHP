<?php
require_once 'classes/user_class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {  // user credential get from login form
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();
    if ($user->adminLogin($email, $password)) {
        header('Location:dashboard.php');
        exit();
    } else {
        echo("Your Credential don't match !");
    }
}

?>
<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8"/>
  <title>Login | @siamshaeed</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
  <meta content="Themesbrand" name="author"/>

  <!-- App favicon -->
  <link href="assets/backend/images/favicon.ico" rel="shortcut icon">

  <!-- Bootstrap Css -->
  <link href="assets/backend/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
  <!-- Icons Css -->
  <link href="assets/backend/css/icons.min.css" rel="stylesheet" type="text/css"/>
  <!-- App Css-->
  <link href="assets/backend/css/app.min.css" id="app-style" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="account-pages  pt-sm-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
          <div class="bg-soft-primary">
            <div class="row">
              <div class="col-7">
                <div class="text-primary p-4">
                  <h5 class="text-primary">Welcome Back !</h5>
                  <p>Sign in to continue to Skote.</p>
                </div>
              </div>
              <div class="col-5 align-self-end">
                <img alt="" class="img-fluid" src="assets/backend/images/profile-img.png">
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div>
              <a href="index.php">
                <div class="avatar-md profile-user-wid mb-4">
                  <span class="avatar-title rounded-circle bg-light">
                    <img alt="" class="rounded-circle" height="34"
                         src="assets/backend/images/logo.svg">
                  </span>
                </div>
              </a>
            </div>

            <div class="p-2">
              <form class="form-horizontal" action="" method="post">

                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" name="email" id="email" placeholder="Enter email" type="email" required>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input class="form-control" name="password" id="password" placeholder="Enter password"
                         type="password" required>
                </div>

                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="customControlInline" type="checkbox">
                  <label class="custom-control-label" for="customControlInline">Remember me</label>
                </div>

                <div class="mt-3">
                  <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">LogIn</button>
                </div>

                <div class="mt-4 text-center">
                  <h5 class="font-size-14 mb-3">Join with us</h5>

                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a class="social-list-item bg-primary text-white border-primary"
                         href="javascript::void()">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-list-item bg-info text-white border-info"
                         href="javascript::void()">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a class="social-list-item bg-danger text-white border-danger"
                         href="javascript::void()">
                        <i class="mdi mdi-google"></i>
                      </a>
                    </li>
                  </ul>
                </div>

              </form>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>
