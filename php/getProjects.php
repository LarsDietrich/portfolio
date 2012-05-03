<?php
	$mysqli = new mysqli("localhost", "root", "root", "theportfolio");
	$mysqli->select_db("theportfolio");
	// /print_r($mysqli);
	
	$result = $mysqli->query("SELECT id, logoImg, nameProject, descriptionMain, dateOfRelease FROM projects");
	$projects_array = array();
	
	while($row = $result->fetch_assoc()){
		$projects_array[] = $row;
	}
	
	echo json_encode($projects_array);	
?>