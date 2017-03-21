<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Login</title>
    <link rel="stylesheet" href="<?=base_url()."asset/css/login.css"?>">
    <link rel="stylesheet" href="<?=base_url()."asset/css/bootstrap.min.css"?>">
  </head>
  <body>
    <div class="home">
      <a href="<?=base_url()?>" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>Home</a>
    </div>
    <div class="login-page">
      <div style="color:black; font-weight:bold; border-left:3px solid black; padding-left:5px;">
        <?php echo validation_errors();
        if($this->session->userdata('register')!=NULL){
          echo $this->session->userdata('register');
          $this->session->unset_userdata('register');
        }
        ?>

      </div>
      <div class="form">
        <form class="login-form" action="<?=base_url()."login/userAuthenticate"?>" method="post">
          <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="username"/>
          <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="password"/>
          <input type="submit" name="submit" value="Login">
        </form>
        <p class="message">Not registered? <a href="<?=base_url()."Register"?>">Create an account</a></p>

      </div>
    </div>
  </body>
</html>
