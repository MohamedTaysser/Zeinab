<?php
$con=new mysqli("localhost","root","mysql","msg");
if(!$con){



	die("can't connect".mysqli_error());



}else{
$msg=$_POST['message'];
$qutext="INSERT INTO main (message) VALUES ('$msg')";
$query =mysqli_query($con , $qutext);


}





?>