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
						เลือกตัวเลือกสำหรับชำระเงิน
					</div>
					<div class="block-body">
						<div class="payment-tab">
							<ul>
								<li class="active">
									<a href="#">บัตรเดบิต หรือ เครดิต <br> <img src="images/payment/tab/visamastercard.png" alt="visamastercard" width="101" height="28"></a>
								</li>
								<li>
									<a href="#">PayPal <br> <img src="images/payment/tab/paypal.png" alt="paypal" width="101" height="28"></a>
								</li>
								<li>
									<a href="#">เก็บเงินปลายทาง <br> <img src="images/payment/tab/cash.png" alt="cash" width="39" height="28"></a>
								</li>
								<li>
									<a href="#">บัตร ATM <br> <img src="images/payment/tab/atm.png" alt="atm" width="28" height="28"></a>
								</li>
							</ul>
						</div>
						<div class="payment-content">
							<div class="payment-content-child active">
								<div class="row">
									<div class="col-sm-5 col-sm-offset-1">
										<table class="payment-form form">
											<tr>
												<td><span class="form-title">หมายเลขบัตร</span></td>
												<td></td>
											</tr>
											<tr>
												<td><input type="text"></td>
												<td><img src="images/payment/mastercard-ico.png" alt="mastercard-ico" width="37" height="23"></td>
											</tr>
											<tr>
												<td><span class="form-title">ชื่อบนบัตร</span></td>
												<td></td>
											</tr>
											<tr>
												<td><input type="text"></td>
												<td></td>
											</tr>
											<tr>
												<td>
													<table>
														<tr>
															<td colspan="2" style="width: 50%;"><span class="form-title">วันที่บัตรหมดอายุ</span></td>
															<td><span class="form-title">CCV / CVV</span></td>
														</tr>
														<tr>
															<td><input type="text"></td>
															<td><input type="text"></td>
															<td><input type="text"></td>
														</tr>
													</table>
												</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox"> <span class="form-title">ไม่ต้องการเก็บข้อมูลบัตรไว้ในระบบ</span>
												</td>
											</tr>
											<tr>
												<td>
													<button class="order">สั่งซื้อสินค้า</button>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<img src="images/payment/verified-logo.png" class="verified-logo" width="178" height="51">
							</div>
							<div class="payment-content-child">2</div>
							<div class="payment-content-child">3</div>
							<div class="payment-content-child">4</div>
						</div>
						<script type="text/javascript">
							$(document).ready(function(){
								$(".payment-tab ul li a").click(function(e){
									e.preventDefault();
									var _index = $(this).parent().index();
									$(".payment-content .payment-content-child.active").toggleClass("active");
									$(".payment-content .payment-content-child").eq(_index).toggleClass("active");
								})
							})
						</script>
					</div>
					<div class="footer-note">
						ในการส่งคำสั่งซื้อของคุณ คุณยอมรับข้อตกลง <a href="#">ในการชำระสินค้าทางช่องทางที่กำหนดให้</a> และ <a href="#">ข้อตกลงและเงื่อนไข</a>
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
								<th data-tablesaw-sortable-col data-tablesaw-priority="4"></th>
							</tr>
							</thead>
							<tbody>
							<?php for($i=0;$i<3;$i++){ ?>
							<tr>
								<td class="product-name">Pierre Cardin กระเป๋าเดินทาง รุ่น HY-13011 x24 สีเคฟล่าดำ</td>
								<td class="amount">
									<div class="select-holder">
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<i class="fa fa-caret-down"></i>
									</div>
								</td>
								<td class="price">3,000</td>
								<td><button class="remove"><i class="fa fa-times-circle"></i></button></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
						<div class="cupon">
							<div class="col-sm-6 text">มีคูปองส่วนลด</div>
							<div class="col-sm-6"><button class="usecupon">ใช้เลย</button></div>
						</div>
						<div class="price">
							<div class="col-sm-6 text">มูลค่าสินค้า</div>
							<div class="col-sm-6 number">99999 บาท</div>
						</div>
						<div class="price grand-price">
							<div class="col-sm-6 text">ยอดสุทธิ <span>(รวมภาษีมูลค่าเพิ่ม)</span></div>
							<div class="col-sm-6 number">99999 บาท</div>
						</div>
					</div>
					<div class="block">
						<div class="block-header">
							<i class="fa fa-home"></i> ที่อยู่สำหรับการจัดส่ง
						</div>
						<div class="block-body">
							<div class="address-info">
								<ul>
									<li class="cus-name">ปิติพงศ์ ทวีทรัพย์ธนากุล</li>
									<li>
									65/18 ซอยวัดสังข์กระจาย ถนนอิสรภาพ กรุงเทพมหานคร 10600 โทรศัพท์ 0817350672
									</li>
								</ul>
							</div>
							<div class="bottom-btn">
								<button>แก้ไขที่อยู่</button>
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