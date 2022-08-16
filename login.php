<!DOCTYPE html>
<?php
ob_start();
include_once("conn.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <title>تسجيل الدخول </title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <link rel="stylesheet" href="boot/style.css"/>



  
</head>
<body>
<?php
include("header.php");
?>
    
<?php 
    
    //session_start();

if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){    
    
if ( isset($_POST['user_add'])){
    
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['user_password'] = $_POST['user_password'];
     
    
}}
    
?>    
    
<hr id="hrfooter" color="#53a16e">
    
     <center> 
         <div class="left-head"><h1>..تسجيـــــــل الدخــــــول...</h1>
            </div>
   
         <br>         
         <form action="" method="POST" accept-charset="UTF-8" class="part2">
	
             	
		<div class="row">
		<div class="container-fluid col-lg-3 ">
            <label for="phone">رقم الجـوال  </label>
            <div class="tooltipp">
            <input type="text"  name="phone" id="phone" class="form-control user-man-check ">
                <span class="tooltiptextt" >يجب أن يحتوي على أرقام فقط..! </span>
        </div> </div></div>
             
             
		 <div class="row">
		<div class="container-fluid col-lg-3 ">
            <label for="user_password">كلمة المرور </label>
            <div class="tooltipp">
                
            <input type="password"  name="user_password" id="user_password" class="form-control user-man-check ">
            
            <span class="tooltiptextt" >يجب أن تحتوي على حروف وأرقام </span>
            
        </div></div></div>
	
	 <div class="row">
		<div class="container-fluid col-lg-3 ">
	<div class="cat">
	 <button type="submit" name="user_add">دخــــــول</button>
      
	
	  
</div></div></div>
	</form>
      
        
         <div class="change">
        <center>
        <a href="forget_pass.php">نسيت كلمة المرور ؟</a> <br>
        <a href="login.php">أنشئ حساب</a>
        </center>
        </div>

	
	<?php
         
   
         
$phone = "";
$user_password = "";
$sqls = "";
$q = "";

if ( isset($_POST['phone'])){
$phone = $_POST['phone'];
}  
if ( isset($_POST['user_password'])){
$user_password = $_POST['user_password'];
}         
    
 if($_SERVER['REQUEST_METHOD']=="POST") {
     
if ( isset($_POST['phone']) || isset($_POST['user_password']) ) { 

     
 if ( isset($_POST['user_add']) ){        
         
//$sel = "select * from resource where res_owner = $login_id ";     
 $sql = "select user_id,user_name,phone,user_password,user_state from users 
	where phone = ".$phone." and user_password = ".$user_password ;
 $q = mysqli_query($conn,$sql) or die (mysqli_error()); 
     $row = mysqli_fetch_array($q);
      $us = $row["user_id"]; 
      $uname = $row["user_name"]; 
     $unstate = $row["user_state"]; 

if ($q){
//echo("تم الإضـافة بنجاح");
    if($us != ""){
        if($unstate == 1){
    header("location: index.php");
        $_SESSION['user_id'] = $us;
    $_SESSION['user_name'] = $uname;
     //require("location: index.php");
            ob_end_flush(); 
    }
     else{
         echo '<font color="#FF0000"><p align="center">تم إيقاف حسابك .. يرجى مراجعة الإدارة ..!</p></fount>';
        
    }
    
    }
    else{
        echo '<font color="#FF0000"><p align="center">رقم الجوال أو كلمة المرور غير صحيحة ..!</p></fount>';
    }
}
else{
echo mysqli_error($conn);
}   }      
           
 }   
     else{
         echo '<font color="#FF0000"><p align="center">من فضلك أدخل رقم الجوال وكلمة المرور ..!</p></fount>';
         
         
     }
         }
         ?>
         
         
         
       
<?php
include("footer.php");
?>

</body>
    
	
<script src="boot/jquery-3.4.1.min.js">
  </script>
  
<script src="boot/javascript.js">
  </script>
</html>