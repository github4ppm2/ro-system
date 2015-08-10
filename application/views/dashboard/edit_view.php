 
 
 <form  name = "edit"action= "" method ="POST">
 <div class="col-lg-9 main-chart">
 
		        <h2 class="form-login-heading">Edit Profile</h2>
		        <div class="login-wrap">
				
				     <input class="form-control" id="email" name="email"  type="text"  value="<?php foreach($query as $row){ print $row->email; } ?>" readonly />
					 </br>
					 <input class="form-control" id="role" name="role"  type="text" value="<?php foreach($query as $row){ print $row->user_roles; } ?>"readonly/>
					 </br>
					<input class="form-control" id="veid" name="veid" placeholder=" VE-ID" type="text" value="<?php foreach($query as $row){ print $row->veid; } ?>" />
					 <span class="text-danger"><?php echo form_error('veid'); ?></span>
		            <br>
					<input class="form-control" id="name" name="name" placeholder="NAME" type="text" value="<?php foreach($query as $row){ print $row->name; } ?>"/>
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
					</br>
					<input class="form-control" id="phone" name="phone" placeholder="CONTACT NO" type="text" value="<?php foreach($query as $row){ print $row->phone; } ?>" />
                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
					</br>
                        <?php $department_id=(isset($query[0]->department)?$query[0]->department:""); 
						echo form_dropdown('department', $department,$department_id, 'class="form-control" id="department"'); 
						?>
					</br>				    
                   <input id="submit" name="submit" type="submit" class="btn btn-theme btn-block" value="submit" />		            
		        </div>
		
		        
		
		      <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>  	   	
								
</div><!-- /col-lg-9 END SECTION MIDDLE -->
</form>
