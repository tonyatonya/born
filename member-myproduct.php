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
					สินค้าของฉัน
					<div class="link-group topselect-option">
						<span>1 Order in placed in</span>
						<div class="select-holder">
							<select>
								<option>ตำสั่งซื้อในปี 2014</option>
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
					</div>
				</h2>
				<div class="row">
					<div class="col-sm-12 order-list">
						<?php for($i=0;$i<5;$i++){ ?>
						<div class="order-main-row">
							<a href="#">
								<div class="row-bar">
									<div class="sign"></div>
									<div class="col-sm-4">
										<div class="rowbar-col order-name">
											<ul>
												<li>รายการสั่งซื้อ # <span>304492576</span></li>
												<li>Placed on 27/09/2014</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="rowbar-col grand-total">
											<ul>
												<li>ยอดสุทธิ</li>
												<li>1,049 บาท</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="rowbar-col payment-option">
											<ul>
												<li>ชำระเงิน</li>
												<li>บัตรเครดิต หรือ เดบิต</li>
											</ul>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="status closed">
											closed
										</div>
									</div>
								</div>
							</a>
							<?php for($j=0;$j<3;$j++){ ?>
							<div class="order-row-child">
								<div class="col-sm-12">Shipment 1 of 3</div>
								<div class="col-sm-2 row-col">
									<figure style="background-image: url(images/sample-train-product.jpg);"></figure>
								</div>
								<div class="col-sm-5 row-col">
									<div class="product-title">Pierre Cardin กระเป๋าเดินทาง รุ่น HY-13011 x24 - สีดำ QTY 1</div>
								</div>
								<div class="col-sm-5 row-col">
									<div class="order-status">
										<img src="images/orderstatus.jpg" alt="orderstatus" width="220" height="41">
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".order-main-row > a").click(function(e){
				e.preventDefault();
				if($(this).parent().hasClass("active")== false){
					$(".order-list .order-main-row.active").find(".order-row-child").slideToggle();
					$(".order-list .order-main-row.active").removeClass("active");
					$(this).parent().find(".order-row-child").slideToggle();
					$(this).parent().addClass("active");
				}else{
					$(this).parent().find(".order-row-child").slideToggle();
					$(this).parent().removeClass("active");
				}
			})
		})
	</script>
</body>
</html>