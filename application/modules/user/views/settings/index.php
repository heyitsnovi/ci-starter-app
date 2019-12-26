<div class="container">
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Application Setting</h4>
              
            <form method="POST" action="<?=  base_url('user/admin/settings'); ?>">
              <div class="form-group col-md-6">
                <label for="app_name">Application Name: </label>
                <input type="text" name="app_name" class="form-control" value="<?= set_value('app_name'); ?>" />
                <span class="helper-block"><?= form_error('app_name'); ?></span>
              </div>

              <div class="form-group col-md-6">
                <label for="app_name">Administrator Email: </label>
                <input type="text" name="app_admin_email" class="form-control" value="<?= set_value('app_admin_email'); ?>" />
                <span class="helper-block"><?= form_error('app_admin_email'); ?></span>
              </div>

              <div class="form-group col-md-6">
                  <button class="btn btn-success save-setting" type="submit">Save</button>
              </div>
            </form>

          </div>
        </div>
      </div>
  </div>
</div>
