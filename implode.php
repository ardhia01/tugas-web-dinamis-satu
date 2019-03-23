<?php 
// implode

// 1.
$tanggal_lahir = array("hari"=>"Jum'at","tanggal"=>"29","Bulan"=>"Januari","Tahun"=>"1999");
$hasil_tanggal_lahir = implode(" ", $tanggal_lahir);

echo "<pre>";
print_r ($hasil_tanggal_lahir);
echo "</pre>";

echo "<hr>";

// 2.
$bulan = array("ke-1"=>"Januari","ke-2"=>"Februari","ke-3"=>"Maret","ke-4"=>"April");
$hasil_bulan = implode(",", $bulan);
echo "<pre>";
print_r ($hasil_bulan);
echo "</pre>";
echo "<hr>";

// 3.
$waktu = array("jam"=>"11","menit"=>"19","detik"=>"30");
$hasil_waktu = implode(":", $waktu);

echo "<pre>";
print_r ($hasil_waktu);
echo "</pre>";

echo "<hr>";

// 4.
$identitas = array("kampus"=>"STMIK EL-Rahma", "nama jalan"=>"Jl.Sisingamangaraja");
$hasil_identitas = implode(" - ", $identitas);

echo "<pre>";
print_r ($hasil_identitas);
echo "</pre>";

echo "<hr>";

// 5.
$paket_kelas = array("kelas"=>"private","materi"=>"PHP Native","Harga"=>"2.000.000");
$hasil_paket_kelas = implode(" => ", $paket_kelas);
echo "<pre>";
print_r ($hasil_paket_kelas);
echo "</pre>";
?>
