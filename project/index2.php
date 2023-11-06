<?php
session_start();

?>


<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IF=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min2.css">
        <link rel="stylesheet" href="css/style.css">
        <title>MASAN software</title>
    </head>
    <body id="home" data-spy="scroll" data-target="#nav-scroll">
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="nav-scroll" style="direction: rtl;">
        <?php  echo md5("admin")  ?>
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="image/logo3.png" width="50" height="50" alt="">
            <h3 class="d-inline align-middle">MASAN software</h3>
        </a>
        <button class="navbar-toggler" data--toggle="collapse" data-target="#navbarfivewant-softcollapase">
        <span class="navbar-coggler-icon" ></span>   
        </button>
        <div id="navbarfivewant-softcollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto f-800">
              <li class="nav-item">
                  <a href="index2.php" class="nav-link">صفحه اصلی</a>
              </li>
              <li class="nav-item">
                <a href="#home" class="nav-link">در باره ما</a> 
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link">نظرات</a>
              </li>
              <li class="nav-item">
                <a href="#comments" class="nav-link">تماس با ما</a>
              </li>
              <li class="nav-item">
                <a href="index3.php" class="nav-link">انتقادات</a>
              </li>
              
              <?php
              if(!isset($_SESSION["login"])){
              ?>
               <li class="nav-item">
                <a href="loginform.php" class="nav-link">فورم وارد شدن</a>
              </li>
              <?php
              }
              else{
              ?>
               <li class="nav-item">
                <a href="student_list.php" class="nav-link">لست شاگردان</a>
              </li>
               <li class="nav-item">
                <a href="controler/logout.php" class="nav-link">خارج شدن</a>
              </li>
              <?php
              }
              ?>
              
              
          </ul>
        </div>
    </div>
    </nav>
    <!--bgshow-->
    <section id="bgshow" class="py-5">
      <div class="bgshow-main text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center">
              <h1 class="mt-5 pt-5 display-4 f-800">(MASAN)شرکت سافتویر </h1>
              <P class="lead">شرکت سافتویر سازی ماسان افتخار دارد تا برای هموطنان عزیز ما خدمت کند</P>
              <a href="" class="btn btn-outline-primary btn-lg text-white">
                اطلاعات بیشتر<icon class="fas fa-arrow-left"></icon>
              </a>
            </div>
            <div class="col-lg-6">
              <img src="image/um.jpg" class="img-fluid d-none d-lg-block" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
   <!--subscribe-->
   <section class="bg-light text-white py-5" style="direction:rtl;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="نام را وارد کنید">
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="امیل را وارد کنید">
        </div>
        <div class="col-md-2">
          <button class="btn btn-primary btn-block f-800">تایید کن</button>
        </div>
      </div>
    </div>
   </section>
   <!--boxes-->
   <section class="py-5">
     <div class="container">
       <div class="row">
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white">
            <div class="card-body">
              <i class="fas fa-cogs text-white mb-2 fontboxicon"></i>
              <p>شرکت سافتویر ماسان یک شرکت سهامی خاص میباشد که به تازگی کار خود را آغاز کرده و هدف تولید سافتویر برای مبایل کمپیوتر را دارد</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-primary">
            <div class="card-body">
              <i class="fas fa-car text-primary mb-2 fontboxicon"></i>
              <p class="text-muted">شرکت سافتویر ماسان یک شرکت سهامی خاص میباشد که به تازگی کار خود را آغاز کرده و هدف تولید سافتویر برای مبایل کمپیوتر را دارد</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white">
            <div class="card-body">
              <i class="fas fa-shopping-cart text-white mb-2 fontboxicon"></i>
              <p>شرکت سافتویر ماسان یک شرکت سهامی خاص میباشد که به تازگی کار خود را آغاز کرده و هدف تولید سافتویر برای مبایل کمپیوتر را دارد</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-primary">
            <div class="card-body">
              <i class="fas fa-users text-primary mb-2 fontboxicon"></i>
              <p class="text-muted">شرکت سافتویر ماسان یک شرکت سهامی خاص میباشد که به تازگی کار خود را آغاز کرده و هدف تولید سافتویر برای مبایل کمپیوتر را دارد</p>
            </div>
          </div>
        </div>
       </div>
     </div>
   </section>
   <!--about-->
   <section id="about" class="py-5 bg-light text-center" style="direction:rtl;">
     <div class="container">
       <div class="row">
         <div class="col">
           <div class="mb-4">
             <h2 class="pb-3 f-800">موقعت نمایدگی های شرکت ماسان کجاست؟</h2>
             <p class="lead pb-3">شرکت ماسان قرار است که نمایندگی های خویش را در سراسر کابل اعمار کند</p>
           </div>




           <!--q/a-->

           <div id="accordion">
            <div class="card bg-dark text-light mb-2">
              <div class="card-header">
                <h4 class="mb-0">
                  <div href="#question-1" data--toggle="collapse" data-parent="#accordion">
                    <i class="fas fa-question-circle"></i>
                  چرا ماسان را انتخاب کنیم؟
                  </div>
                </h4>
              </div>
              <div class="collapse show" id="question-1">
                <div class="card-body">
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                </div>
              </div>
            </div>

            <div class="card bg-dark text-light mb-2">
              <div class="card-header">
                <h4 class="mb-0">
                  <div href="#question-2" data--toggle="collapse" data-parent="#accordion">
                    <i class="fas fa-question-circle"></i>
                  دفتر مرکزی ماسان کجا است؟
                  </div>
                </h4>
              </div>
              <div class="collapse show" id="question-2">
                <div class="card-body">
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                </div>
              </div>
            </div>

            <div class="card bg-dark text-light mb-2">
              <div class="card-header">
                <h4 class="mb-0">
                  <div href="#question-3" data--toggle="collapse" data-parent="#accordion">
                    <i class="fas fa-question-circle"></i>
                  چرا آیا در نمایندگی دارین؟
                  </div>
                </h4>
              </div>
              <div class="collapse show" id="question-3">
                <div class="card-body">
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                  شرکت ماسان یک شرکت پیشرفته و دارای کادر های مجرب میباشد
                </div>
              </div>
            </div>
           </div>
                      
         </div>
       </div>
     </div>

   </section>

   <!--comments-->

   <section id="comments" class="my-5 text-center">
     <div class="contianer">
       <div class="row">
         <div class="col">
          <h2 class="pb-3 f-800">نظرات مشتریان</h2>
          <p class="lead pb-3 mb-5">نظرات برخی از مشتریان که با شرکت ماسان همکاری میکنند</p>
         </div>
       </div>
       <div class="row">
         <div class="col-lg-3 col-md-6">
           <div class="card">
             <div class="card-body">
               <img src="image/1.jpg" class="img-fluid rouded-circle w-50 mb-2" alt="">
               <h3>اسدالله مرادی</h3>
               <h5 class="text-muted">شرکت گوگل</h5>
               <p>من کار شمارا ستایش میکنم و میخواهم همکاری های لازم را جهت پیرشت هرچی بیشتر شرکت تان انجام بدم</p>
               <div class="d-flex justify-content-center">
                 <div class="p-3">
                   <a href="https://instagram"><i class="fab fa-instagram"></i></a>
                 </div>
                 <div class="p-3">
                  <a href="https://twitter"><i class="fab fa-twitter"></i></a>
                 </div>
                 <div class="p-3">
                  <a href="https://masan.af"><i class="fas fa-globe"></i></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="image/2.jpg" class="img-fluid rouded-circle w-50 mb-2" alt="">
              <h3>مراد مرادی</h3>
              <h5 class="text-muted">شرکت مایکروسافت</h5>
              <p>من کار شمارا ستایش میکنم و میخواهم همکاری های لازم را جهت پیرشت هرچی بیشتر شرکت تان انجام بدم</p>
              <div class="d-flex justify-content-center">
                <div class="p-3">
                  <a href="https://instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="p-3">
                 <a href="https://twitter"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="p-3">
                 <a href="https://masan.af"><i class="fas fa-globe"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="image/2.jpg" class="img-fluid rouded-circle w-50 mb-2" alt="">
              <h3>محمد امین رضایی</h3>
              <h5 class="text-muted">شرکت سسکو</h5>
              <p>من کار شمارا ستایش میکنم و میخواهم همکاری های لازم را جهت پیرشت هرچی بیشتر شرکت تان انجام بدم</p>
              <div class="d-flex justify-content-center">
                <div class="p-3">
                  <a href="https://instagram"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="p-3">
                 <a href="https://twitter"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="p-3">
                 <a href="https://masan.af"><i class="fas fa-globe"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
       <div class="col-lg-3 col-md-6">
           <div class="card">
             <div class="card-body">
               <img src="image/3.jpg" class="img-fluid rouded-circle w-50 mb-2" alt="">
               <h3>نورالله محمدی</h3>
               <h5 class="text-muted">(iom)شرکت شخصی </h5>
               <p>من کار شمارا ستایش میکنم و میخواهم همکاری های لازم را جهت پیرشت هرچی بیشتر شرکت تان انجام بدم</p>
               <div class="d-flex justify-content-center">
                 <div class="p-3">
                   <a href="https://instagram"><i class="fab fa-instagram"></i></a>
                 </div>
                 <div class="p-3">
                  <a href="https://twitter"><i class="fab fa-twitter"></i></a>
                 </div>
                 <div class="p-3">
                  <a href="https://masan.af"><i class="fas fa-globe"></i></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
        
       </div>
     </div>
   </section>


   <!--contact-->


   <section id="contact" class="bg-light py-5" style="direction: rtl;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h3 class="f-800">فورم تماس با ما</h3>
          <p class="lead">شما میتوانید با فرم زیر با شرکت سافتویر ماسان تماس حاصل فرمایید</p>
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
        <div class="col-lg-2 align-self-center">
          <img src="image/logo3.png" class="img-fluid">
        </div>
      </div>
    </div>

   </section>


   <!--footer-->

   <footer class="bg-primary text-white p-2">
     <div class="container">
       <div class="row text-center">
         <div class="col-12">
           <p>
           اولویت ما رضایت شما عزیزان است
           </p>
         </div>
       </div>
     </div>
   </footer>

   <!--jquery and j5 bundle w/popper.js-->
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.5.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>


   <script>
     $('body').scrollspy({target:'#nav-scroll'});
     $("#nav-scroll a").on('click',function(e){
       if(this.hash !===""){
         e.preventdefault();
         const hash = this.hash;
         $('html,body').animate,({
           scrolltop:$(hash).offset().top
         },900,function(){
           window.location.hash=hash;
         })
       }
     })
   </script>





   
    </body>
</html>