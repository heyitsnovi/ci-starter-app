 <div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Account Settings</h4>
      <p class="card-description">
        Update current password
      </p>
      <div id="error-messages">
      <?php
            if(strlen($message)  > 0){
                  echo '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$message.'</div>';
            }
       ?></div>
    <?php echo form_open("user/auth/change_password");?>
     <?php echo form_input($user_id);?>

        <div class="form-group">
          <label for="old_password">Old Password</label>
          <?php echo form_input($old_password,'',['class'=>'form-control']);?>
        </div>

      <div class="form-group">
          <label for="new_password">New Password</label>
           <?php echo form_input($new_password,'',['class'=>'form-control']);?>
        </div>

      <div class="form-group">
          <label for="new_password_confirm">Verify your new password</label>
           <?php echo form_input($new_password_confirm,'',['class'=>'form-control']);?>
        </div>
        <button type="submit" class="btn btn-success mr-2" name="update_pass_btn">Submit</button>

      <?php echo form_close();?>
    </div>
  </div>
</div>