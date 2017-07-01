<?php
$users=array("manager"=>array("pass_manager","manager"),"clerk"=>array("pass_clerk","clerk"));


$DB_HOST=(/*hostname*/'localhost');
$DB_USERNAME=/*username*/'root';
$DB_PASSWORD=    /*password*/'';
$DB_NAME=    /*database name*/'rental-store';
$connection=null;


//testing connection
    $connection = new mysqli($DB_HOST, $DB_USERNAME,$DB_PASSWORD, $DB_NAME);
    if (mysqli_connect_errno()) {
        $this->HandleDBError("Database connect failed!", mysqli_connect_errno());
         
        //exit();
    }
            if(!$connection)
        {
            
            die("Database connect failed!");
        }
        if(!mysqli_select_db($connection, $DB_NAME))
        {
            
            die('Failed to select database: '.$DB_NAME.' Please make sure that the database name provided is correct');
        }
    if (!mysqli_query( $connection, "SET NAMES 'UTF8'")) {
  
         die('Error setting utf8 encoding set name utf8');
    }
    if (!mysqli_set_charset( $connection, "utf8")) {
        printf("Error loading character set utf8: %s\n", mysqli_error($connection));
        die('');
    }
?>