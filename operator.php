<?php

$nama = 'Evaldy Ariyanto';
$nilai = 90;
$kehadiran = 80;
$kelas = 'XII RPL 1';

if($nilai > 100 || $nilai < 0){
        echo "Nilai tidak boleh melebihi 100 dan kurang dari 0";
        exit;
}

if($kehadiran > 100 || $kehadiran < 0) { 
        echo "Kehadiran tidak boleh kurang dari 0 atau melebihi 100";
        exit;
}

if($nilai >= 75 && $kehadiran >= 80) {
        $status = 'lulus';
} else {
        $status = 'tidak lulus';
}

$predikat = $status === 'lulus' ? ($nilai >= 90 ? 'A' : ($nilai >= 80 ? 'B' : 'C')) : '-';
$pesan = $status === 'lulus' ? 'Selamat, Kamu dinyatakan lulus' : 'Maaf, Kamu belum memenuhi syarat kelulusan';

echo "\n=== Sistem Kelulusan Siswa ===\n";
echo "Nama : " . $nama . "\n";
echo "Nilai : " . $nilai . "\n";
echo "Kehadiran : " . $kehadiran . "\n";
echo "Kelas : " . $kelas . "\n\n";
echo "Status : " . $status . "\n";
echo "Predikat : " . $predikat . "\n";
echo "Pesan : " . $pesan . "\n\n";
if($status === 'tidak lulus' && $nilai < 75 && $kehadiran < 80) {
        echo "Pesan Khusus : Maaf Anda tidak lulus karena nilai kurang dari 75 dan kehadiran dibawah 80\n";
} elseif($status === 'tidak lulus' && $kehadiran < 80) {
        echo "Pesan Khusus : Maaf anda tidak lulus karena kehadiran dibawah 80\n";
} elseif($status === 'tidak lulus' && $nilai < 75 ) {
        echo "Pesan Khusus : Maaf anda tidak lulus karena nilai dibawah 75\n";
}

var_dump($nama);
var_dump($nilai);
var_dump($kehadiran);
var_dump($kelas);