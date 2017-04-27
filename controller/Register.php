<?php
include ('../model/User.php');
require '../util/usernull.php';

$sql = "INSERT INTO customer (user_name, pass_word) VALUES (".$firstname.",".$lastname.",".$username.",".$password.",".$email.")";

if($GLOBALS['conn']->query($sql)==TRUE){
    echo "Successfully registered your credentials.";
}else{
    echo "Your credentials were not saved";
}

$GLOBALS['conn']->close();