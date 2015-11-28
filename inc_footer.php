<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 footer-section">
				<ul>
					<li><a href="#">เกี่ยวกับเรา</a></li>
					<li><a href="#">ร่วมงานกับเรา</a></li>
					<li><a href="#">ข้อตกลงและเงื่อนไข</a></li>
					<li><a href="#">นโยบายความเป็นส่วนตัว</a></li>
					<li><a href="#">ข่าวประชาสัมพันธ์</a></li>
					<li><a href="#">แบรนด์ทั้งหมด</a></li>
				</ul>
			</div>
			<div class="col-sm-3 footer-section">
				<ul>
					<li><a href="#">แผนกบริการลูกค้า</a></li>
					<li><a href="#">ศูนย์ให้ความช่วยเหลือ</a></li>
					<li><a href="#">การชำระเงิน</a></li>
					<li><a href="#">วิธีการซื้อสินค้า</a></li>
					<li><a href="#">การขนส่งและการจัดส่ง</a></li>
					<li><a href="#">นโยบายของสินค้าต่างประเทศ</a></li>
					<li><a href="#">วิธีการคืนสินค้า</a></li>
					<li><a href="#">ถ้ามีข้อส่งสัยใดๆ โปรดติดต่อเรา</a></li>
				</ul>
			</div>
			<div class="col-sm-3 footer-section">
				<h3>สมัครรับข่าวสารทางอีเมล์ :</h3>
				<div class="clear"></div>
				<input type="text" placeholder="อีเมล์แอดเดรส">
				<button>ตกลง</button>
			</div>
			<div class="col-sm-3 footer-section">
				<h3>ติดตามเราได้ที่นี่ :</h3>
				<ul class="social-link">
					<li><a href="#"><i class="icon icon-facebook3"></i></a></li>
					<li><a href="#"><i class="icon icon-google-plus3"></i></a></li>
					<li><a href="#"><i class="icon icon-twitter3"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h3>ช่องทางชำระเงิน :</h3>
				<ul class="payment-list">
					<li><a href="#"><img src="images/payment-logo/visa.jpg" alt="visa" width="53" height="38" /></a></li>
					<li><a href="#"><img src="images/payment-logo/paypal.jpg" alt="paypal" width="53" height="38" /></a></li>
					<li><a href="#"><img src="images/payment-logo/mastercard.jpg" alt="mastercard" width="53" height="38" /></a></li>
					<li><a href="#"><img src="images/payment-logo/americanexpress.jpg" alt="americanexpress" width="53" height="38" /></a></li>
				</ul>
			</div>
			<div class="col-sm-6">
				<h3 class="set-bottom set-right">สงวนลิขสิทธิ์ 2558</h3>
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript">

	equalheight = function(container){

	var currentTallest = 0,
	     currentRowStart = 0,
	     rowDivs = new Array(),
	     $el,
	     topPosition = 0;
	 $(container).each(function() {

	   $el = $(this);
	   $($el).height('auto')
	   topPostion = $el.position().top;

	   if (currentRowStart != topPostion) {
	     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	       rowDivs[currentDiv].height(currentTallest);
	     }
	     rowDivs.length = 0; // empty the array
	     currentRowStart = topPostion;
	     currentTallest = $el.height();
	     rowDivs.push($el);
	   } else {
	     rowDivs.push($el);
	     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	  }
	   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	     rowDivs[currentDiv].height(currentTallest);
	   }
	 });
	}

	$(window).load(function() {
	  equalheight('.footer-section');
	  equalheight('.column');
	});


	$(window).resize(function(){
	  equalheight('.footer-section');
	  equalheight('.column');
	});
	$(document).ready(function(){
		$(".main-catmenu > a").click(function(e){
			e.preventDefault();
			if($("body").hasClass('home') == false){
				$(this).parent().find(".menu-list").slideToggle();
			}
		})
	})
</script>