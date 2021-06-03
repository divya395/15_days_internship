<?php
$connection = mysqli_connect("localhost", "root", "", "form");
$id = $_GET['deleteid'];
$q = mysqli_query($connection,"delete from theme where user_id='{$id}'") or die(mysqli_error($connection));
if($q){
    echo "<script>alert('Record Deleted');window.location='table.php';</script>";
}
?>