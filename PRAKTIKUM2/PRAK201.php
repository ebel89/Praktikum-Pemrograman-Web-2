<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membandingkan inputan</title>
</head>

<body>
    <form action="" method="get">
        <label for="nama1">Nama 1</label>
        <input type="text" name="nama1" id="nama1"><br>
        <label for="nama2">Nama 2</label>
        <input type="text" name="nama2" id="nama2"><br>
        <label for="nama3">Nama 3</label>
        <input type="text" name="nama3" id="nama3"><br>
        <button type="submit" name="submit">Urutkan</button>
    </form>
    <?php
    //Mengecek isi "submit" agar tidak terjadi error 
    if (isset($_GET['submit'])) {
        //menyimpan hasil input pada variabel baru agar lebih mudah
        $input1 = $_GET['nama1'];
        $input2 = $_GET['nama2'];
        $input3 = $_GET['nama3'];
        echo "<b>Output</b><br>";
        //membandingkan isi variabel
        if ($input1 < $input2 && $input1 < $input3) {
            if ($input2 < $input3) {
                echo "$input1<br>";
                echo "$input2<br>";
                echo "$input3<br>";
            }
        } elseif ($input1 < $input3 && $input1 < $input2) {
            if ($input3 < $input2) {
                echo "$input1<br>";
                echo "$input3<br>";
                echo "$input2<br>";
            }
        } elseif ($input2 < $input1 && $input2 < $input3) {
            if ($input1 < $input3) {
                echo "$input2<br>";
                echo "$input1<br>";
                echo "$input3<br>";
            }
        } elseif ($input2 < $input3 && $input2 < $input1) {
            if ($input3 < $input1) {
                echo "$input2<br>";
                echo "$input3<br>";
                echo "$input1<br>";
            }
        } elseif ($input3 < $input2 && $input3 < $input1) {
            if ($input2 < $input1) {
                echo "$input3<br>";
                echo "$input2<br>";
                echo "$input1<br>";
            }
        } elseif ($input3 < $input1 && $input3 < $input2) {
            if ($input1 < $input2) {
                echo "$input3<br>";
                echo "$input1<br>";
                echo "$input2<br>";
            }
        }
    }
    ?>
</body>

</html>