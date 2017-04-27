<?php
include ('menu.php');

/**
 * Created by PhpStorm.
 * User: chemm
 * Date: 4/27/2017
 * Time: 5:57 AM
 */
?>
<?php require "../util/usernull.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
<h1>Registration</h1>
<form action="../controller/Register.php" method="get">
    <label>Username:<input type="text" name="username"></label><br>
    <label>Password:<input type="password" name="password"></label><br>
    <label>First Name:<input type="text" name="firstname"></label><br>
    <label>Last Name:<input type="text" name="lastname" </label><br>
    <label>Email:<input type="email" name="email"></label><br>
    <input type="submit" value="Register" name="register">
</form>
</body>
</html>
