<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: http://localhost/project/home/login.php");
  exit();  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Home Page</title>
</head>
<body>
  <h3>Admin Home Page</h3>
  <?php echo $_SESSION["username"]; ?>
  <br>
  <a href="http://localhost/project/home/login.php">Logout</a>
</body>
</html>
