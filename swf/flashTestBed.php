<?php
	$id_project = $_GET['demoId'];
	
	$mysqli = new mysqli("localhost", "root", "root", "theportfolio");
	$mysqli->select_db("theportfolio");
	$result = $mysqli->query("SELECT nameProject, demoSrc, demoWidth, demoHeight, demoDescription FROM projects WHERE id = ".$id_project);
	
	$project = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: #000;
			color: #fff;
			text-align: center;
			font-family: courier new;
		}
		
		#flashObject{
			margin: 0px auto;
			display: block;
		}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function(){
			
		});
	</script>
</head>
<body>
<h1><?php echo $project['nameProject'];?></h1>

<object id="flashObject" type="application/x-shockwave-flash" data="<?php echo $project['demoSrc'];?>" width="<?php echo $project['demoWidth'];?>" height="<?php echo $project['demoHeight'];?>">
<param name="movie" value="<?php echo $project['demoSrc'];?>" />
</object>

<p id="demoDetails"><?php echo $project['demoDescription'];?></p>
</body>
</html>