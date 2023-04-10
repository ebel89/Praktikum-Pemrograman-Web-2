<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301: Muhammad Khaliq Teuku Ansari_2110817310008</title>
    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }

        .font-size {
            font-size: x-large;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <div>
            <label for="peserta">Jumlah Peserta : </label>
            <input type="text" name="peserta" id="peserta">
            <br>
            <button name="submit">Cetak</button>
        </div>

    </form>
    <?php
    if (isset($_GET['peserta']) && isset($_GET['submit'])) {
        $peserta = $_GET['peserta'];
        $awal = 1;
        while ($awal <= $peserta) {
            if ($awal % 2) {
                echo "<span class=\"red font-size\">Peserta ke-$awal</span>";
                echo "<br>";
                echo "<br>";
            } else {
                echo "<span class=\"green font-size\">Peserta ke-$awal</span>";
                echo "<br>";
                echo "<br>";
            }
            $awal++;
        }
    }
    ?>
</body>

</html>