<?php 
  $user = $this->ion_auth->user()->row(); 
  $group = $this->ion_auth->group()->result();
?>

<!DOCTYPE html>
<html>

 <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $page_title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('adminlte/css/adminlte.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
 
<link rel="stylesheet" href="<?php echo base_url('assets/elfinder/css/theme-bootstrap-libreicons-svg.css');?>">

  <?php
  if(isset($custom_css)){
    foreach($custom_css as $c_css){
      echo "<link rel=\"stylesheet\" href=\"".$c_css."\"> \n";
    }
  }
  ?>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('user/admin'); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About</a>
      </li>
    </ul>

 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
 
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $user->username;?></span>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('user/auth/logout'); ?>" class="dropdown-item">
            <i class="fas fa-power-off mr-2"></i> Logout <?php echo $user->username;?>
          </a>
        </div>
      </li>
 
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('user/admin'); ?>" class="brand-link">
      <img src="<?php echo base_url('adminlte/img/AdminLTELogo.png');?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CI Starter App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('adminlte/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user->username;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="<?= base_url('user/admin'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
 

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user/admin/users'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('user/admin/groups'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Groups</p>
                </a>             
            </ul>
          </li>
 

           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Utilities
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('user/admin/file_manager'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>File Manager</p>
                </a>
              </li>
              <li class="nav-item">
                  <a href="<?= base_url('user/admin/summernote'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Summer Note</p>
                </a>             
            </ul>
          </li>
 
   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=  $page_title; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $page_title; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"><?php $this->load->view($view_content); ?></section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>CodeIgniter Version</b> <?= CI_VERSION; ?>
    </div>
    <strong>Copyright &copy; <?php echo date('Y');?> <a href="http://adminlte.io/">CI Starter App</a>.</strong> All rights
    reserved.
  </footer>
 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('adminlte/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('adminlte/js/adminlte.min.js');?>"></script>
 
  <?php

  if(isset($custom_js)){
    foreach($custom_js as $c_js){
      echo "<script src=\"".$c_js."\"></script> \n";
    }
  }

  if(isset($php_includes)){

    foreach($php_includes as $php_inc){
      include($php_inc);
    }
  }

  ?>

  </body>
</html>
