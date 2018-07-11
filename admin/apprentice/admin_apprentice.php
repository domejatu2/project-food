<?php
	include '../../connect_db/connect_db.php';
?>
<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="../../css//admin/personal.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../../js/setting_apprentice.js" ></script>    
<head>
	<title></title>
</head>
<body>
	<ul>
	  <li><a href="../personal/admin_personal.php">บุคลากร</a></li>
	  <li><a href="../news/admin_news.php">ข่าวสาร</a></li>
	  <li><a  class="active" href="admin_apprentice.php">ฝึกงาน</a></li>
	  <li><a href="../project/admin_project.php">โครงงาน</a></li>
	  <li><a href="../file/admin_file.php">อัพโหลดไฟล์</a></li>
	  <li><a href="../course/admin_course.php">หลักสูตร</a></li>
	</ul>

	<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">
		<form method="post" action="setting_apprentice.php" name="send_apprentice" id="send_apprentice" autocomplete="off" onsubmit="return send();">
			<div class="container">
			  <div class="topics">ระบบฝึกประสบการณ์วิชาชีพ</div>
			  <!-- Button to Open the Modal -->
			  <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">เพิ่มข้อมูลฝึกประสบการณ์วิชาชีพ <span class="glyphicon glyphicon-plus"></span></button>

			  <!-- The Modal -->
			  <div class="modal fade" id="myModal">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title">เพิ่มหัวข้อฝึกงาน</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">
			         	<div class="row" align="right">
			         		<div class="col-md-6"">
			         			รหัสนิสิต <input type="text" name="stpassword" id="stpassword" size="30" maxlength="10" OnKeyPress="return chkNumber(this)">
			         		</div>
			         		<div class="col-md-6">
			         			ชื่อ-นามสกุล <input type="text" name="stfullname" id="stfullname" size="30">
			         		</div>
			         	</div><br>
			         	<div class="row" align="right">
			         		<div class="col-md-6">
			         			ชื่ออาจารย์นิเทศน์ <input type="text" name="stteacher" id="stteacher" size="30">
			         		</div>
			         		<div class="col-md-6">
			         			ชื่อสถานที่ฝึกงาน <input type="text" name="stapprentice" id="stapprentice" size="30">
			         		</div>
			         	</div>
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer">
			        	<button type="submit" id="submit" class="btn btn-default">ตกลง</button>
			          	<button type="button" class="btn btn-secondary btn-default" data-dismiss="modal">Close</button>
			        </div>
			        
			      </div>
			    </div>
			  </div>
			  
			</div>
		</form>
	<br>

		<!-- จบฟอร์มส่งข้อมูลหน้าต่างModal -->

		<!-- ค้นหาและแสดงข้อมูล -->
<?php
	$strKeyword = null;
	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>		
		<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
			<div class="col-md-12">
				ค้นหาหัวข้อฝึกงาน <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
			<input type="submit" value="ค้นหา">
		</div><br><br>
		</form>
			<div class="row">
				<div class="col-md-12">
					<table border="1" width="100%">
						<tr align="center">
							<td width="10%">รหัสนิสิต</td>
							<td width="20%">ขื่อ-นามสกุล</td>
							<td width="20%">อาจารย์นิเทศก์</td>
							<td width="25%">สถานที่ฝึกงาน</td>
							<td width="15%">แก้ไข</td>
						</tr>
<?php
	$query = "SELECT * FROM apprentice WHERE st_fullname LIKE '%".$strKeyword."%' ";
	$result = mysqli_query($conn, $query);
	while($row =mysqli_fetch_array($result,MYSQLI_ASSOC))
	{ 
?>
						<tr>
							<td>
								<input readonly="" style="width: 100%;" class="st_password" value="<?php echo $row["st_password"] ?> ">
							</td>
							<td>
								<input readonly="" style="width: 100%;" class="st_fullname" value="<?php echo $row["st_fullname"] ?> ">
								<!-- <input readonly="" style="width: 100%;" class="st_fullname" value="<?php echo $row["st_fullname"] ?> "> -->
							</td>
							<td>
								<input readonly="" style="width: 100%;" class="st_teacher" value="<?php echo $row["st_teacher"] ?> ">
							</td>
							<td>
								<textarea style="width: 100%" readonly="" class="st_apprentice_location"><?php echo $row["st_apprentice_location"] ?></textarea>
							</td>
							<td align="center">
								<button class="edit_data btn btn-info btn-sm">edit <span class="glyphicon glyphicon-edit"></button>
								<button class="save_data btn-success" style="display: none;" id-std-code="<?php echo $row["id"] ?>">save<span class="glyphicon glyphicon-floppy-disk"></button>
								<a href="delete_apprentice.php?id=<?php echo $row["id"];?>" onClick="javascript:return confirm('คุณต้องการลบข้อมูลใช่หรือไม่');"><button type="button" class="btn btn-danger btn-sm">delete <span class="glyphicon glyphicon-remove"></span></button></a>
							</td>
						</tr>
<?php } ?>
					</table>
				</div>
			</div>

	</div>
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
  			var st_apprentice_location = $(this).parent().parent().find(".st_apprentice_location").val()
  			var st_teacher = $(this).parent().parent().find(".st_teacher").val()

  			//console.log(std_id,st_fullname,st_project,st_teacher)
  			$(this).parent().parent().find("textarea").attr('readonly',"")
  			$(this).parent().find(".edit_data").toggle()
  			$(this).toggle()

  			$.post('http://localhost/project/service/update_apprentice.php', 
  				{
  					st_password:st_password,
  					st_fullname:st_fullname,
  					st_apprentice_location:st_apprentice_location,
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
<!--   <script type="text/javascript">
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
  			var st_apprentice_location = $(this).parent().parent().find(".st_apprentice_location").val()
  			var st_teacher = $(this).parent().parent().find(".st_teacher").val()

  			//console.log(std_id,st_fullname,st_project,st_teacher)
  			$(this).parent().parent().find("textarea").attr('readonly',"")
  			$(this).parent().find(".edit_data").toggle()
  			$(this).toggle()

  			$.post('http://localhost/project/service/update_apprentice.php', 
  				{
  					st_password:st_password,
  					st_fullname:st_fullname,
  					st_apprentice_location:st_apprentice_location,
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
  </script> -->
<!-- 	<script type="text/javascript">
		var summit_status = false;
		$(function(){
			$("#stpassword").blur(function(event) {
				$.post('http://localhost/project/service/check_std_number.php', {std_number: $(this).val()}, function() {
					
				})
				.done()
				.then(function(data){
					console.log(data)
					if(data==0){
						alert('รหัสนิสิตซ้ำ');
						summit_status = false
					}else{
						summit_status = true
					}
				})
			});
		})


		$("#submit").click(function(event) {
			
			
		});

		$("#send_apprentice").submit(function(event) {
			/* Act on the event */

			

			if(summit_status == true){
					
				$(this).submit();
				
			}else{

				alert("กรุณาตรวจสอบข้อมูล")
				return false;
			}

		});
	</script>
</body>
</html>
 -->