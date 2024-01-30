<?php session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
    <style>
        body {
            background-color: #9d6f9d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="w-100 text-center my-5">Welcome <?php echo  $_SESSION['name']; ?></h1>
        <form action="" method="post">
            <button type="submit" name='signout' class=" btn btn-dark w-50 d-block mx-auto "> Sign Out</button>
        </form>
    </div>
</body>

</html>

<?php

if (!isset($_SESSION['id'])) {         // condition Check: if session is not set. 
    echo "<script>alert('log in first ^^')</script>";
    header('location: login.php');   // if not set, the user is sentback to login page.
}
if (isset($_POST['signout'])) {
    // delete the session cookie. 
    if (ini_get("session.use_cookies")) { 
        $params = session_get_cookie_params(); 
        setcookie(session_name(), '', time() - 42000, 
            $params["path"], $params["domain"], 
            $params["secure"], $params["httponly"] 
        ); 
    } 
    session_destroy();            //  destroys session       
    header('location: ./login.php');
}


?>