<?

$uname = $_SESSION['usrname'];
	$user=$uname;
	$user = mysqli_real_escape_string($con , $user);

$msg=$_POST['message'];
$msg = strng($msg);

$qutext="INSERT INTO main (user,message) VALUES ('$user','$msg')";
$query =mysqli_query($con , $qutext);

/**/



if($uname==""){


	header("Location: home.php");
 echo "failed";
}



?>