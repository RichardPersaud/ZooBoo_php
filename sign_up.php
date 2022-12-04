<?php 
session_start();
include 'functions/config.php';
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
          <h2 >Sign up</h2>
<?php


// // ...............................................
 
// // Define variables and initialize with empty values
// $username = $password = $confirm_password = "";
// $username_err = $password_err = $confirm_password_err = "";
 
// // Processing form data when form is submitted
// if($_SERVER["REQUEST_METHOD"] == "POST"){
 
//     // Validate username
//     if(empty(trim($_POST["username"]))){
//         $username_err = "Please enter a username.";
//     } else{
//         // Prepare a select statement
//         $sql = "SELECT id FROM users WHERE username = ?";
        
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "s", $param_username);
            
//             // Set parameters
//             $param_username = trim($_POST["username"]);
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 /* store result */
//                 mysqli_stmt_store_result($stmt);
                
//                 if(mysqli_stmt_num_rows($stmt) == 1){
//                     $username_err = "This username is already taken.";
//                 } else{
//                     $username = trim($_POST["username"]);
//                 }
//             } else{
//                 echo "Oops! Something went wrong. Please try again later.";
//             }
//         }
         
//         // Close statement
//         mysqli_stmt_close($stmt);
//     }
    
//     // Validate password
//     if(empty(trim($_POST["password"]))){
//         $password_err = "Please enter a password.";     
//     } elseif(strlen(trim($_POST["password"])) < 6){
//         $password_err = "Password must have atleast 6 characters.";
//     } else{
//         $password = trim($_POST["password"]);
//     }
    
//     // Validate confirm password
//     if(empty(trim($_POST["confirm_password"]))){
//         $confirm_password_err = "Please confirm password.";     
//     } else{
//         $confirm_password = trim($_POST["confirm_password"]);
//         if(empty($password_err) && ($password != $confirm_password)){
//             $confirm_password_err = "Password did not match.";
//         }
//     }
    
//     // Check input errors before inserting in database
//     if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
//         // Prepare an insert statement
//         $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
//         if($stmt = mysqli_prepare($link, $sql)){
//             // Bind variables to the prepared statement as parameters
//             mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
//             // Set parameters
//             $param_username = $username;
//             $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
//             // Attempt to execute the prepared statement
//             if(mysqli_stmt_execute($stmt)){
//                 // Redirect to login page
//                 header("location: index.php");
//             } else{
//                 echo "Something went wrong. Please try again later.";
//             }
//         }
         
//         // Close statement
//         mysqli_stmt_close($stmt);
//     }
    
//     // Close connection
//     mysqli_close($link);
// }


?>
 
    <div class="wrapper">
        <p>Please fill this form to create an account.</p>
         <form action="" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="index.php">Login here</a>.</p>
        </form>
    </div>  

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST['username'] == ""){
            header('location: login.php?err=1');
          }
          $username = $_POST["username"];
          $password = $_POST["password"];
        
            //to prevent from mysqli injection
          $username = stripcslashes ($username);
          $password  = stripcslashes ($password);
          $username = mysqli_real_escape_string ($link, $username);
          $password = mysqli_real_escape_string ($link, $password);
        
           $hash_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
        
          $query = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
          
          if ($link->query($query) === TRUE) {
            echo 'New record created successfully';
          } else {
            echo 'ERROR: '.$link->error.'</span></div>';
          }
          $link->close();
    }
    ?>


  </div>
</body>
</html>





