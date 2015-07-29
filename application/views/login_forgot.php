<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <title>Ve-team RO system for reset password</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    </head><body>
    <div id="login-page">
	  	<div class="container">
	  	<?php 
             $attributes = array("class" => "form-login", "id" => "loginform", "name" => "forgot");
          echo form_open("login/forgot", $attributes);?>
   
		       <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		 <span class="text-danger"><?php echo form_error('email'); ?></span>
		                      </div>
		                      <div class="modal-footer">
								  <a href="<?php echo base_url(); ?>login" class="btn btn-default">Cancel</a>
		                         <input class="btn btn-theme" type="submit"name="submit"  value="Submit"/>
		                      </div>
							  
		                  </div>
		              </div>
		
		      <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
   


  </body>
</html>
