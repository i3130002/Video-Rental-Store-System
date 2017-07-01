<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<header class="ccheader">
    <h1>فرم افزودن محصول</h1>
</header>
<div class="wrapper">
    <form method="post" action="add_p.php" class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-sun-o fa-2x "></i></span>
        <input class="ccformfield" name="name" type="text" placeholder="نام محصول" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-sun-o fa-2x "></i></span>
        <input class="ccformfield" name='type' type="text" placeholder="نوع" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-sun-o fa-2x "></i></span>
        <input class="ccformfield" name='number' type="text" placeholder="تعداد">
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-sun-o fa-2x "></i></span>
        <input class="ccformfield" name='id' type="int" placeholder="شماره">
    </div>

    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" value="ثبت">
    </div>
    </form>
</div>
<div class="credit">
<p>پس از وارد کردن مشخصات دکمه ثبت را بزنید</p>

</div>
