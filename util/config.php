<?php
/**
 * Created by PhpStorm.
 * User: chemm
 * Date: 4/27/2017
 * Time: 5:52 AM
 */

$host = "localhost";
$username = "root";
$password = "Luminis1992";
$db = "shoppingcart";

$GLOBALS['conn'] = mysqli_connect($host,$username,$password,$db);
if($GLOBALS['conn']->connect_errno > 0){
    die("Nope");
}
