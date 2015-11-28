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
			<div class="col-sm-8">
				<div class="checkout-header">
					<h2><i class="fa fa-shopping-cart"></i> ตระกร้าสินค้า</h2>
					<div class="items-total">จำนวนสินค้า  3 รายการ</div>
					<a href="#" class="backtoshopping"><i class="fa fa-chevron-circle-left"></i> เลือกซื้อสินค้าต่อ</a>
				</div>
				<div class="checkout-tb-header">
					<div class="row">
						<div class="col-sm-7 grid1">สินค้า</div>
						<div class="col-sm-2 grid2">ราคาสินค้า</div>
						<div class="col-sm-2 grid3">จำนวน</div>
						<div class="col-sm-1 grid4"></div>
					</div>
				</div>
				<div class="checkout-tb-body">
					<?php for($i=0;$i<10;$i++){ ?>
					<div class="checkout-tb-body-row">
						<div class="col-sm-7">
							<div class="product-info row">
								<div class="col-sm-4">
								<figure style="background-image: url(images/sample-train-product.jpg);"></figure>
								</div>
								<div class="col-sm-8">
									<div class="title">Pierre Cardin กระเป๋าเดินทาง รุ่น HY-13011 x24 สีเคฟล่าดำ</div>
									<div class="brand">Pierre Cardin</div>
									<div class="status hasproduct">มีสินค้า</div>
								</div>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="price">
								<ul>
									<li class="grand-price">3000 บาท</li>
									<li class="normal-price">6,000 บาท</li>
									<li class="off">50% off</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="input-group number-spinner">
								<span class="input-group-btn">
									<button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="1">
								<span class="input-group-btn">
									<button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>
						<div class="col-sm-1">
							<div class="row-option">
								<ul>
									<li><button class="remove"><i class="fa fa-times-circle"></i></button></li>
									<li><button class="addwish"><i class="fa fa-heart"></i></button>
								</ul>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="checkout-right">
					<div class="checkout-right-header">
						<i class="fa fa-calculator"></i> สรุปข้อมูลการสั่งซื้อ
					</div>
					<div class="checkout-right-body">
						<div class="row price">
							<div class="col-sm-6 text">มูลค่าสินค้า</div>
							<div class="col-sm-6 number">99999 บาท</div>
							<div class="col-sm-12"><hr></div>
						</div>
						<div class="row price grand-price">
							<div class="col-sm-6 text">ยอดสุทธิ (รวมภาษีมูลค่าเพิ่ม)</div>
							<div class="col-sm-6 number">99999 บาท</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<button class="pay"><i class="fa fa-check-circle"></i> ชำระเงิน</button>
							</div>
						</div>
						<div class="checkout-content">
							<h3>คุณจะได้รับสินค้าเมื่อไร ?</h3>
							<div class="checkout-content-body">
								<p>
									ช่วงเวลาประมาณในการจัดส่งสินค้า คือ ระยะเวลาที่สินค้าของคุณ จะถูกจัดส่งไปยังที่อยู่ของคุณ กระบวนการนี้รวมถึงช่วงเวลาในการ ตรวจสอบคำสั่งซื้อ การดำเนินการจัดการสินค้า และรวมถึงช่วงเวลา ในการขนส่งเราจะแจ้งรายละเอียดเกี่ยวกับวันที่สินค้าของคุณจะได้รับการจัดส่งในระหว่างการชำระเงิน
								</p>
							</div>
						</div>
						<div class="checkout-content">
							<h3>คุณสามารถชำระเงินได้ด้วยวิธีใดบ้าง?</h3>
							<div class="checkout-content-body">
								<p>
									เพื่อให้คุณได้รับประสบการณ์สุดพิเศษจากการช็อปปิ้งกับเรา เรามีวิธีการชำระเงินให้คุณได้เลือกใช้ดังต่อไปนี้
								</p>
								<ul>
									<li>การเก็บเงินปลายทาง (Cash on Delivery)</li>
									<li>บัตรเครดิต (Credit Card)</li>
									<li>บัตรเดบิต (Debit Card)</li>
									<li>Paypal</li>
									<li>ชำระเงินที่เคาน์เตอร์ที่บริการ (Over the Counter)</li>
									<li>บริการธนาคารออนไลน์(Online Banking Payment)</li>
									<li>การผ่อนจ่ายผ่านธนาคาร (Installments)</li>
								</ul>
							</div>
						</div>
						<div class="checkout-content">
							<h3>เราปกป้องคุณอย่างไร</h3>
							<div class="checkout-content-body">
								<p>
									เรารับประกันว่าสินค้าทั้งหมดเป็นของใหม่ ของแท้ และไม่ชำรุด หรือเสียหายในกรณีที่คุณสงสัยว่าคุณได้รับสินค้าเก่า มีการใช้งานแล้ว สินค้าปลอม หรือสินค้าที่ชำรุดหรือเสียหาย คุณสามารถคืนสินค้าได้ ภายใน 7 วัน นอกจากนี้หากสินค้าอยู่ภายใต้การรับประกัน ความพึงพอใจ (Satisfaction Guaranteed) คุณสามารถส่งสินค้า กลับภายใน 14 วันนับจากวันที่ส่งมอบสินค้า
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php include('inc_garantee.php'); ?>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript" src="js/numberspinner.js"></script>
</body>
</html>