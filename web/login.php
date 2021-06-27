<?php
session_start();
require_once"config.php";
$username="";
$password="";
if($_SERVER["REQUEST_METHOD"]   == "POST"){
    $username=trim($_POST["email"]);
    $password=trim($_POST["password"])
    if(empty($username_err)&& empty($password_err)){

    }
}
?>
//copy trang login html vao day 
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container-fluid mt-3">
         <h2>Login</h2>
 
         <form>
            <!-- Vertical -->
            <div class="form-group">
               <label for="myEmail">Email</label>
               <input type="email" name= email id = "myEmail" class="form-control" placeholder="Email">
               <label for="myPassword">Password</label>
               <input type="password" name=password id="myPassword" class="form-control" placeholder="Password">
               <div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a>Don't have an account?</a>
                  <a href="register.html">Sign up</a>
               </div>
            </div>  
            <?php require 'xuly.php';?>   
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>