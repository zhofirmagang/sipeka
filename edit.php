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
			
			<form action="update.php" method="post">		
				<div id="wrap" class="input">
				<header class="input-header">
					<h1>Edit Data Gaji Karyawan</h1>
				</header>
				<section class="input-content">
					<h2></h2>
					<div class="input-content-wrap">
					<?php 
			include "koneksi.php";
			$id = $_GET['id'];
			$query_mysqli = mysqli_query($conn,"SELECT * FROM karyawan where id='$id'");
			$nomor = 1;
			while($data = mysqli_fetch_array($query_mysqli)){
		?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>periode</td>
				<td><input type="text" name="periode" value="<?php echo $data['periode'] ?>"></td>					
			</tr>
			
			<tr>
				<td>Sisa Utang Jam Bulan Sebelumnya</td>
				<td><input placeholder="... menit" type="text" name="sisa_utang_jam_bulan_sebelumnya" value="<?php echo $data['sisa_utang_jam_bulan_sebelumnya'] ?>"></td>					
			</tr>

			<tr>
				<td>Utang Jam Bulan Ini</td>
				<td><input placeholder="... menit" type="text" name="utang_jam_bulan_ini" value="<?php echo $data['utang_jam_bulan_ini'] ?>"></td>					
			</tr>

			<tr>
				<td>Bayar Utang Jam Bulan ini</td>
				<td><input placeholder="... menit" type="text" name="Bayar Utang Jam Bulan Ini" value="<?php echo $data['bayar_utang_jam_bulan_ini'] ?>"></td>					
			</tr>

			<tr>
				<td>Izin</td>
				<td><input type="text" name="izin" value="<?php echo $data['izin'] ?>"></td>					
			</tr>

			<tr>
				<td>Sakit</td>
				<td><input type="text" name="sakit" value="<?php echo $data['sakit'] ?>"></td>					
			</tr>

			<tr>
				<td>Total Shift</td>
				<td><input type="text" name="total_shift" value="<?php echo $data['total_shift'] ?>"></td>					
			</tr>
			
			<tr>
				<td>Gaji Pokok</td>
				<td><input type="text" name="gj_pokok" value="<?php echo $data['gj_pokok'] ?>"></td>					
			</tr>

			<tr>
				<td>Tunjagan Tetap</td>
				<td><input type="text" name="tj_tetap" value="<?php echo $data['tj_tetap'] ?>"></td>					
			</tr>

			<tr>
				<td>Tunjangan BPJS</td>
				<td><input type="text" name="tj_bpjs" value="<?php echo $data['tj_bpjs'] ?>"></td>					
			</tr>

			<tr>
				<td>Lembur Mingguan</td>
				<td><input type="text" name="lmbr_mingguan" value="<?php echo $data['lmbr_mingguan'] ?>"></td>					
			</tr>

			<tr>
				<td>Lembur Tanggal Merah</td>
				<td><input type="text" name="lmbr_tgl_merah" value="<?php echo $data['lmbr_tgl_merah'] ?>"></td>					
			</tr>

			<tr>
				<td>Pembayaran BPJS</td>
				<td><input type="text" name="pembayaran_bpjs" value="<?php echo $data['pembayaran_bpjs'] ?>"></td>					
			</tr>
				
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
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