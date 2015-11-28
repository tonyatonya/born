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
				<h2 class="page-title">แก้ไขข้อมูลส่วนตัว</h2>
				<div class="row">
					<div class="col-sm-10 member-form">
						<div class="row">
						<div class="col-sm-3 form-label">อีเมล์</div>
						<div class="col-sm-9 inputcol">email@domainname.com</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">คำนำหน้า</div>
						<div class="col-sm-9 inputcol">
							<div class="group">
							<input type="radio"> Mr. <input type="radio"> Ms. <input type="radio"> Mrs.
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">ชื่อและนามสกุล *</div>
						<div class="col-sm-9 inputcol">
							<div class="group">
								<input type="text">
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">เพศ *</div>
						<div class="col-sm-9 inputcol">
							<div class="group">
							<div class="select-holder">
								<select>
									<option>ชาย</option>
									<option>หญิง</option>
								</select>
								<i class="fa fa-caret-down"></i>
							</div>
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">วันเกิด</div>
						<div class="col-sm-9 inputcol">
							<div class="group">
							<div class="row">
							<div class="col-sm-4">
								<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="select-holder">
									<select>
										<option></option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
							</div>
							</div>
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">ภาษา</div>
						<div class="col-sm-9 inputcol">
							<div class="group">
							<div class="select-holder">
									<select>
										<option>THAI</option>
										<option>ENGLISH</option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">รายได้ต่อเดือน</div>
						<div class="col-sm-9 inputcol">
							<div class="group">
							<div class="select-holder">
								<select>
									<option></option>
								</select>
								<i class="fa fa-caret-down"></i>
							</div>
							</div>
						</div>
						</div>
						<div class="row">
						<div class="col-sm-3 form-label">คุณมีความสนใจในเรื่อง</div>
						<div class="col-sm-9 inputcol">
							<ul class="form-list">
								<li><input type="checkbox"> มือถือและแท็บเล็ต </li>
								<li><input type="checkbox"> สุขภาพและความสวยงาม</li>
								<li><input type="checkbox"> คอมพิวเตอร์และแล็บท๊อป</li>
								<li><input type="checkbox"> แฟชั่น</li>
								<li><input type="checkbox"> กล้องถ่ายรูป</li>
								<li><input type="checkbox"> นาฬิกาข้อมือ,กระเป๋า และอุปกรณ์เสิรม</li>
								<li><input type="checkbox"> อุปกรณ์เครื่องใช้ไฟฟ้าอิเลกทรอนิกส์</li>
								<li><input type="checkbox"> กีฬาและกิจกรรมกลางแจ้ง</li>
								<li><input type="checkbox"> เครื่องใช้ไฟฟ้าภายในบ้าน</li>
								<li><input type="checkbox"> อุปกรณ์รถยนต์, DIY และแกตเจ็ต</li>
								<li><input type="checkbox"> เครื่องใช้และของตกแต่งบ้าน</li>
								<li><input type="checkbox"> สื่อ,เกมส์และเพลง</li>
								<li><input type="checkbox"> ของเล่นเด็กและสินค้า</li>
							</ul>

						</div>
						</div>
						<div class="row">
						<div class="col-sm-9 col-sm-offset-3 inputcol">
							<input type="submit" value="บันทึก" class="red-btn">
							<input type="submit" value="ยกเลิก" class="red-btn">
						</div>
						</div>
					</div>
					<div class="col-sm-2">
						<span style="float: right;">ข้อมูลต้องกรอก *</span>
					</div>
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