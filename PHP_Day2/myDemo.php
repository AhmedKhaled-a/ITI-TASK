
<?php
// Task 1
echo nl2br("This is the first line.\nThis is the second line.\n\n");



// Task 3
$arr = [12,45,10,25];
$sum = array_sum($arr);
$count = count($arr);
echo "sum = " . $sum . "<br>"; 
echo "avg = " . ($sum / $count) . "<br>"; 
rsort($arr) ;
print_r($arr);

echo "<br><br><br>";

// Task 4
$names = ["sara" => 31, "john" => 41, "walaa" => 39, "ramy" => 40];

// a) ascending order, according to the value
echo "ascending order, according to the value: <br><br>";
asort($names); 
print_r($names);
echo "<br><br>";

// b) ascending order, according to the key
echo "ascending order, according to the key: <br><br>";
ksort($names); 
print_r($names);
echo "<br><br>";

// c) descending order, according to the value
echo "descending order, according to the value: <br><br>";
arsort($names); 
print_r($names);
echo "<br><br>";

// c) descending order, according to the key
echo "descending order, according to the key: <br><br>";
krsort($names); 
print_r($names);
echo "<br><br>";

// Task 2
echo "<hr> Display _SERVER : <br><br>";
foreach ($_SERVER as $key => $value) {
    echo $key . " => " . $value . "<br><br>";
};
?>