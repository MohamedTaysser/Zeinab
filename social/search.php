<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
#info{
margin-top: 100%;
}


body{

	background-color: #0beef9;
background-image: linear-gradient(315deg, #0beef9 0%, #48a9fe 74%);
background-attachment: fixed;
}
input{

width: 40%;
border: 20px;
height: 50px;
margin-left: 35%;
margin-top: 10%;
font-size: 24px;
}
#su{

width: 10%;
margin-left: 50%;
margin-bottom: 20%;
border-radius: 20px;
outline: none;

}
a{

	color: white;
	text-decoration: none;
}

a:hover{

color: darkblue;

}
#lol{



width: 40%;
background-color: rgba(0,0,0,0.1);
text-align: center;
padding: 10%;
/*box-sizing: border-box;
*/margin-left:25%;
border-radius: 20px;
}

	</style>
	<title>Search</title>
</head>
<body>
	<form method="GET">
		<input type="search" name="search"><br>
		<button id="su" type="submit">Search</button>
	</form>
<div id="lol">
<?php



$search = $_GET['search'];
include ('functions/config.php');

$stt="SELECT * FROM `users`  where username = '$search'";
//select query text for comment according to current post id
$resul=mysqli_query($con , $stt);

if (!$resul) {
	echo "Error".mysqli_error($con);
}

?><div style="margin-left: 20px;" id="comnt"><?
//div style for comment








while($fetc=mysqli_fetch_array($resul)){
//fetch the $resul array to show comments individually
$commm= $fetc['username'] ;
$id = $fetc['id'];
//add the fetched comment row into the $comm variable
if ($commm=="") {
	//don't show anything about null comments
}else{
	echo "<a href = '#info'>"."$commm"."</a>";//show comments
echo "<br>".$fetc['email']."<br>".$fetc['time']."<br>";

$rid =$fetc['id'];
echo "<form method='GET' action='search.php'><input name='fr' type='hidden' value=\"$rid\"><input name='ur' type='hidden' value=\"$monid\"> <button type=\"submit\" value='Follow'>Follow</button></form>";


//profiles id

//show name and time


echo "<br>";
?>

<div id="info">

<?





echo "<br>".$fetc['email']."<br>".$fetc['time']."<br>";
//show name and time
echo "$commm";
//show comments
echo "<br>";













}

























$stat="SELECT * FROM `post` where user_id = $id order by pid DESC";
//the select query text
$result=mysqli_query($con , $stat);
//execute the previous query
	if (!$result) {
//if an error occured show me the error
		echo "error".mysqli_Error($con);
			 	  }
while($fetch=mysqli_fetch_array($result)){

//start fetching the array $result showing each record indpendent
	$usr_id = $fetch['user_id'];
//fetch user id
	$_SESSION['iod'] = $usr_id;
//put user id in a sesssion called 'iod'
	$pto = $fetch['post'];
//fetch the post row records
		if ($pto ==="") {
	//if the post cell== null don't show anything
		}else{
			echo "<br> <div id='<?	$nm		?>'>";
//name the divider with the post id 
			$prof =$fetch['name'];
//fetch the post publisher name from the table
			$_SESSION['proff']=$prof;
//put the post publisher name in session variable
			echo "<hr><br><a style='color =#000000; text-decoration:none;' href ='pg.php'>@".$prof."</a><br>".$fetch['time']."<br>";
//show the post publisher name before it '@' sign and in the shap of hyberlink
			$pso = nl2br($pto);
//to insert enter key in the data 
			echo $pso;
//whoe the post
			$nm = $fetch['pid'];
//fetch post id in a variable called '$nm'


$una = $_SESSION['iod'];



}

}
}




















$usrna= $_SESSION['usrname'];
$fr_query=mysqli_query($con ,"SELECT * FROM users where username ='$usrna' ");
while ($fere=mysqli_fetch_array($fr_query)){
$monid=$fere['id'];


}


$fr_id=$_GET['fr'];
$monid."$fr_id";
$fr_request=mysqli_query($con ,"INSERT INTO friend (usr_id , friend_id) VALUES('$monid','$fr_id')");
if(!$fr_request){
echo mysqli_Error('ERROR');

}


?>	
</div>
</body>
</html>