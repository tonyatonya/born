<!DOCTYPE html>
<html lang="en">
<head>
<title>Born</title>
<?php include('inc_head.php'); ?>
</head>
<body class="home">
	<?php include('inc_header.php'); ?>
	<!--  top promotion -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-3">
				<div class="home-topbanner">
					<?php for($i=1;$i<7;$i++){ ?>
					<div class="child" style="background-image: url(images/homepromotion/child<?php echo($i); ?>.jpg);"></div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<?php include('inc_garantee.php'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title shadow">
					<h2><i class="fa fa-chevron-circle-right"></i> สินค้าที่เคยดูเมื่อเร็วๆ นี้</h2>
				</div>
				<div class="products-slide products-slide1">
					<ul>
						<?php for($i=0;$i<5;$i++){ ?>
						<li>
								<div class="item-label off">10%</div>
								<figure>
									<img src="images/sample-train-product.jpg">
								</figure>
								<div class="product-content">
								<div class="product-name">กล้องถ่ายภาพ Cannon รุ่น EOS 7D</div>
								<div class="rate">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-o"></span>
								</div>
								<div class="price">
									<span class="normal-price">40,000 THB</span><br>
									<span class="grand-price">36,000 THB</span>
								</div>
								<div class="addcart">
									<a href="#">
										<i class="fa fa-shopping-cart"></i>
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
		<div class="row">
			<div class="col-sm-12">
				<section class="products-view type1">
					<div class="top-bar">
						<h2>สุขภาพและความงาม</h2>
						<ul class="section-nav">
							<li class="active"><a href="#">สินค้าขายดี</a></li>
							<li><a href="#">สินค้าใหม่</a></li>
							<li><a href="#">โปรโมชั่น</a></li>

						</ul>
						<ul class="page-control">
							<li><a href="#">ดูทั้งหมด</a></li>
							<li><a href="#" class="up"><span class="fa fa-chevron-circle-up"></span></a></li>
							<li><a href="#" class="down"><span class="fa fa-chevron-circle-down"></span></a></li>
						</ul>
					</div>
					<div class="product-grid type1">
						<?php for($i=1;$i<9;$i++){?>
						<div class="product-grid-child" style="background-image:url(images/productgrid/child<?php echo($i); ?>.jpg);">
							<a href="#">
							</a>
						</div>
						<?php } ?>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="fullwidth-banner">
					<a href="#">
						<img src="images/fullwidthbanner.jpg" alt="fullwidthbanner">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<section class="products-view">
					<div class="top-bar">
						<h2>นาฬิกา|แว่นตา|เครื่องประดับ</h2>
						<ul class="section-nav">
							<li class="active"><a href="#">สินค้าขายดี</a></li>
							<li><a href="#">สินค้าใหม่</a></li>
							<li><a href="#">โปรโมชั่น</a></li>

						</ul>
						<ul class="page-control">
							<li><a href="#">ดูทั้งหมด</a></li>
							<li><a href="#" class="up"><span class="fa fa-chevron-circle-up"></span></a></li>
							<li><a href="#" class="down"><span class="fa fa-chevron-circle-down"></span></a></li>
						</ul>
					</div>
					<div class="product-grid type2">
						<?php for($i=1;$i<9;$i++){?>
						<div class="product-grid-child" style="background-image:url(images/productgrid/child<?php echo($i); ?>.jpg);">
							<a href="#">
							</a>
						</div>
						<?php } ?>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="fullwidth-banner">
					<a href="#">
						<img src="images/fullwidthbanner.jpg" alt="fullwidthbanner">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<section class="products-view">
					<div class="top-bar">
						<h2>โทรศัพท์มือถือ & แท็ปเล็ต</h2>
						<ul class="section-nav">
							<li class="active"><a href="#">สินค้าขายดี</a></li>
							<li><a href="#">สินค้าใหม่</a></li>
							<li><a href="#">โปรโมชั่น</a></li>

						</ul>
						<ul class="page-control">
							<li><a href="#">ดูทั้งหมด</a></li>
							<li><a href="#" class="up"><span class="fa fa-chevron-circle-up"></span></a></li>
							<li><a href="#" class="down"><span class="fa fa-chevron-circle-down"></span></a></li>
						</ul>
					</div>
					<div class="product-grid type3">
						<?php for($i=1;$i<9;$i++){?>
						<div class="product-grid-child" style="background-image:url(images/productgrid/child<?php echo($i); ?>.jpg);">
							<a href="#">
							</a>
						</div>
						<?php } ?>
					</div>
				</section>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title shadow">
					<h2><i class="fa fa-chevron-circle-right"></i> และคนอื่นๆ ก็ดูสินค้านี้</h2>
				</div>
				<div class="products-slide products-slide2">
					<ul>
						<?php for($i=0;$i<5;$i++){ ?>
						<li>
								<div class="item-label off">10%</div>
								<figure>
									<img src="images/sample-train-product.jpg">
								</figure>
								<div class="product-content">
								<div class="product-name">กล้องถ่ายภาพ Cannon รุ่น EOS 7D</div>
								<div class="rate">
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star-o"></span>
								</div>
								<div class="price">
									<span class="normal-price">40,000 THB</span><br>
									<span class="grand-price">36,000 THB</span>
								</div>
								<div class="addcart">
									<a href="#">
										<i class="fa fa-shopping-cart"></i>
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
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			var slider = $('.products-slide1 ul').bxSlider({
				minSlides: 1,
				maxSlides: 4,
				slideWidth: 305,
				slideMargin: 0,
				mode: 'horizontal', //mode: 'fade',
				speed: 300,
				auto: true,
				infiniteLoop: true,
				hideControlOnEnd: true,
            	useCSS: false,
				onSlideAfter: function() {
	            	slider.startAuto();
		        }
	        });
	        var slider = $('.products-slide2 ul').bxSlider({
				minSlides: 1,
				maxSlides: 4,
				slideWidth: 305,
				slideMargin: 0,
				mode: 'horizontal', //mode: 'fade',
				speed: 300,
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