<?php
	include ('Functions/config.php');
	include ('Functions/scheck.php');
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Live chat</title>
			<meta charset="utf-8" content="10">
			<link rel="stylesheet" type="text/css" href="style/home.css">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		</head>
		<body>

			<div id="wrapper">
<button id="men"><a href="post.php">Posts</a> </button>
				<h1>Welcome to My live chat</h1>

				<div class="chat_wrapper">
		
					<div id="chat">
					<?	
					include ('Functions/msg.php');
					?>
					</div>

					<form action="home.php" method="post">
						<textarea name="message" class="textarea" cols="30" rows="10"></textarea>
					
					</form>
				</div>
			</div>

			<script type="text/javascript" src="JS/button.js" ></script>



		</body>
</html>