<?php
$connection = mysqli_connect("localhost", "root", "", "form");
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:table.php");
}
$editid = $_GET['id'];
$editq = mysqli_query($connection,"select * from theme where user_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];  
$uq = mysqli_query($connection, "update theme set user_name='{$name}',user_email='{$email}',user_message='{$message}' where user_id='{$editid}'")
or die(mysqli_error($connection));

if($uq){
    echo "<script>alert('Record Updated');
    window.location='table.php';</script>";
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
<div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
              <h2 class="tm-text-primary">Contact Wave</h2>
              
            </div>
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form  method="POST" id="contact-form">
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" value="<?php echo $editdata['user_name'];?>"/>
                </div>
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" value="<?php echo $editdata['user_email'];?>"/>
                </div>        
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required="" value="<?php echo $editdata['user_message'];?>"></textarea>
                </div>        
                <div>
                  <button type="submit" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
</body>
</html>
<a href='table.php' style="background-color:azure;">Display Record</a>


