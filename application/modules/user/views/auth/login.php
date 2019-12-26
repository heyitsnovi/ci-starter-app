<!DOCTYPE html>
<html lang="en">
 
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CI-Starter App</title>
 
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/iconfonts/puse-icons-feather/feather.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.addons.css');?>">
 
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
 
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png');?>" />
</head>

<body>
  <style>
    #login-error-messages{
      color:red;
      font-weight: 20px;
    }
  </style>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">

            <div class="auto-form-wrapper">
              <?php echo form_open("user/auth/login");?>
              <div id="login-error-messages"><?php echo $message;?></div>
                <div class="form-group">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control"  name="identity" placeholder="Email Address"  />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" name="remember" class="form-check-input"/> Keep me signed in
                    </label>
                  </div>
                  <a href="<?php echo base_url('user/auth/forgot_password');?>" class="text-small forgot-password text-black">Forgot Password</a>
                </div>
                <div class="text-center text-small"><a href="<?= base_url('/') ?>">Back to Home</a></div>
              <?php echo form_close();?>
            </div>
              <br>
            <p class="footer-text text-center">copyright © <?php echo date('Y');?> CI-StartApp. All rights reserved.</p>
          </div>
        </div>
      </div>
 
    </div>
 
  </div>
 
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js');?>"></script>
  <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.addons.js');?>"></script>
  <script src="<?php echo base_url('assets/js/off-canvas.js');?>"></script>
  <script src="<?php echo base_url('assets/js/hoverable-collapse.html');?>"></script>
  <script src="<?php echo base_url('assets/js/misc.js');?>"></script>
 
</body>
 
</html>