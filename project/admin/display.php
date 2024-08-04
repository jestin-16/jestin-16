<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Paints</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
            color: #333;
        }
        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            color: #4B0082;
            animation: fadeIn 2s ease-in-out infinite alternate;
            text-align: center;
            margin-top: 20px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0.5;
            }
            to {
                opacity: 1;
            }
        }
        table {
            margin-top: 30px;
        }
        th {
            background-color: #8A2BE2;
            color: white;
        }
        td {
            text-align: center;
            vertical-align: middle;
        }
        .btn-edit, .btn-delete {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-edit {
            background-color: #00bfff;
            color: white;
        }
        .btn-delete {
            background-color: hsl(16, 93%, 55%);
            color: white;
        }
        .btn-edit i, .btn-delete i {
            margin-left: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Magic Paints</h1>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Ph</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php

              $connection = require("conn.php");
              $sql = "SELECT * FROM `customer`";
              $res = mysqli_query($con, $sql);
              while($x = mysqli_fetch_array($res)){
                echo "<tr>
                <td>". $x['0'] ."</td>
                <td>". $x['1'] ."</td>
                <td>". $x['2'] ."</td>
                <td>". $x['4'] ."</td>
                <td><a href='edit.php?no=$x[0]'><button class='btn btn-edit'>Edit &#9998;</button></a></td>
                <td><a href='delete.php?no=$x[0]'><button class='btn btn-delete'>Delete<i class='material-icons'>&#xe872;</i></button></a></td>
                </tr>";
              }

            ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
