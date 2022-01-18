<?php 

	$user = "root";
	$pass = "";
	$name = "automated_testing";

	try {
		$db = new PDO ('mysql:host=localhost;dbname=' . $name . ';charset=utf8', $user, $pass);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 
	catch (PDOException $e) 
	{
		die("ERROR: Could not connect. " . $e->getMessage());
	}
?>