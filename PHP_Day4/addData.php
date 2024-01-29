<?php 
require_once "conn.php";


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
        $sql = "INSERT INTO user_data (Name,email,gender,agree) VALUES ('$name','$email','$gender',$agree)";
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