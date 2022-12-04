<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>Zooboo</title>
<!-- Landing page for new users -->
<link rel="stylesheet" type="text/css" href="assets/css/landing.css">

</head>
<body>
  <div class="wrapper">
    <h1>Welcome to Zooboo</h1>

    <div class="logo_img">
      <img src="assets/img/logo_design.png">
    </div>


  <div class="landing_form">

    <form action="login.php" method="post">
        <div class="container">
<?php 
include 'sign_up_sublink.php';
?>

          <label for="username"><b>Username</b><br></label>
          <input type="text" placeholder="Username" name="username" required>
          <br>
          <br>
          <label for="e-mail"><b>E-mail</b><br></label>
          <input type="text" placeholder="E-mail" name="e-mail" required>
          <br>
          <br>
          <label for="password"><b>Password</b></label>
          <br>
          <input type="password" placeholder="Password" name="password" required>
          <br>
          <br>
         <input type="submit" name="login" class="loginbtn" value="Login">
        </div>

      <div class="container signin">
        <p>Already have an account? <a href="index.php">Sign in!</a>.</p>
      </div>

    </form>
  </div>

  </div>
</body>
</html>





