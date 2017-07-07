<?php
require_once ("../../../Config.php");

$resultt=$dbh->prepare('SELECT COUNT(number) FROM rental WHERE id_p= :id');
$resultt->execute(array(':id' =>$_POST['id']));
$numberr=$resultt->fetch();

$result=$dbh->prepare('SELECT number FROM product WHERE name = :name and id= :id');
$result->execute(array(':id' =>$_POST['id'], ':name' => $_POST['name']));
$number=$result->fetch();
$number[0] -= $numberr[0];

$stmt=$dbh->prepare('SELECT type FROM product WHERE name = :name and id= :id');
$stmt->execute(array(':id' =>$_POST['id'], ':name' => $_POST['name']));
$type=$stmt->fetch();


//    echo "<table  ><tr><th>ID</th><th>Name</th><th>number</th><th>type</th></tr>";
//    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
//        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["number"]."</td><td>".$row["type"]."</td></tr>";
//    }
//    echo "</table>";

?>


<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>مشخصات و تعداد موجودی محصول</h1>
</header>
<div class="wrapper">
     <div  class="ccform">

	<div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <input class="ccformfield" name='id' type="text" value="<?php echo $_POST['id']; ?>">
        </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-product-hunt fa-2x"></i></span>
        <input class="ccformfield" name="name" type="text" value="<?php echo $_POST['name']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-file-o fa-2x"></i></span>
        <input class="ccformfield" name='type' type="text" value="<?php echo $type[0] ; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-sort-numeric-asc fa-2x"></i></span>
        <input class="ccformfield" name='number' type="text" value="<?php echo $number[0] ; ?>" >
    </div>


  </div>  
</div>
<div class="credit">
<p>مشخصات و تعداد موجودی فعلی محصول با موفقیت محاسبه گردید.</p>

</div>


