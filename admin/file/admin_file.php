<?php
	include '../../connect_db/connect_db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link rel="stylesheet" href="../../css//admin/file.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
		<ul>
		  <li><a href="../personal/admin_personal.php">บุคลากร</a></li>
		  <li><a href="../news/admin_news.php">ข่าวสาร</a></li>
		  <li><a href="../apprentice/admin_apprentice.php">ฝึกงาน</a></li>
		  <li><a href="../project/admin_project.php">โครงงาน</a></li>
		  <li><a class="active" href="admin_file.php">อัพโหลดไฟล์</a></li>
		  <li><a href="../course/admin_course.php">หลักสูตร</a></li>
		</ul>

		<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">
				<div class="topics">เอกสาร</div><br>
				<div class="row">
					<div class="col-md-2" style="font-size:20px;font-weight:bold;">
						อัพโหลดไฟล์ =>
					</div>
					<div class="col-md-3">
					  		<form name="form1" method="post" action="file_upload.php" enctype="multipart/form-data">
						<input type="file" name="filUpload" required=""><br><br>
					</div>
					<div class="col-md-7">
						<input class="btn btn-default" name="btnSubmit" type="submit" value="Submit">
					</div>
					<br></form>

					<div class="col-md-12">
						<table border="1" width="100%" cellspacing="190" cellpadding="55">
							<tr align="center">
								<td class="header" width="80%">
									ชื่อไฟล์
								</td>
								<td class="header" width="20%">
									ลบข้อมูล
								</td>
							</tr>
<?php
			$query = "SELECT * FROM document";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
							<tr>
								<td style="padding:10px;">
									<a href="document/<?php echo $row["file"];?>"><?php echo $row["file"];?></a>
								</td>
								<td align="center" style="padding:1%;">
									<a href="delete_file.php?id=<?php echo $row["id"];?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');"><button type="button" class="btn btn-danger btn-sm">delete <span class="glyphicon glyphicon-remove"></span></button></a>
								</td>
							</tr>
<?php } ?>
						</table>
				</div>
				</div>
		</div>
</body>
</html>