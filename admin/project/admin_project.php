<?php
	include '../../connect_db/connect_db.php';
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="../../css//admin/personal.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../../js/send_project.js" ></script>

<head>
	<title></title>
</head>
<body>
<ul>
  <li><a href="../personal/admin_personal.php">บุคลากร</a></li>
  <li><a href="../news/admin_news.php">ข่าวสาร</a></li>
  <li><a href="../apprentice/admin_apprentice.php">ฝึกงาน</a></li>
  <li><a class="active" href="admin_project.php">โครงงาน</a></li>
  <li><a href="../file/admin_file.php">อัพโหลดไฟล์</a></li>
  <li><a href="../course/admin_course.php">หลักสูตร</a></li>
</ul>

	<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">
		<div class="container">
			<form method="post" action="settingproject.php" name="send_project" onsubmit="return send()" id="send_project">
			<div class="row">
				<div class="col-md-12">
					<div class="topics">หัวข้อโครงงาน</div>
				</div><br><br>
				<div class="col-md-12">
					<!-- หน้าเพิ่มข้อมูล -->
					<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">เพิ่มหัวข้อโครงงาน <span class="glyphicon glyphicon-plus"></span></button>
					<!-- Modal -->
				  	<div class="modal fade" id="myModal" role="dialog">
				    	<div class="modal-dialog modal-lg">
				    
				      <!-- Modal content-->
				      		<div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">เพิ่มหัวข้อโครงงาน</h4>
						    	</div>

				        		<div class="modal-body">
						        	<div class="row">
						        		<div class="col-md-7">
						        			ชื่อ-นามสกุล <input type="text" name="stfullname" id="stfullname" size="40">
						        		</div>
						        		<div class="col-md-5">
						        			รหัสนิสิต <input type="text" name="stpassword" id="stpassword" maxlength="10" size="20" OnKeyPress="return chkNumber(this)">
						        		</div>
						        	</div><br>
				        			<div class="row" align="left">
						        		<div class="col-md-12">
						        			อาจารย์ที่ปรึกษา <input type="text" name="stteacher" id="stteacher" size="40">
						        		</div>
						        	</div><br>
						        	<div class="row">
						        		<div class="col-md-12">
						        			ชื่อหัวข้อโครงงาน
						        		</div>
						        		<div class="col-md-12">
						        			<textarea style="width:100%;" rows="3" name="stproject" id="stproject"></textarea>
						        		</div>
						        	</div>
				        		</div>
				        		<div class="modal-footer">
				          			<button type="submit" class="btn btn-default">ตกลง</button>
				          			<button type="submit" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
				        		</div>
				      		</div>				     
				    	</div>
				  	</div>
				</div>
			</div><br>
			</form>
			<!-- จบหน้าเพิ่มข้อมูล -->
		</div>
<?php
	$strKeyword = null;
	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
		<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
			<div class="col-md-12">
				ค้นหาหัวข้อโครงงาน <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
			<input type="submit" value="ค้นหา">
		</div><br><br>
		</form>

			<div class="row">
				<div class="col-md-12">
					<table width="100%" border="1">
						<tr align="center">
							<td width="10%">รหัสนิสิต</td>
							<td width="20%">ชื่อ-นามสกุล</td>
							<td width="25%">ชื่อหัวข้อโครงงานงงาน</td>
							<td width="20%">อาจารย์ที่ปรึกษา</td>
							<td width="10%">สถานะ</td>
							<td width="15%">แก้ไข</td>
						</tr>
<?php
	$query = "SELECT * FROM project WHERE st_project LIKE '%".$strKeyword."%' ";
	$result = mysqli_query($conn, $query);
	while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
	{ 
?>
						<tr valign="">
							<td>
								<input readonly="" maxlength="10" style="width: 100%;" class="st_password" OnKeyPress="return chkNumber(this)" value="<?php echo $row["st_password"] ?> ">
							</td>
							<td>
								<input readonly="" style="width: 100%;" class="st_fullname" value="<?php echo $row["st_fullname"] ?> ">
							</td>
							<td>
								<textarea style="width: 100%" readonly="" class="st_project"><?php echo $row["st_project"] ?></textarea>
							</td>
							<td>
								<input readonly="" style="width: 100%;" class="st_teacher" value="<?php echo $row["st_teacher"] ?> ">
							</td>
							<td></td>
							<td align="center" style="padding:1%;">
								<button class="edit_data btn btn-info btn-sm">edit <span class="glyphicon glyphicon-edit"></button><button class="save_data btn-success" style="display: none;" id-std-code="<?php echo $row["id"] ?>">save<span class="glyphicon glyphicon-floppy-disk"></button>
								<a href="delete_project.php?id=<?php echo $row["id"];?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');"><button type="button" class="btn btn-danger btn-sm">delete <span class="glyphicon glyphicon-remove"></span></button></a>
							</td>
						</tr>
			<?php } ?>
					</table>
				</div>
			</div>
	</div>

</body>
</html>
<script>
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"
  </script>
  <script type="text/javascript">
  	
  	$(function(){
  		$(".edit_data").click(function(){
  			$(this).parent().parent().find("textarea").removeAttr('readonly')
  			$(this).parent().parent().find("input").removeAttr('readonly')
  			$(this).parent().find(".save_data").toggle()
  			$(this).toggle()
  		})

  		$(".save_data").click(function(event) {

  			var std_id = $(this).attr("id-std-code")
  			
  			var st_password = $(this).parent().parent().find(".st_password").val()
  			var st_fullname = $(this).parent().parent().find(".st_fullname").val()
  			var st_project = $(this).parent().parent().find(".st_project").val()
  			var st_teacher = $(this).parent().parent().find(".st_teacher").val()

  			//console.log(std_id,st_fullname,st_project,st_teacher)
  			$(this).parent().parent().find("textarea").attr('readonly',"")
  			$(this).parent().find(".edit_data").toggle()
  			$(this).toggle()

  			$.post('http://localhost/project/service/update_project.php', 
  				{
  					st_password:st_password,
  					st_fullname:st_fullname,
  					st_project:st_project,
  					st_teacher:st_teacher,
  					id:std_id
  				}
  				, function(data, textStatus, xhr) {
  				/*optional stuff to do after success */
  			}).done().then(function(resp){
  				if(resp == 1){alert("update success!!!")}
  			})


  		});
  	})
  </script>