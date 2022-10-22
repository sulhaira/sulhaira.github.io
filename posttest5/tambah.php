<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_hotel = $_POST['nama_hotel'];
    $harga = $_POST['harga'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $kirim = mysqli_query($db, "INSERT INTO hotel (nama_hotel,harga,no_hp,alamat) VALUES ('$nama_hotel','$harga','$no_hp','$alamat')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
}