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
				<h2 class="page-title">ใช้งาน Express Checkout</h2>
				<div class="row">
					<div class="col-sm-6 member-form">
						<!-- form -->
						<span style="float: right;">ข้อมูลต้องกรอก *</span>
						<div class="clear"></div>
						<div class="row">
							<div class="col-sm-3 form-label">ชื่อนามสกุล</div>
							<div class="col-sm-9 inputcol">

									<input type="text">

							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">โทรศัพท์ *</div>
							<div class="col-sm-9 inputcol">

									<input type="text">

							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">ที่อยู่ *</div>
							<div class="col-sm-9 inputcol">

									<input type="text">

							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">จังหวัด *</div>
							<div class="col-sm-9 inputcol">

									<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">เขต *</div>
							<div class="col-sm-9 inputcol">

									<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-3 form-label">รหัสไปรษณีย์ *</div>
							<div class="col-sm-9 inputcol">

									<input type="text">

							</div>
						</div>
						<div class="row">
							<div class="col-sm-9 col-sm-offset-3 inputcol">
								<input type="checkbox" checked> จัดส่งใบเสร็จรับเงินไปยังที่อยู่อื่น
							</div>
						</div>


						<!-- end form -->
						<h3 style="font-size: 18px; margin: 0;">ชำระเงินโดย</h3>
						<b>เก็บเงินปลายทางทั่วประเทศ</b><br>
						<p>(Express Checkout ใช้ได้กับการชำระเงินแบบ Cash On Delivery เท่านั้น)
						(ทำการเช็คเอาท์แบบปกติเพื่อทำการชำระเงินแบบอื่น)</p>
					</div>
					<div class="col-sm-6">
						<img src="images/expressstep.jpg" style="width: 100%; height: auto;">
					</div>
					<div class="clear"></div>
					<div class="col-sm-12">
						<hr>
						<div class="bottom-btn-group" style="text-align: left;">
							<button class="red-btn">ใช้งาน</button>
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