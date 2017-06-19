<?php
$users=array("manager"=>array("pass_manager","manager"),"clerk"=>array("pass_clerk","clerk"));


$DB_HOST=(/*hostname*/'localhost');
$DB_USERNAME=/*username*/'root';
$DB_PASSWORD=    /*password*/'';
$DB_NAME=    /*database name*/'rental-store';

function connectDatabase()
{

    $this->connection = new mysqli($this->db_host, $this->username, $this->pwd, $this->database);
    if (mysqli_connect_errno()) {
        $this->HandleDBError("Database connect failed!", mysqli_connect_errno());
        return false;
        //exit();
    }
    //        if(!$this->connection)
//        {
//            $this->HandleDBError("Database connect failed!");
//            return false;
//        }
//        if(!mysqli_select_db($this->connection, $this->database))
//        {
//            $this->HandleDBError('Failed to select database: '.$this->database.' Please make sure that the database name provided is correct');
//            return false;
//        }
    if (!mysqli_query($this->connection, "SET NAMES 'UTF8'")) {
        $this->HandleDBError('Error setting utf8 encoding', "set name utf8");
        return false;
    }
    if (!mysqli_set_charset($this->connection, "utf8")) {
        printf("Error loading character set utf8: %s\n", mysqli_error($this->connection));
        die('');
    }
//        echo"<br><br>";
//
//        print_r($_REQUEST);
//        foreach($_REQUEST as $r){
//            $r=mysqli_real_escape_string($r);
//        }
//        echo"<br><br>";
//        print_r($_REQUEST);
//        echo"<br><br>";
//
    return true;

}
?>