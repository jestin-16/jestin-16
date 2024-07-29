

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- <link rel="stylesheet" href="log.css"> -->
</head>
<body>
  <h1 class="heading-login">Login Form</h1>
  <br><br>
  <center>
    <div class="login-div">
      <form action="#" method="POST" class="login-form">
        <div>
          <label>Username</label>
          <input type="text" name="username" required>
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" required>
        </div>
        <input type="submit" value="Login">
      </form>
      <p>Not have an account?<a href="sign.html"><u>Signin </u></a></p>
    </div>
  </center>
</body>
</html>


<?php
session_start();

$host = "localhost";
$user = "root";
$password = ""; 
$db = "projectm";

$connection=require("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

 $sql="SELECT  `cust_name`,  `Password`, `role` FROM `customer` WHERE `cust_name`='$username'";
 $result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);


if($row && password_verify($password,$row['Password']))
{

    $_SESSION["username"] = $username;
    if ($row["role"] == "admin") {
      header("Location: http://localhost/project/admin/home.php");
      exit();
    } elseif ($row["role"] == "user") {
      header("Location: http://localhost/project/user/home.php");
      exit();
    } elseif ($row["role"] == "worker") {
      header("Location: http://localhost/project/worker/home.php");
      exit();
    } else {
      echo "Invalid user type";
    }
  } else {
    echo "Username or password is incorrect";
  }
}
?>
