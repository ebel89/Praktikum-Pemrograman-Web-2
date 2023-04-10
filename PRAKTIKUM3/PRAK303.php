<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK3: Muhammad Khaliq Teuku Ansari_2110817310008</title>
    <style>
        .text-danger {
            color: red;
        }

        img {
            width: 20px;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <label for="batasBawah">Batas Bawah : </label>
        <input type="text" name="batasBawah" id="batasBawah">
        <br>
        <label for="batasAtas">Batas Atas : </label>
        <input type="text" name="batasAtas" id="batasAtas">
        <br>
        <button name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_GET['submit']) && isset($_GET['batasAtas']) && isset($_GET['batasBawah'])) {
        $bawah = $_GET['batasBawah'];
        $atas = $_GET['batasAtas'];

        do {
            if ($bawah > $atas) {
                echo "<span class=\"text-danger\">Batas Bawah Tidak Boleh Lebih Besar Dari Batas Atas</span>";
            } else {
                $tambah = $bawah + 7;
                if ($tambah % 5 == 0) {
                    echo "<img src=\"asset/star.png\">";
                } else {
                    echo "$bawah&nbsp";
                }
            }
            $bawah++;
        } while ($bawah <= $atas);

    }
    ?>
</body>

</html>