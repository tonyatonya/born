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
				<ul class="nav nav-tabs">
				  <li role="presentation" class="active"><a href="#">การคืนสินค้า</a></li>
				  <li role="presentation"><a href="#">การยกเลิกคืนสินค้า</a></li>
				</ul>
				<div class="tab-content">
					<span class="disable-text">You have placed no cancellations.</span>
				</div>
			</div>
		</div>
	</div>
	<!-- end  top promotion -->
	<?php include('inc_footer.php'); ?>
	<script type="text/javascript">
		$(window).load(function() {
		  equalheight(".row .member-block-body");
		});


		$(window).resize(function(){
		  equalheight(".row .member-block-body");
		});
	</script>
</body>
</html>