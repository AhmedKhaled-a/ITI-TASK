<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>User Details</h1>
        <table class="table table-dark  rounded-2 overflow-hidden">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mail status</th>
                    <th >action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "conn.php";
                $sql = "SELECT * FROM user_data";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    die("Could not get data:" . mysqli_error($conn));
                };

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $Id = $row['id'];
                        $name = $row['Name'];
                        $email = $row['email'];
                        $gender = $row['gender'];
                        $agree = $row['agree'];
                        echo "<tr>
                                    <td>$Id</td>
                                    <td>$name</td>
                                    <td>$email</td>
                                    <td>$gender</td>
                                    <td>$agree</td>
                                    <td>
                                    <a href='./view_record.php?id=$Id'><i class='fa-solid fa-eye me-2' style='color: #fff;'></i></a>
                                    <a href='./updateData.php?id=$Id'><i class='fa-solid fa-pen me-2' style='color: #fff;'></i></a>
                                    <a href='./deleteData.php?id=$Id'><i class='fa-solid fa-trash' style='color: #fff;'></i></a>
                                    </td>
                                </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>