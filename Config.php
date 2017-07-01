<?php
$users=array("manager"=>array("pass_manager","manager"),"clerk"=>array("pass_clerk","clerk"));


$DB_HOST=(/*hostname*/'localhost');
$DB_USERNAME=/*username*/'root';
$DB_PASSWORD=    /*password*/'';
$DB_NAME=    /*database name*/'rental-store';
$connection=null;


//testing connection
   try {
    $dbh = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USERNAME, $DB_PASSWORD);
    foreach($dbh->query('SELECT * from coustomer') as $row) {
       // print_r($row);
    }
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die("error");
}
?>