<?php 
//todo security check
//todo incomming data check

//inseting data
require_once ("../../Config.php");
$stmt = $dbh->prepare('INSERT INTO rental (id_p, id_c, date_s,date_e,number) VALUES (:id_p, :id_c, :date_s, :date_e, :number)');
$stmt->execute(array(':id_p' => $_POST['id_p'],':id_c' => $_POST['id_c'], ':date_s' => $_POST['date_s'], ':date_e' => $_POST['date_e'],':number' => $_POST['number']));


?>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>اطلاعات ‌ذخیره شد</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-square fa-2x"></i></span>
        <input class="ccformfield" name="id_p" type="int" value="<?php echo $_POST['id_p']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name='id_c' type="int" value="<?php echo $_POST['id_c']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-clock-o fa-2x"></i></span>
        <input class="ccformfield" name='date_s' type="text" value="<?php echo $_POST['date_s']; ?>">
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-clock-o fa-2x"></i></span>
        <input class="ccformfield" name='date_e' type="text" value="<?php echo $_POST['date_e']; ?>">
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-square fa-2x"></i></span>
        <input class="ccformfield" name='number' type="text" value="<?php echo $_POST['number']; ?>">
    </div>
    <div class="ccfield-prepend">
        <a class="ccbtn" href="../" >داشبورد</a> 
    </div>
  </div>  
</div>
<div class="credit">
<p>رسید را میتوانید چاپ کنید</p>
<p>تاریخ تحویل یک هفته بعد</p>
</div>
