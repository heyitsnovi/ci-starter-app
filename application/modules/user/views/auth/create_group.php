<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">User Menu</h4>
      <p class="card-description">
        New Group
      </p>
 
    <?php echo form_open("user/auth/create_group");?>
 

        <div class="form-group">
          <label for="group_name">Group Name</label>
          <?php echo form_input($group_name,'',['class'=>'form-control']);?>
          <span class="helper-block"><?= form_error('group_name'); ?></span>
        </div>

      <div class="form-group">
          <label for="group_description">Description</label>
           <?php echo form_input($description,'',['class'=>'form-control']);?>
            <span class="helper-block"><?= form_error('description'); ?></span>
        </div>
 
        <button type="submit" class="btn btn-success mr-2" name="new_group_btn">Submit</button>

      <?php echo form_close();?>
    </div>
  </div>
</div>