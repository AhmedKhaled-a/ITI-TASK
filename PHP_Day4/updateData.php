<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update user</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body {
            background-color: #9d6f9d;
        }

        .input {
            margin-bottom: 15px;
        }

        .input label {
            margin-bottom: 10px;
        }

        .input input:focus {
            box-shadow: none !important;
            border-color: #485c78 !important;
        }
    </style>
</head>

<body>
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
            $name = $row['Name'];
            $email = $row['email'];
            $gender = $row['gender'];
            $agree = $row['agree'];
    ?>

    <form action="<?php $_PHP_SELF ?>" method="post" class="w-25 mx-auto mt-5">
        <h1>User Registeration Form</h1>
        <p>please fill this form and submit to add user record to the database</p>

        <div class="input">
            <label for="">Name: </label>
            <input type="text" name="name" class="form-control" value="<?php echo $name ?>">
        </div>
        <div class="input">
            <label for="">Email: </label>
            <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
        </div>
        <div class="input">
            <label for="" class="me-2">gender: </label>
            <input type="radio" name="gender" value="Male" <?php  echo $gender == 'Male' ? 'checked' : '' ?>>
            <label class="me-2">Male</label>
            <input type="radio" name="gender" value="Female"<?php  echo $gender == 'Female' ? 'checked' : '' ?>>
            <label>Female</label>
        </div>
        <div class="input">
            <span class="me-3">Recieve email from us ?</span>
            <input type="checkbox" name="agree?" style="vertical-align: middle;"  <?php  echo $agree == 1 ? 'checked' : '' ?>>
        </div>
        <input type="submit" value="sumbit" name="submitButton" class="btn btn-dark w-100 mt-3">
    </form>
    <?php  
}
}
?>
</body>

</html>

<?php 
require_once "conn.php";
$id = $_REQUEST["id"];

if (isset($_REQUEST['submitButton'])) {
    if ($_REQUEST['name'] && $_REQUEST['email'] && $_REQUEST['gender']) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $agree;
        if (isset($_REQUEST['agree?'])) {
            $agree = 1;
        } else {
            $agree = 0;
        }
        $sql = "UPDATE user_data SET `Name` ='$name', `email` = '$email',  `gender`='$gender', `agree`= $agree WHERE id = '$id' ";
        if (mysqli_query($conn, $sql)) {
            header("location: user_details.php");
        } else {
            echo "Something went wrong. Please try again later.";
        };
    } else {
        echo "empty fields! :(";
    }
}
?>