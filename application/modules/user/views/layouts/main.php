<?php 
  $user = $this->ion_auth->user()->row(); 
  $group = $this->ion_auth->group()->result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $page_title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.addons.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
  <?php
  if(isset($custom_css)){
    foreach($custom_css as $c_css){

      echo "<link rel=\"stylesheet\" href=\"".$c_css."\"> \n";
    }
  }
  ?>
<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" />
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo base_url('user/admin'); ?>">
          <img src="<?php echo base_url('assets/images/starter_ci.png');?>" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini toggle-sidebar" href="#">
          <img src="<?php echo base_url('assets/images/hamburger.png');?>" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
 
        <ul class="navbar-nav navbar-nav-right">
 
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, <?php echo $user->username;?> !</span>
              <img class="img-xs rounded-circle" src="<?php echo base_url('assets/images/faces/face1.jpg');?>" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
 
              <a href="<?php echo base_url('user/admin/users/'); ?>" class="dropdown-item mt-2">
                Manage Accounts
              </a>
              <a href="<?php echo base_url('user/auth/change_password'); ?>" class="dropdown-item">
                Change Password
              </a>
 
              <a  href="<?php echo base_url('user/auth/logout'); ?>" class="dropdown-item">
                Sign Out
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url('assets/images/faces/face1.jpg');?>" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $user->username;?> </p>
                  <div>
                    <small class="designation text-muted"><?php echo $user->email; ?></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
               
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/admin'); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('user/admin/file_manager'); ?>">
                <i class="menu-icon mdi mdi-harddisk"></i>
                <span class="menu-title">File Manager</span>
              </a>
            </li> 
              <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('user/admin/summernote'); ?>">
                <i class="menu-icon mdi mdi-comment-text"></i>
                <span class="menu-title">Summer Note</span>
              </a>
            </li>   
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="users">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">User Management</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="users">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('user/admin/users'); ?>">User List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('user/admin/groups'); ?>">User Group</a>
                </li>              
              </ul>
            </div>
          </li> 
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('user/admin/settings'); ?>">
                <i class="menu-icon mdi mdi-wrench"></i>
                <span class="menu-title">Application Settings</span>
              </a>
            </li>    
        </ul>
      </nav>

      <div class="main-panel">
        <div class="content-wrapper">
          <?php $this->load->view($view_content); ?>
        </div>

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?>
              <a href="http://www.github.com/heyitsnovi" target="_blank">CI-StartApp</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">CodeIgniter Version: <?php echo CI_VERSION; ?>
            </span>
          </div>
        </footer>
      </div>
    </div>
  </div>
 
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js');?>"></script>
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.addons.js');?>"></script>
  <script src="<?php echo base_url('assets/js/off-canvas.js');?>"></script>
  <script src="<?php echo base_url('assets/js/misc.js');?>"></script>
  <script src="<?php echo base_url('assets/js/dashboard.js');?>"></script>
 
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