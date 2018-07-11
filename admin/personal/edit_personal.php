<?php
	include '../../connect_db/connect_db.php';

	$strpersonal_id = null;
	if(isset($_GET["personal_id"])){
		$strpersonal_id = $_GET["personal_id"];
	}
		$sql = "SELECT * FROM personal WHERE personal_id = '".$strpersonal_id."' ";
		$query = mysqli_query($conn,$sql);
		$result=mysqli_fetch_array($query,MYSQLI_ASSOC);
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
		    margin: 0;
		}
		ul {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    width: 20%;
		    background-color: #f1f1f1;
		    position: fixed;
		    height: 100%;
		    overflow: auto;
		}
		li a {
		    display: block;
		    color: #000;
		    padding: 8px 16px;
		    text-decoration: none;
		}

		li a.active {
		    background-color: #4CAF50;
		    color: white;
		}

		li a:hover:not(.active) {
		    background-color: #555;
		    color: white;
		}
	</style>
<body>
	<form id="form1" name="form1" method="post" action="update_personal.php" enctype="multipart/form-data" onsubmit="return ok();">
		<ul>
		  <li><a class="active" href="admin_personal.php">บุคลากร</a></li>
		  <li><a href="../news/admin_news.php">ข่าวสาร</a></li>
		  <li><a href="../apprentice/admin_apprentice.php">ฝึกงาน</a></li>
		  <li><a href="../project/admin_project.php">โครงงาน</a></li>
		  <li><a href="../file/admin_file.php">อัพโหลดไฟล์</a></li>
		  <li><a href="../course/admin_course.php">หลักสูตร</a></li>
		</ul>

		<div style="margin-left:20%;padding:1% 1% 1% 1%;height:100%;">

			<input type="hidden" name="textid" value="<?php echo $result["personal_id"];?>">
			  	<div class="row">
			    	<div class="col-md-12" style="font-size:26px;font-weight:bold;">แก้ไขข้อมูล</div>
			  	</div><br>
			  	<div class="row">
			  		<div class="col-md-3" align="right">
			  			<img  src="../../image/personal/<?php echo $result["personal_picture"]; ?>" height="100px;" />
			  		</div>
			  		<div class="col-md-9">
			  			<input type="file" id="textpicture" name="textpicture">
			  		</div>
			  	</div><br>
			  	<div class="row" align="right">
				  	<div class="col-md-4" >
				  		ชื่อ-นามสกุล <input type="text" name="textfullname" id="textfullname" size="20" value="<?php echo $result["personal_fullname"];?>">
				  	</div>
				  	<div class="col-md-4">
			  			ตำแหน่ง <input type="text" name="textrank" id="textrank" size="20" value="<?php echo $result["personal_rank"];?>">
			  		</div>			  		
			  	</div><br>
			  	<div class="row" align="right">
			  		<div class="col-md-4">
			  		 	โทรศัพท์ <input type="text" name="textphone" id="textphone" size="20" OnKeyPress="return chkNumber(this)" value="<?php echo $result["personal_phone"];?>">
			  		</div>
			  		<div class="col-md-4">
			  		 	Email <input type="text" name="textemail" id="textemail" size="20" value="<?php echo $result["personal_email"];?>">
			  		</div>
			  	</div><br>
			  	<div class="row">
			  		<div class="col-md-2" align="right">
			  			<div>การศึกษา</div>
			  		</div>
			  		<div class="col-md-10">
			  			<textarea name="texteducation" id="texteducation" style="width:100%;" rows="3"><?php echo $result["personal_education"];?></textarea>
			  		</div>
			  	</div><br>
			  	<div class="row">
			  		<div class="col-md-2" align="right">
			  			<div>งานวิจัย</div>
			  		</div>
			  		<div class="col-md-10">
			  			<textarea name="textresearch" id="textresearch" style="width:100%;" rows="3"><?php echo $result["personal_research"];?></textarea>
			  		</div>
			  	</div><br>
			  	<div class="row" align="right">
			  		<div class="col-md-12">
			  			<input type="submit" name="submit" value="ตกลง" class="btn btn-default"></form>
			  		</div>
			  	</div>
		</div>
	
  
</body>
</html>

<script type="text/javascript">
	function chkNumber(ele)
	{
	 	var vchar = String.fromCharCode(event.keyCode);
	 	if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
	 	ele.onKeyPress=vchar;
	 }
	$("input#textfullname").on({
	  keydown: function(e) {
	    if (e.which === 32)
	      return false;
	  },
	  change: function() {
	    this.value = this.value.replace(/\s/g, "");
	  }
	});
	$("input#textrank").on({
	  keydown: function(e) {
	    if (e.which === 32)
	      return false;
	  },
	  change: function() {
	    this.value = this.value.replace(/\s/g, "");
	  }
	});
	$("input#textphone").on({
	  keydown: function(e) {
	    if (e.which === 32)
	      return false;
	  },
	  change: function() {
	    this.value = this.value.replace(/\s/g, "");
	  }
	});
	$("input#textemail").on({
	  keydown: function(e) {
	    if (e.which === 32)
	      return false;
	  },
	  change: function() {
	    this.value = this.value.replace(/\s/g, "");
	  }
	});
</script>
<script type="text/javascript">
function ok()
{
  with(form1)
  {
    if(textfullname.value==''){
      alert('กรุณากรอกชื่อ-นามสกุล');textfullname.focus();
      return false;
    }
    if(textrank.value==''){
      alert('กรุณากรอกตำแหน่ง');textrank.focus();
      return false;
    }
    if(textphone.value==''){
      alert('กรุณากรอกเบอร์โทรศัพท์');textphone.focus();
      return false;
    }
    if(textemail.value=='' ){
      alert('กรุณากรอก Email');textemail.focus();
      return false;
    }
    if(texteducation.value==''){
      alert('กรุณากรอกข้อมูลการศึกษา');texteducation.focus();
      return false;
    }
    if(textresearch.value==''){
      alert('กรุณากรอกงานวิจัย');textresearch.focus();
      return false;
    }
    else{
      alert('กรอกข้อมูลเสร็จสิ้น')
    }
  }
}
</script>