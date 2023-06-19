<!DOCTYPE html>
<?php
    include "./includes/connection.php";

    if(isset($_POST['submit'])){

        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['c_password']);
        $type = mysqli_real_escape_string($con, $_POST['user_type']);
        
        
    }


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>

<div class="container">
      <div class="form-container">
        <div class="title"><span>Register Now</span></div>
        <form action="register.php" method="POST">
        <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username" value="<?php if(isset($error)){ echo $username; }?>">
          </div>
          <div class="row">
          <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="Email" name="email" value="<?php if(isset($error)){ echo $email; }?>">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="cpassword">
          </div>
          <div class="row">  
            <select name="user_type" class="select">
              <option value="1">User</option>
              <option value="2">Admin</option>
            </select>
          </div>
          <div class="row button">
            <input type="submit" value="Register" name="submit">
          </div>
          <div class="signup-link">Already have an account? <a href="login.php">Login now</a></div>
        </form>
      </div>
    </div>
</body>
</html>