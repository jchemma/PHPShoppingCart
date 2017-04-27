<?php
session_start();
if($_SESSION['username'] == ""){
    $_SESSION['username'] = "newuser";
    $_SESSION['id'] = "000000";
}else{

}
/**
 * Created by PhpStorm.
 * User: chemm
 * Date: 4/27/2017
 * Time: 12:03 PM
 */