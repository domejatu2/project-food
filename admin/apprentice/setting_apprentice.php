<?php
	include '../../connect_db/connect_db.php';
?>
<?php
	$stpassword = $_POST['stpassword'];
	$stfullname = $_POST['stfullname'];
	$stteacher = $_POST['stteacher'];
	$stapprentice = $_POST['stapprentice'];

	// $sql = "SELECT * FROM apprentice WHERE (st_password='".$stpassword."') AND id != $id";
	// $query = mysql_query($sql); 
	// if(mysql_num_rows($query) != 0){ 
	// 	echo "<script>alert('SN หรือ Mac Address ซ้ำ กรุณาตรวจสอบ');history.back();</script>"; 
	// 	exit(); 
	// }
	
	$insert =  "INSERT INTO `apprentice`
		(
			`id`,
			`st_password`, 
			`st_fullname`,
			`st_apprentice_location`,
			`st_teacher`
		) VALUES (
			NULL,
			'{$stpassword}',
			'{$stfullname}',
			'{$stapprentice}',
			'{$stteacher}'
		)";

	$inset_query = mysqli_query($conn, $insert);

	echo '<script>window.location.href ="http://localhost/project/admin/apprentice/admin_apprentice.php",100</script>';
?>