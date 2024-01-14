<?php
session_start();
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["username"];
  $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION["loggedin"] = true;

            if ($email === "admintotama@gmail.com" && $password === "admin") {
                header("Location: adminspace.php");
            } else {
                header("Location: userspace.php");
            }
            exit();
        } else {
            $error = "Invalid credentials";
        }
    } else {
        $error = "Invalid credentials";
    }
  
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log in </title> 
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Log in </span></div>
        <form action="login.php" method="post">
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="username" required>
    </div>
    <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <div class="pass"><a href="#">Forgot password?</a></div>
    <div class="row button">
        <input type="submit" value="Login">
    </div>
    <div class="signup-link">Not a member? <a href="register.php">register</a></div>
</form>

      </div>
    </div>
    <style>
          *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
           }
   body{
  background: whitesmoke;
  overflow: hidden;
     }
       ::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #4070f4;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color:#52599e;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #52599e;
  border: 1px solid ;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: rgb(89, 89, 167);;
  border: 1px solid #52599e;
  cursor: pointer;
}
form .button input:hover{
  background:rgb(89, 89, 167);;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: rgb(89, 89, 167);
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
</style>

  </body>
</html>
