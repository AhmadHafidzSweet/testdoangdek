<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas php textfield</title>
</form>
</head>
<body>
<form method="post" action="vito.php">
Nama : <input type="text" name = "nama"> <br> 
Tanggal lahir : <input type="number" name="tgllhr"> <br>
Bulan lahir : <input type="number" name="blnlhr"> <br>
Hobby : <input type="name" name="hobby"> <br>
<input type="submit" value="kirim" name="tombol">
</form>
<?php
if (isset($_POST['tombol'])) {
    $wasta = $_POST['nama'];
    $lahir = $_POST['tgllhr'];
    $bulan = $_POST['blnlhr'];
    $hbby = $_POST['hobby'];

    echo "NAMA KAMU ADALAH " . "<font color='yellow';>" . $wasta . "</font>".'<br>';  
    echo "KAMU LAHIR TANGGAL". "<font color='blue';>" . $lahir . "</font>".'<br>';
    echo "KAMU LAHIR PADA BULAN ". "<font color='red';>" . $bulan . "</font>".'<br>';
    echo "HOBBY KAMU ADALAH ". "<font color='grey';>" . $hbby . "</font>".'<br>';
}
?>
</body>
</html>