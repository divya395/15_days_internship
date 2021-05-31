<?php
//Associative Array
//key = value
//Method 1

$a[0] = 10;
$a['c'] = "Computer";
$a['php'] = "Web Devlopment";
$a[10] = "ten";
$a[50] = 40;

//Method 2

$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "Web Devlopment",
    10 => "ten",
    50 => 40
);
//print value
echo "c for ".$a['c'];

foreach ($a as $value) {
    echo "</br> Value is $value";
}
foreach ($a as $key => $value){
    echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}
// 3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>