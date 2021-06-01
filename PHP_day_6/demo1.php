<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "test";

$connection = mysqli_connect($host, $username, $passwd, $dbname);
$q = mysqli_query($connection,
"insert into db(user_name,user_gender,user_mobile) 
values('Divya','Female','123')")
or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added');</script>";
}
?>

