<?php 
	$db = new mysqli("localhost","root","","math_game");

	if($db->connect_errno){
		echo "Failed to connect to MySQL: (".$db->connect_errno.") ";
	}
	
?>