<!DOCTYPE html>
<html>
    <head>
        <title>Ajax Jquery - Belajarphp.net</title>
    </head>
    <body>
        
        <form method="post" action="home.php">
            <table>
                <tr><td>Nama </td><td><input type="text" name="nama" value="<?php echo $nama; ?>"></td></tr>
                <tr><td>Periode </td><td><input type="text" name="periode" value="<?php echo $periode; ?>"></td></tr>
                <tr><td colspan="2"><button type="submit" value="submit">SIMPAN</button></td></tr>
            </table>
        </form>
    </body>
</html>

<?php
    include "koneksi.php";
            
    if(isset($_POST['nama'])){
        $nama = $_POST['nama']; 
    }
    if(isset($_POST['periode'])){
        $periode = $_POST['periode']; 
    }

    // echo $nama;
    // echo $periode;

    $sql = "INSERT INTO `karyawan` (nama,periode)
        VALUES ('$nama', '$periode')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();        

?> 