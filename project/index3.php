<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min2.css">
    <link rel="stylesheet" href="css/style.css">
    <title>MASAN software</title>
    <style>
        bod{
            background-image:url('image/bg_1.jpg');
            background-size:100%;
        }
        a{
            justify-content:right;
        }
        nav#nav{
            background-color: yellowgreen;
            background-position-y: fixed;
            text-align: center;
        }
        section#sec{
            background-color: turquoise;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#nav-scroll">
    <!--nav-->
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="nav" style="direction: rtl;">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="image/logo3.png" width="50" height="50" alt="">
                <h3 class="d-inline align-middle">MASAN software</h3>
            </a>
            <div class="row">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link" href="index2.php">صفحه اصلی</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index2.php">در باره ما</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index2.php">نظرات</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index2.php">تماس با ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.php">انتقادات</a>
                      </li>
                    <li class="nav-item">
                <a href="loginform.php" class="nav-link">فورم وارد شدن</a>
              </li>
                  </ul>
            </div>
        </div>
    </nav>

<!--bgshow-->

<section class="section" id="sec">
    <div class="contianer">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="mt-5 pt-5 display-4 f-800 text-center">فورم وارد شدن</h2>
                <p class="lead">نظرات و انتقادات شما راه گشای ما است چه نقاظ قوت مارا یاد آری کنید و چه نقاط ضعف مارا گوشزد کنید بنا بر این از شما عزیزان صمیمانه تقاضا به عمل می آوریم که در صورت داشتن انتقاد و نظر انرا لطف نموده برای ما ارسال کنید تا در زمینه خدمت بی نقضی برای شما عزیزان ارایه کنیم </p>
            </div>
        </div>
    </div>
</section>

<!--form-->

<section class="section" style="direction: rtl;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h3 class="f-800" >فورم ارسال انتقادات</h3>
                <p class="lead">شما میتوانید با فورم زیر انثادات خود را ارسال کنید</p>
                <form>
                    <div class="input-group input-group-lg mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fas fa-user"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control" placeholder="نام">
                      </div>
                      <div class="input-group input-group-lg mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control" placeholder="ایمیل">
                      </div>
                      <div class="input-group input-group-lg mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="fas fa-pen"></i>
                          </span>
                        </div>
                        <textarea class="form-control" placeholder="پیام خود را وارد کنید" rows="4"></textarea>
                      </div>
                      <input type="submit" value="ارسال" class="btn btn-primary btn-lg btn-block f-800">
                </form>
            </div>
        </div>
    </div>
</section>

</body>
</html>