<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM hotel WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_hotel = $_POST['nama_hotel'];
        $harga = $_POST['harga'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        $update = mysqli_query($db, "UPDATE hotel SET nama_hotel='$nama_hotel', harga='$harga', no_hp='$no_hp', alamat='$alamat' WHERE id='$id'");
        

        if($update){
            header("Location:index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoWisata</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <header>
        <h2>Informasi List Hotel InfoWisata</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data Hotel</h3>
        <form action="" method="post">
            
            <label for="">Nama Hotel</label><br>
            <input type="text" name="nama_hotel" class="form-text" value=<?=$row['nama_hotel'];?>><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text" value=<?=$row['harga'];?>><br>
            
            <label for="">No Telepon</label><br>
            <input type="text" name="no_hp" class="form-text" value=<?=$row['no_hp'];?>><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10" value=<?=$row['alamat'];?>></textarea><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>