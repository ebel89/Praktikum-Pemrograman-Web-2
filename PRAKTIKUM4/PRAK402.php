<html>

<head>
    <style>
        th {
            background-color: #778899;
        }
    </style>
    <title>Praktikum 402: Muhammad Khaliq Teuku Ansari</title>
</head>

<body>
    <?php
    $data = [
        ["nama" => "Andi", "nim" => 2101001, "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => 2101002, "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => 2101003, "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => 2101004, "uts" => 60, "uas" => 75],
    ];
    foreach ($data as $key => $value) {
        $uts = $value['uts'];
        $uas = $value['uas'];
        $data[$key]['rata2'] = ($uts * 0.4) + ($uas * 0.6);
        if ($data[$key]['rata2'] >= 80) {
            $data[$key]['huruf'] = 'A';
        } elseif ($data[$key]['rata2'] >= 70 and ($data[$key]['rata2'] <= 79)) {
            $data[$key]['huruf'] = 'B';
        } elseif ($data[$key]['rata2'] >= 60 and ($data[$key]['rata2'] <= 69)) {
            $data[$key]['huruf'] = 'C';
        } elseif ($data[$key]['rata2'] >= 50 and ($data[$key]['rata2'] <= 59)) {
            $data[$key]['huruf'] = 'D';
        } else {
            $data[$key]['huruf'] = 'E';
        }
    }
    ?>
    <table border="1" ,cellspacing="0" cellpadding="5">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
        foreach ($data as $arr) {
            ?>
            <tr>
                <td>
                    <?php
                    echo $arr["nama"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $arr["nim"]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["uts"]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["uas"];
                    ?>
                </td>
                <td>
                    <?php
                    echo $arr["rata2"]; ?>
                </td>
                <td>
                    <?php
                    echo $arr["huruf"]; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>