<?php
$mahasiswa = [
    "nama" => "Pangeran Clevario Decaesario",
    "prodi" => "S1 Informatika",
    "fakultas" => "Informatika",
    "sisa_uang" => 5000000,
    "hutang_perpustakaan" => false,
    "ipk" => 3.4
];
echo "Nama: " . $mahasiswa["nama"] . "<br>";
echo "Prodi: " . $mahasiswa["prodi"] . "<br>";
echo "Fakultas: " . $mahasiswa["fakultas"] . "<br>";
echo "Sisa Uang: " . $mahasiswa["sisa_uang"] . "<br>";
echo "Hutang Perpustakaan: ";
if ($mahasiswa["hutang_perpustakaan"] == true) {
    echo "Ada<br>";
} else {
    echo "Tidak Ada<br>";
}
echo "IPK: " . $mahasiswa["ipk"] . "<br>";

$jumlah_sks = 20;
$harga_per_sks = 150000;
$total_tagihan = $jumlah_sks * $harga_per_sks;
$sisa_uang_akhir = $mahasiswa["sisa_uang"] - $total_tagihan;
echo "Total Tagihan: Rp " . $total_tagihan . "<br>";
echo "Sisa Uang Akhir: Rp " . $sisa_uang_akhir . "<br>";

function cekKeuangan($sisa_duit) {
    if ($sisa_duit >= 0) {
        return "Lunas, bisa ambil KRS<br>";
    } else {
        return "Ditolak, uang kurang!<br>";
    }
}
$status_keuangan = cekKeuangan($sisa_uang_akhir);

echo "Status KRS: " . $status_keuangan;
function validasiAkademik($ipk, $hutang_perpustakaan, $sisa_uang_akhir) {
    if (
        ($ipk > 3.0 && $sisa_uang_akhir >= 0) ||
        ($hutang_perpustakaan == false && $sisa_uang_akhir >= 0)
    ) {
        return "Lolos verifikasi KRS<br>";
    } else {
        return "Tidak lolos verifikasi KRS<br>";
    }
}
$status_keuangan = cekKeuangan($sisa_uang_akhir);
$status_akademik = validasiAkademik(
    $mahasiswa["ipk"],
    $mahasiswa["hutang_perpustakaan"],
    $sisa_uang_akhir
);
echo "Status Akademik: " . $status_akademik;