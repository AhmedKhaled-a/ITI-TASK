<?php



define('title', 'Hello World!');

echo "<h1>".title."</h1>";

// ------- 
    

    echo "<p>server name: ".$_SERVER['SERVER_NAME']."</p>";
    echo "<p>server address: ".$_SERVER['SERVER_ADDR']."</p>";
    echo "<p>server port: ".$_SERVER['SERVER_PORT']."</p>";
    echo "<p>filename: ".__File__ ."</p>";
    echo "<p>filename: ". __DIR__ ."</p>"; 

// ------- 

    $brotherAge = 10;
    switch ($brotherAge) {
        case $brotherAge<5:
            echo "Stay at home";
            break;
        case 5:
            echo "Go to Kindergarden";
            break;
        case $brotherAge >=6 && $brotherAge <=12:
            echo "Go to grade: " .$brotherAge - 5;
            break;
    };

// ------- 

phpinfo();

?>


