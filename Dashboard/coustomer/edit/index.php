<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>فرم ویرایش مشتری</h1>
</header>

<div class="wrapper">
    <form method="post" action="edit.php" class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-id-card fa-2x"></i></span>
        <input class="ccformfield" name="id" type="text" placeholder="شماره عضویت مشتری" required>
    </div>
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
        <input class="ccbtn" type="submit" value="ثبت">
    </div>
    </form>
</div>
<div class="credit">
<p>پس از وارد کردن مشخصات جدید مشتری دکمه ثبت را بزنید</p>

</div>