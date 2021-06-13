<?php 
	require 'Controller/ProjectController.php';
	$projectController = new ProjectController();

	if(isset($_POST['types']))
	{
		$projectTables = $projectController->CreateProjectTables($_POST['types']);
	}
	else
	{
		$projectTables=$projectController->CreateProjectTables('%');

	}



	$title = "Projects";
	$content = $projectController->CreateProjectDropdownList() . $projectTables;

	include 'template.php';

 ?>