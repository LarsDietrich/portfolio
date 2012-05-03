<?php
	$id_project = $_GET['id'];
	
	$mysqli = new mysqli("localhost", "root", "root", "theportfolio");
	$mysqli->select_db("theportfolio");
	$result = $mysqli->query("SELECT descriptionMain, descriptionDetails, mainImg FROM projects WHERE id = ".$id_project);
	
	$project = $result->fetch_assoc();
	
	echo json_encode($project);
?>