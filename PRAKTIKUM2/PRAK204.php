<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK4</title>
</head>

<body>
    <form action="" method="get">
        <label for="nilai">Nilai : </label>
        <input type="text" name="nilai" id="nilai">

        <button type="submit" name="submit">Konversi</button>
    </form>
    <?php
    if (isset($_GET['submit']) && isset($_GET['nilai'])) {
        $nilai = $_GET['nilai'];
        echo "<b>Hasil : </b>";
        if ($nilai == 0) {
            echo "<b>Nol</b>";
        } elseif ($nilai >= 1 && $nilai <= 9) {
            echo "<b>Satuan</b>";
        } elseif ($nilai >= 11 && $nilai <= 19) {
            echo "<b> Belasan</b>";
        } elseif ($nilai == 10 || $nilai <= 99) {
            echo "<b> Puluhan</b>";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            echo "<b> Ratusan</b>";
        } elseif ($nilai >= 1000) {
            echo "<b>Anda menginput melebihi limit bilangan</b>";
        }
    }

    ?>
</body>

</html>