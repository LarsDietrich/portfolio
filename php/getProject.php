<?php
	$id_project = $_GET['id'];
	
	//Connect to database
	$mysqli = new mysqli("localhost", "root", "root", "theportfolio");
	$mysqli->select_db("theportfolio");
	
	//Inject queries
	$resultset_project = $mysqli->query("SELECT descriptionMain, descriptionDetails, mainImg FROM projects WHERE id = ".$id_project);
	$resultset_images = $mysqli->query("SELECT src FROM project_images WHERE project_id = ".$id_project);
	
	$project = $resultset_project->fetch_assoc();
	
	$images = array();
	
	//Fill images array
	while($image = $resultset_images->fetch_assoc()){
		$images[] = $image;
	}
	
	//Add new key-value pair 'images' to 'project'.
	$project["images"] = $images;
	
	echo json_encode($project);
?>