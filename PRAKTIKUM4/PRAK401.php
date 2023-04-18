<html>

<head>
    <title>Praktikum 401: Muhammad Khaliq Teuku Ansari</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            cellspacing: 1px solid black;
        }

        input:hover {
            cursor: pointer;
        }

        .text-danger {
            color: red;
        }
    </style>
</head>

<body>
    <form action="" method="GET">
        <label for="">Panjang</label>
        <input type="number" name="panjang">
        <br>
        <label for="">Lebar</label>
        <input type="number" name="lebar">
        <br>
        <label for="">Nilai</label>
        <input type="text" name="nilai">
        <br>
        <button type="submit" name="submit">Cetak</button>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $panjang = $_GET['panjang'];
        $lebar = $_GET['lebar'];
        $nilai = $_GET['nilai'];

        $dataBaru = explode(" ", $nilai);
        ?>
        <table>
            <?php
            if ($panjang == $lebar) {
                for ($i = 0; $i < $panjang; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $lebar; $j++) {
                        echo "<td>";
                        if (empty($dataBaru[($i * $panjang) + $j])) {
                            echo 0;
                        } else {
                            echo $dataBaru[($i * $panjang) + $j];
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                    echo "<br>";
                }
            } else {
                echo "<span class=\"text-danger\">Panjang nilai tidak sesuai dengan ukuran matriks</span>";
            }
            ?>
        </table>
        <?php
    }
    ?>
</body>

</html>