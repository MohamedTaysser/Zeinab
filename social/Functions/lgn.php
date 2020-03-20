<?php


include ('config.php');
	$user=$_POST['username'];
	$user = mysqli_real_escape_string($con , $user);
	$pass=$_POST['pass'];
	$pass = mysqli_real_escape_string($con , $pass);
/*$sl="SELECT * FROM 'users' WHERE username='$user' AND password = '$pass'";
$result = mysqli_query($con , $sl);

while ($fetch = mysqli_fetch_array($result)) {


	$num = mysqli_num_rows($result);
	if($num > 0)
	{ 
		
			echo "login successfully";				
		
		}else{    

		 echo "Failed".mysqli_error();      }
}



*/

$stat="SELECT * FROM `users`
WHERE password='$pass' AND username='$user'";
$result=mysqli_query($con , $stat);


while($fetch=mysqli_fetch_array($result)){

if ($fetch != "" or 0 or False) {
	echo $fetch['password'];

if (isset($_POST['submit'])) {
	# code...

 header("Location: ../home.php");
}  


}
}





$_SESSION['usrname'] = $user;

	?>


	