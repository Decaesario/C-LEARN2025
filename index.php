<?php
$nama = "Pangeran";
$umur = 20;
$jumlah_tabungan = 150000000;

echo "Nama: $nama<br>";
echo "Umur: $umur<br>";
echo "Tabungan: $jumlah_tabungan";

if ($jumlah_tabungan < 20000){
    echo " <br>Status : uang sudah menipis";
}else {
    echo " <br>Status : uang kamu cukup banyak";
}

$hobi = ["tenis", "membaca", "berinteraksi"];
foreach($hobi as $key => $value){
    $x = $key +1;
    echo "<br>hobi ke- $x: $value";
}