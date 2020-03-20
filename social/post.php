<!DOCTYPE html>
<html>

<head>

	<title>Post feature</title>
<style type="text/css">

body{
margin-left: 20%;
margin-right: 20%;
margin-top: 10%;
margin-bottom: 5%;
background-color:rgb(0 , 50 , 255 , 0.2);
padding: 20px;
color: white;
border-radius: 70px;
width: 50%;
}
html{
background:url('img/th.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
}
textarea{
border-radius: 70px;
padding:4%; 
outline: none;
border-width: 4px;
border-color: white;
}
textarea:hover{

	border-color: cyan;
}
button{

	border-radius: 40px;
	margin: 1px;
}
button:hover{
background-color: cyan;
border-color: cyan;

}
.men{

	background-color: rgb(255 , 255 , 255 , 0);
	border-color: rgb(255 , 255 , 255 , 0);
	padding: 1%;

}
.men>a{

color:rgb(0 , 0 ,0 ,0);
text-decoration: none;

}

.men>a:hover{

color:rgb(0 , 0 ,0 ,0.6);



}
a{


color: white;
text-decoration: none;


}

#Info{

	color: white;
}

#Info:hover{
border-color:cyan; 
background-color:white;
width: 100px; 
height: 100px; 
font-size: 20px;
color:rgb(255,255,255,1); 
}
#menu{
padding: 1%;

}
</style>

</head>

<body>
	<h2>
<div id="menu">
<a href="search.php" style="float: left;">search</a>
<a href="notf.php" style="float:right;">notfication</a>
<a href=""></a>
	</h2></div>
<button class="men"><a href="home.php">Home</a></button>	
<form method="post" action="post.php" enctype="">
	
 <textarea name="art" placeholder="Type your thoughts" cols="40" rows="7"></textarea>
<br>
<button type="submit">Post!</button>
</form>

<?php
//know who is the user who is logged in rn
session_start();
	include('Functions/config.php');
//define the input of the post
	$art=$_POST['art'];
//filter the post
	$art = strng($art);
//use the username of login page
		$name = $_SESSION['usrname'];
//select the id of the current user







$qn="SELECT * FROM `users` WHERE username = '$name'";
	$qr=mysqli_query($con , $qn);
while($fetch=mysqli_fetch_array($qr))
			{
//fetch the id column and put it in a variable
	$uid = $fetch['id'];
//echo $uid;
	$_SESSION['uidsw']=$uid;
			}



/*After knowing the user we will start inserting post data */
/*Now , We will start inserting name and  post and user id*/
/*We included session and config to database file before*/
/*our database configuration variables name is '$con'*/



//insert text for posts
$Uins="INSERT INTO post (name, post , user_id ) VALUES ('$name','$art' , '$uid')";
//the query of the text
$query =mysqli_query($con , $Uins);
	if (!$query) {
	//if an error occured show me the error
		echo "error".mysqli_Error($con);
				 }
//when the form is submited refresh the current page
if (isset($_POST['submit'])) {
 header("Location: post.php");
 
	
							 }


?>


</form>
<div id="fpost">


















<?
/*we will start showing the posts with name and time in the site*/





$stat="SELECT * FROM `post` LEFT JOIN users on users.id = post.user_id order by id DESC";
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
		print_r($moh);
		if ($pto ==="") {

	//if the post cell== null don't show anything
		}else{




$taysser=mysqli_query($con,"SELECT friend_id FROM friend WHERE usr_id='$uid' ");
while ($moh=mysqli_fetch_array($taysser)) {
	$o= $moh['friend_id'];
	
}                                              







                                                  










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


//echo "<h1>$nm</h1> <br>";







$likor=mysqli_query($con,"SELECT * from likes where post_id ='$nm' ");
if(!$likor){
echo mysqli_error($con);

}
$numse=mysqli_num_rows($likor);

$secure=mysqli_query($con , "DELETE t1 FROM likes t1
INNER JOIN likes t2 
WHERE 
    t1.id < t2.id AND 
    t1.user_id = t2.user_id && t1.post_id=t2.post_id");



$una = $_SESSION['iod'];
//make $una == the post publisher id
echo "<br><br><form method='post' action='post.php'>
<input type='hidden' name='post_iad' value='<? 	$nm 	?>'>
<textarea name='comment' placeholder='Type your Comment' cols='40' rows='4'></textarea><br>
<button type='submit' name='<?      $nm       ?>'>Comment!</button></form>
<form method='post' action='post.php'>
	<input type='hidden' name='like' value='like'>
<input type='hidden' name='post_like_id' value='<? 	$nm 	?>'>
<button type='submit'>Like $numse</button>
</form><br><br> 
</form></div> ";


/*
arranging post by 
*making new lines 
and then make 
*new form for comments 
	includes 
		-hidden inputs for post id
		-textarea 
		-button with post id named 
*new form for likes
	includes
		-hidden inputs for like value and post id
		-button to submit with '$nums' value to show the count
closing the DIVs and forms tags
*/
}


//add selection of comments inside post loop to show the comments for each post individually
$stt="SELECT * FROM `comment` LEFT JOIN users on users.id = comment.user_id where post_id = '$nm'";
//select query text for comment according to current post id
$resul=mysqli_query($con , $stt);
?><div style="margin-left: 20px;" id="comnt"><?
//div style for comment
while($fetc=mysqli_fetch_array($resul)){
//fetch the $resul array to show comments individually
$commm= $fetc['comment'] ;
//add the fetched comment row into the $comm variable
if ($commm=="") {
	//don't show anything about null comments
}else{
echo "<br>".$fetc['name']."<br>".$fetc['time']."<br>";
//show name and time
echo "$commm";
//show comments
echo "<br>";
}
}


?>	</div><?
//close div tag
	?></div>	<?

//close another div

}


$comment = $_POST['comment'];
//define comments input
$post_iad = strng($_POST['post_iad']);
//define post id hidden input
$Uns="INSERT INTO comment (name, comment , post_id ,user_id) VALUES ('$name','$comment' , '$post_iad' , '$uid')";
//insert query text
$quer =mysqli_query($con , $Uns);
//excution of insert query
if (!$quer) {
	echo "error".mysqli_Error($con);
//if an error occured just tell me  :)
}
if (isset($_POST['submit'])) {
 header("Location: post.php");
 //when the form is submited refresh the page
}








$like = $_POST['like'];
//define like hidden value
$post_like_id = strng($_POST['post_like_id']);
//define post id input
$txt="INSERT INTO likes (username, likes , post_id ,user_id) VALUES ('$name','$like' , '$post_like_id' , '$uid')";
//insert query text
$like_query =mysqli_query($con , $txt);
//execute order query
if (!$like_query) {
	echo "Error".mysqli_Error($con);
//if an error happens just tell me :)
}
if (isset($_POST['submit'])) {
 header("Location: post.php");
 
	//when the form submited refresh the page
}

?>
</div>
</body>
</html> 																									