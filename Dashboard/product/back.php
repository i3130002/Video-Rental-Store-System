<?php 
//todo security check
//back product
//update date
require_once ("../../../../../config.php")
$stmt = $connection->prepare('UPDATE rental  SET (date_e =: date_e) WHERE
id_p=:id_p ');

require_once ("../../../../../config.php")
$stmt = $dbh->prepare('UPDATE rental  SET (date_e =: date_e) WHERE
id_p=:id_p ');
$stmt->execute(array(':id_p' => $_POST['id_p'],':date-e' => $_POST['date-e']));
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


