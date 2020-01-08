<!DOCTYPE html>
<html>

 
 <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CI-Starter App| Recover Password</title>
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
    <a href="<?= base_url('user/auth/login');?>"><b>Starter</b>CI</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

          <div id="error-text"><?php echo $message;?></div>

       <?php echo form_open('user/auth/reset_password/' . $code);?>
            <?php echo form_input($user_id);?>
            <?php echo form_hidden($csrf); ?>
        <div class="input-group mb-3">
            <?php echo form_input($new_password,'',['class'=>'form-control']);?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
            <?php echo form_input($new_password_confirm,'',['class'=>'form-control']);?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Change password</button>
          </div>
          <!-- /.col -->
        </div>
          <?php echo form_close();?>

      <p class="mt-3 mb-1">
        <a href="<?= base_url('user/auth/login') ?>" class="text-center">Login</a>
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
