<?php
	include '../../connect_db/connect_db.php';
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="../../css/admin/course.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<head>
	<title></title>
</head>
<body>

<ul>
  <li><a href="../personal/admin_personal.php">บุคลากร</a></li>
  <li><a href="../news/admin_news.php">ข่าวสาร</a></li>
  <li><a href="../apprentice/admin_apprentice.php">ฝึกงาน</a></li>
  <li><a href="../project/admin_project.php">โครงงาน</a></li>
  <li><a href="../file/admin_file.php">อัพโหลดไฟล์</a></li>
  <li><a class="active" href="admin_course.php">หลักสูตร</a></li>
</ul>

	<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">
		<div class="container">
			<div class="topics">หลักสูตร</div>
				<!-- Button to Open the Modal -->
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
				    เพิ่มหลักสูตร <span class="glyphicon glyphicon-plus"></span>
				</button>

				  <!-- The Modal -->
				<div class="modal fade" id="myModal">
				    <div class="modal-dialog modal-lg">
				    	<div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        	<h4 class="modal-title">เพิ่มหลักสูตร</h4> 	  	
				        </div>
				        
				        <!-- Modal body -->
				        <form method="post" action="setting_course.php">
					        <div class="modal-body">
					        	<div class="row">
						        	<div class="col-md-4">
						        		ชั้นปี <select name="years" id="years">
												<option value="">--กรุณาเลือก--</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											 </select>
						        	</div>
						        	<div class="col-md-4">
						        		เทอม <select name="term" id="term">
												<option value="">--กรุณาเลือก--</option>
												<option value="1">1</option>
												<option value="2">2</option>
											</select>
						        	</div>
						        	<div class="col-md-4">
						        	</div>
						        </div><br>
						        <div class="row">
						        	<div class="col-md-4">
						        		รหัสวิชา <input type="text" name="subjectscode" id="subjectscode" maxlength="10">
						        	</div>
						        	<div class="col-md-4">
						        		ชื่อวิชา <input type="text" name="subjects" id="subjects">
						        	</div>
						        	<div class="col-md-4">
						        		หน่วยกิต  <input type="text" name="credits" id="credits" maxlength="2">
						        	</div>
						        </div>
					        </div>
				        
				        <!-- Modal footer -->
					        <div class="modal-footer">
					        	<button type="submit" class="btn btn-default">ตกลง</button>
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
				    	</form>
				      	</div>
				    </div>
				</div>
		</div><br>
		<!-- จบการเพิ่มข้อมูล -->

		<!-- เริ่มแสดงภาคเรียนที่1 -->
			<div class="row">
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 1 ภาคเรียนที่ 1</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='1' and `semester`='1'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 1 ภาคเรียนที่ 2</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='1' and `semester`='2'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div><br>
			<!-- ภาคเรียนปี1 -->

			<!-- เริ่มแสดงภาคเรียนที่2 -->
			<div class="row">
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 2 ภาคเรียนที่ 1</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='2' and `semester`='1'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 2 ภาคเรียนที่ 2</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='2' and `semester`='2'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div><br>
			<!-- จบภาคเรียนที่2 -->

			<!-- เริ่มแสดงภาคเรียนที่3 -->
			<div class="row">
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 3 ภาคเรียนที่ 1</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='3' and `semester`='1'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 3 ภาคเรียนที่ 2</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='3' and `semester`='2'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div><br>
			<!-- จบภาคเรียนที่3 -->

			<!-- เริ่มแสดงภาคเรียนที่4 -->
			<div class="row">
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 4 ภาคเรียนที่ 1</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='4' and `semester`='1'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
				<div class="col-md-6">
					<table border="1" width="100%">
						<tr align="center">
							<td class="header" colspan="10">ปีที่ 4 ภาคเรียนที่ 2</td>
						</tr>
						<tr align="center">
							<td width="20%">รหัสวิชา</td>
							<td width="60%">ชื่อวิชา</td>
							<td width="20%">หน่วยกิต</td>
						</tr>
<?php
			$query = "SELECT * FROM `course` WHERE `year`='4' and `semester`='2'";
			$result = mysqli_query($conn, $query);	
			while($row = mysqli_fetch_array($result)) { 
	
?>
						<tr align="center">
							<td><?php echo $row["subjectcode"] ?></td>
							<td align="left"><?php echo $row["subject"] ?></td>
							<td><?php echo $row["credit"] ?></td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div>
			<!-- จบภาคเรียนที่4 -->
		</div>
</body>
</html>