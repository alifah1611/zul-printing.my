<?php
	include 'footerHome.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale =1">
	<title>Zul Printing Gallery</title>
</head>
<body>
	<div class="utama">
		<div class="Hmenu">
			<div class="icon">
				<img src="images/logo.jpg">
			</div>
			<ul>
				<li><a href="#about">Tentang Kami</a></li>
				<li><a href="#contact">Hubungi Kami</a></li>
			</ul>
		</div>

		<div class="title">
			<h1>SISTEM GALERI ZUL PRINTING BAJU MURAH</h1>
		</div>

		<div class="button">
			<ul>
				<li><a href="user.php">User</a></li>
				<li><a href="signin.php">Admin</a></li>
			</ul>
		</div>
	</div>

	<!-- Image slider start -->
	<center><div class="slider">
		<div class="slides">
			<!-- radio button start -->
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">

			<!-- radio button end -->
			<!-- slide images start -->
			<div class="slide first" >
				<img src="images/baju1.jpg">
			</div>
			<div class="slide" >
				<img src="images/baju2.jpg">
			</div>
			<div class="slide" >
				<img src="images/baju3.jpg">
			</div>
			<div class="slide" >
				<img src="images/baju4.jpg">
			</div>
			<!-- slide images end -->

			<!-- automatic navigation start -->
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
			</div>
			<!-- automatic navigation end -->

		</div>
		<!-- manual navigation start -->
		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>
		<!-- manual navigation end -->
		
	</div>
	<!-- Image slider end -->

	<script type="text/javascript">
		var counter = 1;
		setInterval(function()
		{
			document.getElementById('radio' + counter).checked = true;
			counter++;
			if(counter > 4)
			{
				counter = 1;
			}

		}, 5000);
	</script></center>

	<div class="content">
		<h2 id="about">TENTANG KAMI</h2>
		<p>
			SALAM SEMUA, ZUL PRINTING BAJU MURAH SEDIA MENJUAL DAN MEMBEKAL TSHIRT PRINTING MENGIKUT DESIGN ANDA SENDIRI. KAMI BERPENGALAMAN DALAM MENYEDIAKAN PELBAGAI JENIS T-SHIRT PRINTING YANG SESUAI UNTUK:</p>
	<p>
		<b><ul>
			<li>FAMILY DAY</li>
			<li>TSHIRT KELAS (SEKOLAH/UNIVERSITI/KOLEJ)</li>
			<li>TSHIRT DORM/ASRAMA</li>
			<li>TSHIRT SUKAN SEKOLAH</li>
			<li>TSHIRT AKTIVITI/PROGRAM</li>
			<li>TSHIRT KELAB DAN PERSATUAN</li>
			<li>TSHIRT REUNION</li>
			<li>TSHIRT GENG</li>
			<li>TSHIRT REWANG/WALIMATULURUS</li>
			<li>TSHIRT KONVOI</li>
			<li>SUBLIMATION </li>
			<li>BANNER/BUNTING</li>
			<li>LABEL STICKER</li>
			<li>DAN LAIN-LAIN LAGI</li>
		</ul></b>
		</p>

		<p>KHIDMAT DESIGN DISEDIAKAN UNTUK PELANGGAN KAMI DARI STAF KAMI YANG BERPENGALAMAN DALAM BIDANG DESIGN</p>

		<p>KAMI BEROPERASI DI AYER KEROH MELAKA. WAZE@GOOGLE MAPS : ZUL PRINTING BAJU MURAH.</p> 

		<p>PELANGGAN BOLEH WALK IN ATAU YANG JAUH, PENGHANTARAN DISEDIAKAN KE SELURUH MALAYSIA DENGAN HARGA YANG MURAH</p>

		<p>“Your Design We Do”</p>

	</div>
</body>
</html>

<?=template_footer()?>