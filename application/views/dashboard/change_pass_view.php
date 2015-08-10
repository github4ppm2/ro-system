
<form name = "change_pass" method = "POST" action = "" >
 <div class="col-lg-9 main-chart">

		        <h2 class="form-login-heading">Change Password</h2>
		        <div class="login-wrap">

					 <input class="form-control" id="old_pass" name="old_pass" placeholder=" Old Password" type="password" value="<?php echo set_value('old_pass'); ?>" />
					 <?php echo form_error('old_pass'); ?>
		            <br>
					<input class="form-control" id="new_pass" name="new_pass" placeholder="New Password" type="password" value="<?php echo set_value('new_pass'); ?>" />
                    <!--<span class="text-danger"><?php echo form_error('new_pass'); ?></span>-->
					 <?php echo form_error('new_pass'); ?>
					</br>
					<input class="form-control" id="conf_pass" name="conf_pass" placeholder="Confirm Password" type="password" value="<?php echo set_value('conf_pass'); ?>" />
                    <!--<span class="text-danger"><?php echo form_error('conf_pass'); ?></span>-->
					 <?php echo form_error('conf_pass'); ?>
					</br>				    
                   <input id="btn_login" name="submit" type="submit" class="btn btn-theme btn-block" value="submit" />		            
		        </div>
		
		        
		
		      <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>  	   	
								
</div><!-- /col-lg-9 END SECTION MIDDLE -->
</form>