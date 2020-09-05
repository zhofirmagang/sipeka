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

<body style="background-color: #c4d3f6;">

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
				<style>
					table{
						padding: 15px;
  						text-align: left;
						width: 10%;
						
					}
					th{
						color: #ffff;
						background-color: #6c7ae0;
					}
					tr{
						color: #666666;
						background-color: #ffff	;
						
					}
				</style>
			<table border="0" class="table">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Periode</th>

				<th>Sisa Utang Jam Bulan Sebelumnya</th>
				<th>Utang Jam Bulan Ini</th>
				<th>Bayar Utang Jam Bulan Ini</th>
				<th>Sisa Jam Bulan Ini</th>

				<th>Izin</th>
				<th>Sakit</th>
				<th>Total Shfit Bulan Ini</th>
				<th>Total Hadir</th>

				<th>Gaji Pokok</th>
				<th>Tunjangan Tetap</th>
				<th>Tunjangan BPJS</th>
				<th>Lembur Mingguan</th>
				<th>Lembur Tanggal Merah</th>
				<th>Pembayaran BPJS</th>
				<th>Total</th>
				<th>Opsi</th>		
			</tr>
			<?php 
				include "koneksi.php";
				$query_mysqli = mysqli_query($conn,"SELECT * FROM karyawan")or die(mysqli_error());
				$nomor = 1;
				$total=1;
				while($data = mysqli_fetch_array($query_mysqli)){
					$total = ($data["gj_pokok"] + $data["tj_tetap"] + $data["tj_bpjs"] + $data["lmbr_mingguan"] + $data["lmbr_tgl_merah"]) - $data["pembayaran_bpjs"];
					$sisa = $data["utang_jam_bulan_ini"] - $data["bayar_utang_jam_bulan_ini"];
                    $totalhdr = $data["total_shift"] - ($data["izin"] + $data["sakit"]);
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['periode']; ?></td>

				<td><?php echo $data['sisa_utang_jam_bulan_sebelumnya']." Menit"; ?></td>
				<td><?php echo $data['utang_jam_bulan_ini']." Menit"; ?></td>
				<td><?php echo $data['bayar_utang_jam_bulan_ini']." Menit"; ?></td>
				<td><?php echo $sisa; ?> Menit</td>
				
				<td><?php echo $data['izin']; ?></td>
				<td><?php echo $data['sakit']; ?></td>
				<td><?php echo $data['total_shift']; ?></td>
				<td><?php echo $totalhdr; ?></td>
				
				<td>Rp. <?php echo $data['gj_pokok']; ?></td>
				<td>Rp. <?php echo $data['tj_tetap']; ?></td>
				<td>Rp. <?php echo $data['tj_bpjs']; ?></td>
				<td>Rp. <?php echo $data['lmbr_mingguan']; ?></td>
				<td>Rp. <?php echo $data['lmbr_tgl_merah']; ?></td>
				<td>Rp. <?php echo $data['pembayaran_bpjs']; ?></td>
				<td>Rp. <?php echo $total; ?></td>
				
				<td>
					<a style="color: #666666;" class="cetak" href="cetak.php?id=<?php echo $data['id']; ?>">Cetak</a> |
					<a style="color: #666666;" class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
					<a style="color: #666666;" class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
				</td>
			</tr>
			<?php } ?>
		</table>
			</div>
			<a style="
			color: #ffff; 
			background-color: #4458dc;
			border: none;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			box-shadow: 0px 10px 30px rgba(118, 85, 225, 0.3); "

			href="input.php">Tambah</a>
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