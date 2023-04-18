<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        tr {
            border: black;
        }

        th {
            background-color: #778899;
        }

        table {
            border-collapse: collapse;
        }
    </style>
    <title>Praktikum 403: Muhammad Khaliq Teuku Ansari</title>
</head>

<body>
    <?php
    $data = [
        ["no" => 1, "nama" => "Ridho", "matkul" => ["Pemrograman 1", "Praktikum Pemrograman 1", "pengantar Lingkungan Lahan Basah", "Arsitektur Komputer"], "sks" => [2, 1, 2, 3]],
        ["no" => 2, "nama" => "Ratna", "matkul" => ["Basis Data 1", "Praktikum Basis Data 1", "Kalkulus"], "sks" => [2, 1, 3]],
        ["no" => 3, "nama" => "Tono", "matkul" => ["Rekayasa Perangkat Lunak", "Analisa dan Perancangan Sistem", "Komputasi Awan", "Kecerdasan Bisnis"], "sks" => [3, 3, 3, 3]],
    ];
    foreach ($data as $key => $value) {
        $data[$key]['total'] = array_sum($value['sks']);
        if ($data[$key]['total'] < 7) {
            $data[$key]['keterangan'] = "Revisi KRS";
        } else {
            $data[$key]['keterangan'] = "Tidak Revisi";
        }
    }
    ?>
    <table border="1" ,cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
        foreach ($data as $arr) {
            ?>
            <tr>
                <td>
                    <?php
                    echo $arr["no"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $arr["nama"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $arr["matkul"][0]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["sks"][0]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["total"];
                    ?>
                </td>
                <?php
                if ($arr['total'] < 7) {
                    ?>
                    <td bgcolor="red">
                        <?php
                        echo $arr["keterangan"];
                } else {
                    ?>
                    <td bgcolor="green">
                        <?php
                        echo $arr["keterangan"];
                } ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <?php
                    echo $arr["matkul"][1]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["sks"][1]; ?>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <?php
                    echo $arr["matkul"][2]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["sks"][2]; ?>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <?php
                if (!empty($arr['matkul'][3])) { ?>
                    <td></td>
                    <td></td>
                    <td>
                        <?php
                        echo $arr["matkul"][3]; ?>
                    </td>
                    <td>
                        <?php
                }
                if (!empty($arr['sks'][3])) { ?>
                        <?php
                        echo $arr["sks"][3]; ?>
                    </td>
                    <td></td>
                </tr>
                <?php
                } ?>
            <?php
        } ?>
    </table>
</body>

</html>