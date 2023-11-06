<?php
session_start();
if(!isset($_SESSION["login"])){  
header("location:loginform.php");   
}
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
                <a href="controler/logout.php" class="nav-link">بیرون شدن</a>
              </li>
              
              
               <li class="nav-item">
                <a href="student_form.php" class="nav-link">فورم ثبت نام</a>
              </li>
              
              
              
              <li class="nav-item">
                <a href="student_list.php" class="nav-link">لست شاگردان</a>
              </li>
          </ul>
        </div>
    </div>
    </nav>
    <!--bgshow-->
   
        
        
        <br>
        <br>
        <br>
        <div>
            
           <?php 
          $id=$_GET["id"];
          $connection=mysqli_connect("localhost","ODBC","","masan_company");
          $select="SELECT * FROM student WHERE id=$id";
         $query=mysqli_query($connection,$select);
          $row=mysqli_fetch_array($query);
            
            
            
          ?>  
            
            
        <h1>EMPLOYEE UPDATE FORM</h1>  
        <form class="form" style="direction:rtl" enctype="multipart/form-data" action="controler/update.php" method="post">
        <table class="table">
            <input type="hidden" name="std_id" value="<?php echo $row[0]; ?>" />
        <tr>
            <td>نام</td>
            <td><input value="<?php echo $row[1]; ?>" type="text" name="name" placeholder="نام" required></td>
        </tr>    
        <tr>
            <td>نام پدر</td>
            <td><input value="<?php echo $row[2]; ?>" type="text" name="fname" placeholder="نام پدر" required></td>
        </tr>    
            <tr>
            <td>جنسیت</td>
            <td>زن<input type="radio" name="gender" value="female"
                            <?php  
                          if($row[3]=="female"){
                           echo "checked";
                           } 
                           ?>
                             />
                مرد<input type="radio" name="gender" value="male"
                           <?php
                          if($row[3]=="male"){
                           echo "checked";
                           }
                          ?>
                           
                           /></td>
        </tr>    
            <tr>
            <td>مبایل</td>
            <td><input value="<?php echo $row[4]; ?>" type="text" name="phone" placeholder="شماره مبایل" required></td>
        </tr>    
            <tr>
            <td>ولایت</td>
                <td>
                <select name="province" required>
                    <option value="<?php echo $row[5]; ?>"><?php echo $row[5]; ?></option>
                     <option value="kabul">کابل</option>
                     <option value="parwan">پروان</option>
                     <option value="logar">لوگر</option>
                     <option value="takhar">تخار</option>
                     <option value="kapisa">کاپیسا</option>
                     <option value="mazar">مزار</option>
                     <option value="heara">هرات</option>
                </select>
                </td>
        </tr>    
            <tr>
            <td>تذکره</td>
            <td><input value="<?php echo $row[6]; ?>" type="text" name="tazkira" placeholder="نمبر تذکره" required></td>
        </tr>    
            <tr>
            <td>عکس</td>
               
            <td>
                 <img src="pictures/<?php echo $row[7]; ?>" width="60px"></img>
                <input value="<?php echo $row[7]; ?>" type="file" placeholder="عکس" name="std_photo">
           </td>
        </tr>    
            <tr>
            <td>آدرس</td>
            <td><input value="<?php echo $row[8]; ?>" type="text" name="address" required placeholder="آدرس"></td>
        </tr>    
            <tr>
            <td></td>
            <td><input type="submit" value="update" class="btn btn-primary"></td>
        </tr>	    
            
        
        
        
        
        </table>
        </form>
        </div>
        <br>
        <br>
        <br>
        
        
   
  

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