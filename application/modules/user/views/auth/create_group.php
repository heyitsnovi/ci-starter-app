<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"></h4>
      <p class="card-description">

      </p>
 
    <?php echo form_open("user/auth/create_group");?>
 

        <div class="form-group">
          <label for="group_name">Group Name</label>
           <?php echo form_input($group_name,'',['class'=>strlen(form_error('group_name')) >0 ? 'form-control is-invalid' : 'form-control']);?>
          <span class="helper-block"><?= form_error('group_name'); ?></span>
        </div>

      <div class="form-group">
          <label for="group_description">Description</label>
           <?php echo form_input($description,'',['class'=>strlen(form_error('description')) >0 ? 'form-control is-invalid' : 'form-control']);?>
            <span class="helper-block"><?= form_error('description'); ?></span>
        </div>
 
        <button type="submit" class="btn btn-success mr-2" name="new_group_btn">Submit</button>

      <?php echo form_close();?>
    </div>
  </div>
</div>