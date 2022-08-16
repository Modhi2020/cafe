<!DOCTYPE html>
<?php
include_once("conn.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>الخدمـات </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="css/index.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <link rel="stylesheet" href="boot/style.css"/>


</head>
<body>

<?php
    
    // Initialize the session
//session_start();
$login_id = "";
    $us_name = "";
if(isset($_SESSION["user_id"]) || isset($_SESSION["user_name"]) ){
   
    $login_id = $_SESSION["user_id"];
    $us_name = $_SESSION["user_name"];
  
}
    ?>      
    
    

        <center>

            <div class="left-head"><h1>... الخدمـات المضــافة حديـــثاً ...</h1> </div>
        <br><br>

        <!-- <form action="" method="GET" accept-charset="UTF-8" enctype="multipart/form-data" class="myforms "> -->
            	
<?php 

$sel = "select * from services";
$r = mysqli_query($conn,$sel);
$y = 3;
            
            
echo '<div class="container-fluid items cat">';
      echo '<div class="row">';
	while( $row = mysqli_fetch_array($r))
               {

        for($i = $y; $i <= 12 ; $i += 3 ){
          echo '<input  type="hidden" id="user_id" value="'.$login_id .'">'  ;
          echo '<input type="hidden" id="service_id" value="'.$row["id"] .'">'  ;
            echo '<div class="col-xs-offset-3 col-xs-6  col-sm-offset-0 col-sm-offset-0  col-lg-3  ftext">';
          
			 echo '<img src="'.$row["image"].'" class="img-circle myimg_show">';
               echo '<br>';
				echo '<h3>' .$row["title"].'</h3>';
        echo '<br>';
       echo '<h4>'.substr($row["details"], 0, 200). ' ...'.'</h4>';
       echo '<br>';
       echo '<h4>'.$row["price"].' SAR '.'</h4>';
       echo '<br>';
       
          echo '<button   btn_id ="'. $login_id . '"  btn_service_id ="'. $row["id"] . '" btn_price ="'. $row["price"] . '"    class="addtochart ">'.'إضافة إلى السلة' .'</button>';
            echo '</div>';
            //echo ' i == '.$i .' y == '.$y;
            break;
        }
        if($y < 12){
        $y += 3;
        }
        else{
            $y = 3;
            echo'</div>';
            echo '<br><br>';
            echo '<div class="row">';
        }
            
			
    }
    echo'</div>';
    ?>
  
    
   
 
    </div>

  <!-- </form> -->
        </center>

<br >


<!-- <button  onclick="addtocart(); "> AddToCart </button> -->

  
<script>
$(document).ready(function(){

$('.addtochart').on('click', function () {

  var user_id =  $(this).attr('btn_id');
  var service_id =  $(this).attr('btn_service_id');
  var price =  $(this).attr('btn_price');
  addtocart(user_id,service_id,price);
  
                        });


  function addtocart(user_id,service_id,price) {


    // $.post("./carts.php",{
    //   price:price
    // } , function(data,status){
    //   alert('fdsf');
    // } );

    var mycarts = new XMLHttpRequest();
mycarts.onreadystatechange = function() {
  if(mycarts.readyState === 4) {
    if(mycarts.status === 200) {
      console.log('fsdf = ' +  user_id  + ' ser =' + service_id );
          alert('تم الاضافة الى السلة');
    } else {
          alert('Error Code: ' +  mycarts.status);
          alert('Error Message: ' + mycarts.statusText);
    }
  }
}
// mycarts.open('GET', 'carts.php?user_id='+user_id+',service_id='+service_id+',price='+price+',addtocart=1',true);
mycarts.open("GET" , "./carts.php", true);
mycarts.send();
   


    
  }

});

</script>
    
    
    
    </div>
        </center>

<br >

</body>
</html>