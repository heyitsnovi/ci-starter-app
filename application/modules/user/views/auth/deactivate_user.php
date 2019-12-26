 <div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Account Management</h4>
      <p class="card-description">
         <?php echo sprintf(lang('deactivate_subheading'), $user->username);?>
      </p>
 
<?php echo form_open("user/auth/deactivate/".$user->id);?>
   <?php echo form_hidden($csrf); ?>
   <?php echo form_hidden(array('id'=>$user->id)); ?>

    <label class="radio-inline">
      <input type="radio" name="confirm" checked value="yes">Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="confirm" value="no">No
    </label>
     
    <br>
        <button type="submit" class="btn btn-success mr-2" name="new_group_btn">Submit</button>
         <a href="<?php echo base_url('admin/users/'); ?>" class="btn btn-danger mr-2">Cancel</a> 

      <?php echo form_close();?>
    </div>
  </div>
</div>