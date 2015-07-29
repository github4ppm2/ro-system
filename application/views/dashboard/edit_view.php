 
 
 <form  name = "edit"action= "" method ="POST">
 <div class="col-lg-9 main-chart">
		        <h2 class="form-login-heading">Edit Profile</h2>
		        <div class="login-wrap">
					<input class="form-control" id="veid" name="veid" placeholder=" VE-ID" type="text" value="<?php echo set_value('veid'); ?>" />
					 <span class="text-danger"><?php echo form_error('veid'); ?></span>
		            <br>
					<input class="form-control" id="name" name="name" placeholder="NAME" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
					</br>
					<input class="form-control" id="phone" name="phone" placeholder="CONTACT NO" type="text" value="<?php echo set_value('phone'); ?>" />
                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
					</br>
                   <select class="form-control" name = "Department">
                        
                         <option>PHP</option>
                         <option>JAVA</option>
						 <option>.NET</option>
						
                  </select>
							  
				
					</br>				    
                   <input id="submit" name="submit" type="submit" class="btn btn-theme btn-block" value="submit" />		            
		        </div>
		
		        
		
		      <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>  	   	
								
</div><!-- /col-lg-9 END SECTION MIDDLE -->
</form>
