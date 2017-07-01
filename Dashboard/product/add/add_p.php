<?php 
//todo security check
//todo incomming data check
//inseting data
require_once ("../../../Config.php");
$stmt = $dbh->prepare('INSERT INTO product (name, id, type,number) VALUES (:name, :id, :type, :number)');
$stmt->execute(array(':name' => $_POST['name'],':id' => $_POST['id'], ':type' => $_POST['type'], ':number' => $_POST['number']));


?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>محصول موفق ثبت شد</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
   

    <div class="ccfield-prepend">
        <a class="ccbtn" href="../.." >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">


</div>
