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
            border: 1px solid;
        }

        th {
            background-color: red;
        }
    </style>
</headp>

<body>
    <?php

    $daftarHp = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xc5" => "Samsung Galaxy Xcover 5");

    ?>

    <table>
        <th>
            <h2>Daftar Smarthphone Samsung</h2>
        </th>
        <tr>
            <td>
                <?php echo $daftarHp["S22"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $daftarHp["S22+"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $daftarHp["A03"]; ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $daftarHp["Xc5"]; ?>
            </td>
        </tr>
    </table>

</body>

</html>