<?php
session_start();

$host = "localhost";
$user = "root";
$password = ""; 
$db = "projectm";

$conn = mysqli_connect($host, $user, $password, $db);

if ($conn === false) {
  die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM login WHERE username='" . $username . "' AND password='" . $password . "'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  if ($row) {
    $_SESSION["username"] = $username;
    if ($row["usertype"] == "admin") {
      header("Location: http://localhost/project/admin/home.php");
      exit();
    } elseif ($row["usertype"] == "user") {
      header("Location: http://localhost/project/user/home.php");
      exit();
    } elseif ($row["usertype"] == "worker") {
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
    </div>
  </center>
</body>
</html>
