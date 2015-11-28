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
			<div class="col-sm-7">
				<div class="greeting">
					<i class="fa fa-check-circle"></i> ขอแสดงความยินดี คุณจะได้รับสินค้า ภายใน 7-9 วัน
				</div>
			</div>
			<div class="col-sm-5">
				<div class="billing-top-note">
					<h3>ถ้าคุณเลือกวิธีการชำระเงินแบ Cash On Delivery</h3>
					<p>
						1. โปรเตรียมเงินให้มีจำนวนพอดีสำหรับพนักงานจัดส่ง<br>
						2. ในกรณีที่คุณไม่สามารถรับสินค้าได้ด้วยตัวเอง โปรดเตรียมเอกสารดังต่อไปนี้ให้ผู้รับแทน
						สำเนารูปถ่ายบัตรประชาชน หรือ เอกสารอื่นๆ ที่มีภาพถ่ายใบหน้า พร้อมใบมอบอำนาจ
						พิมพ์อีเมล์ยืนยันคำสั่งซื้อของคุณ
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="block">
					<div class="block-header">สรุปยอดการสั่งซื้อสำหรับ <span style="color: yellow;">XXXXXXXXXXXXX</span> สั่งซื้อสินค้าจำนวน 3 ชิ้น</div>
					<div class="block-body">
						<div class="item-summary">
							<div class="item-summary-row buyer-info">

									<div class="buyer-name">ปิติพงศ์ ทวีทรัพย์ธนากุล</div>
									<div class="buyer-address">65/18 ซอยวัดสังข์กระจาย ถนนอิสรภาพ กรุงเทพมหานคร 10600 โทรศัพท์ 0817350672</div>
									<div class="buyer-mail">อีเมล์ยืนยันคำสั่งซื้อ ถูกส่งไปที่  <span>test@test.com</span></div>

							</div>
							<?php for($i=0;$i<3;$i++){ ?>
							<div class="item-summary-row">
								<div class="col-sm-2">
									<figure style="background-image:url(images/sample-train-product.jpg);"></figure>
								</div>
								<div class="col-sm-4">
									<div class="product-name">Pierre Cardin กระเป๋าเดินทาง รุ่น HY-13011 x24 สีเคฟล่าดำ</div>
									<div class="amount">จำนวน 1 ชิ้น</div>
								</div>
								<div class="col-sm-3">
									<div class="deli-date">จัดส่ง 10-18 Nov 2015</div>
								</div>
								<div class="col-sm-3">
									<div class="price">
								<ul>
									<li class="grand-price">3000 บาท</li>
									<li class="normal-price">6,000 บาท</li>
									<li class="off">50% off</li>
								</ul>
							</div>
								</div>
							</div>
							<?php } ?>
							<div class="item-summary-row grantotal">
								<div class="col-sm-3 col-sm-offset-9">
									<ul>
										<li><div class="text">มูลค่าสินค้า</div><div class="number">9,000 บาท</div></li>
										<li><div class="text">ค่าจัดส่ง</div><div class="number free">ฟรี</div></li>
										<li class="grand-price"><div class="text">ยอดสุทธิ <br><span>(รวมภาษีมูลค่าเพิ่ม)</span></div><div class="number">9,000 บาท</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 bottom-btn-group">
				<button class="red-btn"><i class="fa fa-shopping-cart"></i> ซื้อสินค้าอื่นๆ ต่อ</button>
				<button class="red-btn"><i class="fa fa-print"></i> พิมพ์รายการ</button>
			</div>
		</div>

	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>

</body>
</html>