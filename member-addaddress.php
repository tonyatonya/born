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
				<h2 class="page-title">เพิ่มที่อยู่</h2>
				<div class="row">
					<div class="col-sm-10 member-form">
						<div class="row">
							<div class="col-sm-3 form-label">ชื่อนามสกุล</div>
							<div class="col-sm-9 inputcol">
								<div class="group">
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">โทรศัพท์ *</div>
							<div class="col-sm-9 inputcol">
								<div class="group">
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">ที่อยู่ *</div>
							<div class="col-sm-9 inputcol">
								<div class="group">
									<input type="text">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-sm-3 form-label">จังหวัด *</div>
							<div class="col-sm-9 inputcol">
								<div class="group">
									<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">เขต *</div>
							<div class="col-sm-9 inputcol">
								<div class="group">
									<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">รหัสไปรษณีย์ *</div>
							<div class="col-sm-9 inputcol">
								<div class="group">
									<input type="text">
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
					<div class="col-sm-2">
						<span style="float: right;">ข้อมูลต้องกรอก *</span>
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