<?php
	include '../../connect_db/connect_db.php';
?>
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css//admin/personal.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="../../js/send_personal.js" ></script>
 	
<head>
	<title>สาขาวิชาผู้ประกอบการอาหาร</title>
</head>
<body>

<ul>
  <li><a class="active" href="admin_personal.php">บุคลากร</a></li>
  <li><a href="../news/admin_news.php">ข่าวสาร</a></li>
  <li><a href="../apprentice/admin_apprentice.php">ฝึกงาน</a></li>
  <li><a href="../project/admin_project.php">โครงงาน</a></li>
  <li><a href="../file/admin_file.php">อัพโหลดไฟล์</a></li>
  <li><a href="../course/admin_course.php">หลักสูตร</a></li>
</ul>

	<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">
		<div class="container">
			<div class="topics">บุคลากร</div>
		  <!-- ส่วนเพิ่มข้อมูล -->
		  		<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">เพิ่มบุคลากร <span class="glyphicon glyphicon-plus"></span></button>

		  <!-- Modal -->
		  	<div class="modal fade" id="myModal" role="dialog">
		    	<div class="modal-dialog modal-lg" style="height: auto;">
		      <!-- Modal content-->
		      	<div class="modal-content">
		        	<div class="modal-header">
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			          	<h4 class="modal-title">เพิ่มบุคลากร</h4>
		        	</div>
			        <div class="modal-body">
			        	<form method="post" action="setting_sendpersonal.php" enctype="multipart/form-data" id="send_personal" name="send_personal" onsubmit="return ok();">
			        	<div class="row">
						    <div class="col-md-12"><input type="file" name="p_picture"></div>
						</div><br>
						<div class="row" style="text-align: right;">
						    <div class="col-md-5">
						    	ชื่อ - นามสุกล : <input type="text" name="p_fullname" id="p_fullname" size="30">
						    </div>
						    <div class="col-md-5">
						    	ตำแหน่ง : <input type="text" name="p_rank" id="p_rank" size="30">
						    </div>
						</div><br>
						<div class="row" style="text-align: right;">
						    <div class="col-md-5">
						    	เบอร์โทร : <input type="text" name="p_phone" id="p_phone" size="30" OnKeyPress="return chkNumber(this)">
						    </div>
						    <div class="col-md-5">
						    	Email : <input type="email" name="p_email" id="p_email" size="30">
						    </div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								การศึกษา
							</div>
						    <div class="col-md-12">
						    	<textarea style="width:100%" name="p_education" id="p_education" rows="4"></textarea>
						    </div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								งานวิจัย
							</div>
							<div class="col-md-12">
								<textarea style="width:100%" name="p_research" id="p_research" rows="4"></textarea>
							</div>
						</div><br>
						<div class="modal-footer">
				          <div class="col-md-12">
								<button type="submit" class="btn btn-default">ตกลง</button>
								<button type="submit" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
							</div>
				        </div>
						</form>
			        </div>      
		    	</div>
		  		</div>  
			</div>
		</div>

	<!-- จบหน้าเพิ่มข้อมูล -->

	<!-- ส่วนตาราง -->
	<div class="col-md-12"><h3>รายชื่อบุคลากร</h3></div>
		<?php
			$query = "SELECT * FROM personal";
			$result = mysqli_query($conn, $query);
			$path = '../../image/personal/';

			while($row = mysqli_fetch_array($result)) { 
				$image = $row['personal_picture'];
		?>

		<div>    
			<table width="100%" border="1">
				<tr>
					<td align="center" width="15%"><img class="imgteacher" src="<?php echo $path.$image; ?>"></td>
					<td>
						<table border="1" width="100%">
							<!-- ปุ่มแก้ไข & ลบ -->
							<tr>
								<td colspan="2" align="right">
									<a href="edit_personal.php?personal_id=<?php echo $row["personal_id"];?>"><button type="button" class="btn btn-info btn-sm" style="margin:5px 5px;">แก้ไข <span class="glyphicon glyphicon-edit"></button></a>
									<a href="delete_personal.php?personal_id=<?php echo $row["personal_id"];?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');"><button type="button" class="btn btn-danger btn-sm">ลบข้อมูล  <span class="glyphicon glyphicon-remove"></span></button></a>
								</td>
							</tr>
							<tr>
								<td valign="top" class="hteacher" width="10%">ชื่อ-นามสกุล</td>
								<td class="datateacher"><?php  echo $row["personal_fullname"]; ?></td>
							</tr>
							<tr>
								<td valign="top" class="hteacher">ตำแหน่ง</td>
								<td class="datateacher"><?php  echo $row["personal_rank"]; ?></td>
							</tr>
							<tr>
								<td valign="top" class="hteacher">โทรศัพท์</td>
								<td class="datateacher"><?php  echo $row["personal_phone"]; ?></td>
							</tr>
							<tr>
								<td valign="top" class="hteacher">อีเมล์</td>
								<td class="datateacher"><?php  echo $row["personal_email"]; ?></td>
							</tr>
							<tr>
								<td valign="top" class="hteacher">การศึกษา</td>
								<td class="datateacher"><?php  echo $row["personal_education"]; ?></td>
							</tr>
							<tr>
								<td valign="top" class="hteacher">งานวิจัย</td>
								<td class="datateacher"><?php  echo $row["personal_research"]; ?></td>
							</tr>							
						</table>
					</td>
				</tr>
			</table><br>
	</div>

		<?php } ?>
</body>
</html>
