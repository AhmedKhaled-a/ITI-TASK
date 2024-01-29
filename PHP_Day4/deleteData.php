<?php
require_once "conn.php";
$id = $_REQUEST["id"];
$query = "DELETE FROM user_data WHERE id = '$id'";
if (mysqli_query($conn, $query)) {
    header("location: user_details.php");
} else {
    echo "Something went wrong. Please try again later.";
}
