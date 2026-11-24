<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
</head>
<body>

    <h1>Daftar Nilai Mhs</h1>
    <?php
    $mahasiswa = [
        [
            "npm" => "001",
            "nama" => "Chayra",
            "nilai" => 80
        ],
        [
            "npm" => "002",
            "nama" => "Archelia",
            "nilai" => 75
        ],
        [
            "npm" => "003",
            "nama" => "Lalan",
            "nilai" => 50
        ],
        [
            "npm" => "004",
            "nama" => "Fuji",
            "nilai" => 90
        ],
        [
            "npm" => "005",
            "nama" => "Budi",
            "nilai" => 65
        ]
    ];
    function cekKelulusan($nilai) {
    if ($nilai <= 50) {
        return "Tidak Lulus";
    } else {
        return "Lulus";
    }
    }
    ?>
    <table border="1" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswa as $data) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data["npm"] . "</td>";
            echo "<td>" . $data["nama"] . "</td>";
            echo "<td>" . $data["nilai"] . "</td>";
            echo "<td>" . cekKelulusan($data["nilai"]) . "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>

</body>
</html>