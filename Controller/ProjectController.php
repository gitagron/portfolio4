<?php

	require ("Model/ProjectModel.php");
	class ProjectController {
		function CreateProjectDropdownList()
		{
			$projectModel = new ProjectModel();
			$result = "<form action='', methot ='post', width='200px'>
						Please select a type:
						<select name = 'types' >
							<option value='%'> All</option>
							" . $this -> CreateOptionValues($projectModel->GetProjectTypes()).
							"</select>
							<input type='submit' value='Search'/>
							</form>";

			return $result; 
		}
		function CreateOptionValues(array $valueArray) {
			$result = "";

			foreach ($valueArray as $value) 
				{
					$result = $result . "<option value = '$value'> $value</option>";}					
				
				
				
			return $result;
		}
	

	function CreateProjectTables($types)
	{
		$projectModel=new ProjectModel();
		$projectArray= $projectModel->GetProjectByType($types) ;
		$result="";

		foreach ($projectArray as $key => $project) {
			$result=$result .
					"<table class='projectTable'>
					<tr>
						<th rowspan='6' width='150px'><img runat = 'server' src='$project->image'/></th>
						<th width ='75px'>Name:</th>
						<td>$project->name</td>
					</tr>

					<tr>
						<th>Type:</th>
						<td>$project->type</td>
					</tr>

					<tr>
						<td colspan='2'>$project->review</td>
					</tr>

					</table>";
		}
		return $result;
	}		
	}
		
	
 ?>