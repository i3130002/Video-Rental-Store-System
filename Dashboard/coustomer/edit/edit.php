<?php 

require_once ("../../../Config.php");
$stmt = $dbh->prepare('UPDATE coustomer SET address=:address , phone=:phone WHERE name = :name');
$stmt->execute(array(':name' => $_POST['name'],':address' => $_POST['address'], ':phone' => $_POST['phone']));


//getting inserted id
$stmt = $dbh->prepare('select id from coustomer where name=:name and address=:address and phone=:phone');
$stmt->execute(array(':name' => $_POST['name'],':address' => $_POST['address'], ':phone' => $_POST['phone']));
$id=$stmt->fetch();

?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>ویرایش مشتری</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name="name" type="text" value="<?php echo $_POST['name']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" name='address' type="text" value="<?php echo $_POST['address']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" name='phone' type="text" value="<?php echo $_POST['phone']; ?>">
    </div>
	<div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-id-card fa-2x"></i></span>
        <input class="ccformfield" name='id' type="text" value="<?php echo $id[0]; ?>">
    </div>

    <div class="ccfield-prepend">
        <a class="ccbtn" href="../.." >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">
<p>اطلاعات مشتری با موفقیت ویرایش شد.</p>

</div>