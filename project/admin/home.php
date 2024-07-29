<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: http://localhost/project/home/login.php");
  exit();  
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Home Page</title>
</head>
<body>
  <h3>Admin Home Page</h3>
 
  <br>
  <a href="http://localhost/project/home/login.php">Logout</a>



</body>
</html> -->

<!-- <?php echo $_SESSION["username"]; ?> -->

<!DOCTYPE html>
<html>
  <head>
    <title>admin</title>
  </head>
  <body>
    <h2>Admin Management</h2>
    <nav>
      <ul>
        <li>view</li>
        <li>update</li>
        <li><a href="http://localhost/project/home/login.php">Logout</a>  </li>
        
      </ul>
    </nav>
  </body>
</html>


<?php

$connection=include("C:\xampp\htdocs\project\home\conn.php");
if(!$connection)
{
  die("connection error");
}


?>