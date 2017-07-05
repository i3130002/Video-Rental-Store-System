<?php 
//todo security check
//back product
//update date
require_once ("../../config.php")
$stmt = $connection->prepare('UPDATE rental  SET (date_e =: date_e) WHERE
id_p=:id_p ');

require_once ("../../config.php")
$stmt = $dbh->prepare('UPDATE rental  SET (date_e =: date_e) WHERE
id_p=:id_p ');
$stmt->execute(array(':id_p' => $_POST['id_p'],':date-e' => $_POST['date-e']));

  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>اطلاعات ‌بروزرسانی شد</h1>
</header>
<div class="wrapper">
     <div  class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-square fa-2x"></i></span>
        <input class="ccformfield" name="id_p" type="int" value="<?php echo $_POST['id_p']; ?>" >
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-clock-o fa-2x"></i></span>
        <input class="ccformfield" name='date_e' type="text" value="<?php echo $_POST['date_e']; ?>">
    </div>
     <div class="ccfield-prepend">
        <a class="ccbtn" href="../" >داشبورد</a> 
    </div>



