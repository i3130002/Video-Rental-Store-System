<?php
require_once "../Config.php";
if ($users [$_REQUEST["username"]][0]==$_REQUEST["password"] ) {
    session_start();
    $_SESSION['username']=$_REQUEST["username"];
    $_SESSION['role']=$users [$_REQUEST["username"]][1];

    echo 'correct';

}
else
    echo "incorrect";
?>