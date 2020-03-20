<?php
include 'functions/config.php';
$uid=$_SESSION['uidsw'];

$select="SELECT * from friend  WHERE 
   usr_id='$uid' OR friend_id='$uid'";
            
$query=mysqli_query($con , $select);
if (!$query) {
	echo mysqli_error($con);
}
while ($fetch=mysqli_fetch_array($query)) {

echo $fetch['usr_id'];
echo "<br>";
echo $fetch['friend_id'];
echo "<br>";
}
?>
