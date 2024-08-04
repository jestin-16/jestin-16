<?php
$conn = mysqli_connect("localhost", "root", "", "projectm");
if (!$conn) {
    die("connection error");
}

$sql = "SELECT `cust_id`, `cust_name` FROM `customer` WHERE `role`='worker'";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table thead th {
            background-color: #0eccf3;
            color: white;
            vertical-align: middle;
        }
        .table td, .table th {
            text-align: center;
        }
        input[type="date"] {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Salary</h2>
        <div class="mb-3">
            <label for="mainDatePicker" class="form-label">Select Date:</label>
            <input type="date" id="mainDatePicker" class="form-control">
        </div>
        <form action="#" method="POST">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Employee Name</th>
                        <th>Date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody id="attendanceBody">
                    <?php
                    while ($r = mysqli_fetch_array($res)) {
                        echo "<tr>
                            <td>{$r['cust_id']}</td>
                            <td>
                                {$r['cust_name']}
                                <input type='hidden' name='employee_name[]' value='{$r['cust_name']}'>
                            </td>
                            <td><input type='date' name='date[]' class='date-picker'></td>
                            <td>
                                <select class='form-select' name='salary_amount[]'>
                                    <option value='600' selected>600</option>
                                    <option value='700'>700</option>
                                    <option value='800'>800</option>
                                    <option value='900'>900</option>
                                </select>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <center><input type="submit" value="Update" name="salary" class="btn btn-primary"></center>
        </form>

        <?php
        if (isset($_POST['salary'])) {
           ;

            $employeeIds = $_POST['cust_id'];
            // $employeeNames = $_POST['employee_name'];
            $dates = $_POST['date'];
            $salaries = $_POST['salary_amount'];

            foreach ($employeeIds as $index => $cust_id) {
                // $employeeName = $employeeNames[$index];
                $date = $dates[$index];
                $salary = $salaries[$index];

                echo "<tr>
                    <td>{$cust_id}</td>
                    
                    <td>{$date}</td>
                    <td>{$salary}</td>
                </tr>";
            }

        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainDatePicker = document.getElementById('mainDatePicker');
            const datePickers = document.querySelectorAll('.date-picker');

            const setAllDates = (date) => {
                datePickers.forEach(picker => picker.value = date);
            };

            const formatDate = (date) => {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                the day = String(date.getDate()).padStart(2, '0');
                return `${year}-${month}-${day}`;
            };

            const today = new Date();
            const todayFormatted = formatDate(today);

            mainDatePicker.value = todayFormatted;
            setAllDates(todayFormatted);

            mainDatePicker.addEventListener('change', (event) => {
                setAllDates(event.target.value);
            });
        });
    </script>
</body>
</html>
