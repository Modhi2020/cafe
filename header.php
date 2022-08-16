<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>كيف يعمل؟</title>
  <link href="css/how.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <link rel="stylesheet" href="boot/style.css"/>


</head>

<body>
    

<?php
    
    // Initialize the session
session_start();
$login_id = "";
    $us_name = "";
if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
   
    $login_id = $_SESSION["user_id"];
    $us_name = $_SESSION["user_name"];
    // header("location: login.php");
    //exit;
}
    ?>    
    

<header class ="bgim" >
<div id="logo"> <a href="index.php"><img src="images/logo.jpg" class="img-circle myimg_show" alt="الصفحة الرئيسية"> </a></div>
<br> <br>
<div class="right-head"><h1>على كيفك</h1> </div>
<div class="right-head"><h2>أول ما تحتاجه لتبدأ يومك </h2> </div>
</header >




<nav class="navbar navbar-expand-lg navbar-dark my_nav">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
      </li>


      
       
        
         
            <?php 
        
        if(!isset($_SESSION["user_id"]) || !isset($_SESSION["user_name"]) ){
                 echo '<li class="nav-item dropdown">';
                 echo ' <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  التسجيل</a>';
                 echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                 echo ' <a class="dropdown-item" href="register.php">التسجيل</a>' ;   
                 echo '<a class="dropdown-item" href="login.php">تسجيل الدخول</a>';
                 echo ' </div>'.' </li>';
  
        }
            ?>
          
       
     

	  
        
        
            
             <?php 
        
        if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
                echo ' <li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                الخدمـات
                 </a>';
                        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                        echo ' <a class="dropdown-item" href="category.php">التصنيــف</a>';
                        echo '<a class="dropdown-item" href="services.php">إضافة خدمة</a>';
                        echo '<a class="dropdown-item" href="ser_manager.php">إدارة الخدمات</a>'; 
                        echo '  </div>'.'  </li>';
        }
            ?>
            
          
		  
		 
		  
          
	
      
    

	   
        
        
            <?php 
        
        if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
            
             echo '<li class="nav-item dropdown">';
             echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            الملف الشخصي
            </a>';
            echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
            echo '<a class="dropdown-item" href="profile.php">الملف الشخصي</a>';
            echo ' </div>'.'</li>';
          
             }
            ?>
		
    <?php 
        
        if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
          echo '<li class="nav- item ">';
          echo '<a class="nav-link" href="carts.php">السلــة </a></li>';

    }
    ?>


      <li class="nav-item">
        <a class="nav-link" href="who.php">من نحن</a>
      </li>

    </ul>
  </div>

   <ul class="navbar-nav navbar-right">

   <li class="nav-item">
        <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"> </span><?php echo $us_name ?></a>
   </li>

   <li class="nav-item">
       <?php 
        
        if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
        echo '<a class="nav-link" href="logout.php">تسجيل خروج</a>';
  
        }
            ?>
       </li>
	 </ul>

</nav>
</body>
    
   
    <script src="boot/jquery-3.4.1.min.js">
  </script>
  
<script src="boot/javascript.js">
  </script>
</html>