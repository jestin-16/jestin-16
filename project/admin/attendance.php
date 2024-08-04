
<?php
$connection=require("conn.php");
$sql="SELECT * FROM `customer`";
$res=mysqli_query($con,$sql);
while($x=mysqli_fetch_array($res)){
  echo "
   <input type='text' placeholder='name' name='name' value=$x[1]><br>";
}


?>



<!DOCTYPE html>
<html>
  <head>
    <title>attendance</title>
  </head>

<body>
<h2>Attendance entry</h2>
<form>
  <input type="text" placeholder="name" name="name">
</form>
</body>

</html>