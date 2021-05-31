<?php
//Numerial Array
//Method 1

$a[0] = 10;
$a[1] = 20;
$a[2] = 30;
$a[3] = "D";
$a[4] = "4";
$a[5] = 50.9;

//Method 2
//Index Dynemic Array
$a[] = 10;
$a[] = 20;
$a[] = 30;
$a[] = "D";
$a[] = "4";
$a[] = 50.9;

//Method 3
$a = Array(10,20,30,"D","4",50.9);
//print array value
echo $a[3];
//print whole array
for($i=0;$i<count($a);$i++){
    echo "<br/>".$a[$i];
}

$sum = array_product($a);
echo $sum;
?>
