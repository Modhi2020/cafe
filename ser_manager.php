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

  
  <title>إدارة الخدمات</title>
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
 
   
    <?php 
    
    
    ?>
    
    
    
    
    
    <center>



<div class="container-fluid">
</br>
  <div class="row ">
  <div class="col-lg-4 ">
		</div>
  <form action="" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="myforms ">
   
&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;
<div class="mmm">
   إدارة الخدمات	
  
	</div></div>
	<br/>
	<div class="row ">
	   <div class="col-lg-3 ">
	     </div>
     <div class="form-group ">
	    <div class="col-lg-4 ">


        <center><input type="image"  name="r_image" id="r_image" src="images/bo1.jpg" class=" myforms-img " alt="Cinque Terre"> </center>
         
	
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
																 <div class="form-group">
																	                     
                                                                     
																	  <input type="hidden"  name="rr_id" id="rr_id" class="form-control">
																 </div>
																 
																 <div class="form-group">
																	
																	  <input type="hidden" name="r_id" id="r_id" class="form-control">
																 </div>
																 
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
									   <label for="image">إختار الصورة</label>
								   <inpuT  type="file" name="image" id="image"    class="form-control  " />
								
										</div> 
								   
									  
										
								   
								   <div class="col-lg-2 "></div>
							 
							   </div>    
					   </div>
						  <br/>
			<div class="row">
       <div class="container-fluid cat">
<form action="" method="post" accept-charset="UTF-8" class="part2">
    
										 <button type="submit"  name="res_add">إضافــة</button>
										   <button type="submit"  name="res_upd">تعديل</button>
										      <button type="submit" name="res_del" >حــذف</button>
											    <button type="submit" name="res_sel" >إستعــلام</button>
     
																										 
															    </div>
																  </div>
															<p>
															&nbsp;&nbsp;&nbsp;
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
        
        $my_imgs =   $_FILES['image'];  
        
        
    }    
    
    
if ( isset($_POST['res_add']) ){

    if ( $my_imgs['name'] != "" ){
    
$dest = "images/upload";
$name = $my_imgs['name'];
$mimg = "$dest/$name";

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

if ( isset($_POST['res_upd'])){
    
    if ( $my_imgs['name'] != "" ){
    
$dest = "images/upload";
$name = $my_imgs['name'];
$mimg = "$dest/$name";

//copy( $my_imgs['tmp_name'] , $my_imgs['name'] );
move_uploaded_file($my_imgs['tmp_name'] ,"$dest/$name" );
    
        
$sqls = "update services set title ='$title',details = '$details' ,cat_id = $cat_id, price = '$price',
  image = '$mimg' where id = $r_id";
// $sqls = "update services set title ='$title'  where id = $r_id";
 $q = mysqli_query($conn,$sqls) or die (mysqli_error());
        
    }
    
    
  if ( $my_imgs['name'] == "" ){  
$sqls = "update services set title ='$title', cat_id = $cat_id, price = $price,
 details = '$details' where id = $r_id";
// $sqls = "update services set title ='$title'  where id = $r_id";
 $q = mysqli_query($conn,$sqls) or die (mysqli_error());
  }
    
    

if ($q){
echo("تم التعديل بنجــاح");
}
}

if ( isset($_POST['res_del'])){
$sqls = "delete from services where id = $r_id";
 $q = mysqli_query($conn,$sqls) or die (mysqli_error()); 
 //header("location: services.php");
if ($q){
echo("تم الحـــذف بنجـــاح");
}
}



?>
	
<?php 

$sel = "select * from services";
$r = mysqli_query($conn,$sel);

?>	

<br>

<hr id="hrfooter" color="#53a16e">

<?php 


 if ( isset($_POST['res_sel']) || isset($_POST['res_upd']) || isset($_POST['res_del'])){
	
     my_search();
//echo '<div class="row resou">'.'<tr >';
echo '<center>';
echo '<div class=" container-fluid category">';
echo '<table id="res" accept-charset="UTF-8" rules="all" width="100%"  border="2px" >';
echo '<tr >';
echo'<th >'.'رقم الخدمـة '.'</th>';
echo'<th >'.' إســــم الخدمـة '.'</th>';
echo'<th >'.' تفاصيل الخدمـة '.'</th>';
echo'<th >'.' تصنيف المصدر '.'</th>';
echo'<th >'.' سعر الخدمـة  '.'</th>';
echo'<th>'.' الصورة '.'</th>';


   while( $row = mysqli_fetch_array($r))
               {
				
					
					echo '<tr >';
				
					echo '<td >' .$row["id"].'</td>';
					echo '<td  >' .$row["title"].'</td>';
					echo '<td >' .$row["details"].'</td>';
					echo '<td class="thide">' .$row["cat_id"].'</td>';
				
					$sele = "SELECT cat_name FROM category where cat_id =". $row["cat_id"];
				$ut = mysqli_query($conn,$sele) or die (mysqli_error()); 
				$rows = mysqli_fetch_array($ut);
					echo '<td >' .$rows["cat_name"].'</td>';
           
	   				echo '<td >' .$row["price"].'</td>';
                 	echo '<td >' .$row["image"].'</td>';
       
				  echo'</tr>';
 
				}

}
     function my_search(){
        
        echo '     <center><div class="search2">
            <form method="POST">
                <input placeholder="  بحث" id="keywords" name="search" type="text">
            </form>
        </div> <br></center>' ;
    }

?>
</table>
</div>

</center>
<script>
	
	var tbl = document.getElementById("res");
	for(var x = 1; x < tbl.rows.length; x++)
	{
	   tbl.rows[x].onclick = function(){
	     
		 document.getElementById("r_id").value = this.cells[0].innerHTML;
		 document.getElementById("title").value = this.cells[1].innerHTML;
		 document.getElementById("details").value = this.cells[2].innerHTML;	
		 document.getElementById("cat_id").value = this.cells[3].innerHTML;
         document.getElementById("price").value = this.cells[5].innerHTML;

            var image = document.getElementById('r_image');
            //image.src = "1.jpg";
                     image.src = this.cells[6].innerHTML;		 
            
	   }
	}
    
    $(document).ready(function(){
          
        
               $(".thide").hide();
                //$("tr:even").hide();
              
      
        });
	</script>



<script>
$(document).ready(function(){
  $("#keywords").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#res tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    $("#res tr:first").show();
  });
});
</script>
     
		

<?php
include("footer.php");
?>

</body>

 
    
    <script src="boot/jquery-3.4.1.min.js">
  </script>
  
<script src="boot/javascript.js">
  </script>
      
</html>