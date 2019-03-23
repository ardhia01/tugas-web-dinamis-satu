<?php 
// explode
// 1.
$bank = "BRI, Mandiri,BNI";
$hasil_bank = explode(",", $bank);

echo "<pre>";
print_r ($hasil_bank);
echo "</pre>";
echo "<hr>";


// 2.
$tanggal="21 Maret 2019";
$hasil_tanggal = explode(" ", $tanggal);
echo "<pre>";
print_r ($hasil_tanggal);
echo "</pre>";
echo "<hr>";


// 3.
$waktu = "11:58:01";
$hasil_waktu = explode(":", $waktu);
echo "<pre>";
print_r ($hasil_waktu);
echo "</pre>";
echo "<hr>";


// 4.
$tujuan = "Jogja-Pangandaran-Bandung";
$hasil_tujuan = explode("-", $tujuan);

echo "<pre>";
print_r ($hasil_tujuan);
echo "</pre>";
echo "<hr>";

// 5.
$hari_tanggal = "Jum'at, 29-Januari-1999";
$hasil_hari_tanggal = explode(",", $hari_tanggal);
echo "<pre>";
print_r ($hasil_hari_tanggal);
echo "</pre>";
?>
