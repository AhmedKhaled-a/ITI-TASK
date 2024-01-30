<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Register</title>
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
    <form action="" method="post" class="w-25 mx-auto mt-5">
        <h1 class="text-center">Sign up</h1>
        <hr>
        <div class="input">
            <label for="">Name: </label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="input">
            <label for="">Password: </label>
            <input type="password" name="userpassword" class="form-control" required>
        </div>

        <input type="submit" value="sign up" name="signup" class="btn btn-dark w-100 mt-3">
        <p class="text-center mt-4">already have an account ? <a class="text-dark" href="./login.php">Sign in</a></p>
    </form>
    
</body>

</html>

<?php
include './conn.php';
if (isset($_POST['signup'])) {
    if ($_POST['username'] && $_POST['userpassword']) {
        $name = $_POST["username"];
        $password = $_POST['userpassword'];

        //check whether the user exists or not
        $sql = "SELECT * FROM registered_users WHERE username='$name'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            //insert data into database

            $sql = "INSERT INTO registered_users (username, password) VALUES('$name','$password')";
            if(mysqli_query($conn,$sql)){
                header("Location: login.php");
            }else{
                echo "Something went wrong" . mysqli_error($conn);
            }
        }else{
                echo "<h2 class='w-100 text-center mt-5'>username exists!</h2>";
        }
        ;
    }
}
?>