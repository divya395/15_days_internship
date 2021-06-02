<?php
//DB connection
$connection = mysqli_connect("localhost", "root", "", "test");
//query
$q = mysqli_query($connection,"select * from db") or die(mysqli_error($connection));
//fetch data
$row = mysqli_fetch_row($q);
print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].$row[10];

$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9].$row[10];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'].$row['user_email'].$row['user_pincode'].$row['user_bloodgroup'].$row['user_DOB'].$row['user_address'].$row['user_message'];

?>