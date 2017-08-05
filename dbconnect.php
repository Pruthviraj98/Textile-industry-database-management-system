<?php
	$dbconnect = mysqli_connect("127.0.0.1:3307", "root", "", "fashion_loft");
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

?>