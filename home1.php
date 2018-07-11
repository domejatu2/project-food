<?php
	include 'connect_db/connect_db.php';
?>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title>สาขาวิชาผู้ประกอบการอาหาร</title>
	<link rel="stylesheet" href="css/home1.css">
</head>
<body style="background-image:url(image/home/bg.jpg)">
	<table class="table1" border="1">
		<tr class="banner">
			<td style="border:none;">
				<table>
					<tr>
						<td><img style="width:1100px;height:250px;" src="image/home/banner.jpg"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table cellspacing="0">
					<tr>
						<td width="50px" align="center"><i class="fa fa-home" style="font-size:30px;"></i></td>
						<td width="200px"><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
						<td width="200px"><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
						<td width="200px"><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
						<td width="200px"><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
						<td width="200px"><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
						<td width="200px"><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>asdsadasdasd</td>
					</tr>
				</table>
			</td>
		</tr>
		<?php 
		$query = "SELECT * FROM personal"; 
		$result = mysqli_query($conn, $query);
		?>
		<?php while($row = mysqli_fetch_array($result)) {
		?> 
	

		<img src="project/image/project/<?=$rs['personal_picture']?>">


	<?php  } ?>


<!-- 		<tr class="bar">
			<td><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
			<td><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
			<td><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
			<td><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
			<td><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
			<td><img style="width:100%;" src="image/home/tmenu1.jpg"></td>
		</tr>
		<tr>
			<td>sss</td>
			<td colspan="4">sss</td>
			<td colspan="2">sss</td>
		</tr>
		<tr>
			<td>sss</td>
			<td>sss</td>
			<td>sss</td>
		</tr>
		<tr>
			<td>ssadasd</td>
			<td>sss</td>
			<td>sss</td>
		</tr>
		<tr>
			<td>ssadasd</td>
			<td>sss</td>
			<td>sss</td>
		</tr>
		<tr style="margin-top:10px;">
		</tr> -->
	</table>
</body>
</html>
