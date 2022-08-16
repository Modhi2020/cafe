<!DOCTYPE html>
<?php
include_once("conn.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>الملف الشخصي</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="boot/style.css"/>
    <link rel="stylesheet" href="assets/style.css"/>

  
</head>
<body>
    

<?php
include("header.php");
?>
    

<hr id="hrfooter" color="#53a16e">
  
<?php
    
    // Initialize the session
//session_start();
$login_id = "";
    $us_name = "";
if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
   
    $login_id = $_SESSION["user_id"];
    $us_name = $_SESSION["user_name"];
    // header("location: login.php");
    //exit;
}
    ?>      
    
    
<?php 

//$sel = "SELECT * FROM user where user_id = $login_id ";
$sel = "SELECT * FROM users where user_id = ".$login_id  ;
// $sel = "SELECT * FROM users" ;
$r = mysqli_query($conn,$sel) or die (mysqli_error()); 


?>	


    
    
    
<br>
													

    
    

<?php 

 $row = mysqli_fetch_array($r);
               	
?>    
    
    

    
    
     <center>
	 
	 <div class="container-fluid ">
	 
	 
	 <script>
         
         choose_img() {
         
             <?php show_img(); ?>
             // var result = " <?php show_img(); ?> ";
            //image.src = "1.jpg";
             //document.write(result);
                   //  image.src = this.cells[8].innerHTML;
            // document.getElementById("us_img").innerHTML = 'ghjgjg';
             //'<inpuT  type="file" name="images" id="images"    class="form-control  " />';
         
         }
         
         </script>
	 
	 
      <div class="left_head myforms"><h1>... الملـف الشخصـي ...</h1>
	  <br>
	  
	   </div>
	  
	  
	   
	  
	  <div class="row">
<div class="col-lg-0">
  <form action="" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="myforms">
  </div>
  <div class="row">

  </div>
    
	 </div>

    <br/>
          
          <div class="row ">
	   <div class="col-lg-3 ">
	     </div>
     <div class="form-group ">
	    <div class="col-lg-4 ">


        <center><input type="image"  name="r_image" id="r_image" src="images/bo1.jpg" class=" myforms-img " alt="Cinque Terre"> </center>
       
	
            <script type="text/javascript">
    var image = document.getElementById('r_image');
           // image.src = "images/9.jpg";
         image.src = "<?php echo $row["image"]; ?> ";
    </script>
            
            
	  </div>
	   </div>
              <h1 id="us_img"> </h1>
              <?php 
              function show_img(){
	   echo  '<div class="col-lg-3 myforms ">';
            echo    '<label for="images">'.'تعديل الصورة الشخصية'.'</label>';
            echo ' <inpuT  type="file" name="images" id="images"    class="form-control  " />';
         
               echo '</div> ' ; } ?>
              
        
          
	  <div class="col-lg-3 myforms ">
            <label for="images">تعديل الصورة الشخصية</label>
            <inpuT  type="file" name="images" id="images"    class="form-control  " />
         
               </div>  ; 
	  </div>


          
          
 <br>
    <div class="row">
	<div class="container-fluid ">
	<div class="col-lg-1">
	</div>

	
	 
	
                <div class="col-lg-3 myforms">
						
       
        <div class=" form-group  ">
		    <input type="hidden" name="user_id" id="user_id" value="<?php echo $row["user_id"]; ?>" class="form-control">
			
            <label for="user_name">اسم المستخدم</label> 
            
			<input type="text"  name="user_name" id="user_name" value="<?php echo $row["user_name"]; ?>" class="form-control">
        </div>
							  
							   </div>
	            <div class="col-lg-3 myforms">
						  <div class=" form-group ">
            <label for="user_email">البريد الالكتروني</label>
            <input type="email" name="user_email" id="user_email" value="<?php echo $row["user_email"]; ?>" class="form-control">
			
        </div>
							  </div> 

							 
	
		        
			
			 
			     <div class="col-lg-2">
				  
		   </div>
		   
		   
		</div>
		</div>
			 <br>
			 
			  <div class="row"> 
			  <div class="container-fluid ">
			   <div class="col-lg-1">
			   </div>
			  <div class="col-lg-3">
			   <div class=" form-group myforms">
            <label for="user_password">كلمة المرور</label>
            <input type="password" name="user_password" id="user_password" value="<?php echo $row["user_password"]; ?>" class="form-control">
        </div>
	</div>
	
			  
                <div class="col-lg-3">
				
				 <div class=" form-group myforms">
            <label for="phone">رقم الجـوال </label>
            <input type="text" name="phone" id="phone" value="<?php echo $row["phone"]; ?> " class="form-control">
        </div>
				
			
		  </div>
		 
		     
			     <div class="col-lg-3 myforms">
				 
				
				   
		   </div>
	
		    
		
                
								
								
									
								   <div class="col-lg-2">
	</div>
								   
								
								</div>	
								</div>
		 
		  <br>
	
		  
																  
		   
		   <div class="row">
       <div class="container-fluid cat">
<form action="" method="post" accept-charset="UTF-8" class="part2">
										
										 <button type="submit"  name="log_upd">تعديل</button>
										   <button type="reset" name="log_exs">إلغاء</button>
										      
																										 
															    </div>
																  </div>
		   
		  
	 </form>	  
	
	  
	  
	  
	  
	  
	  
	  
     </form>
    </center>
    </div> 


	
<?php
$user_id = "";
$user_name = "";
$user_password = "";
$user_email = "";
$user_alt_email = "";
$phone = "";
$user_state = "";
$sqls = "";
$q  = "";


if ( isset($_POST['login_id'])){
$login_id = $_POST['login_id'];
}    
    
if ( isset($_POST['user_id'])){
$user_id = $_POST['user_id'];
}
if ( isset($_POST['user_name'])){
$user_name = $_POST['user_name'];
}
if ( isset($_POST['user_email'])){
$user_email = $_POST['user_email'];
}
if ( isset($_POST['user_password'])){
$user_password = $_POST['user_password'];
}
if ( isset($_POST['phone'])){
$phone = $_POST['phone'];
}
if ( isset($_POST['user_state'])){
$user_state = $_POST['user_state'];
}
/*
$c_id = "select * from category ";
 $qq = mysqli_query($conn,$c_id);
echo mysqli_fetch_array($qq)[0]."<br>";
*/

    

if($_SERVER['REQUEST_METHOD']=="POST") {
        
        $my_imgs =   $_FILES['images'];  
                
        
    }    
    
    
    
    
    



if ( isset($_POST['log_upd'])){
    
    if ( $my_imgs['name'] != "" ){
    
$dest = "images/profile";
$name = $my_imgs['name'];
$mimg = "$dest/$name";
//copy( $my_file['tmp_name'] , $my_file['name'] );
//copy( $my_imgs['tmp_name'] , $my_imgs['name'] );
move_uploaded_file($my_imgs['tmp_name'] ,"$dest/$name" );
    
        
$sqls = "update users set user_name = '$user_name',user_email = '$user_email',user_password = '$user_password', phone = $phone , image = '$mimg'  where user_id = $user_id";
 $q = mysqli_query($conn,$sqls) or die (mysqli_error());
    }
    
    else{
        $sqls = "update users set user_name = '$user_name',user_email = '$user_email', user_password = '$user_password', phone = $phone   where user_id = $user_id";
    $q = mysqli_query($conn,$sqls) or die (mysqli_error());
        
    }
    
    
    

// header("location: category.php");
if ($q){
   
echo("تم التعديل بنجــاح");

    echo "<script type='text/javascript'>
            (function(){
                        if( window.localStorage ){
                            if( !localStorage.getItem('firstLoad') ){
                                localStorage['firstLoad'] = true;
                                window.location.reload();
                            }  
                        else
                            localStorage.removeItem('firstLoad');
                        }
                    })();
        </script>";

                }



}



?>

    </center>
    </div>



<br>
													

</center>

<br>

	
	<script src="boot/jquery.js">
  </script>
   <script src="boot/javascript.js">
  </script>
	
	
	
	
    <?php
include("footer.php");
?>


</body>
</html>