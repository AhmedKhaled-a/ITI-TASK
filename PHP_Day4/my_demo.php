<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day_4</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        body{
            background-color:#9d6f9d ;
        }
        .input {
            margin-bottom: 15px;
        }
        .input label{
            margin-bottom: 10px;
        }
        .input input:focus{
            box-shadow: none !important;
            border-color: #485c78 !important;
        }
    </style>
</head>
<body>
    <form action="addData.php" method="post" class="w-25 mx-auto mt-5">
        <h1>User Registeration Form</h1>
        <p>please fill this form and submit to add user record to the database</p>

        <div class="input">
            <label for="">Name: </label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="input">
            <label for="">Email: </label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="input">
            <label for="" class="me-2">gender: </label>
            <input type="radio" name="gender" value="Male">
            <label class="me-2">Male</label>
            <input type="radio" name="gender" value="Female">
            <label>Female</label>
        </div>
        <div class="input">
            <span class="me-3">Recieve email from us ?</span><input type="checkbox" name="agree?" style="vertical-align: middle;" value="false">
        </div>
        <input type="submit" value="sumbit" name="submitButton" class="btn btn-dark w-100 mt-3">
    </form>
</body>
</html>

<?php


// header("Location: user_details.php");

// if (isset($_REQUEST['submitButton'])) {
//     if ($_REQUEST['name'] && $_REQUEST['email'] && $_REQUEST['gender']) {
//         echo "<h1>Your given values are :</h1> <br>";
//         echo "Name: " . $_REQUEST['name'] . "<br>";
//         echo "Email: " . $_REQUEST['email'] . "<br>";
//         echo "Gender: " . $_REQUEST['gender'] . "<br>";
//         // echo "agree?" . $_REQUEST['agree?'] . "<br>";
//         if (isset($_REQUEST['agree?'])) {
//             $checked = true;
//             echo $checked ? 'true' : 'false';
//         }else{
//             $checked = false;
//             echo $checked ? 'true' : 'false';
//         }
//     }
// }

?>