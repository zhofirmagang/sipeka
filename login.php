<?php 
    include 'koneksi.php';
    
    $connection  = mysqli_connect("localhost","root","","sipeka");
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM admin WHERE username='$username' and password='$password'";
    $query  = mysqli_query($connection, $sql);
    $cek    = mysqli_num_rows($query);
    echo $cek;

    if($cek){
        // echo "selamat   ";
        header("Location: home.php");
    } else{
        header("Location: index.php");
        // echo "<script type='text/javascript'>
        //     alert('username atau pass salah'); 
        // </script>";
    }
?>  