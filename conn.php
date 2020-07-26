<?php
	$conn = new PDO( 'mysql:host=localhost;dbname=db_import', 'root', '');
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>