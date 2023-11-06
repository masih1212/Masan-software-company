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
   
  
  <!--employee list-->
  
  <div class="container">
   <div class="row">
   <div class="col-md-12"> 
    <table class="table">
 <?php echo md5("admin");?>
    <tr>
        <th>name</th>
        <th>fathername</th>
        <th>gender</th>
        <th>phone</th>
        <th>province</th>
        <th>tazkira</th>
        <th>photo</th>
        <th>address</th>
        <th>update</th>
        <th>delete</th>
    </tr>
        
      <?php
    $connection=mysqli_connect("localhost","ODBC","","masan_company");
       $select="SELECT * FROM student";
        $query=mysqli_query($connection,$select);
        while($row=mysqli_fetch_array($query)){
    
       ?>
        
        <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><img src="pictures/<?php echo $row[7]; ?>" width="50px"></img></td>
            <td><?php echo $row[8]; ?></td>
            <td><a href="update_form.php?id=<?php echo $row[0]; ?>" class="btn btn-primary">update</a></td>
            <td><a href="controler/delete.php?id=<?php echo $row[0]; ?>" class="btn btn-danger" onclick="return confirm('are you sure');">delete</a></td>
        
        
        </tr>
        <?php
        };
        ?>
        
    </table>  
</div>
</div>   
  </div>

   <!--footer-->
   <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
   <footer class="bg-primary text-white p-2;">
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