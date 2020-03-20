<?php
include ('functions/config.php');
$usr_id = $_SESSION['proff'] ;

$text_user = "SELECT * FROM `users` WHERE username ='$usr_id'";
$query_user = mysqli_query($con , $text_user);
if (!$query_user) {
	echo "Error".mysqli_Error($con);
}


while ($fetch_user = mysqli_fetch_array($query_user)) {
	
$username =$fetch_user['username'] ;
$email = $fetch_user['email'];

echo $username . "<br>" . $email;

}









?>