<?php
//SELECTED
require_once ("../../Config.php");
$stmt = $dbh->prepare('SELECT type FROM cost_product WHERE id=:id and name=:name')
$stmt->execute(array(':id' => $_POST['id'], ':name' => $_POST['name']));
$id=$stmt->fetch();;
$result = mysql_query($stmt);
if ($result== "vidio") {
	$stmt = $dbh->prepare('INSERT INTO cost_product (time_rent,cost) VALUES (:time_rent, :cost)')
} elseif($result== "game"){
	$stmt = $dbh->prepare('INSERT INTO cost_product (time_rent,cost) VALUES (:time_rent, :cost)') 
	$stmt->execute(array(':time_rent' => $_POST['time_rent'], ':cost' => $_POST['cost']); 	  	
   }

?>

<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>کارت مشتری</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-id-card fa-2x"></i></span>
        <input class="ccformfield" name="id" type="text" value="<?php echo $id[0]; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name='namea' type="text" value="<?php echo $_POST['name']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-clock-o fa-2x"></i></span>
        <input class="ccformfield" name='time_rent' type="text" value="<?php echo $_POST['time_rent']; ?>">
    </div>
	<div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-id-card fa-2x"></i></span>
        <input class="ccformfield" name='cost' type="text" value="<?php echo $_POST['cost']; ?>">
    </div>
    <div class="ccfield-prepend">
        <a class="ccbtn" href="../.." >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">
<p>تنظیمات انجام شد</p>

</div>
