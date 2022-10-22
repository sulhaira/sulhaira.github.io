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
        <h3>Tambah Hotel</h3>
        <form action="tambah.php" method="post">
            
            <label for="">Nama Hotel</label><br>
            <input type="text" name="nama_hotel" class="form-text"><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>
            
            <label for="">No Telpon</label><br>
            <input type="text" name="no_hp" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10"></textarea><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>