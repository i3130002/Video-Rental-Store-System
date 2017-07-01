<?php 
//todo security check
//todo incomming data check

//inseting data
require_once ("../../../Config.php")
$stmt = $connection->prepare('INSERT INTO coustomer (name, address, phone) VALUES (:name, :address, :phone)');

$stmt->execute(array(':name' => $_POST['name'],':address' => $_POST['address'], ':phone' => $_POST['phone']));

//getting inserted data+id

?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>کارت مشتری</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name="name" type="text" placeholder="نام و نام خانوادگی" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" name='address' type="text" placeholder="آدرس" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" name='phone' type="text" placeholder="تلفن">
    </div>
	<div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-id-card fa-2x"></i></span>
        <input class="ccformfield" name='id' type="text" placeholder="شماره">
    </div>

    <div class="ccfield-prepend">
        <a class="ccbtn" href="../.." >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">
<p>این کارت را میتوانید چاپ کنید</p>

</div>