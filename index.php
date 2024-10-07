<?php
// Data Siswa 3WD1
$siswa3wd1 = [
    ["nama" => "Aura", "jurusan" => "Informatika", "angkatan" => 2023],
    ["nama" => "Muthia", "jurusan" => "Informatika", "angkatan" => 2023],
    ["nama" => "Cyntia", "jurusan" => "Informatika", "angkatan" => 2023],
    ["nama" => "Hasya", "jurusan" => "Informatika", "angkatan" => 2023],
    ["nama" => "Layalia", "jurusan" => "Informatika", "angkatan" => 2023],
];

// Fungsi untuk menampilkan data dalam bentuk tabel
function tampilkanTabel($siswa3wd1) {
    echo "<h2>Data Siswa 3WD1 - Tabel</h2>";
    echo "<table>";
    echo "<tr><th>Nama</th><th>Jurusan</th><th>Angkatan</th></tr>";
    foreach ($siswa3wd1 as $siswa) {
        echo "<tr>";
        echo "<td>{$siswa['nama']}</td>";
        echo "<td>{$siswa['jurusan']}</td>";
        echo "<td>{$siswa['angkatan']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Fungsi untuk menampilkan data dalam bentuk kartu
function tampilkanKartu($siswa3wd1) {
    echo "<h2>Data Siswa 3WD1 - Kartu</h2>";
    foreach ($siswa3wd1 as $siswa) {
        echo "<div class='card'>";
        echo "<h3>{$siswa['nama']}</h3>";
        echo "<p><strong>Jurusan:</strong> {$siswa['jurusan']}</p>";
        echo "<p><strong>Angkatan:</strong> {$siswa['angkatan']}</p>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa 3WD1</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        .card {
            border: 1px solid black;
            padding: 20px;
            margin: 10px;
            width: 200px;
            display: inline-block;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Cek parameter 'view' di URL
$view = isset($_GET['view']) ? $_GET['view'] : 'tabel';

// Menampilkan data berdasarkan pilihan
if ($view == 'tabel') {
    tampilkanTabel($siswa3wd1);
} elseif ($view == 'kartu') {
    tampilkanKartu($siswa3wd1);
} else {
    echo "<p>Parameter view tidak valid. Gunakan ?view=tabel atau ?view=kartu pada URL.</p>";
}
?>

<!-- Link untuk memilih tampilan -->
<p>
    <a href="?view=tabel">Tampilkan sebagai Tabel</a> | 
    <a href="?view=kartu">Tampilkan sebagai Kartu</a>
</p>

</body>
</html>
