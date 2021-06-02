<?php
$connection = mysqli_connect("localhost", "root", "", "student_db");
$id = $_GET['deleteid'];
$q = mysqli_query($connection,"delete from student where user_id='{$id}'") or die(mysqli_error($connection));
if($q){
    echo "<script>alert('Record Deleted');window.location='table.php';</script>";
}
?>