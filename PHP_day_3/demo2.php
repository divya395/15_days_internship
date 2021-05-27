<html>
<body>
    <h1>Form Demo</h1>
    <form action="process.php" method="POST">
    <table>
    <tr>
    <td>Name :</td>
    <td><input type="text" name="txt1" required /></td>
    </tr>
    <tr>
    <td>Age :</td>
    <td><input type="number" name="txt2" required min="1" max="80"/></td>
    </tr>
    <tr>
    <td><input type="submit"/></td>
    <td><input type="reset"/></td>
    </tr>
    </table>
    </form>
</body>
</html>