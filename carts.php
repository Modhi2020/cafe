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
  
  
  <title> السلــة </title>
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
    
    $_SESSION['qty'] = $_POST['qty'];
    $_SESSION['price'] = $_POST['price'];
     
    
}}
    
?>    

 
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
      
    
   

         
$user_id = "";
$service_id = "";
$price = "";
$sqls = "";
$q = "";

if ( isset($_GET['user_id'])){
$user_id = $_GET['user_id'];
}  
if ( isset($_GET['service_id'])){
$service_id = $_GET['service_id'];
}  
if ( isset($_GET['price'])){
    $price = $_GET['price'];
    }  

    $date = date('Y-m-d');

    if ( isset($_GET['addtocart'])){
       
    

    $sqls = "INSERT INTO `carts` (`id`, `date`, `user_id`, `service_id`, `price`, `qty`) VALUES (NULL, '$date', '$user_id', '$service_id', '$price', '1')";
    $q = mysqli_query($conn,$sqls);

    }
    
    // else
    // {
    //     $sqls = "INSERT INTO `carts` (`id`, `date`, `user_id`, `service_id`, `price`, `qty`) VALUES (NULL, '$date', '$login_id', '4', '50', '1')";
    //       $q = mysqli_query($conn,$sqls);
    // }

  

  
    ?>

     

 
   
    <?php 
    
    
    ?>

      	
	
	
<?php 


//$sel = "SELECT * FROM user where user_id = $login_id ";
$sel = "SELECT * FROM carts where user_id = ".$login_id  ;
// $sel = "SELECT * FROM users" ;
$r = mysqli_query($conn,$sel) or die (mysqli_error()); 



?>	

<br>

<hr id="hrfooter" color="#53a16e">

<?php 


	
     my_search();
//echo '<div class="row resou">'.'<tr >';
echo '<center>';
echo '<div class=" container-fluid category">';
echo '<table id="res" accept-charset="UTF-8" rules="all" width="100%"  border="2px" >';
echo '<tr >';
echo'<th >'.'رقم  '.'</th>';
echo'<th >'.'اسم الخدمـة  '.'</th>';
echo'<th >'.' سعر الخدمـة  '.'</th>';
echo'<th>'.' الكمية '.'</th>';
echo'<th>'.' الاجمالي '.'</th>';

$i = 1;
   while( $row = mysqli_fetch_array($r))
               {
				
					
					echo '<tr >';
				
					echo '<td class="thide">' .$row["id"].'</td>';
					echo '<td >' .$i++.'</td>';
					echo '<td class="thide">' .$row["service_id"].'</td>';
				
					$sele = "SELECT distinct title FROM services where id =". $row["service_id"];
				$ut = mysqli_query($conn,$sele) or die (mysqli_error()); 
				$rows = mysqli_fetch_array($ut);
					echo '<td >' .$rows["title"].'</td>';
	   				echo '<td >' .$row["price"].'</td>';
                       echo '<td >' .$row["qty"].'</td>';
                 	// echo '<td >' .$row["image"].'</td>';
                     echo '<td >' .$row["price"].'</td>';
       
				  echo'</tr>';
 
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
		 document.getElementById("service_id").value = this.cells[1].innerHTML;
		 document.getElementById("qty").value = this.cells[2].innerHTML;	
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