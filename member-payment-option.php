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
				<h2 class="page-title">ช่องทางการชำระเงิน</h2>
				<div class="row">
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">บัตรเครดิต</div>
							<div class="member-block-body">
								ไม่มีวิธีการชำระเงินที่ใช้งานได้<br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>

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