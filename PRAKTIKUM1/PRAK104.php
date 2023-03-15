<!DOCTYPE html>
<html lang="en">
<headp>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1 Soal 4</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 2px solid;
        }
    </style>
</headp>

<body>
    <?php

    $daftarHp = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

    ?>

    <table>
        <th><b>Daftar Smarthphone Samsung</b></th>
        <tr>
            <td>
                <?php echo $daftarHp[0]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $daftarHp[1]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $daftarHp[2]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $daftarHp[3]; ?>
            </td>
        </tr>
    </table>

</body>

</html>