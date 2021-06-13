<?php 
	require("Entities/ProjectEntity.php");
	class ProjectModel
	{
		function GetProjectTypes()
		{
			require 'Credentials.php';
			mysqli_connect($host, $user, $passwd) or die(mysqli_error);
			mysqli_select_db($database, 'portfoliodb');
			$result = mysqli_query($database, "SELECT DISTINCT type FROM projects1") or die(mysqli_error);
			$types = array();
		
		while ($row =mysqli_fetch_array($result)) {
			array_push($types, $row[0]);
		}
		mysqli_close($database);
		return $types;

		}

		function GetProjectByType($type){
			require 'Credentials.php';
			mysqli_connect($host, $user, $passwd) or die(mysqli_error);
			mysqli_select_db($database, 'portfoliodb');

			$query = "SELECT * FROM projects1 WHERE type LIKE'$type'";
			$result=mysqli_query($database, $query) or die (mysqli_error);
			$projectArray = array ();

			while ($row = mysqli_fetch_array($result))
			{
				$name= $row[1];
				$type= $row[2];
				$image= $row[3];
				$review= $row[4];

				$project = new ProjectEntity (-1, $name, $type, $image, $review);
				array_push($projectArray, $project);


			}
			mysqli_close($database);
			return $projectArray;

		}

	} 
?>