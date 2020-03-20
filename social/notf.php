<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body{


background-color: #0beef9;
background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);


}
</style>
<?php

session_start();
	include('Functions/config.php');
	$name = $_SESSION['usrname'];
//select the id of the current user







$qn="SELECT * FROM `users` WHERE username = '$name'";
	$qr=mysqli_query($con , $qn);
while($fetch=mysqli_fetch_array($qr))
			{
//fetch the id column and put it in a variable
	$uid = $fetch['id'];
//echo $uid;
			}

$fr_requests=mysqli_query($con ,"SELECT * FROM friend where friend_id ='$uid' ");
while ($fere=mysqli_fetch_array($fr_requests)){
$help=$fere['usr_id'];
$fr_re=mysqli_query($con ,"SELECT * FROM users where id ='$help' ");
while ($fe=mysqli_fetch_array($fr_re)){
$nomy=$fe['username'];
echo" <div class='alert alert-success'>
   
  <a href =\"http://localhost/pc/social/search.php?search=$nomy\">".$nomy ."</a> Sent u a friend request<br><hr>

</div>
  ";

} 

}


?>