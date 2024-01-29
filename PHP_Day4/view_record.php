<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mail status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "conn.php";
                $id = $_REQUEST["id"];
                $sql = "SELECT * FROM user_data WHERE id = '$id'";
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
                        echo "
            <tr>
                        <td>$Id</td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$gender</td>
                        <td>$agree</td>
            </tr>";
                    }
                }
                ?>
            </tbody>

        </table>
    </div>

</body>

</html>