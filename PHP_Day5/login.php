<?php 
// session_id()
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>login</title>
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
        <h1 class="text-center">Login</h1>
        <hr>
        <div class="input">
            <label for="">Name: </label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="input">
            <label for="">Password: </label>
            <input type="password" name="userpassword" class="form-control">
        </div>

        <input type="submit" value="sign in" name="signin" class="btn btn-dark w-100 mt-3">
        <p class="text-center mt-4">don't have an account ? <a class="text-dark" href="./signup.php">Sign up</a></p>
    </form>
    
</body>

</html>

<?php 

include './conn.php';

if (isset($_POST['signin'])) {
    if ($_POST['username'] && $_POST['userpassword']) {
        $name = $_POST["username"];
        $password = $_POST['userpassword'];

        $sql = "SELECT * FROM registered_users WHERE username = '$name' AND password = '$password'";
        $user = mysqli_query($conn,$sql);
        if(!$user){
            die('Error: ' . mysqli_error($conn));
            echo "user doesn't exist";
        }
        while($row = mysqli_fetch_assoc($user)){
            $user_id = $row['id'];
            $user_name = $row['username'];
            $user_password = $row['password'];
        }
        // If user exists, save the user info to session and redirect to home page
        if($user_name == $name && $user_password == $password){
            $_SESSION['id'] = $user_id;
            $_SESSION['name'] = $user_name;
            header("Location: ./home.php");
        } else {
            header("Location: ./login.php");
        }
    }
}
?>
