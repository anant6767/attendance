<?php 

	header("Content-Type:application/json");
	
	include("../database.php");
		
	$data = json_decode(file_get_contents('php://input'), true);
		
	if(!empty($data)){
		
		$e = $data['employee_id'];
		$ev = $data['event'];
		$d = $data['date'];
		$t = $data['time'];
		$query = "insert into entery (id,employee_id,event,date,time,type) 
				VALUES ('','$e','$ev','$d','$t','D')";
				
		$result = mysql_query($query);
		echo $result;exit;;
	}
	
	
?>