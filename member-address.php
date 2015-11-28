<!DOCTYPE html>
<html lang="en">
<head>
<title>Born</title>
<?php include('inc_head.php'); ?>
</head>
<body class="member">
	<?php include('inc_header.php'); ?>
	<!--  top promotion -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 member-left-col">
				<?php include('inc_membermenu.php'); ?>
			</div>
			<div class="col-sm-10 member-rigth-col">
				<h2 class="page-title">สมุดที่อยู่</h2>
				<div class="row">
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">ที่อยู่หลักสำหรับใบเสร็จ</div>
							<div class="member-block-body">
								49  ถ.เพชรเกษม แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพ 10600<br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">ที่อยู่มาตรฐานสำหรับจัดส่ง</div>
							<div class="member-block-body">
								49  ถ.เพชรเกษม แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพ 10600<br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">ที่อยู่เพิ่มติม</div>
							<div class="member-block-body">
								ไม่มีที่อยู่เพิ่มเติมในสมุดที่อยู่ของคุณ<br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="bottom-btn-group">
					<button class="red-btn">เพิ่มที่อยู่ใหม่</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(window).load(function() {
		  equalheight(".row .member-block-body");
		});


		$(window).resize(function(){
		  equalheight(".row .member-block-body");
		});
	</script>
</body>
</html>