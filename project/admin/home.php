<?php 
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: http://localhost/project/home/login.php");
  exit();  
}
?>




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



<a href="display.php">display</a>