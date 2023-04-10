<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK4: Muhammad Khaliq Teuku Ansari_2110817310008</title>
    <style>
        img {
            width: 50px;
        }
    </style>
</head>

<body>
    <?php
    $jmlBintang = null;
    $gambar = "<img src=\"asset/star.png\">";
    // harus menyimpan nilai dari inputan jumlah!
    if (isset($_GET['jmlBintang'])) {
        $jmlBintang = $_GET['jmlBintang'];
    }
    if (isset($_GET['tambah'])) {
        $jmlBintang++;
    }
    if (isset($_GET['kurang'])) {
        $jmlBintang--;
    }
    if (empty($jmlBintang)) {
        ?>
        <form action="" method="get">
            <label for="jmlBintang">Jumlah Bintang : </label>
            <input type="text" name="jmlBintang" id="jmlBintang">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
    } elseif (!empty($jmlBintang)) {
        echo "Jumlah Bintang : " . $jmlBintang;
        echo "<br>";
        for ($i = 1; $i <= $jmlBintang; $i++) {
            echo $gambar;
        } ?>
        <br>
        <form action="" method="get">
            <input type="text" name="jmlBintang" value="<?= $jmlBintang ?>" hidden>
            <button type="submit" name="tambah" value="tambah">Tambah</button>
            <button type="submit" name="kurang" value="kurang">Kurang</button>
        </form>
        <?php
    }
    ?>
</body>

</html>