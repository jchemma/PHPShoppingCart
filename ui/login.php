<?php
include ('menu.php');
require "../util/usernull.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="../controller/Login.php" method="get">
    <label>Username:<input type="text" name="username"></label><br>
    <label>Password:<input type="password" name="password"></label><br>
    <input type="submit" value="Register" name="register">
</form>
</body>
</html>
