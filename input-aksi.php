<?php 
    include 'koneksi.php';
    $nama                               = $_POST['nama'];
    $periode                            = $_POST['periode'];
    
    $sisa_utang_jam_bulan_sebelumnya    = $_POST['sisa_utang_jam_bulan_sebelumnya'];
    $utang_jam_bulan_ini                = $_POST['utang_jam_bulan_ini'];
    $bayar_utang_jam_bulan_ini          = $_POST['bayar_utang_jam_bulan_ini'];

    $izin                               = $_POST['izin'];
    $sakit                              = $_POST['sakit'];
    $total_shift                        = $_POST['total_shift'];
    
    $gj_pokok                           = $_POST['gj_pokok'];
    $tj_tetap                           = $_POST['tj_tetap'];
    $tj_bpjs                            = $_POST['tj_bpjs'];
    $lmbr_mingguan                      = $_POST['lmbr_mingguan'];
    $lmbr_tgl_merah                     = $_POST['lmbr_tgl_merah'];
    $pembayaran_bpjs                    = $_POST['pembayaran_bpjs'];

    mysqli_query($conn,"INSERT INTO karyawan VALUES(
        '',
        '$nama',
        '$periode',
        
        '$sisa_utang_jam_bulan_sebelumnya',
        '$utang_jam_bulan_ini',
        '$bayar_utang_jam_bulan_ini',

        '$izin',
        '$sakit',
        '$total_shift',

        '$gj_pokok',
        '$tj_tetap',
        '$tj_bpjs',
        '$lmbr_mingguan',
        '$lmbr_tgl_merah',
        '$pembayaran_bpjs')");
    
    header("location:index1.php?pesan=input");
?>