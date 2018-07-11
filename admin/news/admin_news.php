<?php
	include '../../connect_db/connect_db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>สาขาวิชาผู้ประกอบการอาหาร</title>
</head>
	<link rel="stylesheet" href="../../css//admin/news.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<body>
	<ul>
		  <li><a href="../personal/admin_personal.php">บุคลากร</a></li>
		  <li><a class="active"  href="admin_news.php">ข่าวสาร</a></li>
		  <li><a href="../apprentice/admin_apprentice.php">ฝึกงาน</a></li>
		  <li><a href="../project/admin_project.php">โครงงาน</a></li>
		  <li><a href="../file/admin_file.php">อัพโหลดไฟล์</a></li>
		  <li><a href="../course/admin_course.php">หลักสูตร</a></li>
	</ul>

	<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">
		<div class="container">
			<div class="topics">ข่าวสาร</div>
		 	<!-- Button to Open the Modal -->
		  	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
		    	เพิ่มข่าวสาร <span class="glyphicon glyphicon-plus"></span>
		  	</button>

		  <!-- The Modal -->
			<div class="modal fade" id="myModal">
			    <div class="modal-dialog modal-lg">
			      	<div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title">Modal Heading</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">
			          Modal body..
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer">
			          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        </div>
			        
			      	</div>
			    </div>
			</div>	  
		</div>
	</div>
</body>
</html>