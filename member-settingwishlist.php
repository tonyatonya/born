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
				<h2 class="page-title">แก้ไขการตั้งค่ารายการสินค้าที่ชอบ</h2>
				<div class="row">
					<div class="col-sm-10 member-form">
						<div class="row">
							<div class="col-sm-4 form-label">ชื่อรายการสินค้าที่ชอบ *</div>
							<div class="col-sm-8 inputcol">
								<div class="group">
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-label">ตั้งค่าความเป็นส่วนตัวของรายการ*</div>
							<div class="col-sm-8 inputcol">
								<input type="radio"> ส่วนตัว
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-4 inputcol">
								<input type="radio"> สามารถเปิดเผยได้
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-4 inputcol">
								<input type="radio"> แบ่งปัน
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-label">ตั้งค่าการออกความห็น</div>
							<div class="col-sm-8 inputcol">
								<div class="group">
									<textarea></textarea>
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col-sm-8 col-sm-offset-4 inputcol">
								<input type="submit" value="บันทึก" class="red-btn">
								<input type="submit" value="ยกเลิก" class="red-btn">
							</div>
						</div>
					</div>
					<div class="col-sm-2">
						<span style="float: right;">ข้อมูลต้องกรอก *</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<style type="text/css">
		.group{
			max-width: 300px;
		}
	</style>

</body>
</html>