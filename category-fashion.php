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
				<div class="breadcrum">
					<ul>
						<li><a href="#">แฟชั่น</a></li>
						<li>สุภาพสตรี</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row two-col">
			<div class="col-sm-2">
				<?php include('inc_leftmenu_filter.php'); ?>
			</div>
			<div class="col-sm-10">
				<div class="column">
				<div class="mainbanner">
					<a href="#">
						<img src="images/sample-fashion-mainbaner.jpg" style="width: 100%; height: auto;">
					</a>
					<img src="images/banner-bottomshadow.jpg" alt="banner-bottomshadow" width="970" height="23">
				</div>
				<div class="logo-list">
					<ul>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_01.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_02.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_03.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_04.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_05.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_06.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_07.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_08.jpg"></a></li>
						<li><a href="#"><img src="images/fasion-logo/Untitled-1_09.jpg"></a></li>
					</ul>
				</div>
				<div class="category-banner fashion">
					<div class="row">
						<div class="col-sm-6">
							<div class="category-banner-child">
								<img src="images/categorybanner0.jpg" alt="categorybanner1">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="category-banner-child">
							<img src="images/categorybanner1.jpg" alt="categorybanner1">
							<a href="#" class="shopping">SHOP NOW</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="category-banner-child">
							<img src="images/categorybanner2.jpg" alt="categorybanner1">
							<a href="#" class="shopping">SHOP NOW</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="category-banner-child">
							<img src="images/categorybanner3.jpg" alt="categorybanner1">
							<a href="#" class="shopping">SHOP NOW</a>
							</div>
						</div>

					</div>
				</div>
				<div class="product-list table-grid">
					<h2>สุภาพสตรี <span>1000 การค้นหา</span></h2>
					<div class="top-option">
						<label>จัดเรียงตาม</label>
						<div class="select-box">
							<select>
								<option>Recommendation</option>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					<hr class="bold-hr">
					<div class="row">
					<?php for($i=0;$i<36;$i++){ ?>
					<div class="col-sm-3">
						<div class="product-child">
							<figure>
								<img src="images/fashiongriditem.jpg">
								<div class="cart-hover">
									<a href="#">ซื้อเลย</a>
								</div>
							</figure>
							<a href="#">
							<div class="product-title">Aukey Linger Sheer Lace Thing - Highs...</div>
							<div class="price">
								<ul>
									<li class="normal-price">3,000 THB</li>
									<li class="grand-price">1,500 THB</li>
									<li class="off">-50%</li>
								</ul>
							</div>
							</a>
							<div class="product-child-option">
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
								<a href="#" class="add-wish"><i class="fa fa-heart-o"></i></a>
							</div>

						</div>
					</div>
					<?php } ?>
				</div>
				</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
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
					<img src="images/bottom-shadow.png" class="bottom-shadow">
				</div>
			</div>
		</div>
		<hr class="bold-hr">
		<h2 class="small-title">เพิ่มเติมสุภาพสตรี</h2>
		<div class="row">
			<div class="col-sm-2">
				<ul class="group-link">
					<li>สินค้าใหม่</li>
					<li><a href="#">Ease Unisex สุภาพสตรี Black</a></li>
					<li><a href="#">Ease Unisex สุภาพสตรี White</a></li>
					<li><a href="#">FLYNOW Unisex สุภาพสตรี Red</a></li>
					<li><a href="#">FLYNOW Unisex สุภาพสตรี Black</a></li>
					<li><a href="#">FLYNOW Unisex สุภาพสตรี Navy</a></li>
				</ul>
			</div>
			<div class="col-sm-3">
				<ul class="group-link">
					<li>สินค้าสุดฮิต</li>
					<li><a href="#">Wonder Bra Female สุภาพสตรี</a></li>
					<li><a href="#">RICHCOCO Unisex สุภาพสตรี</a></li>
					<li><a href="#">FTshop Female สุภาพสตรี</a></li>
					<li><a href="#">OEM Unisex สุภาพสตรี</a></li>
					<li><a href="#">FTshop กระเป๋าแฟชั่นเกาหลี + กระเป๋าสตางค์</a></li>
				</ul>
			</div>
			<div class="col-sm-4">
					<ul class="group-link">
						<li>ดีลสุดพิเศษ</li>
						<li><a href="#">Women's Lace Long Sleeves Slim Tops (White)</a></li>
						<li><a href="#">Women's Sexy Babydoll Lace Bra Nightgown Sleepwear (White)</a></li>
						<li><a href="#">OEM Female สุภาพสตรี</a></li>
						<li><a href="#">Classy Unisex สุภาพสตรี</a></li>
						<li><a href="#">Lady Macaron Female สุภาพสตรี Black</a></li>
					</ul>
			</div>
			<div class="col-sm-3">
				<ul class="group-link">
					<li>สินค้าที่ถูกพูดถึง</li>
					<li><a href="#">Fashionstory Unisex สุภาพสตรี Black,White</a></li>
					<li><a href="#">FTshop กระเป๋าแฟชั่นเกาหลี + กระเป๋าสตางค์ผู้หญิง +</a></li>
					<li><a href="#">กระเป๋าสะพายข้าง + พวงกุญแจหมี เซต 4 ใบ (สีแดง)</a></li>
					<li><a href="#">FTshop Unisex สุภาพสตรี</a></li>
					<li><a href="#">Allin สุภาพสตรี</a></li>
					<li><a href="#">Ease รองเท้าส้นสูง รุ่น 6-36 (Black)</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<ul class="garantee">
					<li>
						<div class="ball green">
							<i class="fa fa-credit-card"></i>
						</div>
						เก็บเงินปลายทาง
					</li>
					<li>
						<div class="ball orange">
							<i class="fa fa-truck"></i>
						</div>
						จัดส่งฟรี
					</li>
					<li>
						<div class="ball gray">
							<i class="fa fa-shield"></i>
						</div>
						รับประกันคุ้มครองผู้ซื้อ
					</li>
					<li>
						<div class="ball blue">
							<i class="fa fa-check"></i>
						</div>
						เฉพาะร้านค้าที่เราไว้ใจ
					</li>
					<li>
						<div class="ball red">
							<i class="fa fa-life-ring"></i>
						</div>
						การรับประกันเคลมสินค้า
					</li>
				</ul>
			</div>
		</div>

	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){

			$(".main-filter > a ").click(function(e){
				e.preventDefault();
				var mainfl = $(this).parent();
				mainfl.find(".sub-filter").slideToggle();
			})
			$(".hassub > a").click(function(e){
				e.preventDefault();
				var sub = $(this).parent();
				sub.find(".super-sub-filter").slideToggle();
			})


			var slider = $('.products-slide ul').bxSlider({
				minSlides: 1,
				maxSlides: 7,
				slideWidth: 168,
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
</body>
</html>