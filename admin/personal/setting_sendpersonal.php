<?php
	include_once '../../connect_db/connect_db.php';

	// require  '../image/personal';
	$p_picture = $_FILES['p_picture'];
	$p_fullname = $_POST['p_fullname'];
	$p_rank = $_POST['p_rank'];
	$p_education = $_POST['p_education'];
	$p_research = $_POST['p_research'];
	$p_phone = $_POST['p_phone'];
	$p_email = $_POST['p_email'];
	// var_dump($p_picture);

$target_dir = "../../image/personal/";

$p_picture =basename(uniqid().$_FILES["p_picture"]["name"]);

$target_file = $target_dir . $p_picture;
if (move_uploaded_file($_FILES["p_picture"]["tmp_name"], $target_file)) {
		echo '<script>window.location.href ="http://localhost/project/admin/personal/admin_personal.php",100</script>';
    } else {
		// echo '<script>window.location="http://localhost/project/admin/personal/admin_personal.php",100;</script>';
    }

	$insert = "INSERT INTO `personal` 
			(
				`personal_id`,
				`personal_picture`,
				`personal_fullname`,
				`personal_rank`,
				`personal_education`,
				`personal_research`,
				`personal_phone`,
				`personal_email`
			) VALUES (
				NULL,
				'{$p_picture}',
				'{$p_fullname}',
				'{$p_rank}',
				'{$p_education}',
				'{$p_research}',	
				'{$p_phone}',	
				'{$p_email}'
			)";
			
	$inset_query = mysqli_query($conn, $insert);
?>

