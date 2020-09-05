<?php
	require 'vendor/autoload.php';
	use Dompdf\Dompdf;
	include("koneksi.php");
?>
<?php ob_start();?>
<html>
	<head>	
		<title>Exporting pdf</title>
		<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->

	</head>
	<body>
		<section>
			<header style="text-align: center;">
                <h2>SLIP GAJI</h2>
                <h1 style="text-decoration: underline; ">by.mastotoygkacamata.an</h1>
            </header>
            <style>table{
				text-align: left;
				
            }
            </style>
			<?php 
                include "koneksi.php";
                
                $id = $_GET['id'];

				$query_mysqli = mysqli_query($conn,"SELECT * FROM karyawan Where id=$id")or die(mysqli_error());
				$nomor = 1;
				$total=1;
				while($data = mysqli_fetch_array($query_mysqli)){
					$total = ($data["gj_pokok"] + $data["tj_tetap"] + $data["tj_bpjs"] + $data["lmbr_mingguan"] + $data["lmbr_tgl_merah"]) - $data["pembayaran_bpjs"];
					$sisa = $data["utang_jam_bulan_ini"] - $data["bayar_utang_jam_bulan_ini"];
                    $totalhdr = $data["total_shift"] - ($data["izin"] + $data["sakit"]);
			?>
			<table border="1" class="table">
			<tr>
				<td>
					No <th><?php echo $nomor++; ?></th>
				</td>
				
			</tr>
			<tr>
				<td>
					Nama <th><?php echo $data['nama']; ?></th>
				</td>
			</tr>
			<tr>
				<td>
					Periode <th><?php echo $data['periode']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Sisa Utang Jam Bulan Sebelumnya
				<th><?php echo $data['sisa_utang_jam_bulan_sebelumnya']." Menit"; ?></th>
				</td>
			</tr>
			<tr>
				<td>Utang Jam Bulan Ini
				<th><?php echo $data['utang_jam_bulan_ini']." Menit"; ?></th>
				</td>
			</tr>
			<tr>
				<td>Bayar Utang Jam Bulan Ini
				<th><?php echo $data['bayar_utang_jam_bulan_ini']." Menit"; ?></th>
				</td>
			</tr>
			<tr>
				<td>Sisa Jam Bulan Ini
				<th><?php echo $sisa; ?> Menit</th>
				</td>
			</tr>
			<tr>
				<td>Izin
				<th><?php echo $data['izin']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Sakit
				<th><?php echo $data['sakit']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Total Shfit Bulan Ini
				<th><?php echo $data['total_shift']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Total Hadir
				<th><?php echo $totalhdr; ?></th>
				</td>
			</tr>
			<tr>
				<td>Gaji Pokok
				<th>Rp. <?php echo $data['gj_pokok']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Tunjangan Tetap
				<th>Rp. <?php echo $data['tj_tetap']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Tunjangan BPJS
				<th>Rp. <?php echo $data['tj_bpjs']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Lembur Mingguan
				<th>Rp. <?php echo $data['lmbr_mingguan']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Lembur Tanggal Merah
				<th>Rp. <?php echo $data['lmbr_tgl_merah']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Pembayaran BPJS
				<th>Rp. <?php echo $data['pembayaran_bpjs']; ?></th>
				</td>
			</tr>
			<tr>
				<td>Total
				<th>Rp. <?php echo $total; ?></th>
				</td>
			</tr>

			<?php } ?>
		</table>
        </section>
        
	</body>
</html>
<?php 
// $html = ob_get_clean();

// $dompdf = new Dompdf();
// $dompdf->loadHtml($html);
// $dompdf->setPaper('A4', 'landscape');
// $dompdf->render();

// // Output tre generated PDF to Browser
// $dompdf->stream($id, array("Attachment" => false));
// exit(0);

?>