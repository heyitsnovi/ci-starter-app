<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">
      </p>
 

      <?php echo form_open(uri_string());?>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <?php echo form_input($first_name,'',['class'=>strlen(form_error('first_name')) >0 ? 'form-control is-invalid' : 'form-control']);?>
            <span class="helper-block"><?= form_error('first_name'); ?></span>
        </div>

         <div class="form-group">
          <label for="last_name">Last Name</label>
       <?php echo form_input($last_name,'',['class'=>strlen(form_error('last_name')) >0 ? 'form-control is-invalid' : 'form-control']);?>
          <span class="helper-block"><?= form_error('last_name'); ?></span>
        </div>

         <div class="form-group">
          <label for="company">Company</label>
          <?php echo form_input($company,'',['class'=>strlen(form_error('company')) >0 ? 'form-control is-invalid' : 'form-control']);?>
          <span class="helper-block"><?= form_error('company'); ?></span>
        </div>
 

         <div class="form-group">
          <label for="phone">Phone</label>
            <?php echo form_input($phone,'',['class'=>strlen(form_error('phone')) >0 ? 'form-control is-invalid' : 'form-control']);?>
          <span class="helper-block"><?= form_error('phone'); ?></span>
        </div>

         <div class="form-group">
          <label for="password">Password</label>
          <?php echo form_input($password,'',['class'=>strlen(form_error('password')) >0 ? 'form-control is-invalid' : 'form-control']);?>
          <span class="helper-block"><?= form_error('password'); ?></span>
        </div>


         <div class="form-group">
          <label for="password_confirm">Confirm Password</label>
          <?php echo form_input($password_confirm,'',['class'=>strlen(form_error('password_confirm')) >0 ? 'form-control is-invalid' : 'form-control']);?>
          <span class="helper-block"><?= form_error('password_confirm'); ?></span>
        </div>
  
   <div class="form-group">
          <label for="password_confirm">User Group</label>
          <br>
      <?php if ($this->ion_auth->is_admin()): ?>

          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
              <br>
          <?php endforeach?>

      <?php endif ?>


    </div>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>
      <br>
        <button type="submit" class="btn btn-success mr-2" name="new_user_btn">Submit</button>
        <a href="<?php echo base_url('user/admin/users/'); ?>" class="btn btn-danger mr-2">Cancel</a> 
        <?php echo form_close();?>
    </div>
  </div>
</div>