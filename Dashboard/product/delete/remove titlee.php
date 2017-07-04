<?php 
//inseting data
require_once ("../../../Config.php");
$stmt = $dbh->prepare('DELETE from product where name = :name');
$stmt->execute(array(':name' => $_POST['name']));


?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>عنوان محصول با موفقیت حذف شد</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name="name" type="text" value="<?php echo $_POST['name']; ?>" >
    </div>
  

    <div class="ccfield-prepend">
        <a class="ccbtn" href="../.." >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">


</div>
