<?php
	include '../connect_db/connect_db.php';


	$sql = "UPDATE `project`
		 SET `st_password` = '{$_POST["st_password"]}',
		 `st_fullname` = '{$_POST["st_fullname"]}',
		 `st_project` = '{$_POST["st_project"]}',
		 `st_teacher` = '{$_POST["st_teacher"]}' 
		WHERE `id` ='{$_POST["id"]}'";

		
		echo $conn->query($sql);

?>