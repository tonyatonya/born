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
				<h2 class="page-title">การแจ้งเตือนทางอีเมล์</h2>
				<br>
				<input type="checkbox" checked> ต้องการรับข่าวสารทางอีเมล์<br>
				ฉันได้อ่านและเข้าใจ <a href="#">นโยบายของเว็บไซต์</a>  แล้ว
				<br>
				<hr>
				<div class="bottom-btn-group">
					<button class="red-btn">ตกลง</button>
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