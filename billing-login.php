<!DOCTYPE html>
<html lang="en">
<head>
<title>Born</title>
<?php include('inc_head.php'); ?>
</head>
<body>
	<?php include('inc_header.php'); ?>
	<!--  top promotion -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<ul class="billing-step">
					<li class="active">1. เข้าสู่ระบบ</li>
					<li>2. ชำระเงิน</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="block">
					<div class="block-header">
						เข้าสู่ระบบหรือชำระสินค้าแบบไม่ได้เป็นสมาชิก
					</div>
					<div class="block-body">
						<div class="row">
							<div class="col-sm-5 col-sm-offset-1 login-left login-col">
								<div class="row">
									<div class="col-sm-11 col-sm-offset-1">
										<table class="form">
											<tr>
												<td><span class="form-title">Enter your email address:</span></td>
											</tr>
											<tr>
												<td>
													<input type="text" placeholder="Enter your email address:">
												</td>
											</tr>
											<tr>
												<td><input type="radio"> <span class="form-title">ดำเนินการต่อ โดยไม่ใช้รหัสผ่าน</span></td>
											</tr>
											<tr>
												<td><input type="radio"> <span class="form-title">ฉันมีบัญชีผู้ใช้อยู่แล้ว</span></td>
											</tr>
											<tr>
												<td>
													<input type="text" placeholder="Enter your password:">
												</td>
											</tr>
											<tr>
												<td>
													<input type="submit" class="login" value="เข้าสู่ระบบ">
												</td>
											</tr>
												<td>
													<a href="#" class="lostpassword">ลืมรหัสผ่าน ?</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="row">
									<div class="col-sm-9 col-sm-offset-1 login-right login-col">
										<button class="fb-button">
											<i class="fa fa-facebook"></i>
											Sign in with Facebook
										</button>
										<button class="google-button">
											<i class="fa fa-google-plus"></i>
											Sign in with Google
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="block">
					<div class="block-header">
						<i class="fa fa-calculator"></i> สรุปข้อมูลการสั่งซื้อ
						<span class="item-num">(3 items)</span>
					</div>
					<div class="block-body summary">
						<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
							<thead>
							<tr>
								<th data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">สินค้า</th>
								<th data-tablesaw-sortable-col data-tablesaw-priority="2">จำนวน</th>
								<th data-tablesaw-sortable-col data-tablesaw-priority="3">รายการสินค้า</th>
							</tr>
							</thead>
							<tbody>
							<?php for($i=0;$i<3;$i++){ ?>
							<tr>
								<td class="product-name">Pierre Cardin กระเป๋าเดินทาง รุ่น HY-13011 x24 สีเคฟล่าดำ</td>
								<td class="amount">1</td>
								<td class="price">3,000</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
						<div class="price">
							<div class="col-sm-6 text">มูลค่าสินค้า</div>
							<div class="col-sm-6 number">99999 บาท</div>
						</div>
						<div class="price grand-price">
							<div class="col-sm-6 text">ยอดสุทธิ <span>(รวมภาษีมูลค่าเพิ่ม)</span></div>
							<div class="col-sm-6 number">99999 บาท</div>
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