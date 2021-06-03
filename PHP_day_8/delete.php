<?php
$connection = mysqli_connect("localhost", "root", "", "test");
$id = $_GET['deleteid'];
$q = mysqli_query($connection,"delete from db where user_id='{$id}'") or die(mysqli_error($connection));
if($q){
    echo "<script>alert('Record Deleted');window.location='demo2_table.php';</script>";
}
?>