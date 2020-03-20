<?php


/*str_replace(' ', '', $string);*/

$stat="SELECT * FROM `chat`";
$result=mysqli_query($con , $stat);


while($fetch=mysqli_fetch_array($result)){







	# code...

$KOKO = $fetch['message'];


if ($KOKO=="") {
	


}else{




echo "<br> <div id='masg'>";
echo $fetch['username']."<br>".$fetch['time']."<br>";



echo $KOKO;

echo "<br> </div>";



}
}






$splt=str_split(json_encode($fetch['message']) , '1');

 $cn=count($splt);
if($cn <= 100){

//echo "large";


  
}




?>