<?php
	include '../../connect_db/connect_db.php';
?>

<?php
	$target_dir = "../../image/personal/";
	$textpicture = $_FILES['textpicture'];
	$textpicture =basename(uniqid().$_FILES["textpicture"]["name"]);

	// var_dump($_FILES['textpicture']);
		if( $_FILES['textpicture']["size"] > 0){
			$target_file = $target_dir.$textpicture;
			if (move_uploaded_file($_FILES["textpicture"]["tmp_name"], $target_file)) {
					$sql = "UPDATE `personal` SET 
					`personal_picture`= '".$textpicture."'
					,`personal_fullname`= '".$_POST["textfullname"]."'
					,`personal_rank`= '".$_POST["textrank"]."'
					,`personal_phone`= '".$_POST["textphone"]."'
					,`personal_email`= '".$_POST["textemail"]."'
					,`personal_education`= '".$_POST["texteducation"]."'
					,`personal_research`= '".$_POST["textresearch"]."'
					 WHERE `personal_id`='".$_POST["textid"]."'";
					$query = mysqli_query($conn,$sql);
			} else {
					// echo '<script>window.location="http://localhost/project/admin/admin_personal.php",100;</script>';
			}

		}else{
			$sql = "UPDATE `personal` SET 
			,`personal_fullname`= '".$_POST["textfullname"]."'
			,`personal_rank`= '".$_POST["textrank"]."'
			,`personal_phone`= '".$_POST["textphone"]."'
			,`personal_email`= '".$_POST["textemail"]."'
			,`personal_education`= '".$_POST["texteducation"]."'
			,`personal_research`= '".$_POST["textresearch"]."'
			 WHERE `personal_id`='".$_POST["textid"]."'";
				$query = mysqli_query($conn,$sql);
		}

		echo '<script>window.location="http://localhost/project/admin/personal/admin_personal.php",100;</script>';
// $target_file = $target_dir.$textpicture;
// if (move_uploaded_file($_FILES["textpicture"]["tmp_name"], $target_file)) {
// 		// echo '<script>window.location.href ="http://localhost/project/admin/admin_personal.php",100</script>';
//     } else {
// 		// echo '<script>window.location="http://localhost/project/admin/admin_personal.php",100;</script>';
//     }
?>

<?php
	// $sql = "UPDATE `personal` SET 
	// ,`personal_fullname`= '".$_POST["textfullname"]."'
	// ,`personal_rank`= '".$_POST["textrank"]."'
	// ,`personal_phone`= '".$_POST["textphone"]."'
	// ,`personal_email`= '".$_POST["textemail"]."'
	// ,`personal_education`= '".$_POST["texteducation"]."'
	// ,`personal_research`= '".$_POST["textresearch"]."'
	//  WHERE `personal_id`='".$_POST["textid"]."'";
	// 	$query = mysqli_query($conn,$sql);

	// 	if($query) {
	// 		echo '<script>window.location.href ="http://localhost/project/admin/personal/admin_personal.php",100</script>';
	// 	}
	// 	mysqli_close($conn);
?>
