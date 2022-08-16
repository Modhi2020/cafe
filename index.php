<!DOCTYPE html>
<?php
include_once("conn.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>الصفحة الرئيسية</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-rtl.css"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <link rel="stylesheet" href="boot/style.css"/>


  <script src="boot/jquery.js">
  </script>
   <script src="boot/javascript.js">
  </script>

</head>
<body>

<?php
include("header.php");
?>


  

<hr id="hrfooter" color="#53a16e">


                            <div class="search">
            <form action="#">
                <input placeholder="  بحث" id="keywords" name="search" type="text">
                <button>
                    <i class="b-seach" style="font-size: 25px;"></i>
                </button>
            </form>
        </div>

        <center>

            
<?php
include_once("my_show.php");
?>
            
        </center>

    </div>
      
     
<?php
include("footer.php");
?>

</body>
</html>