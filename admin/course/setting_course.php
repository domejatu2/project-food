<?php
	include '../../connect_db/connect_db.php';
	
	$years = $_POST['years'];
	$term = $_POST['term'];
	$subjectscode = $_POST['subjectscode'];
	$subjects = $_POST['subjects'];
	$credits = $_POST['credits'];

	$insert = "INSERT INTO `course`
		(
			`id`, 
			`subjectcode`,
			`subject`,
			`credit`,
			`semester`,
			`year`
		) VALUES (
			NULL,
			'{$subjectscode}',
			'{$subjects}',
			'{$credits}',
			'{$term}',
			'{$years}'
		)";

		$inset_query = mysqli_query($conn, $insert);

		echo '<script>window.location.href ="http://localhost/project/admin/course/admin_course.php",100</script>';
?>

