<?php
	include '../../connect_db/connect_db.php';
?>	

<?php
	$strCustomerID = $_GET["personal_id"];
	$sql = "DELETE FROM personal WHERE personal_id = '".$strCustomerID."' ";
	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		echo '<script>window.location.href ="http://localhost/project/admin/personal/admin_personal.php",100</script>';
	}
?>
