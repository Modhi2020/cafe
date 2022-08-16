
<?php

$host="localhost";
$user="root";
$pass="";
$db="cafe";


@$conn=mysqli_connect("$host","$user","$pass","$db");
/*$select=mysqli_select_db("$db");*/

// @$arb = mysqli_query("SET NAMES utf8");
// @$arbb = mysqli_query("SET CHARACTER SET utf8");
 
if (!$conn){
die("Connection failed: " . mysqli_connect_error());
echo("no");}
/*
else {
echo("ok");}
*/

?>