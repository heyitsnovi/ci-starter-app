<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Dec 2019 01:13:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CI-Starter App</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/fontawesome-free/css/all.min.css');?>">
 
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('adminlte/css/adminlte.min.css');?>">
 
</head>
<body class="hold-transition login-page">
    <style type="text/css">
    .error-text{
      color: red !important;
    }
  </style>
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url('user/auth/login');?> "><b>Starter</b>CI</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

     <div class="error-text"><?php echo $message;?></div>

      <?php echo form_open("user/auth/login");?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="identity" placeholder="Email Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password"/>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close();?>


      <p class="mb-1">
        <a href="<?php echo base_url('user/auth/forgot_password');?>">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('/') ?>" class="text-center">Back to Home</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url('adminlte/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('adminlte/js/adminlte.min.js');?>"></script>
  </body>
</html>
