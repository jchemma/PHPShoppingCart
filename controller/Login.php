<?php
include('../model.User.php');
require '../util/usernull.php';


$sql = "select * from customer where user_name =$username and pass_word $password";
if($GLOBALS[conn]->connect_enero){
    echo "Connection failed";
}