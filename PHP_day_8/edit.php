<?php
$connection = mysqli_connect("localhost", "root", "", "test");

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:demo2_table.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from db where user_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

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
    
$uq = mysqli_query($connection, "update db set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}',user_email='{$email}',
user_pincode='{$pincode}',user_bloodgroup='{$bloodgroup}',user_DOB='{$DOB}',user_address='{$address}',user_message='{$message}'
where user_id='{$editid}'")
or die(mysqli_error($connection));

if($uq){
    echo "<script>alert('Record Updated');
    window.location='demo2_table.php';</script>";
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
Name : <input type="text" name="txt1" value="<?php echo $editdata['user_name'];?>"/><br>
Gender : Male<input type="radio" <?php if ($editdata['user_gender']=="Male"){echo "checked";} ?>
value="Male" name="txt2"/>
Female : <input type="radio" <?php if ($editdata['user_gender']=="Female"){echo "checked";} ?>
value="Female" name="txt2"/>
<br>
Mobile No. :<input type="text" name="txt3" value="<?php echo $editdata['user_mobile'];?>" /><br>
Email : <input type="email" name="txt4" value="<?php echo $editdata['user_email'];?>"/><br>
Pincode : <input type="text" name="txt5" value="<?php echo $editdata['user_pincode'];?>"/><br>
BloodGroup : 
<select name="txt6" required value="<?php echo $editdata['user_bloodgroup'];?>">
       <option selected hidden value="">Select BG</option>
       <option value="A+">A+</option>
       <option value="B+">B+</option>
       <option value="B-">B-</option>
       <option value="A-">A-</option>
       <option value="AB+">AB+</option>
       <option value="0-">O-</option>
      </select><br>
      DOB: <input type="date" name="txt7" value="<?php echo $editdata['user_DOB'];?>"><br>
      Address: <input type="textarea" name="txt8" value="<?php echo $editdata['user_address'];?>"><br>
      Message: <input type="textarea" name="txt9" value="<?php echo $editdata['user_message'];?>"><br>
<input type="submit"/>
</form>
</body>
</html>
<a href='demo2_table.php' style="background-color:azure;">Display Record</a>


