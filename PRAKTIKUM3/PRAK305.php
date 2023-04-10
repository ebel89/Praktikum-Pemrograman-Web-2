<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK5: Muhammad Khaliq Teuku Ansari_2110817310008</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="teks">
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    if (isset($_GET['submit']) && isset($_GET['teks'])) {
        $teks = $_GET['teks'];
        //perulangan
        $i = 0;
        while ($i < strlen($teks)) {
            $hurufBesar = strtoupper($teks);
            echo $hurufBesar[$i];
            $j = 1;
            while ($j < strlen($teks)) {
                $hurufKecil = strtolower($teks);
                echo $hurufKecil[$i];
                $j++;
            }
            $i++;
        }

    }
    ?>
</body>

</html>