<?php
$connection = mysqli_connect("localhost", "root", "", "test");
if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $email = $_POST['txt4'];
    $pincode = $_POST['txt5'];
    $bloodgroup = $_POST['txt6'];
    $DOB = $_POST['txt7'];
    $address = $_POST['txt8'];
    $message = $_POST['txt9'];
    

$q = mysqli_query($connection, "insert into db (user_name,user_gender,user_mobile,user_email,user_pincode,user_bloodgroup,user_DOB,user_address,user_message) 
values('{$name}','{$gender}','{$mobile}','{$email}','{$pincode}','{$bloodgroup}','{$DOB}','{$address}','{$message}')")
or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added');</script>";
}
}

?>

<html>
<head>
<style>
form{

    padding-top: 50px;
    padding-left: 500px;
    font-size: x-large;
    display: block;
    margin-top: 80px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
}
input{
    font-size: large;
}
h2{
    font-size: larger;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    padding-top: 20px;
}
a{
    font-size:x-large;
}
</style>
</head>
<body style="background-color: lightblue;">
<form method="POST" style="display:inline-block;">
<h2>Add your record here </h2>
Name : <input type="text" name="txt1"/><br>
Gender :<select name="txt2"><br>
<option>Male</option>
<option>Female</option>
</select><br>
Mobile No. :<input type="number" name="txt3"/><br>
Email : <input type="email" name="txt4"/><br>
Pincode : <input type="text" name="txt5"/><br>
BloodGroup : 
<select name="txt6" required>
       <option selected hidden value="">Select BG</option>
       <option value="A+">A+</option>
       <option value="B+">B+</option>
       <option value="B-">B-</option>
       <option value="A-">A-</option>
       <option value="AB+">AB+</option>
       <option value="0-">O-</option>
      </select><br>
      DOB: <input type="date" name="txt7"><br>
      Address: <input type="textarea" name="txt8"><br>
      Message: <input type="textarea" name="txt9"><br>
<input type="submit"/>
</form>
</body>
</html>
<a href='demo2_table.php' style="background-color:azure;">Display Record</a>
