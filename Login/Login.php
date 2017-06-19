<?php
require_once "../Config.php";
if ($users [$_REQUEST["username"]][0]==$_REQUEST["password"] ) {
    echo 'correct';

}
else
    echo "incorrect";
?>