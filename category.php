<!DOCTYPE html>
<?php
include_once("conn.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <title>التصنيف</title>
  <link href="css/how.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
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
      <div class="left-head"><h1>... التصنيـــــف ...</h1>
            </div>
        <br>
       <form action="" method="POST" accept-charset="UTF-8" class="part2">
	  <div class="cat">


        <div class="container">
            <label for="catt_id">رقم التصنيف</label>
            <input type="text" disabled name="catt_id" id="catt_id">
        </div>
		 <div class="container">
           
            <input type="hidden"  name="cat_id" id="cat_id">
        </div>
         <div class="container">
            <label for="cat_name">إسم التصنيف</label>
            <input type="text" name="cat_name" id="cat_name">
        </div>
        
		</div>
		
        <div class="change">
        <center> 
        
        </center>
        </div>

	<div  class="row">
	<div class="container-fluid">
	<form action="" method="POST" accept-charset="UTF-8" class="dark-form" >

	<div class="cat">
	 <button type="submit" name="cat_add">إضـافة</button>
	<button type="submit" name="cat_upd">تعديل</button>
	 <button type="submit" name="cat_del">حـذف</button>
	 <button type="submit" name="cat_sel">إستعلام</button>
	  
</div>
	</form>
    </div>
	</div>
		    </form>

	
<?php
$ca_id = "";
$ca_name = "";
$sqls = "";
$q  = "";

if ( isset($_POST['cat_id'])){
$ca_id = $_POST['cat_id'];
}
if ( isset($_POST['cat_name'])){

$ca_name = $_POST['cat_name'];
}
/*
$c_id = "select * from category ";
 $qq = mysqli_query($conn,$c_id);
echo mysqli_fetch_array($qq)[0]."<br>";
*/

if ( isset($_POST['cat_add'])){
$msg = '<font color="#FF0000"><p align="center">هذا الإسـم موجــود من قبل..!</p></fount>';
$sqls = "insert into category values (NULL,'$ca_name')";
 //$q = mysqli_query($conn,$sqls) or die (mysqli_error()); 
    $q = mysqli_query($conn,$sqls) or die ($msg); 
 //header("location: category.php");


if ($q){
echo("تمت الإضـافة بنجاح");
}

else{
//echo mysqli_error($conn);
echo mysqli_error('هذا الإسـم موجــود من قبل..!');
} 
}


if ( isset($_POST['cat_upd'])){
$sqls = "update category set cat_name ='$ca_name' where cat_id = $ca_id";
 $q = mysqli_query($conn,$sqls) or die (mysqli_error());
// header("location: category.php");
if ($q){
echo("تم التعديل بنجــاح");
}
}

if ( isset($_POST['cat_del'])){
$sqls = "delete from category where cat_id = $ca_id";
 $q = mysqli_query($conn,$sqls) or die (mysqli_error()); 
 //header("location: category.php");
if ($q){
echo("تم الحـذف بنجـاح");
}
}

?>


<?php 

$sel = "SELECT cat_id,cat_name FROM category";
$r = mysqli_query($conn,$sel) or die (mysqli_error()); 


?>	

<?php 

 if ( isset($_POST['cat_sel']) || isset($_POST['cat_upd']) || isset($_POST['cat_del'])){

 echo '<center>'.'<hr id="hrfooter" color="#53a16e"><br><div class="cate">'.'<table id="ca" >'.'<tr >'.'<th>'.
 '<h3> رقم التصنيف </h3>'.'</th>'.'<th>'.'<h3> إسم التصنيف  </h3>'.'</th>'.'</tr>';

   while( $row = mysqli_fetch_array($r))
               {
					echo '<tr>';
				
					echo '<td class=" cate ">' .$row["cat_id"].'</td>';
					echo '<td class=" cate ">' .$row["cat_name"].'</td>';
                    echo'</tr>';
 
				}
 echo'</table></div>';
}
?>

<br>
<script>
	
	var tbl = document.getElementById("ca");
	for(var x = 1; x < tbl.rows.length; x++)
	{
	   tbl.rows[x].onclick = function(){
	     
		 document.getElementById("cat_id").value = this.cells[0].innerHTML;
		 document.getElementById("cat_name").value = this.cells[1].innerHTML;
		 document.getElementById("catid").value = this.cells[0].innerHTML;		 
	   
	   }
	}
	</script>

	
<script src="boot/jquery-3.4.1.min.js">
  </script>
  
<script src="boot/javascript.js">
  </script>
	
	
       
<?php
include("footer.php");
?>

</body>
</html>