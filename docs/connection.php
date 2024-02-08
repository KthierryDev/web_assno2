<?php
	$conn = new mysqli('localhost', 'root', '', 'guarder');
 
	if(!$conn){
		die("Error: Can't connect to database");
	}
?>