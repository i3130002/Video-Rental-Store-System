<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>فرم در خواست اجاره</h1>
</header>
<div class="wrapper">
    <form method="post" action="add_r.php" class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" name="id_c" type="int" placeholder="شماره عضویت" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-square fa-2x"></i></span>
        <input class="ccformfield" name='id_p' type="int" placeholder="شماره محصول" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-clock-o fa-2x"></i></span>
        <input class="ccformfield" name='date_s' type="text" placeholder="تاریخ شروع اجاره">
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-clock-o fa-2x"></i></span>
        <input class="ccformfield" name='date_e' type="text" placeholder="تاریخ بازگشت">
    </div>

    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" value="ثبت">
    </div>
    </form>
</div>
<div class="credit">
<p>پس از تکمیل فرم دکمه ثبت را بزنید</p>

</div>
