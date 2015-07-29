 <div class="col-lg-9 main-chart">
      	
	  	
   
		        <h2 class="form-login-heading">Change Password</h2>
		        <div class="login-wrap">
					<input class="form-control" id="old_pass" name="old_pass" placeholder=" Old Password" type="text" value="<?php echo set_value('old_pass'); ?>" />
					 <span class="text-danger"><?php echo form_error('old_pass'); ?></span>
		            <br>
					<input class="form-control" id="new_pass" name="new_pass" placeholder="New Password" type="text" value="<?php echo set_value('new_pass'); ?>" />
                    <span class="text-danger"><?php echo form_error('new_pass'); ?></span>
					</br>
					<input class="form-control" id="conf_pass" name="conf_pass" placeholder="Confirm Password" type="text" value="<?php echo set_value('conf_pass'); ?>" />
                    <span class="text-danger"><?php echo form_error('conf_pass'); ?></span>
					</br>				    
                   <input id="btn_login" name="C_submit" type="submit" class="btn btn-theme btn-block" value="Submit" />		            
		        </div>
		
		        
		
		      <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>  	   	
								
</div><!-- /col-lg-9 END SECTION MIDDLE -->