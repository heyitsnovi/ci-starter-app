<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">User Menu</h4>
      <p class="card-description">
        New Group
      </p>
      <div id="error-messages">
      <?php
            if(strlen($message)  > 0){
                  echo '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$message.'</div>';
            }
       ?></div>
<?php echo form_open(current_url());?>
 

        <div class="form-group">
          <label for="old_password">Group Name</label>
          <?php echo form_input($group_name,'',['class'=>'form-control']);?>
        </div>

      <div class="form-group">
          <label for="new_password">Description</label>
           <?php echo form_input($group_description,'',['class'=>'form-control']);?>
        </div>
 
        <button type="submit" class="btn btn-success mr-2" name="new_group_btn">Submit</button>
        <a href="<?php echo base_url('user/admin/groups/'); ?>" class="btn btn-danger mr-2">Cancel</a> 

      <?php echo form_close();?>
    </div>
  </div>
</div>