<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="<?=base_url()."asset/css/bootstrap.min.css"?>">
    <link rel="stylesheet" href="<?=base_url()."asset/css/register.css"?>">

  </head>
  <body>
    <div class="home" >
      <a href="<?=base_url()?>" style="background-color:white;" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>Home</a>
    </div>
    <div class="container">
            <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
              <div style="color:black; font-weight:bold; border-left:3px solid black; padding-left:5px;">
                <?php echo validation_errors(); ?>
              </div>
            	<div class="panel panel-default">
            		<div class="panel-heading">
    			    		<h3 class="panel-title">Register</small></h3>
    			 			</div>
    			 			<div class="panel-body">
                  <form class="form" action="<?=base_url()."register/registration"?>" method="post">
			    					<div class="form-group">
			                <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" class="form-control input-sm" placeholder="Username">
			    					</div>

    			    			<div class="form-group">
    			    				<input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control input-sm" placeholder="Email Address">
    			    			</div>

    			    			<!-- <div class="row">
    			    				<div class="col-xs-6 col-sm-6 col-md-6"> -->
    			    					<div class="form-group">
    			    						<input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" class="form-control input-sm" placeholder="Password">
    			    					</div>


    			    					<div class="form-group">
    			    						<input type="password" name="passconf" id="password_confirmation" value="<?php echo set_value('passconf'); ?>" class="form-control input-sm" placeholder="Confirm Password">
    			    					</div>

                        <input type="submit" name="register" value="Register" class="btn btn-info btn-block">

    			    				</div>
    			    			<!-- </div> -->

                    <p class="message">Already a member? <a href="<?=base_url()."login"?>">Login</a></p>

    			    		</form>

    			    	</div>
    	    		</div>
        		</div>
        	</div>
        </div>

  </body>
</html>
