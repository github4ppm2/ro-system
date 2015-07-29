<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <title>Ve-team RO system</title>

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
             $attributes = array("class" => "form-login", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>
   
		        <h2 class="form-login-heading">sign in</h2>
		        <div class="login-wrap">
					<input class="form-control" id="txt_username" name="email" placeholder="Email" type="text" value="<?php echo set_value('txt_username'); ?>" />
					 <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
		            <br>
					<input class="form-control" id="txt_password" name="password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a href="<?php echo base_url(); ?>login/forgot"> Forgot Password?</a>
		
		                </span>
		            </label>
<input id="btn_login" name="btn_login" type="submit" class="btn btn-theme btn-block" value="Login" /		          
				  <hr>
		            
		           
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
