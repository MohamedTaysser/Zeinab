<?
session_start();
include ('filter.php');
$con=new mysqli("localhost","root","mysql","social");
if(!$con){



	die("can't connect".mysqli_error());



}


?>