<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'users');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// if ($conn === false) {
//   die("ERROR: Could not connect. " . mysqli_connect_error());
// }

// echo "Success: A proper connection to MySQL was made! The <span style='color:red'>". DB_NAME ."</span> database is great.<br>" . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

// mysqli_close($conn);
