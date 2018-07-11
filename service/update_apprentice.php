<?php
	include '../connect_db/connect_db.php';


	$sql = "UPDATE `apprentice`
		 SET `st_password` = '{$_POST["st_password"]}',
		 `st_fullname` = '{$_POST["st_fullname"]}',
		 `st_apprentice_location` = '{$_POST["st_apprentice_location"]}',
		 `st_teacher` = '{$_POST["st_teacher"]}' 
		WHERE `id` ='{$_POST["id"]}'";

		
		echo $conn->query($sql);

?>