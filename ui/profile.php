<?php
include ('menu.php');
/**
 * Created by PhpStorm.
 * User: chemm
 * Date: 4/27/2017
 * Time: 10:24 AM
 */
?>
<?php require "../util/usernull.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
<h1>Profile</h1>
<label>First Name:
    <?php
        echo $_SESSION['username'];
        echo $_SESSION['id'];
    ?>
</label>
</body>
</html>
