<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?=base_url()."asset/css/login.css"?>">
    <link rel="stylesheet" href="<?=base_url()."asset/css/bootstrap.min.css"?>">
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="<?=base_url()."adminlogin/adminauthenticate"?>" method="post">
          <input type="text" name="username" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <input type="submit" name="submit" value="Login">
          <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
        </form>
      </div>
    </div>
  </body>
</html>
