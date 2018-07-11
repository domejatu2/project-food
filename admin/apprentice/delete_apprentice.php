<?php
	include '../../connect_db/connect_db.php';
?>	

<?php
	$strCustomerID = $_GET["id"];
	$sql = "DELETE FROM apprentice WHERE id = '".$strCustomerID."' ";
	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		echo '<script>window.location.href ="http://localhost/project/admin/apprentice/admin_apprentice.php",100</script>';
	}
?>