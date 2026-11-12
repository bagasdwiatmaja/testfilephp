<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <form action="" method="get">
        Nama:           <input type="text" name="nama" id="nama"><br>
        Alamat:         <textarea name="alamat" id="alamat" cols="28" rows="6"></textarea><br>
        Jenis Kelamin:  <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">Laki-laki
                        <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">Perempuan <br>
        Peminatan:      <input type="checkbox" name="peminatan" value="RPL">RPL <br>
                        <input type="checkbox" name="peminatan" value="AI">AI <br>
                        <input type="checkbox" name="peminatan" value="DSS">DSS <br>
                        <input type="checkbox" name="peminatan" value="Matematika">Matematika <br>
                        <button type="submit">Submit</button>

    </form>
    
    <hr>

    <p>Nama: <?php echo (isset($_GET['nama']))? $_GET['nama'] : '' ?></p>
    <p>Alamat: <?php echo (isset($_GET['alamat']))? $_GET['alamat'] : '' ?></p>
    <p>Jenis Kelamin:<?php echo (isset($_GET['jenis_kelamin']))? $_GET['jenis_kelamin'] : '' ?></p>
    <p>Permintaan:<?php echo (isset($_GET['peminatan']))? $_GET['peminatan'] : '' ?></p> 
</body>
</html>

<?php


?>