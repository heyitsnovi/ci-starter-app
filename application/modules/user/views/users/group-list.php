<div class="col-lg-12 grid-margin stretch-card">

              <div class="card">

                <div class="card-body">
                	<p>
                
                	<a href="<?php echo base_url('user/auth/create_group'); ?>" class="btn-success btn">
                		New Group
                	</a>
                	</p>
 
                  <p class="card-description">
			      <div id="error-messages">
			      <?php
			            if($this->session->flashdata('message')){
			                  echo '<div class="alert alert-info alert-dismissible fade-out"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$this->session->flashdata('message').'</div>';
			            }
			       ?>
			       </div>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
							<th>Group ID</th>
							<th>Group Name</th>
							<th>Group Description</th>
							<th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      		<?php foreach($groups as $group):?>
                      				<tr>
                      					<td><?php echo $group->id; ?></td>
                      					<td><?php echo $group->name; ?></td>
                      					<td><?php echo $group->description; ?></td>
                      					<td>
                      						<a href="<?php echo base_url('user/auth/edit_group/').$group->id;?>">Edit</a>
                      					</td>
                      				</tr>
                      		<?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>