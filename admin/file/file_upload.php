<?php header("Content-Type: text/html; charset=utf-8"); ?>
<?php
	include '../../connect_db/connect_db.php';
?>
<?php
		// if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],iconv('UTF-8','windows-874',$_FILES["filUpload"]["tmp_name"])));
	 $file_name = iconv("utf-8", "tis-620", $_FILES["filUpload"]["name"] );
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"document/".$file_name))
	{
			$strSQL  = "INSERT INTO `document` 
			(
				`id`,
				`file`
			) VALUES (
				NULL,
				'{$_FILES["filUpload"]["name"]}'
			)";
			$objQuery =  mysqli_query($conn,$strSQL);
	}
	echo '<script>window.location.href ="http://localhost/project/admin/file/admin_file.php",100</script>';
?>