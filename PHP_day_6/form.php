<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="insert.php" method="POST">
  <table>
   <tr>
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr>
   <tr>
    <td>Address :</td>
    <td><input type="text" name="Address" required></td>
   </tr>
   <tr>
    <td>Area :</td>
    <td><input type="text" name="Area" required></td>
   </tr>
   <tr>
    <td>DOB :</td>
    <td><input type="date" name="dob" required></td>
   </tr>
   <tr>
    <td>BloodGroup :</td>
    <td>
      <select name="bloodgroup" required>
       <option selected hidden value="">Select BG</option>
       <option value="A+">A+</option>
       <option value="B+">B+</option>
       <option value="B-">B-</option>
       <option value="A-">A-</option>
       <option value="AB+">AB+</option>
       <option value="0-">O-</option>
      </select>
     </td>
   </tr>
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="977">977</option>
      <option value="978">978</option>
      <option value="979">979</option>
      <option value="973">973</option>
      <option value="972">972</option>
      <option value="974">974</option>
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>