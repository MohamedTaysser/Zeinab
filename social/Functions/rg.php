

<?php 
session_start();


include ('config.php');


	

$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];

$name = strng($name);
$email = Email($email);
$pass = Email($pass);





$Uins="INSERT INTO users (username,password,email) VALUES ('$name','$pass','$email')";

$query =mysqli_query($con , $Uins);
if (isset($_POST['submit'])) {
 header("Location: ../login.php");
 
	
}



?>