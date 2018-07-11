<!-- <?php

	include '../connect_db/connect_db.php';

	$sql_command = "SELECT count(*) as found FROM `apprentice` WHERE st_password = '{$_POST["std_number"]}'";


	$result = mysqli_query($conn, $sql_command);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	// var_dump($row);
	if($row["found"] >0){
		echo 0;
	}else{
		echo 1;
	} -->