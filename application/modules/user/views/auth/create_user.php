 <div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Create New User</h4>
      <p class="card-description">
        New user details
      </p>
 
  <?php echo form_open("user/auth/create_user");?>

  <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

        <div class="form-group">
          <label for="first_name">First Name</label>
          <?php echo form_input($first_name,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('first_name'); ?></span>
        </div>

         <div class="form-group">
          <label for="last_name">Last Name</label>
          <?php echo form_input($last_name,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('last_name'); ?></span>
        </div>

         <div class="form-group">
          <label for="company">Company</label>
          <?php echo form_input($company,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('company'); ?></span>
        </div>

         <div class="form-group">
          <label for="email">Email Address</label>
          <?php echo form_input($email,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('email'); ?></span>
        </div>

         <div class="form-group">
          <label for="phone">Phone</label>
          <?php echo form_input($phone,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('phone'); ?></span>
        </div>

         <div class="form-group">
          <label for="password">Password</label>
          <?php echo form_input($password,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('password'); ?></span>
        </div>


         <div class="form-group">
          <label for="password_confirm">Confirm Password</label>
          <?php echo form_input($password_confirm,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('password_confirm'); ?></span>
        </div>
 

        <button type="submit" class="btn btn-success mr-2" name="new_user_btn">Submit</button>

<?php echo form_close();?>
    </div>
  </div>
</div>