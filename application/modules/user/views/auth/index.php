<div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            	<p>
            	<a class="btn btn-success " href="<?php echo base_url('user/auth/create_user');?>">
            		New User
            	</a> 
            	 
            	</p>

              <p class="card-description">
					<div id="infoMessage">
						<?php
		            		if($message!==NULL){
		                  		echo '<div class="alert alert-info alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$message.'</div>';
		            		}
		       			?>
       				</div>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
            <th>Last Login</th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
                    </tr>
                  </thead>
                  <tbody>
                 
                   	<?php foreach ($users as $user):?>
                   		 <tr>
                    <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                     <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                      <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                      <td><?php echo date('F j , Y h:i:s a ',$user->last_login);?></td>
					<td>
						<?php foreach ($user->groups as $group):?>
							<?php echo anchor("user/auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
			            <?php endforeach?>
					</td>
					<td><?php echo ($user->active) ? anchor("user/auth/deactivate/".$user->id, lang('index_active_link')) : anchor("user/auth/activate/". $user->id, lang('index_inactive_link'));?></td>
					<td><?php echo anchor("user/auth/edit_user/".$user->id, 'Edit') ;?></td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>