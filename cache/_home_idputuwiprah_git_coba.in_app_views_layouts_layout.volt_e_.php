a:7:{i:0;s:831:"<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bantuan - FP PBKK</title>

  <!-- Custom fonts for this template-->
  <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
  <?= $this->tag->stylesheetlink('css/all.min.css') ?>
  <?= $this->tag->stylesheetlink('css/sb-admin-2.min.css') ?>
  ";s:5:"style";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:3:"
  ";s:4:"file";s:60:"/home/idputuwiprah/git/coba.in/app/views/layouts/layout.volt";s:4:"line";i:23;}}i:1;s:3089:"

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <i class="fas fa-laptop-code"></i>
        <div class="sidebar-brand-text mx-3">Tolong<sup>.in</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Halaman
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-medkit"></i>
          <span>Bantuan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bantuan:</h6>
            <a class="collapse-item" href="/bantuan/tambah">Tambah Bantuan</a>
            <a class="collapse-item" href="/bantuan/saya">Bantuan Saya</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if (!empty($user)) { ?>
                   <span class="mr-2 d-none d-lg-inline"><?= $user->getNama() ?></span>
                <?php } ?>
                <i class="fas fa-user"></i>
              </a>

              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/user/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          ";s:4:"body";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:11:"
          ";s:4:"file";s:60:"/home/idputuwiprah/git/coba.in/app/views/layouts/layout.volt";s:4:"line";i:117;}}i:2;s:1170:"
        </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; I Dewa Putu Wiprah A</span>
            <span>05111740000152</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Core plugin JavaScript-->
  <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for all pages-->
  <!-- <script src="js/sb-admin-2.min.js"></script> -->
  <?= $this->tag->javascriptinclude('public/js/jquery.min.js') ?>
  <?= $this->tag->javascriptinclude('public/js/bootstrap.bundle.min.js') ?>
  <?= $this->tag->javascriptinclude('public/js/jquery.easing.min.js') ?>
  <?= $this->tag->javascriptinclude('public/js/sb-admin-2.min.js') ?>
  ";s:10:"javascript";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:3:"
  ";s:4:"file";s:60:"/home/idputuwiprah/git/coba.in/app/views/layouts/layout.volt";s:4:"line";i:154;}}i:3;s:21:"
</body>

</html>



";}