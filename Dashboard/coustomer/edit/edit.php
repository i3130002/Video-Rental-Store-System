<?php 

require_once ("../../../Config.php");

$result=$dbh->prepare('SELECT * FROM coustomer WHERE name = :name and id= :id');
$result->execute(array(':id' =>$_POST['id'], ':name' => $_POST['name']));

    echo "<table><tr><th>ID</th><th>Name</th><th>Previous address</th><th>Previous phone</th></tr>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["address"]."</td><td>".$row["phone"]."</td></tr>";
    }
    echo "</table>";




$stmt = $dbh->prepare('UPDATE coustomer SET address=:address , phone=:phone WHERE name = :name and id= :id');
$stmt->execute(array(':id' =>$_POST['id'], ':name' => $_POST['name'],':address' => $_POST['address'], ':phone' => $_POST['phone']));
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
        <input class="ccformfield" name='id' type="text" value="<?php echo $_POST['id']; ?>">
    </div>

    <div class="ccfield-prepend">
        <a class="ccbtn" href="../.." >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">

<p>اطلاعات مشتری با موفقیت ویرایش شد.</p>

</div>