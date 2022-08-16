<!DOCTYPE html>
<?php
include_once("conn.php");
?>
<html>
<head>
  <meta http-equiv="Content-Type"  content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  
  <title> الخدمــات</title>
  <link href="css/loginstyle.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <link rel="stylesheet" href="boot/style.css"/>

  
</head>
<body>

<?php
include("header.php");
?>
<hr id="hrfooter" color="#53a16e">
 
   

    
    
    
    <center>



<div class="container-fluid">
</br>
  <div class="row ">
  <div class="col-lg-4 ">
		</div>
  <form action="" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="myforms ">
   
&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;
<div class="mmm">
   الخدمــات  	
  
	</div></div>
	<br/>
	<div class="row ">
	   <div class="col-lg-3 ">
	     </div>
     <div class="form-group ">
	    <div class="col-lg-4 ">


        <center><input type="images"  name="r_images" id="r_images" src="imagess/bo1.jpg" class=" myforms-img " alt="Cinque Terre"> </center>
         
	
	  </div>
	   </div>
	    <div class="col-lg-4 ">
		</div>
	  </div>


	    <div class="row">
       <div class="container-fluid">
	   <div class="col-lg-2">
	   </div>

	    <div class="col-lg-1 myforms ">
																
																	                     
                                                                     
																	  <input type="hidden"  name="rr_id" id="rr_id" class="form-control">
																
																 
															
																	
																	  <input type="hidden" name="r_id" id="r_id" class="form-control">
														
																 
																 </div>

			 <div class="col-lg-5 myforms ">
																 <div class="form-group">
																	 <label for="title" >عنوان الخدمة </label>
																	  <input type="text" name="title" id="title" class="form-control">
																 </div>
																 </div>
																 
											
																
									
									 <div class="col-lg-2 ">
		</div>								 
 	 
																		</div>	</div>


																		<div class="row">	
																		<div class="container-fluid">
																		<div class="col-lg-3 ">
		</div>	

																		<div class="col-lg-5  myforms">
																	<div class="form-group">
																	   <label for="details">تفاصيل الخدمة </label>
																	   <textarea class="form-control" id="details" name="details" rows="4"></textarea>
																	</div>
																	</div>					
</div>										
</div>

<div class="row">
<div class="container-fluid">
<div class="col-lg-3 ">
		</div>	
<div class="col-lg-5 myforms">
						
							<div class="form-group">
					
																	   
																	   
																	   
																		<label for="cat_id"> التصنيف</label>
																		<select name="cat_id" id="cat_id" class="form-control">
																		
																		<?php 													
			$sel_res = "SELECT cat_id,cat_name FROM category ";
            //$sel_res = "SELECT id,title FROM services where res_state in(2,3)";
			$ree = mysqli_query($conn,$sel_res) or die (mysqli_error()); 
			while( $row = mysqli_fetch_array($ree)):;?>
                                       
			<option  value="<?php echo $row["cat_id"];?>"> 
			<?php  echo $row["cat_name"];?></option>
			<?php endwhile; ?>
                                      
		   </select>								
																			
																				
</div>													
																	   </div>
																	 </div>	
</div>
</div>
																		
								 <div class="row">	

       <div class="container-fluid myforms">

							 <div class="col-lg-1 ">
		</div>
							<div class="col-lg-2  myforms">
																	<div class="form-group">  																	
																	 
																 
																	</div>
																	</div>
                     
							
																			 
				      <div class="col-lg-5  myforms">
																	<div class="form-group">
																	   <label for="price">السعـر </label>
																	   <input type="number" name="price" id="price" class="form-control">
																	</div>
																	</div>		
							
							
							<div class="col-lg-3 myforms">										  
																
																	   </div>
				
													
	
	  
	    							  
																	  </div>
										
						</div>
									
        
        <div class="row">
           						
            <div class="col-lg-3 "></div>
           
     
          
            <div class="col-lg-5 myforms ">
			<div class="container-fluid">
                <label for="images">إختار الصورة</label>
            <inpuT  type="file" name="images" id="images"    class="form-control  " />
         
                 </div> 
            
               
                 
            
            <div class="col-lg-2 "></div>
      
        </div>    
</div>
						  <br/>
			<div class="row">
       <div class="container-fluid">
<form action="" method="post" accept-charset="UTF-8" class="part2">
<div class="cat">
    
										 <button type="submit" name="res_add">إضـافة</button>
										 
</div>
																										 
															    </div>
																  </div>
															<p>
															&nbsp;&nbsp;
															</p>		   
															  </form>
															<!-- #Header Starts -->
</form>
															
    </center>
    
    	
	
	
	<?php
$r_id = "";
$title = "";
$cat_id = "";
$price = "";
$r_datef = "";
$r_datet = "";
$r_owner = "";
$details = "";
$my_imgs = "";
$sqls = "";
$q = "";
  

if ( isset($_POST['r_id'])){
$r_id = $_POST['r_id'];
}
if ( isset($_POST['title'])){

$title = $_POST['title'];
}
if ( isset($_POST['cat_id'])){
$cat_id = $_POST['cat_id'];
}
if ( isset($_POST['price'])){
$price = $_POST['price'];
}
if ( isset($_POST['details'])){
$details = $_POST['details'];
}

/*
$c_id = "select * from category ";
 $qq = mysqli_query($conn,$c_id);
echo mysqli_fetch_array($qq)[0]."<br>";
*/
    
    
 if($_SERVER['REQUEST_METHOD']=="POST") {
        
        $my_imgs =   $_FILES['images'];  
        //echo $my_file['name']."<br>";
        //echo $my_file['type']."<br>";
        //echo $my_file['tmp_name']."<br>";
        //echo $my_file['error']."<br>";
        //echo $my_file['size']."<br>";
        
        //copy( $my_file['tmp_name'] , $my_file['name'] );
        //$mf = $my_file['name'];
        //$mimg = $my_imgs['name'];
        
        
    }    
    
    
if ( isset($_POST['res_add']) ){

    if ( $my_imgs['name'] != "" ){
    
$dest = "images/upload";
$name = $my_imgs['name'];
$mimg = "$dest/$name";
//copy( $my_file['tmp_name'] , $my_file['name'] );
//copy( $my_imgs['tmp_name'] , $my_imgs['name'] );
move_uploaded_file($my_imgs['tmp_name'] ,"$dest/$name" ) ;}
    else{
        $dest = "images/upload";
        $namedf = "logo2.png";
       $mimg = "$dest/$namedf";
    }

	$sqls = "INSERT INTO `services` (`id`, `title`, `details`, `cat_id`, `price`, `image`) VALUES (NULL, '$title', '$details', '$cat_id', '$price', '$mimg')";

 $q = mysqli_query($conn,$sqls);


if ($q){
echo("تم الإضـافة بنجاح");
}
else{
echo mysqli_error($conn);
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