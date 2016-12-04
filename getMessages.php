<?php
	if(isset($_REQUEST["room"])){
		$room = "rooms/".$_REQUEST["room"];
		echo file_get_contents($room);
		
	}


?>
