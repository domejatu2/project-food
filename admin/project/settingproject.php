<?php
	include '../../connect_db/connect_db.php';
	
	$stpassword = $_POST['stpassword'];
	$stfullname = $_POST['stfullname'];
	$stteacher = $_POST['stteacher'];
	$stproject = $_POST['stproject'];



	$insert = "INSERT INTO `project`
		(
			`id`, 
			`st_password`,
			`st_fullname`,
			`st_teacher`,
			`st_project`
		) VALUES (
			NULL,
			'{$stpassword}',
			'{$stfullname}',
			'{$stteacher}',
			'{$stproject}'
		)";

		$inset_query = mysqli_query($conn, $insert);

		echo '<script>window.location.href ="http://localhost/project/admin/project/admin_project.php",100</script>';
?>

