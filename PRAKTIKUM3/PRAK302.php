<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK2: Muhammad Khaliq Teuku Ansari_2110817310008</title>
    <style>
        img {
            width: 90px;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <label for="tinggi">Tinggi : </label>
        <input type="text" name="tinggi" id="tinggi">
        <br>
        <label for="gambar">Alamat Gambar : </label>
        <input type="url" name="gambar" id="gambar">
        <br>
        <button name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_GET['tinggi']) && isset($_GET['gambar']) && isset($_GET['submit'])) {
        $gambar = $_GET['gambar'];
        $tinggi = $_GET['tinggi'];
        $baris = 1;
        //perulangan
        while ($baris <= $tinggi) {
            $kolom = 1;
            while ($kolom <= $baris) {
                echo "<img src=\"$gambar\" style=\"opacity: 0\">";
                $kolom++;
            }
            $j = $tinggi;
            while ($j >= $baris) {
                echo "<img src=\"$gambar\">";
                $j--;
            }
            echo "<br>";
            $baris++;
        }
    }


    ?>
</body>

</html>