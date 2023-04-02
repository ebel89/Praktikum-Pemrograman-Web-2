<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi suhu menggunakan type radio</title>
</head>

<body>
    <form action="" method="get">
        <label for="nilai">Nilai : </label>
        <input type="text" name="nilai" id="nilai">
        <br>

        <label for="">Dari :</label>
        <br>
        <input type="radio" name="dari" id="celcius" value="c">
        <label for="celcius">Celcius</label>
        <br>
        <input type="radio" name="dari" id="fahrenheit" value="f">
        <label for="fahrenheit">Fahrenheit</label>
        <br>
        <input type="radio" name="dari" id="rheamur" value="r">
        <label for="rheamur">Rheamur</label>
        <br>
        <input type="radio" name="dari" id="kelvin" value="k">
        <label for="kelvin">Kelvin</label>
        <br>

        <label for="">Ke :</label>
        <br>
        <input type="radio" name="konversi" id="celcius" value="c">
        <label for="celcius">Celcius</label>
        <br>
        <input type="radio" name="konversi" id="fahrenheit" value="f">
        <label for="fahrenheit">Fahrenheit</label>
        <br>
        <input type="radio" name="konversi" id="rheamur" value="r">
        <label for="rheamur">Rheamur</label>
        <br>
        <input type="radio" name="konversi" id="kelvin" value="k">
        <label for="kelvin">Kelvin</label>
        <br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <?php
    if (isset($_GET['submit']) && isset($_GET['nilai']) && isset($_GET['dari']) && isset($_GET['konversi'])) {

        $nilai = $_GET['nilai'];
        $suhuAwal = $_GET['dari'];
        $suhuKonversi = $_GET['konversi'];
        $hasil = 0;

        // Menampilkan hasil konversi dari celcius
        if ($suhuAwal == "c" && $suhuKonversi == "f") {
            $hasil = (9 / 5) * $nilai + 32;
            echo "<b>Hasil Konversi: $hasil &#176F</b>";

        } elseif ($suhuAwal == "c" && $suhuKonversi == "r") {
            $hasil = 4 / 5 * $nilai;
            echo "<b>Hasil Konversi: $hasil &#176R</b>";

        } elseif ($suhuAwal == "c" && $suhuKonversi == "k") {
            $hasil = $nilai + 273;
            echo "<b>Hasil Konversi: $hasil &#176K</b>";

        } //menampilkan hasil konversi dari fahrenheit 
        elseif ($suhuAwal == "f" && $suhuKonversi == "c") {
            $hasil = 5 / 9 * ($nilai - 32);
            echo "<b>Hasil Konversi: $hasil &#176C</b>";

        } elseif ($suhuAwal == "f" && $suhuKonversi == "r") {
            $hasil = 4 / 9 * ($nilai - 32);
            echo "<b>Hasil Konversi: $hasil &#176R</b>";

        } elseif ($suhuAwal == "f" && $suhuKonversi == "k") {
            $hasil = 5 / 9 * ($nilai - 32) + 273;
            echo "<b>Hasil Konversi: $hasil &#176K</b>";

        } //menampilkan hasil konversi dari rheamur
        elseif ($suhuAwal == "r" && $suhuKonversi == "c") {
            $hasil = (5 / 4) * $nilai;
            echo "<b>Hasil Konversi: $hasil &#176C</b>";

        } elseif ($suhuAwal == "r" && $suhuKonversi == "f") {
            $hasil = (9 / 4) * $nilai + 273;
            echo "<b>Hasil Konversi: $hasil &#176F</b>";

        } elseif ($suhuAwal == "r" && $suhuKonversi == "k") {
            $hasil = (54) * $nilai + 273;
            echo "<b>Hasil Konversi: $hasil &#176K</b>";

        } //menampilkan hasil konversi dari kelvin
        elseif ($suhuAwal == "k" && $suhuKonversi == "c") {
            $hasil = $nilai - 273;
            echo "<b>Hasil Konversi: $hasil &#176C</b>";

        } elseif ($suhuAwal == "k" && $suhuKonversi == "f") {
            $hasil = 9 / 5 * ($nilai - 273) + 32;
            echo "<b>Hasil Konversi: $hasil &#176F</b>";

        } elseif ($suhuAwal = "k" && $suhuKonversi == "r") {
            $hasil = 4 / 5 * ($nilai - 273);
            echo "<b>Hasil Konversi: $hasil &#176R</b>";

        } else {
            echo "<b>Pilihan suhu anda sama!</b>";
        }
    }
    ?>
</body>

</html>