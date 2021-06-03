<?php
$connection = mysqli_connect("localhost", "root", "", "test");
$q = mysqli_query($connection,"select * from db ") 
or die(mysqli_error($connection));
echo "<body></body>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Email</th>";
echo "<th>Pincode</th>";
echo "<th>BloodGroup</th>";
echo "<th>DOB</th>";
echo "<th>Address</th>";
echo "<th>Message</th>";
echo "<th colspan='2'>Action</th>";
echo "</tr>";
$i=0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td>{$row['user_email']}</td>";
    echo "<td>{$row['user_pincode']}</td>";
    echo "<td>{$row['user_bloodgroup']}</td>";
    echo "<td>{$row['user_DOB']}</td>";
    echo "<td>{$row['user_address']}</td>";
    echo "<td>{$row['user_message']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>Edit</td>";
    echo "<td><a href='delete.php?deleteid={$row['user_id']}'>Delete</td>";
    echo "</tr>";
}
    echo "</table>";
    echo "<a href='demo2.php'>Add Record</a>";

?>

<html>
<head>
<style>
table{
     padding-top: 50px;
     border:2px solid brown;
     font-size:large;
     background-color: #fff;
     
}
table,td{

    text-align: center;
    padding: 10px;
}
a{
    font-size: larger;
    
}
</style>
</head>
</html>