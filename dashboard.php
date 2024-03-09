<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <title>Saas Dashboard | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
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

<body data-sidebar="dark">

<div id="layout-wrapper">
  <!-- header top-->
  <header id="page-topbar">
    <div class="navbar-header">
      <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <a class="logo logo-dark" href="index.php">
            <span class="logo-sm">
              <img alt="" height="22" src="assets/backend/images/logo.svg">
            </span>
            <span class="logo-lg">
              <img alt="" height="17" src="assets/backend/images/logo-dark.png">
             </span>
          </a>

          <a class="logo logo-light" href="index.php">
            <span class="logo-sm">
              <img alt="" height="22" src="assets/backend/images/logo-light.svg">
            </span>
            <span class="logo-lg">
              <img alt="" height="19" src="assets/backend/images/logo-light.png">
             </span>
          </a>
        </div>

      </div>

      <div class="d-flex">
        <div class="dropdown d-inline-block">
          <button aria-expanded="false" aria-haspopup="true" class="btn header-item waves-effect"
                  data-toggle="dropdown" id="page-header-user-dropdown" type="button">
            <img alt="Header Avatar" class="rounded-circle header-profile-user"
                 src="assets/backend/images/users/avatar-1.jpg">
            <span class="d-none d-xl-inline-block ml-1">Henry</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <!-- item-->
            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i>
              Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#"><i
                    class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
          </div>
        </div>

      </div>
    </div>
  </header>

  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

    <div class="h-100" data-simplebar>
      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">

          <li>
            <a class="" href="#"><i class="bx bx-home-circle"></i><span>Dashboards</span></a>
          </li>

          <li>
            <a class="has-arrow waves-effect" href="javascript: void(0);">
              <i class="bx bx-task"></i>
              <span>Tasks</span>
            </a>
            <ul aria-expanded="false" class="sub-menu">
              <li><a href="">Task List</a></li>
              <li><a href="">Kanban Board</a></li>
              <li><a href="">Create Task</a></li>
            </ul>
          </li>

          <li>
            <a class="has-arrow waves-effect" href="javascript: void(0);">
              <i class="bx bx-task"></i>
              <span>App Setting</span>
            </a>
            <ul aria-expanded="false" class="sub-menu">
              <li><a href="views/dashboard/generel_setting.php">General setting</a></li>
              <li><a href="">Kanban Board</a></li>
              <li><a href="">Create Task</a></li>
            </ul>
          </li>

        </ul>
      </div>
      <!-- Sidebar -->
    </div>
  </div>
  <!-- Left Sidebar End -->

  <!-- Start Page-content -->
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center">Welcome To Dashboard</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page-content -->

  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>document.write(new Date().getFullYear())</script>
          © siamshaeed.
        </div>
        <div class="col-sm-6">
          <div class="text-sm-right d-none d-sm-block">
            Design & Develop by siamshaeed
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- end main content-->

<!-- JAVASCRIPT -->
<script src="assets/backend/libs/jquery/jquery.min.js"></script>
<script src="assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/backend/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/backend/libs/simplebar/simplebar.min.js"></script>
<script src="assets/backend/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="assets/backend/libs/apexcharts/apexcharts.min.js"></script>

<!-- Saas dashboard init -->
<script src="assets/backend/js/pages/saas-dashboard.init.js"></script>

<script src="assets/backend/js/app.js"></script>

</body>

</html>
