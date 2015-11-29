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
				<h2 class="page-title">แก้ไขการตั้งค่าข้อมูลรายการสินค้าที่ชอบ</h2>
				<div class="row">
					<div class="col-sm-12">
						<div class="member-block">
							<div class="member-block-header">ข้อมูลของรายการนี้</div>
							<div class="member-block-body">
								<div class="member-form">
									<div class="row">
										<div class="col-sm-3 form-label">ชื่อลูกค้า *</div>
										<div class="col-sm-9 inputcol">
											<div class="group">
												<input type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3 form-label">อีเมล์*</div>
										<div class="col-sm-9 inputcol">
											<div class="group">
												<input type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3 form-label">วันเกิด</div>
										<div class="col-sm-9 inputcol">
											<div class="group">
											<div class="row">
											<div class="col-sm-4">
												<div class="select-holder">
													<select>
														<option></option>
													</select>
													<i class="fa fa-caret-down"></i>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="select-holder">
													<select>
														<option></option>
													</select>
													<i class="fa fa-caret-down"></i>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="select-holder">
													<select>
														<option></option>
													</select>
													<i class="fa fa-caret-down"></i>
												</div>
											</div>
											</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3 form-label">ข้อมูลพิเศษ</div>
										<div class="col-sm-9 inputcol">
											<div class="group">
												<textarea></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-9 col-sm-offset-3 inputcol">
											<input type="submit" value="บันทึก" class="red-btn">
											<input type="submit" value="ยกเลิก" class="red-btn">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
</body>
</html>