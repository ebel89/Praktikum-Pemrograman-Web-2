<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan menggunakan radio</title>
    <style>
        * {
            /* membuat semua font menjadi Times new roman */
            font-family: 'Times New Roman', Times, serif
        }

        /* membuat class text-danger agar bintang dan warna pesan yang akan muncul berwarna merah */
        .text-danger {
            color: red;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <!-- Membuat inputan nama -->
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama"><span class="text-danger">*
            <!-- Jika inputan tidak terisi akan muncul pesan error -->
            <?php if (isset($_GET['submit']) && $_GET['nama'] == "") {
                echo "nama tidak boleh kosong";
            } ?>
        </span>
        <br>
        <!-- Membuat inputan nim -->
        <label for="nim">Nim: </label>
        <input type="text" name="nim" id="nim"><span class="text-danger">*
            <!-- Jika inputan tidak terisi akan muncul pesan error -->
            <?php if (isset($_GET['submit']) && $_GET['nim'] == "") {
                echo "nim tidak boleh kosong";
            } ?>
        </span>
        <br>
        <!-- Membuat inputan jenis kelamin menggunakan type radio -->
        <label for="">Jenis Kelamin: <span class="text-danger">*
                <!-- Jika inputan tidak terisi maka akan muncul pesan error -->
                <?php if (isset($_GET['submit']) && isset($_GET['jk']) == "") {
                    echo "jenis kelamin tidak boleh kosong";
                } ?>
            </span></label>
        <br>
        <input type="radio" name="jk" id="jkl" value="Laki-laki">
        <label for="jkl">Laki-Laki</label>
        <br>
        <input type="radio" name="jk" id="jkp" value="Perempuan">
        <label for="jkp">Perempuan</label>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    // Membuat kondisi dimana hasil inputan akan ditampilkan jika semua inputan terisi
    if (isset($_GET['submit']) && isset($_GET['jk']) != "" && $_GET['nama'] && $_GET['nim'] != "") {
        echo "<b>Output</b><br>";
        echo $_GET["nama"] . "<br>";
        echo $_GET['nim'] . "<br>";
        echo $_GET["jk"];
    }
    ?>
</body>

</html>