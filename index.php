<?php
session_start();

if(isset($_POST["room"])){
	$_SESSION["room"] = $_POST["room"];
	$room = $_POST["room"];
}
else if($_SESSION["room"]){
	$room = $_SESSION["room"];
}



if(isset($_POST["user"])){
	$_SESSION["user"] = $_POST["user"];
	$user = $_POST["user"];
}
else if($_SESSION["user"]){
	$user = $_SESSION["user"];
}


?>


<!doctype html>
<html>
<head>
	<title>Duluth Instant Messenger</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<h1 id="title">Duluth Instant Messenger</h1>
        <form action="./index.php" method="POST">
	    <nav id="navigation">
		<ul>
			<li><label for="room">Enter/Create Room: </label><input type="text" name="room" placeholder="Top-Secret-Room-Name"></li>
			<li><label for="user">Enter Username: </label><input type="text" name="user" placeholder="Enter Alias"></li>
			<li><input type="submit" value="Join Room"></li>
		</ul>
            </nav>
       </form>
	<?php
		if(isset($_COOKIE['user'])){
			echo "<h2>".$user."@".$room."</h2>";
		}

	?>
	<div id="MessageContainer">
		<div id="messages">
			{{Messages}}
		</div>
	</div>
	<br>
	<form action="">
		<input type="text" name="message" placeholder="enter message">
		<input type="submit" value="Send">
	</form>

<script src="updateForm.js"></script>
</body>
</html>
