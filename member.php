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
				<h2 class="page-title">ส่วนควบคุมบัญชี</h2>
				<b>สวัสดีคุณลูกค้า </b><br>
				<p>ในส่วนควบคุมบัญชี คุณสามารถดูประวัติการใช้งานบัญชี และแก้ไขข้อมูลบัญชีของคุณ เลือกรายการด้านล่างเพื่อดูหรือแก้ไขข้อมูล</p>

				<div class="row">
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">ข้อมูลติดต่อ</div>
							<div class="member-block-body">
								ชื่อลูกค้า นามสกุลลูกค้า<br>
								email@domainname.com  <a href="#">เปลี่ยนอีเมล์ของคุณ</a><br>
								<a href="#">เปลี่ยนรหัสผ่าน</a><br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">จดหมายข่าว</div>
							<div class="member-block-body">
								ในขณะนี้ คุณเป็นสมาชิกของจดหมายข่าวดังต่อไปนี้ : Newsletter<br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>
				</div>
				<h2 class="page-title">สมุดที่อยู่</h2>
				<div class="row">
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">ที่อยู่มาตรฐานสำหรับใบเสร็จ</div>
							<div class="member-block-body">
								49  ถ.เพชรเกษม แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพ 10600<br>
								<a href="#" style="float: right;">แก้ไขข้อมูล</a><br>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="member-block">
							<div class="member-block-header">ที่อยู่มาตรฐานสำหรับการจัดส่ง</div>
							<div class="member-block-body">
								49  ถ.เพชรเกษม แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพ 10600<br>
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