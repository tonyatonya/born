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
				<h2 class="page-title">
					รายการสินค้าที่ชอบ
					<div class="link-group">
						<a href="#" class="red-btn">สร้างรายการสินค้าที่ชอบใหม่</a>
						<a href="#" class="red-btn">เปิดดูรายการสินค้าที่ชอบทั้งหมด</a>
					</div>
				</h2>
				<div class="wlist-bar">
					<div class="col-sm-6">รายการสินค้าที่ชอบหลัก</div>
					<dvi class="col-sm-6" style="text-align: right;">
						<a href="#">จัดการรายการสินค้าที่ชอบ</a>
						<a href="#"><i class="fa fa-shopping-cart"></i> ซื้อสินค้าในรายการสินค้านี้</a>
					</dvi>
				</div>
				<div class="wlist-table">
					<table class="tablesaw tablesaw-stack" data-tablesaw-mode="stack">
							<thead>
							<tr>
								<th data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="1">สินค้า</th>
								<th data-tablesaw-sortable-col data-tablesaw-priority="2">วันที่</th>
								<th data-tablesaw-sortable-col data-tablesaw-priority="3">สถานะสินค้า</th>
								<th data-tablesaw-sortable-col data-tablesaw-priority="4">ราคา</th>
								<th data-tablesaw-sortable-col data-tablesaw-priority="5"></th>
							</tr>
							</thead>
							<tbody>
							<?php for($i=0;$i<2;$i++){ ?>
							<tr>

								<td class="product-name">
									<div class="col-sm-3">
										<figure style="background-image: url(images/sample-train-product.jpg)"></figure>
									</div>
									<div class="col-sm-9 product-info">
										<a href="#">Pierre Cardin กระเป๋าเดินทาง รุ่น HY-13011 x24 - สีดำ</a><br>
										บทความหมายเลข: PI096OTAJ519ANTH-904113
									</div>
								</td>
								<td class="product-date">19/11/2015</td>
								<td class="product-status"><span class="available">มีสินค้า</span></td>
								<td class="price">3,000</td>
								<td><button class="addcart red-btn"><i class="fa fa-shopping-cart"></i> ใส่ตระกร้า</button></td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
				</div>
				<div class="bottom-btn-group">
					<a href="#"><i class="fa fa-print"></i> พิมพ์รายการสินค้าที่ชอบ</a>
				</div>
				<hr class="bold-hr">
				<h2 class="small-title">ผู้ที่ดูสินค้ามักจะดูสินค้านี้ด้วย</h2>
				<div class="products-slide thin">
					<ul>
						<?php for($i=0;$i<20;$i++){ ?>
						<li>
								<div class="item-label off">10%</div>
								<figure>
									<img src="images/fashion-slide-item.jpg">
								</figure>
								<div class="product-content">
								<div class="product-name">Aukey Linger Sheer Lace Thing - Highs...</div>

								<div class="price">
									<span class="normal-price">400 THB</span><br>
									<span class="grand-price">200 THB</span>
								</div>
								<div class="addcart onhover">
									<a href="#">
										ซื้อเลย
									</a>
								</div>

								</div>

						</li>
						<?php } ?>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>

	<script type="text/javascript">
		$(document).ready(function(){

			var slider = $('.products-slide ul').bxSlider({
				minSlides: 1,
				maxSlides: 5,
				slideWidth: 190,
				slideMargin: 0,
				mode: 'horizontal', //mode: 'fade',
				speed: 1000,
				auto: true,
				infiniteLoop: true,
				hideControlOnEnd: true,
            	useCSS: false,
				onSlideAfter: function() {
	            	slider.startAuto();
		        }
	        });
		})

	</script>
	<style>
		.products-slide .bx-wrapper .bx-viewport{
			border:none;
		}
	</style>
</body>
</html>