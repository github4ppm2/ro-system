 
 <form  name = "registration"action= "" method ="POST">
 <div class="col-lg-9 main-chart">
      	
		        <h2 class="form-login-heading">Registration</h2>
		        <div class="login-wrap">
					<input class="form-control" id="txt_email" name="email" placeholder=" Email" type="text" value="<?php echo set_value('email'); ?>" />
					 <span class="text-danger"><?php echo form_error('email'); ?></span>
		            <br>
					<input class="form-control" id="txt_password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
					</br>
					
                   <select class="form-control" name = "role" >
                        
                         <option value ="1" selected="selected">Admin</option>
                         <option value ="2" id = "Team Member">Team Member</option>
						 <option value ="3" id = "Team Leader">Team Leader</option>
						 <option value ="4" id = "Manager">Manager</option>
                  </select>
							  
				
					</br>				    
                   <input id="btn_reg" name="submit"type="submit" class="btn btn-theme btn-block" value="submit" />		            
		        </div>
		
		        
		
		      <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>  	   	
								
</div><!-- /col-lg-9 END SECTION MIDDLE -->
</form>