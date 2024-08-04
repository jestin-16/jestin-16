<?php

$number = $_GET['no'];
$connection = require("conn.php");
$sql = "SELECT `cust_id`, `cust_name`, `cust_ph`, `role` FROM `customer` WHERE `cust_id` = $number";
$result = mysqli_query($con, $sql);
$res = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <style>
        body {
            background: url("images/editform.jpg") no-repeat center center fixed; 
            background-size: cover;
        }
        .container {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card {
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(15px) brightness(85%);
            background: transparent;
            max-width: 500px;
            width: 100%;
            padding: 20px;
            text-align: center;
        }
        select {
            width: 200px;
        }
        .navbar-brand {
            font-family: 'Brush Script MT', cursive;
            font-size: 2.5rem;
            color: #f0e68c;
            animation: colorChange 5s infinite alternate;
            padding: 5px 10px;
            border-radius: 5px;
            text-align: center;
            display: block;
            margin-bottom: 20px;
        }
        @keyframes colorChange {
            0% { color: #ff6347; }
            10% { color: #ff69b4; }
            20% { color: #ffa07a; }
            30% { color: #ffa07a; }
            40% { color: #ffd700; }
            60% { color: #90ee90; }
            80% { color: #1e90ff; }
            100% { color: #8d0bfe; }
        }
    </style>
</head>
<body>
    <div class="container">
        <a class="navbar-brand" href="#">MAGIC PAINTS</a>

        <div class="card text-center text-dark">
            <form action="#" method="POST">
                <br>
                <label for="id">Id</label><br>
                <input type="text" name="id" value="<?php echo $res['cust_id']; ?>"><br><br>

                <label for="name">Name</label><br>
                <input type="text" name="name" value="<?php echo $res['cust_name']; ?>"><br><br>

                <label for="ph">Phone number</label><br>
                <input type="text" name="ph" value="<?php echo $res['cust_ph']; ?>"><br><br>

                <label for="crole">Current Role</label><br>
                <input type="text" name="crole" id="crole" value="<?php echo $res['role']; ?>"><br><br>

                <label for="role">Role</label><br>
                <select name="role" id="role" name="role">
                    <option value="user">User</option>
                    <option value="worker">Worker</option>
                </select><br><br>

                <div class="btn btn-info">
                    <input type="submit" class="btn" value="Update" name="update">
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>


<?php
if(isset($_POST['update']))
{
  echo "hai";

  $cname=$_POST['name'];
  $cid=$_POST['id'];
  $crole=$_POST['role'];
  $cphone=$_POST['ph'];
  echo $cname,$cid,$crole,$cphone;

  $sql="UPDATE `customer` SET `cust_id`='$cid',`cust_name`='$cname',`cust_ph`='$cphone',
  `role`='$crole' WHERE `cust_id`='$cid'";
  $res=mysqli_query($con,$sql);
  if($sql){
    header("location:display.php");
  }
  else{
    echo "error";
  }
}
?>
