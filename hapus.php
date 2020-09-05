<?php 
    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($conn,"DELETE FROM karyawan WHERE id='$id'")or die(mysqli_error());
    
    header("location:index1.php?pesan=hapus");
?>