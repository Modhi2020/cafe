<!DOCTYPE html>
<?php
include_once("conn.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>التسجيل</title>
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
     
     <center>
	 
	 <div class="container-fluid ">
	 
	 
	 
	 
      <div class="left_head myforms"><h1>... التسجـــــــــــــــــيل ...</h1>
	  <br>
	  <h2>الرجاء ادخال المعلومات التالية</h2>
	   </div>
	  
	  
	  
	  
	  <div class="row">
<div class="col-lg-0">
  <form action="#" method="post" accept-charset="UTF-8" class="myforms">
  </div>
  <div class="row">

  </div>
    
	 </div>

    <br/>
 <br>
    <div class="row">
	<div class="container-fluid ">
	<div class="col-lg-3">
	</div>

	
	 
	
                <div class="col-lg-3 myforms">
						
       
        <div class=" form-group  ">
		    <input type="hidden" name="r_id" id="r_id" class="form-control">
			
             
            
            <label for="user_name">الاسم الثلاثي</label> 
            <div class="tooltipp">
            
			<input type="text"  name="user_name" id="user_name"  class="form-control">
<span class="tooltiptextt" >من فضلك أدخل إسمك الثلاثي</span>

</div>	
        </div>
							  
							   </div>
	            <div class="col-lg-3 myforms">
						  <div class=" form-group ">
            <label for="user_email">البريد الالكتروني</label>
                              
                              <div class="tooltipp">
            <input type="email" name="user_email" id="user_email"  class="form-control">
                                  
           <span class="tooltiptextt" >مثال:- Cafe@gmail.com</span>

</div>	
			
        </div>
							  </div> 
		
			
		        
			
			 
			     <div class="col-lg-2">
				 

				  
		   </div>
		   
		   
		</div>
		</div>
			 <br>
			 
			  <div class="row"> 
			  <div class="container-fluid ">
			   <div class="col-lg-3">
			   </div>
			
                <div class="col-lg-3">
				    <div class=" form-group myforms">
                        <label for="phone"> الجوال </label>
                            <div class="tooltipp">  
                                <input type="text" name="phone" id="phone" class="form-control">
                                     <span class="tooltiptextt" >يجب أن يحتوي على أرقام فقط..! </span>
                            </div>	
                    </div>
				</div>
                <div class="col-lg-3">
			   <div class=" form-group myforms">
                  <label for="user_password">كلمة المرور</label>
                   
                    <div class="tooltipp">
                       <input type="password" name="user_password" id="user_password" class="form-control">          
                        <span class="tooltiptextt" >يجب أن تحتوي على حروف وأرقام </span>
                    </div>	
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
       <div class="container-fluid">
       <div class="cat">
<form action="" method="post" accept-charset="UTF-8" class="part2">
										 <button type="submit" name="log_add">تسجيل</button>
										   <button type="reset" name="res_exs">إلغاء</button>
										      
</div>
															    </div>
																  </div>
		   
		  
	 </form>	  
	
	  
	  
	  
	  
	  
	  
	  
     </form>
    </center>
    </div> 
    
    			 
	


	
<?php
$r_id = "";
$user_name = "";
$user_password = "";
$user_email = "";
$phone = "";
$user_state = "1";
$sqls = "";
$q  = "";

if ( isset($_POST['r_id'])){
$r_id = $_POST['r_id'];
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

if ( isset($_POST['log_add'])){

 $dest = "images/profile";
        $namedf = "logo2.png";
       $mimg = "$dest/$namedf";
    
$msg = '<font color="#FF0000"><p align="center">هذا الإسـم موجــود من قبل..!</p></fount>';
    
$sqls = "insert into users(user_id,user_name,user_email,user_password,phone,user_type,user_state) values (NULL,'$user_name','$user_email','$user_password',$phone,3,$user_state )";

 $q = mysqli_query($conn,$sqls) or die ($msg);    
 //$q = mysqli_query($conn,$sqls) or die (mysqli_error()); 
 //header("location: category.php");


if ($q){
echo ($user_name ." لقد تم تسجيلك بنجاح نتمنى لك وقتا ممتعاً ");
  
  
echo '<a class="nav-link"  href="index.php">'. 'إضغط هنا للانتقال إلى الصفحة الرىيسية' .'</a>';  
 
    
}

else{
echo mysqli_error($conn);

    
} 
}



?>
    </center>
    </div>




<br>
													


	
	
	
	
    <?php
include("footer.php");
?>


</body>

  
  <script src="boot/jquery.js">
  </script>
   <script src="boot/javascript.js">
  </script>
</html>