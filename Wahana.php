<?php
echo "<h2>Pengecekan Wahana Roller Coaster</h2>";

$nama = "Rafaqi";
$umur = 15;
$tinggi_cm = 156;

echo "Nama : $nama <br>";
echo "Umur : $umur tahun <br>";
echo "Tinggi : $tinggi_cm cm <br><br>";

if ($umur >= 12 && $tinggi_cm >= 145) {
    echo "<h3 style='color:green;'>Selamat $nama, Anda Boleh Naik Wahana!</h3>";
} else {
    echo "<h3 style='color:red;'>Maaf $nama, Syarat Tidak Terpenuhi.</h3>";
}
?>