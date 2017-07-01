<?php 
//todo security check
//todo incomming data check

//inseting data
require_once ("../../../Config.php");
$stmt = $dbh->prepare('DELETE from coustomer where name = :name');
$stmt->execute(array(':name' => $_POST['name']));


?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
   <h1>حذف مشتری</h1>
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
<p>مشتری حذف شد</p>

</div>
