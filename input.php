<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SIPEKA</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: #e0e0e0;">

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/sipeka.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
			<form action="input-aksi.php" method="post">		
				<div id="wrap" class="input">
				<header class="input-header">
					<h1>Tambah Data Gaji Karyawan</h1>
				</header>
				<section class="input-content">
					<h2></h2>
					<div class="input-content-wrap">

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Nama</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="nama" required/>
						<label for="input0" style="color: #000;">Nama</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Periode</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="periode" required/>
						<label for="input0" style="color: #000;">Bulan Tahun</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Sisa Utang Jam Bulan Sebelumnya</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="sisa_utang_jam_bulan_sebelumnya" required/>
						<label for="input0" style="color: #000;">Menit</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Utang Jam Bulan Ini</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="utang_jam_bulan_ini" required/>
						<label for="input0" style="color: #000;">Menit</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Bayar Utang Jam Bulan Ini</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="Bayar Utang Jam Bulan Ini"  required/>
						<label for="input0" style="color: #000;">Menit</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Izin</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text"name="izin"  required/>
						<label for="input0" style="color: #000;">Hari</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Sakit</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="sakit" required/>
						<label for="input0" style="color: #000;">Hari</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Total Shift Bulanan</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="total_shift" required/>
						<label for="input0" style="color: #000;">Hari</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Gaji Pokok</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="gj_pokok" required/>
						<label for="input0" style="color: #000;">Rupiah</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Tunjangan Tetap</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="tj_tetap" required/>
						<label for="input0" style="color: #000;">Rupiah</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Tunjangan BPJS</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="tj_bpjs" required/>
						<label for="input0" style="color: #000;">Rupiah</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Lemur Mingguan</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="lmbr_mingguan" required/>
						<label for="input0" style="color: #000;">Rupiah</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Lemur Tanggal Merah</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="lmbr_tgl_merah" required/>
						<label for="input0" style="color: #000;">Rupiah</label>
						<span class="underline"></span>
						</dd>
					</dl>

					<dl class="inputbox">
						<dt class="inputbox-title" style="color: #000;">Pembayaran BPJS</dt>
						<dd class="inputbox-content">
						<input id="input0" type="text" name="pembayaran_bpjs" required/>
						<label for="input0" style="color: #000;">Rupiah</label>
						<span class="underline"></span>
						</dd>
					</dl>
					
					<div class="btns">
						<input class="btn btn-confirm" type="submit" value="Simpan">
						<button class="btn btn-cancel"><a href="index1.php">Cancel</a></button>
					</div>
					</div>
				</section>
				</div>
			</form>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================Footer Area =================-->
	<!-- <footer class="footer_area">
		<div class="container">
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Zhofir Magang</a>
                </p>
			</div>
		</div>
	</footer> -->
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>