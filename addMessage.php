<?php
	//echo "HELLO WORLD";

	if(isset($_REQUEST["user"]) && isset($_REQUEST["room"]) && isset($_REQUEST["message"])){
		$path = "rooms/".$_REQUEST["room"]; // SHITTY
		$txt = "[ ".date("F j, Y, g:i a")." ] ";
		$txt .= $_REQUEST["user"].": ";
		$txt .= $_REQUEST["message"];
		$x = file_put_contents($path, $txt, FILE_APPEND);
		echo $path."<br>";
		echo $txt."<br>";
		echo $x."<br>";
		//echo FALSE."<br>";
	}


?>
